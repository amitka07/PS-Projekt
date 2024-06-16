<?php

namespace app\controllers;

use app\forms\BehaviorListForm;
use app\transfer\User;
use app\transfer\Behavior;
use app\sqelki\SelectBehavior;

class BehaviorListCtrl{
	private $behaviors;
	
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->behaviors = new Behavior();

	}

    public function action_BehaviorShowAll()
    {

        $this->behaviors = new SelectBehavior();//getDB()->select('Behavioral',"*");
        $this->generateView();

    }
	
	public function generateView(){
		
		getSmarty()->assign('user',unserialize($_SESSION['user']));
		
		getSmarty()->assign('page_title','Strona Główna');
		getSmarty()->assign('behaviors',$this->behaviors->behaviors);
		getSmarty()->display('BehaviorListView.tpl');
	
    }

}