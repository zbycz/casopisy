<?php

namespace AdminModule;

use Casopisy;
use dibi;

class PagesPresenter extends BasePresenter
{

	public function handleSave()
	{


        $id = $this->request->post['id'];
        $text = $this->request->post['text'];

        dibi::query("UPDATE pages SET text = %s", $text," WHERE id = %s", $id);

        $this->flashMessage('Upraveno: ' . $id);
        $this->redirect('this');
	}
}
