<?php

namespace app\controllers;

use app\forms\DogListForm;
use app\transfer\User;
use app\transfer\Behavior;
use app\sqelki\SelectDog;
use app\sqelki\SelectBehavior;
use app\sqelki\SelectBehaviorDog;

class DogListCtrl{
	private $form;
	private $dogs;
	private $behaviors;
	private $myBehaviors;
	private $counter;


	public function action_DeletePies()
    {
		
		$this->getParams1();
		$link = mysqli_connect('localhost','root','root','mydb');
		$zmienna = $this->form->dogID;

		$lista_pytan = "call new_procedure($zmienna)";
		$query_lista_pytan = mysqli_query($link,$lista_pytan);
		mysqli_close($link);

		forwordTo('dogList.tpl');

		

		/**
		 * $link = mysqli_connect($localhost,$user,$password,$database);
		 * $lista_pytan = "select * from `$table` where `kategoria`='$kategoria' and `poziom`='$trudnosc';";
		 * $query_lista_pytan = mysqli_query($link,$lista_pytan);
		 * 
		 * $row = mysqli_fetch_row($query_lista_pytan)
		 * /
		 * $row = mysqli_fetch_array($query_lista_pytan)
		 * 
		 * mysqli_close($link);
		 * statment do zapytań jak mi kurwa meedo nie działa
		 */
	}

	public function getParams1(){
		$this->form->dogID = getFromRequest('DeleteDogVariable');
	}
	
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new DogListForm();
	}
	
	public function getParams(){
		// 1. pobranie parametrów
		$this->form->searchBar = getFromRequest('searchbar');
		$this->counter = getFromRequest('page');

	}

    public function action_DogShowLike()
    {
        $this->getParams();

		try {
			
			$this->dogs = new SelectDog($this->form->searchBar,null,$this->counter );
			/* getDB()->select("Dog","*",[
				'AND' => ['Name[~]' => $this->form->searchBar]
			]);*/
			if (empty ($this->form->searchBar)) {
			$this->counter = getDB()->count('dog');
			} else {
			$this->counter = getDB()->count('dog',[
                    'AND' => ['Name' => $this->form->searchBar]
                ]);
			}
			
			
			$this->behaviors = new SelectBehavior();//getDB()->select("behavioral","*");

			$this->myBehaviors = new SelectBehaviorDog();//getDB()->select("behavioral:dog","*");
			
		} catch (PDOException $e){

			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
			$this->dogs = [];

		} 
		$this->assignParameters();
		getSmarty()->assign('user',unserialize($_SESSION['user']));
		echo getSmarty()->fetch('dogList.tpl');
        // $this->generateView();
    }

    public function action_DogShowAll()
    {
		$this->getParams();

        try {

			$this->dogs = new SelectDog( null, null , $this->counter );//getDB()->select("Dog","*");
			
			$this->counter = getDB()->count('dog');

			$this->behaviors =  new SelectBehavior();//getDB()->select("behavioral","*");
			
			$this->myBehaviors = new SelectBehaviorDog();//getDB()->select("behavioral:dog","*");
			
		} catch (Throwable $th) {

			$this->dogs = [];
			//throw $th;
		}

        $this->generateView();
    }
	
	public function generateView(){
		
		getSmarty()->assign('user',unserialize($_SESSION['user']));
		$this->assignParameters();
		getSmarty()->display('DogListView.tpl');
	
    }

	public function assignParameters(){

		getSmarty()->assign('page_title','Strona Główna');
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('dogs',$this->dogs->dogs);
		getSmarty()->assign('myBehaviors',$this->myBehaviors->myBehaviors);
		getSmarty()->assign('behaviors',$this->behaviors->behaviors);
		getSmarty()->assign('counter',$this->counter);
		//echo $this->counter;

	}

	}
	

