<?php

namespace AdminModule;

use Casopisy;

class CasopisPresenter extends BasePresenter
{
	public function renderDefault()
	{
		$this->template->log = Casopisy\LogModel::getAll();
	}
}
