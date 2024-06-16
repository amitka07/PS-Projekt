<?php

namespace app\controllers;

use app\forms\DogListForm;
use app\transfer\User;
use app\transfer\Behavior;

class ReseredCtrl{
	private $form;
	private $dogs;
	private $behaviors;
	
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new DogListForm();
	}
	
	public function getParams(){
		// 1. pobranie parametrów
		// $this->form->searchBar = getFromRequest('searchbar');

	}

    public function action_DogRent()
    {
        $this->getParams();

		try {

			// $this->dogs = getDB()->select("Dog","*",[
			// 	'AND' => ['Name[~]' => $this->form->searchBar]
			// ]);
			
		} catch (PDOException $e){

			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
			$this->dogs = [];
			
		} 

        $this->generateView();
    }

    public function action_ApproveDog()
    {
        try {

			$this->dogs = new SelectDog();//getDB()->select("Dog","*");
			
		}  catch (PDOException $e){

			getMessages()->addError('Wystąpił błąd podczas usuwania rekordu');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
            $this->dogs = [];

		}
        
        $this->generateView();
    }
	
	public function action_ApproveList()
    {
        try {

			$this->dogs = new SelectDog();//getDB()->select("Dog","*");
			
		}  catch (PDOException $e){

			getMessages()->addError('Wystąpił błąd podczas usuwania rekordu');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
            $this->dogs = [];

		}
        
        $this->generateView();
    }
	
	public function generateView(){
		
		getSmarty()->assign('user',unserialize($_SESSION['user']));
		
		getSmarty()->assign('page_title','Strona Główna');
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('dogs',$this->dogs);
		getSmarty()->assign('behaviors',$this->behaviors);
		getSmarty()->display('ReservedList.tpl');
	
    }

}