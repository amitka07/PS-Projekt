<?php

namespace app\sqelki;

class InsertBehavioralDog {

    public function __construct($where = null,$behaviorId) {

        getDB()->insert("Behavioral:Dog",[
			"Dog_idDog" => $where,
			"Behavioral_BehaviorID" => $behaviorId
		]);
        
    }
} 