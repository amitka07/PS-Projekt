<?php

namespace app\controllers;

use app\forms\PersonListForm;
use app\transfer\User;
use app\transfer\Result;
use app\sqelki\SelectUser;

class PersonListCtrl{
	private $form;
	private $records;
	private $counter; // tutaj counter kruwa
	// TODO uncomment
	// private $user;
	
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new PersonListForm();
	}
	
	public function getParams(){
		// 1. pobranie parametrów
		$this->form->searchbar = getFromRequest('searchbar');
		// TODO uncomment
		// $this->user = unserialize($_SESSION['user']);
	}

    public function action_personShowAll()
    {
		try{

			$this->counter = getDB()->count('user');
			$this->records = new SelectUser();
			// if ($this->user->privileges == 3) {
				// $this->records = getDB()->select("user", [
				// 	"UserID",
				// 	"FirstName",
				// 	"Surname",
				// 	"Mail",
				// 	"Password",
				// ],[
				// 	"Privilege_ID" => 3
				// ]);
			// }else{
				//getDB()->select("user", [
				// 	"UserID",
				// 	"FirstName",
				// 	"Surname",
				// 	"Mail",
				// 	"Password",
				// ]);
			// }

		} catch (PDOException $e){

			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());

		} 

        $this->generateView();
    }

	public function action_personShowLike()
    {
        $this->getParams();

		try{
			$this->counter = getDB()->count('user',[
				'OR' => ['firstName[~]' => '%'.$this->form->searchBar.'%'],
                'OR' => ['surname[~]' => '%'.$this->form->searchBar.'%']
			]); // counter nie w sqlkach
			$this->records = new SelectUser($this->form->searchBar,null,$this->counter); //przekazanie counterka
			// $this->records = new SelectUser($this->form->searchbar,"Like");//getDB()->select("user", "*");

		} catch (PDOException $e){

			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());

		}

        $this->generateView();
    }

	public function generateView(){
		getSmarty()->assign('user',unserialize($_SESSION['user']));
		getSmarty()->assign('page_title','Strona Użytkowników');
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('users',$this->records->user);
		getSmarty()->display('PersonListView.tpl');
		getSmarty()->assign('counter',$this->counter); // do smarty counter
    }

	public function generateView1(){
		
		getSmarty()->assign('user',unserialize($_SESSION['user']));
		getSmarty()->assign('page_title','Stronka Użytkoników dla użytkowników :DDD');
		getSmarty()->assign('users',$this->records);
		getSmarty()->display('templatkaDoUsersów.tpl');
    }


	public function action_normalUsers() {
		$this->records = getDB()->select ('usersy','*');
		$this->generateView1();
	}

}