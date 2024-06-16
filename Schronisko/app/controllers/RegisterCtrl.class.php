<?php

namespace app\controllers;

use app\transfer\User;
use app\transfer\Result;
use app\forms\PersonEditForm;
use app\sqelki\InsertUser;

class RegisterCtrl{
	private $form;
	private $result;
	
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new PersonEditForm();
	}
	
	public function getParams(){
		// 1. pobranie parametrów
		$this->form->name      = getFromRequest('name');
		$this->form->surname   = getFromRequest('surname');
		$this->form->mail      = getFromRequest('mail');
		$this->form->pass      = getFromRequest('pass');
		$this->form->pass2     = getFromRequest('pass2');
	}
	
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (
            isset ( $this->form->name      ) &&
            isset ( $this->form->surname   ) &&
            isset ( $this->form->mail      ) &&
            isset ( $this->form->pass      ) &&
            isset ( $this->form->pass2    ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false;
		}
			
			// nie ma sensu walidować dalej, gdy brak parametrów
		if (! getMessages()->isError ()) {
			
			// sprawdzenie, czy potrzebne wartości zostały przekazane
			if ($this->form->name    == "") { getMessages()->addError ( 'Nie podano imienia' ); }
			if ($this->form->surname == "") { getMessages()->addError ( 'Nie podano nazwiska' ); }
			if ($this->form->mail    == "") { getMessages()->addError ( 'Nie podano maila' );	}
			if ($this->form->pass    == "") { getMessages()->addError ( 'Nie podano hasła' );	}
			if ($this->form->pass2   == "") { getMessages()->addError ( 'Nie podano ponownie hasła' ); }
            if (!($this->form->pass == $this->form->pass2)) { getMessages()->addError ( 'Hasła muszą być takie same' ); }
			 
		}

		//nie ma sensu walidować dalej, gdy brak wartości
		return !getMessages()->isError();
	}

	public function action_register(){

		$this->getParams();
		
		if ($this->validate()){
			//zalogowany => przekieruj na stronę główną, gdzie uruchomiona zostanie domyślna akcja
			 try {

				new InsertUser($this->form);
				$user = new User($this->form->mail,  $record['UserID'], 'user' );
				
				$_SESSION['user'] = serialize($user);
				addRole($user->privilege);

                // getDB()->insert("user", [
				// 		"FirstName" => $this->form->name,
				// 		"Surname" => $this->form->surname,
				// 		"Mail" => $this->form->mail,
				// 		"Password" => md5($this->form->pass),
				// 		"CreatedBy" => 1,
				// 		"LastUpdatedBy" => 1,
				// 		"LastUpdatedAT" => getdate(),
				// 		"Date_of_Creation" => getdate()
				// 	]);
				
				// user with id 
				// $id = getDB()->get("user","*",[
				// 		"Mail" => $this->form->mail
				// 	]);

				// getDB()->insert("user_has_role", [
				// 		"User_UserID" => $id['UserID'],
				// 		"ChangedAt" => getdate(),
				// 		"Role_Role_ID" => 3,
				// 		"ChangeBy" => 1,
				// 		"Role_assign" => getdate(),
				// 		"Role_unassign" => getdate()
				// 	]);
                

            } catch (PDOException $e){

			    getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			    if (getConf()->debug) getMessages()->addError($e->getMessage());	

		    }

			header("Location: ".getConf()->app_url."/");
			
		} else {
			//niezalogowany => wyświetl stronę logowania
			$this->generateView(); 
		}
		
	}
	
	public function generateView(){

		getSmarty()->assign('page_title','Strona rejestracji');
		getSmarty()->assign('form',$this->form);
		getSmarty()->display('RegisterView.tpl');
	}
}