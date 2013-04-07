<?php
namespace FrontModule;
use Nette;
use \SkautIS;

require_once LIBS_DIR . '/SkautisAuth/SkautIS.php';


class SkautisPresenter extends Nette\Application\UI\Presenter
{
	public function actionDefault()
	{
		$this->redirectUrl(loginFormAddres);
	}

	public function actionToken()
	{

		$_POST["skautIS_Token"] = "86fa159c-969a-46df-9506-d36fcaa46edf";
		$_POST["skautIS_IDRole"] = "3780";
		$_POST["skautIS_IDUnit"] = "24218";

		$skautis = SkautIS::getInstance();
		$login_ok = $skautis->loginHelper->doLogin();

		if(!$login_ok){
			$this->flashMessage("Přihlášení přes SkautIS se nezdařilo, kontaktuj správce");
			$this->redirect(':Front:Homepage:');
		}


		$p = $skautis->getLoggedPerson();
		$data = \Casopisy\UserModel::login(array(
			'id' => $p->ID,
			'name' => $p->NickName ?: "$p->FirstName {$p->LastName[0]}.",
			'fullname' => $p->DisplayName . ($p->City ? ", $p->City" : ""),
			'type' => $p->ID_PersonType,
			'email' => $p->Email,
			'birthday' => $p->Birthday,
			));

		$this->user->login(new \Nette\Security\Identity($data->id, array('user'), $data));
		$this->redirect(':Admin:Casopis:');
	}

	public function actionMotd()
	{
		echo "<h1>Já jsem pozdrav, co ty?</h1>";
		$this->terminate();
	}

	public function actionLogout()
	{
		$skautis = SkautIS::getInstance();
		$token = $skautis->loginHelper->getLoginId();
		$skautis->loginHelper->logout();

		$this->redirectUrl(applicationAdress."login/LogOut.aspx?AppID=".appId."&token=".$token);
	}

}
