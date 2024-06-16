<?php

namespace app\sqelki;

class SelectBehaviorDog {

	public $myBehaviors; // user


    public function __construct($where = null, $get = null) {

        if (is_null($where)) {

            $this->myBehaviors = getDB()->select("behavioral:dog","*");

        }else{

            if(is_null($get)){

                $this->myBehaviors = getDB()->select("behavioral:dog", 'Behavioral_BehaviorID',[
                    "Dog_idDog" => $where
                ]);
                
            }else{
                
                $this->myBehaviors = getDB()->get("behavioral:dog", "*",[
                    "Dog_idDog" => $where
                ]);

            }


        }
    }
} 
