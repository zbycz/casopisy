<?php

namespace FrontModule;
use Casopisy\LogModel;
use Nette\Diagnostics\Debugger;
use Nette;



/**
 * Error presenter.
 */
class ErrorPresenter extends Nette\Application\UI\Presenter
{

	/**
	 * @param  Exception
	 * @return void
	 */
	public function renderDefault($exception)
	{
		if ($this->isAjax()) { // AJAX request? Just note this error in payload.
			$this->payload->error = TRUE;
			$this->terminate();

		} elseif ($exception instanceof Nette\Application\BadRequestException) {
			$code = $exception->getCode();
			// load template 403.latte or 404.latte or ... 4xx.latte
			$this->setView(in_array($code, array(403, 404, 405, 410, 500)) ? $code : '4xx');

			$ref = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'no-referer';

			// log to access.log
			Debugger::log("HTTP code $code: {$exception->getMessage()} in {$exception->getFile()}:{$exception->getLine()}, from: $ref", 'access');

			// casopisovy log
			if ($this->user->isLoggedIn){
				LogModel::add(0, 0, "error$code", $_SERVER['REQUEST_URI'], $ref);
			}

		} else {
			$this->setView('500'); // load template 500.latte
			Debugger::log($exception, Debugger::ERROR); // and log exception
		}
	}

}
