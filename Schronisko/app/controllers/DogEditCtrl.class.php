<?php
namespace app\controllers;

use app\forms\DogEditForm;
use app\forms\BehaviorEditForm;
use app\transfer\User;
use app\sqelki\SelectDog;
use app\sqelki\SelectBehavior;
use app\sqelki\SelectBehaviorDog;
use app\sqelki\UpdateDog;
use app\sqelki\InsertBehavioralDog;
use app\sqelki\InsertDog;

class DogEditCtrl{
	private $form;
	private $behaviors;
	
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new DogEditForm();
		// $this->behaviors = new BehaviorEditForm();
	}
	
	public function getParams(){

		// 1. pobranie parametrów
		$this->form->dogID = getFromRequest('id');
		$this->form->dogName = getFromRequest('name');
		$this->form->dogAge = getFromRequest('age');
		$this->form->dogBreed = getFromRequest('breed');
		$this->form->dogHairType = getFromRequest('hair_type');
		$this->form->dogImage = getFromRequest('img');
		$this->form->dogBehavior = getFromRequest('behaviors');

	}
	
	public function validate() {
		
		return true;
	}

    public function action_DogNew()
    {
        $this->behaviors = new SelectBehavior();//getDB()->select("Behavioral","*");
        $this->generateView();
    }

    public function action_DogEdit()
    {
        $this->getParams();

        if($this->validate()){
			
			$behaviors = new SelectBehaviorDog($this->form->dogID);//getDB()->select("Behavioral:Dog","*",[
			//	"Dog_idDog" => $this->form->dogID 
			//]);
			foreach ($behaviors->myBehaviors as $key => $value) {
				$select = new SelectBehavior($value);//getDB()->get("Behavioral","*",[
				
				//	"BehaviorID" => $value
				//]);
				$this->behaviors[$key] = $select->behaviors['Behavior types'];
			}
			
			$select = new SelectDog($this->form->dogID,true);//getDB()->get("Dog","*",[
			//	"idDog" => $this->form->dogID 
			//]);

			$this->form->dogName     = $select->dogs['Name'];
			$this->form->dogAge      = $select->dogs['Age'];
			$this->form->dogBreed    = $select->dogs['Breed'];
			$this->form->dogHairType = $select->dogs['Hair_Type'];
			$this->form->dogImage    = $select->dogs['img'];

			//$this->form->dogBehavior = $behaviors;

        }

        $this->generateView();
    }
	
    public function action_DogSave()
    {
        $this->getParams();

        if($this->validate()){
            if ($this->form->dogID == "") {
			
				new InsertDog($this->form);
				// getDB()->insert("Dog",[
				// 	"Name" => $this->form->dogName,
				// 	"Age" => $this->form->dogAge,
				// 	"Breed" => $this->form->dogBreed,
				// 	"Hair_Type" => $this->form->dogHairType,
				// 	"img" => $this->form->dogImage
				// ]);
				// echo $this->form->dogBehavior;

				foreach ($this->form->dogBehavior as $behaviorId){
				
					$this->dogID = getDB()->select("dog","*");

					$dogID;

					foreach ( $this->dogID as $dog ){

						$dogID = $dog["idDog"];
						
					}

					new InsertBehavioralDog($dogID,$behaviorId);
					// getDB()->insert("Behavioral:Dog",[
					// 	"Dog_idDog" => $this->form->dogID,
					// 	"Behavioral_BehaviorID" => $behaviorId
					// ]);	

				}

			}else{

				new UpdateDog($this->form);

				// getDB()->update("Dog",[
				// 	"Name" => $this->form->dogName,
				// 	"Age" => $this->form->dogAge,
				// 	"Breed" => $this->form->dogBreed,
				// 	"Hair_Type" => $this->form->dogHairType,
				// 	"img" => $this->form->dogImage
				// ],[
				// 	"idDog" => $this->form->dogID
				// ]);

				// EDYCJA ZACHOWANIA NIEMOŻLIWA

				// $behaviors = getDB()->select("Behavioral:Dog",[
				// 	"" =>
				// ]);
				
				// getDB()->insert("Behavioral:Dog",[
				// 	"" =>
				// ]);
				
				// getDB()->delete("Behavioral:Dog",[
				// 	"" =>
				// ]);

			}
			forwardTo('DogShowAll.tpl');
        }

        $this->generateView();
    }
	
	public function generateView(){
		
		getSmarty()->assign('user',unserialize($_SESSION['user']));
		getSmarty()->assign('page_title','Strona Edycji');
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('behaviors',$this->behaviors);
		getSmarty()->display('DogEditView.tpl');
	
    }
	
}