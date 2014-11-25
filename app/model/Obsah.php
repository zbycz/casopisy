<?php

namespace Casopisy;

use Nette\Image;
use Nette\Environment;
use \dibi;
use Nette\Utils\Strings;

/* CREATE TABLE `obsah` (
  `cislo_id` int(11) NOT NULL,
  `strana` int(11) NOT NULL,
  `strany_navic` tinyint(4) NOT NULL,
  `nazev` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `popis` text COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`cislo_id`,`strana`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;
  ; */

class Obsah extends Entity {

    private static $defaults = array(
        "cislo_id" => NULL,
        "strana" => NULL,
        "strany_navic" => 0,
        "nazev" => "",
        "popis" => "",
    );

    function __construct($data) {
        parent::__construct(array_merge(self::$defaults, (array) $data));
    }

    function getStrany() {
        return range($this->strana, $this->strana + $this->strany_navic);
    }

    function getStranaOdDo() {
        return $this->strana . ($this->strany_navic ? ("-" . ($this->strana + $this->strany_navic)) : "");
    }

    function getCislo(){
        return CisloModel::getById($this->cislo_id);
    }

	// -------------------   disk operation related -----------------------

    function getLink($p, $opts = "") {
		$hash = self::getFilesSecretHash($this->cislo_id, $p, $opts);
        if ($opts)
            return Environment::getApplication()->getPresenter()
                            ->link(':Front:File:preview', array($this->cislo_id, $p, $hash, $opts));
        return Environment::getHttpRequest()->getUrl()->getBasePath()
                . "data/imgserver2/$this->cislo_id-$p-$hash.png";
    }

	/** if($p == false) return path without pagenumber for convert */
    function getPath($p, $opts = "") {
		$hash = self::getFilesSecretHash($this->cislo_id, $p, $opts);
        if ($p)
            $p = "-$p";
        if ($opts)
            return Environment::getVariable("dataDir") . "/thumbs/$this->cislo_id$p-$hash.$opts.png";
        return Environment::getVariable("dataDir") . "/img/$this->cislo_id$p.png";
    }

	// like /data/thumbs/351-1-ab3f1e.300.png
	static function getFilesSecretHash($id, $p, $opts) {
		return substr(md5("$id-$p-$opts" . Environment::getVariable("filesSecret")), -6);
	}



	// ----------------------------------------------------------------

    function save($newdata = false) {
        //(is_array or arrayHash)
        if ($newdata) {
            foreach ($newdata as $k => $v) //merge changes to orig data array
                $this[$k] = $v;
        }
        dibi::query("REPLACE INTO obsah ", $this->getData());
    }

    function getTags() {
        return (array) dibi::query("SELECT tag FROM tag WHERE cislo_id=%i", $this->cislo_id, " AND strana=%i", $this->strana)
                        ->fetchAssoc("[]=tag");
    }

    function saveTags(array $tags) {
        dibi::query("DELETE FROM tag WHERE cislo_id=%i", $this->cislo_id, " AND strana=%i", $this->strana);
        $data = array();
        foreach ($tags as $t)
            if (trim($t))
                $data[] = array("cislo_id" => $this->cislo_id, "strana" => $this->strana, "tag" => trim($t));
        if (count($data))
            dibi::query("INSERT INTO tag %ex", $data);
    }

	public function addTag($tag) {
		$tags = $this->getTags();
		if (!in_array($tag, $tags)) {
			$data = array("cislo_id" => $this->cislo_id, "strana" => $this->strana, "tag" => trim($tag));
			dibi::query("INSERT INTO tag", $data);
		}
	}

	public function removeTag($tag) {
        dibi::query("
			DELETE FROM tag
			WHERE cislo_id=%i", $this->cislo_id, "
				AND strana=%i", $this->strana,"
				AND tag=%s", $tag);
	}

    /** Response for Files:preview (apache triggered cache for /data/thumbs/*)
     */
    public function getPreviewHttpResponse($opts = null) { //$opts obsahuje jen width[px]
        $p = $this->strana;

        //custom caching mechanism (it doesn't use Nette\Cache!)
        $cachePath = $this->getPath($p, $opts);
        if (file_exists($cachePath))
            return new ImageResponse(file_get_contents($cachePath), 'image/png');

        //create image
        $image = Image::fromFile($this->getPath($p));

        //enable alpha channel
        //$image->savealpha(true);
        //$image->alphablending(false);

	    //resample and cache it
        $image->resize($opts, $opts, Image::SHRINK_ONLY);
        $image->save($cachePath, NULL, Image::PNG);

        //output $image with ->save() method
        return new ImageResponse($image, 'image/png');
    }



	// fulltext
	public function getSearchedText($vyraz){
		if (!isset($this->text))
			return "";
		return excerpt($this->text,$vyraz);
	}


}

//vloženo sem: http://stackoverflow.com/questions/1292121/how-to-generate-the-snippet-like-generated-by-google-with-php-and-mysql
function excerpt($text, $query)
{
	//words
	$words = join('|', explode(' ', preg_quote($query)));

	//lookahead/behind assertions ensures cut between words
	$s = '\s\x00-/:-@\[-`{-~'; //character set for start/end of words
	$matches = Strings::matchAll($text, '#(?<=['.$s.']).{1,30}(('.$words.').{1,30})+(?=['.$s.'])#uis');

	//delimiter between occurences
	$results = array();
	foreach($matches as $line) {
		$results[] = htmlspecialchars($line[0], 0, 'UTF-8');
	}
	$result = join(' <b>(...)</b> ', $results);

	//highlight
	$result = Strings::replace($result, '#'.$words.'#iu', "<span class=\"highlight\">\$0</span>");
	return $result;
}




