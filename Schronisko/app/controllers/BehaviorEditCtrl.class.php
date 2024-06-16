<?php

namespace app\controllers;

use app\forms\BehaviorEditForm;
use app\transfer\User;
use app\transfer\Result;
use app\sqelki\SelectBehavior;
use app\sqelki\InsertBehavior;
use app\sqelki\UpdateBehavior;

class BehaviorEditCtrl{
	private $form;
	
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new BehaviorEditForm();
	}
	
	public function getParams(){
		// 1. pobranie parametrów
		$this->form->behaviorID = getFromRequest('behaviorID');
		$this->form->behavior_type = getFromRequest('behavior_type');
	}
	
	public function validate() {
		
		if ($this->form->behavior_type == "") {
			getMessages()->addError ( 'Nie podano nazwy zachowania' );
		}	

		return ! getMessages()->isError();
	}

    public function action_BehaviorNew()
    {
        $this->getParams();

        $this->generateView();
    }

    public function action_BehaviorEdit()
    {
        $this->getParams();

		try {

			$select = new SelectBehavior($this->form->behaviorID);
			// getDB()->get('Behavioral',"*",[
			// 	"BehaviorID" => $this->form->behaviorID
			// ]);

			$this->form->behavior_type = $select['Behavior types'];
		
		} catch (PDOException $e){

			    getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			    if (getConf()->debug) getMessages()->addError($e->getMessage());

		}

        $this->generateView();
    }
	
    public function action_BehaviorSave()
    {
        $this->getParams();

        if($this->validate()){
            try {
				if ($this->form->behaviorID == "") {
					new InsertBehavior($this->form->behavior_type);
					// getDB()->insert('Behavioral',[
					// 	"Behavior Types" => $this->form->behavior_type
					// ]);
				}else{
					new UpdateBehavior($this->form->behavior_type,$this->form->behaviorID);
					// getDB()->update('Behavioral',[
					// 	"Behavior Types" => $this->form->behavior_type
					// ],[
					// 	"BehaviorID" => $this->form->behaviorID
					// ]);
				}
			} catch (PDOException $e){

			    getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			    if (getConf()->debug) getMessages()->addError($e->getMessage());

		    }
			forwardTo('BehaviorShowAll');
        }

        $this->generateView();
    }

	public function generateView(){
		
		getSmarty()->assign('user',unserialize($_SESSION['user']));
		
		getSmarty()->assign('page_title','Strona Edycji');
		getSmarty()->assign('form',$this->form);
		getSmarty()->display('BehaviorEditView.tpl');
	
    }

}