<?php

namespace Casopisy;

use Nette\Image;
use Nette\Environment;
use \dibi;

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

    function getLink($p, $opts = "") {
        if ($opts)
            return Environment::getApplication()->getPresenter()
                            ->link(':Front:File:preview', array($this->cislo_id, $p, $opts));
        return Environment::getHttpRequest()->getUrl()->getBasePath()
                . "data/img/$this->cislo_id-$p.png";
    }

    function getPath($p, $opts = "") {
        if ($p)
            $p = "-$p";
        if ($opts)
            return Environment::getVariable("dataDir") . "/thumbs/$this->cislo_id$p.$opts.png";
        return Environment::getVariable("dataDir") . "/img/$this->cislo_id$p.png";
    }

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

    /** Response for Files:preview
     */
    public function getPreviewHttpResponse($o = null) {
        $p = $this->strana;

        //custom caching mechanism (dont use Nette\Cache!)
        $cachePath = $this->getPath($p, $o);
        if (file_exists($cachePath))
            return new ImageResponse(file_get_contents($cachePath), 'image/png');

        //create image
        $image = Image::fromFile($this->getPath($this->strana));

        //enable alpha channel
        //$image->savealpha(true);
        //$image->alphablending(false);

        self::applyImageOptions($image, $o);

        //cache
        if (!isset($opts["nocache"]))
            $image->save($cachePath, NULL, Image::PNG);

        //output it
        return new ImageResponse($image, 'image/png');
    }

    /** Applies any options to the supplied image
     * resize, crop, text, fadeframe
     * TODO: introduce API for other filters
     */
    private static function applyImageOptions(Image $image, $o) {
        $opts = array($o);
        if ($o{0} == 'c') {
            $opts[0] = substr($opts[0], 1);
            $opts['crop'] = true;
        }

        //crop image to square or just resize
        if (isset($opts["crop"])) {
            $image->resize($opts[0], $opts[0], Image::FILL);
            $image->crop('50%', '20%', $opts[0], $opts[0]);
        }
        else
            $image->resize($opts[0], $opts[0], Image::SHRINK_ONLY);
    }

}
