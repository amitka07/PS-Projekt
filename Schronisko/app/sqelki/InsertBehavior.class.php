<?php

namespace app\sqelki;

class InsertBehavior {

    public function __construct($where) {

        getDB()->insert("Behavioral",[
			"Behavior Types" => $where
		]);
        
    }
} 