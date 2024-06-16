<?php

namespace app\controllers;

use app\transfer\User;
use app\forms\LoginForm;

class LoginCtrl{
	private $form;
	
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new LoginForm();
	}
	
	public function getParams(){
		// 1. pobranie parametrów
		$this->form->login = getFromRequest('login');
		$this->form->pass = md5(getFromRequest('pass'));
	}
	
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->login ) && isset ( $this->form->pass ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false;
		}
			
			// nie ma sensu walidować dalej, gdy brak parametrów
		if (! getMessages()->isError ()) {
			
			// sprawdzenie, czy potrzebne wartości zostały przekazane
			if ($this->form->login == "") {
				getMessages()->addError ( 'Nie podano loginu' );
			}
			if ($this->form->pass == "") {
				getMessages()->addError ( 'Nie podano hasła' );
			}
		}

		//nie ma sensu walidować dalej, gdy brak wartości
		if ( !getMessages()->isError() ) {
		
			try {

				$record = getDB()->get("user", "*",[
					"Mail" => $this->form->login
				]);
				
				if( $this->form->pass == $record['Password'] ){

					$privilege = getDB()->get("User_has_role","Role_Role_ID",[
						"User_UserID" => $record['UserID']
					]);
					
					if ( $privilege == 1) {

                    	$user = new User($this->form->login, $record['UserID'], 'admin' );

                	} elseif ( $privilege == 2 ) {

                	    $user = new User($this->form->login, $record['UserID'], 'moderator' );

                	} elseif ( $privilege == 3 ){

                	    $user = new User($this->form->login, $record['UserID'], 'user' );

                	}else{

						$user = new User($this->form->login, $record['UserID'], 'banned' );
						getMessages()->addError('Konto zostało zbanowane');

					}

                	$_SESSION['user'] = serialize($user);
					addRole($user->privilege);

				} else {

					getMessages()->addError('Niepoprawny login lub hasło');
					
				}

			} catch (PDOException $e){
			    getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			    if (getConf()->debug) getMessages()->addError($e->getMessage());			
		    }
		}
		
		return !getMessages()->isError();
	}
	
	public function action_login(){

		$this->getParams();
		
		if ($this->validate()){
			//zalogowany => przekieruj na stronę główną, gdzie uruchomiona zostanie domyślna akcja
			header("Location: ".getConf()->app_url."/");
		} else {
			//niezalogowany => wyświetl stronę logowania
			$this->generateView(); 
		}
		
	}
	
	public function action_logout(){
		// 1. zakończenie sesji - tylko kończymy, jesteśmy już podłączeni w init.php
		session_destroy();
		
		// 2. wyświetl stronę logowania z informacją
		getMessages()->addInfo('Poprawnie wylogowano z systemu');

		$this->generateView();		 
	}
	
	public function generateView(){

		getSmarty()->assign('page_title','Strona logowania');
		getSmarty()->assign('form',$this->form);
		getSmarty()->display('LoginView.tpl');		
	}
}