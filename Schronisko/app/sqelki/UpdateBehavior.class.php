<?php

namespace app\sqelki;

class InsertBehavioralDog {

    public function __construct($what = null,$where = null) {

        if(!is_null($what)&&!is_null($where))
        {

            getDB()->insert("Behavioral:Dog",[
			    "Behavior Types" => $what
            ],[
			    "BehaviorID" => $where
		    ]);

    }
    }
} 