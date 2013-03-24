<?php

namespace Casopisy;
use Nette;

class ImageResponse extends Nette\Object implements \Nette\Application\IResponse
{

	private $source;
	private $mime;

	function __construct($source, $mime='image/png')
	{
		$this->source = $source;
		$this->mime = $mime;
	}

	final function getSource()
	{
		return $this->source;
	}

	final function getMime()
	{
		return $this->mime;
	}

	function send(Nette\Http\IRequest $httpRequest, Nette\Http\IResponse $httpResponse)
	{
		if($this->mime)
			$httpResponse->setContentType($this->mime);
		echo $this->source;
	}

}
?>
