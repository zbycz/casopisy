<?php
/**
 * nPress - opensource cms
 *
 * @copyright  (c) 2012 Pavel Zbytovský (pavel@zby.cz)
 * @link       http://npress.info/
 * @package    nPress
 */

namespace FrontModule;
use Nette;
use Nette\Forms\Form;

/** Login presenter
 */
class LoginPresenter extends Nette\Application\UI\Presenter
{
	public function actionDefault(){
		if($this->user->isLoggedIn())
			$this->redirect(":Admin:Casopis:");
	}


	public function actionLogout(){
		$this->user->logout();
		$this->flashMessage("Odhlášení proběhlo úspěšně");
		$this->redirect(":Front:Login:");
	}

	public function createComponentLoginForm(){
		$form = new \Nette\Application\UI\Form();
		$form->addText('username', 'Uživatelské jméno:')
			->addRule(Form::FILLED, 'Vyplňte prosím uživatelské jméno.');
		$form->addPassword('password', 'Heslo:')
			->addRule(Form::FILLED, 'Vyplňte, prosím, heslo.');
		$form->addCheckbox('remember', 'Trvale přihlásit na tomto počítači');
		$form->addSubmit('login', 'Přihlásit se');
		$form->onSuccess[] = callback($this, 'loginFormSubmitted');

                $form->renderer->wrappers["error"]["container"] = NULL;
                $form->renderer->wrappers["error"]["item"] = "div class='alert alert-error'";
		return $form;
	}
	public function loginFormSubmitted($form){
		try {
			$values = $form->values;
			//if ($values['remember']) {
				$this->user->setExpiration('+ 1 month', FALSE); //also in config.neon#session
			//} else {
			//	$this->user->setExpiration(0, TRUE);
			//}
			//TODO expiration(0) breaks uploadify

			$this->user->getAuthenticator()->authenticate(array($values['username'], $values['password']));
			$this->user->login(new \Nette\Security\Identity(0, array('user','admin'), array('name' => $values['username'])));

			if(isset($values['backlink']))
				$this->application->restoreRequest($values['backlink']);
                        $this->flashMessage("Úspěšně přihlášen");
			$this->redirect(":Admin:Casopis:");

		} catch (Nette\Security\AuthenticationException $e) {
			$form->addError($e->getMessage());
		}
	}


	/*/ -----------------------------------------   LOST PASS  ---------------------
	public function createComponentLostPassForm(){
		$usersModel = new UsersModel();

		$form = new AppForm;
		$form->addText('email', 'E-mail kontaktní osoby:')
			->addRule(Form::FILLED, 'Vyplňte prosím e-mail kontaktní osoby.')
			->addRule(array($usersModel, 'isExistingEmail'), 'Tento e-mail nemáme v databázi. Pokud si nejste jisti, prosíme, kontaktujte nás.');

		$form->addSubmit('send', 'Poslat');

		$form->onSuccess[] = callback($this, 'lostPassFormSubmitted');
		return $form;
	}

	public function lostPassFormSubmitted(AppForm $form){
		$auth = md5(uniqid(rand()));
		dibi::query('UPDATE [::users] SET auth_lost_pass = %s',$auth,' WHERE email= %s',$form['email']->value);

		//pošleme mail
		$template = $this->createTemplate();
		$template->registerFilter(new LatteFilter);
		$template->auth  = $auth;
		$template->setFile(APP_DIR.'/templates/Login/lostPass_email.phtml'); // -> newPass

		//posíláme
		$mail = new Mail;
		$mail->setEncoding(Mail::ENCODING_QUOTED_PRINTABLE);
		$mail->setFrom(Environment::getVariable('registerRobotEmail'), Environment::getVariable('serverName'));
		$mail->addTo($form['email']->getValue());
		$mail->setHtmlBody($template);

		if(!Environment::isProduction())
			$mail->setMailer(new MyMailer);

    try {
            $mail->send();
    } catch (InvalidStateException $e) {
            throw new IOException('Nepodařilo se odeslat e-mail, zkuste to prosím za chvíli.');
    }

		$this->flashMessage('Zkontrolujte prosím svůj email a postupujte dle instrukcí.');
		$this->redirect('Login:form');
	}

	// -----------------------------------------   NEW PASS  ---------------------
	public function actionNewPass($auth){
		$data = dibi::fetch('SELECT  * FROM [::users] WHERE auth_lost_pass= %s',$auth);
		if(!$data){
			$this->flashMessage('Bohužel odkaz pro obnovu hesla je chybný, zkuste ho správně zkopírovat, nebo vygenerujte nový.');
			$this->redirect('Login:lostPass');
		}

		$this->template->data = $data;
		$this['newPassForm']['auth']->setValue($auth);
	}

	public function createComponentNewPassForm(){
		$usersModel = new UsersModel();

		$form = new AppForm($this, 'newPassForm');
		$form->addHidden('auth');
		$form->addPassword('pass', 'Nové heslo')
			->addRule(Form::FILLED, 'Zvolte si své heslo')
			->addRule(Form::MIN_LENGTH, 'Heslo je příliš krátké, alespoň %d znaků', 5);
		$form->addPassword('pass2', 'Potvrzení hesla')
			->addConditionOn($form['pass'], Form::VALID)
				->addRule(Form::FILLED, 'Vložte heslo ještě jednou pro potvrzení')
				->addRule(Form::EQUAL, 'Hesla se neshodují, vypište znovu', $form['pass']);

		$form->addSubmit('send', 'Uložit');

		$form->onSubmit[] = callback($this, 'newPassFormSubmitted');
		return $form;
	}

	public function newPassFormSubmitted(AppForm $form){
		$pass = sha1($form['pass']->value);
		dibi::query('UPDATE [::users] SET pass = %s',$pass,', auth_lost_pass=\'\' WHERE auth_lost_pass= %s',$form['auth']->value);

		$this->flashMessage('Nové heslo bylo nastaveno, můžete se přihlásit.');
		$this->redirect('Login:form');

	}

*/
}
