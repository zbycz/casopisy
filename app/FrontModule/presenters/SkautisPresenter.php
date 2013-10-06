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
			$backlink = $this->context->httpRequest->getReferer();
			if ($backlink) {
				$backlink = substr($backlink, strlen($backlink->getHostUrl()));
				$this->redirectUrl(loginFormAddres . "&ReturnUrl=" . $backlink);
			}

			$this->redirectUrl(loginFormAddres);
		}
	}

	public function actionToken($token = "")
	{
		// debug only
		if ($token) {
			$_POST["skautIS_Token"] = $token;
			$_POST["skautIS_IDRole"] = "3780";
			$_POST["skautIS_IDUnit"] = "24218";
		}

		$skautis = SkautIS::getInstance();
		$login_ok = $skautis->loginHelper->doLogin();

		if(!$login_ok){
			$this->flashMessage("CHYBA: Přihlášení přes SkautIS se nezdařilo, zkus to znovu a kontaktuj správce");
			$this->redirect(':Front:Homepage:');
		}

		// get info from skautis
		$p = $skautis->getLoggedPerson();
		$clen = $this->clenstvi($skautis, $p->ID);

		$row = \Casopisy\UserModel::login(array(
			'id' => $p->ID,
			'name' => $p->NickName ?: "$p->FirstName {$p->LastName[0]}.",
			'fullname' => $p->DisplayName . ($p->City ? ", $p->City" : ""),
			'yearfrom' => $p->YearFrom ?: 0,
			'email' => $p->Email,
			'birthday' => $p->Birthday,
			));

		// banned user
		if ($row->role == 'ban') {
			$this->flashMessage("CHYBA: Přístup byl odepřen, kontaktuj správce");
			$this->redirect(':Front:Homepage:');
		}

		// admin role
		$role = $row->role ? explode(',', $row->role) : array(); //junak,admin

		// získal členství? zapíšeme
		if ($clen AND !in_array('junak', $role)) {
			$role[] = 'junak';
			\Casopisy\UserModel::update($row->id, array('role' => implode(',',$role)));
		}

		// nette login
		$this->user->login(new \Nette\Security\Identity($row->id, $role, $row));
		$this->flashMessage("Přihlášení úspěšné");

		$url = $this->getParam('ReturnUrl');
		if ($url AND $url != '/')
			$this->redirectUrl("http://$_SERVER[HTTP_HOST]".$url);

		if (in_array('admin', $role))
			$this->redirect(':Admin:Casopis:');

		$this->redirect(':Front:Homepage:');
	}

	/** Zjistí zdali je osoba v současnosti čestným či řádným členem
	 * @return boolean
	 */
	public function clenstvi($skautis, $personid)
	{
		$request = new \MembershipAllPerson();
		$request->membershipAllPersonInput = new \MembershipAllPersonInput();
		$request->membershipAllPersonInput->ID_Login = $skautis->loginHelper->getLoginId();
		$request->membershipAllPersonInput->ID_Person = $personid;
		$request->membershipAllPersonInput->IsValid = true;
		$response = $skautis->organizationUnit->MembershipAllPerson($request);
		$clenstvi = $response->MembershipAllPersonResult->MembershipAllOutput;
		if (!is_array($clenstvi))
			$clenstvi = array($clenstvi);

		foreach ($clenstvi as $c) {
			if ($c->ID_MembershipType == 'radne' OR $c->ID_MembershipType == 'cestne')
				return $c->Unit;
		}
		return false;
	}

	public function actionMotd()
	{
		echo '<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fskautske.casopisy&amp;width=640&amp;height=550&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=true&amp;show_border=true&amp;appId=515622781853695" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:640px; height:590px;" allowTransparency="true"></iframe>';
		$this->terminate();
	}

	public function actionLogout()
	{
		$this->user->logout();

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
