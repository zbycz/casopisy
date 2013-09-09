<?php

namespace AdminModule;

use Casopisy;

class CasopisPresenter extends BasePresenter
{
	public function renderDefault()
	{
		$user = Casopisy\UserModel::getById($this->user->id);
		$this->template->od = $od = $user ? $user->log_time : 'N/A';
		$this->template->log = Casopisy\LogModel::getAll($od);
	}

	public function handleLogTime($time=NULL)
	{
		Casopisy\UserModel::logTime($this->user->id, $time);
		$this->redirect('this');
	}
}
