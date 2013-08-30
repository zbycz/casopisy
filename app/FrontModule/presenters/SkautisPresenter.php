<?php
namespace FrontModule;
use Nette;
use \SkautIS;

require_once LIBS_DIR . '/SkautisAuth/SkautIS.php';


class SkautisPresenter extends Nette\Application\UI\Presenter
{
	public function actionDefault()
	{
		if (!$this->user->loggedIn) {
			$this->redirectUrl(loginFormAddres);
		}
	}

	public function actionToken()
	{

		$_POST["skautIS_Token"] = "86fa159c-969a-46df-9506-d36fcaa46edf";
		$_POST["skautIS_IDRole"] = "3780";
		$_POST["skautIS_IDUnit"] = "24218";

		$skautis = SkautIS::getInstance();
		$login_ok = $skautis->loginHelper->doLogin();

		if(!$login_ok){
			$this->flashMessage("CHYBA: Přihlášení přes SkautIS se nezdařilo, zkus to znovu a kontaktuj správce");
			$this->redirect(':Front:Homepage:');
		}

		// get info from skautis
		$p = $skautis->getLoggedPerson();
		// $p->ID_PersonType = junak  // vždy
		$row = \Casopisy\UserModel::login(array(
			'id' => $p->ID,
			'name' => $p->NickName ?: "$p->FirstName {$p->LastName[0]}.",
			'fullname' => $p->DisplayName . ($p->City ? ", $p->City" : ""),
			'yearfrom' => $p->YearFrom,
			'email' => $p->Email,
			'birthday' => $p->Birthday,
			));

		// banned user
		if ($row->role == 'ban') {
			$this->flashMessage("CHYBA: Přístup byl odepřen, kontaktuj správce");
			$this->redirect(':Front:Homepage:');
		}

		// admin role
		$role = array('user');
		if ($row->role == 'admin')
			$role[] = 'admin';

		$this->user->login(new \Nette\Security\Identity($row->id, $role, $row));
		$this->flashMessage("Přihlášení úspěšné");
		$this->redirect(':Front:Homepage:');
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

		if ($token) {
			$this->redirectUrl(applicationAdress."login/LogOut.aspx?AppID=".appId."&token=".$token);
		}
		else {
			$this->redirectUrl(loginFormAddres);
		}
	}

}
