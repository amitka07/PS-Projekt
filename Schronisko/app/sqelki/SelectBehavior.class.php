<?php

namespace app\sqelki;

class SelectBehavior {

	public $behaviors; // user


    public function __construct($where = null) {

        if (is_null($where)) {

            $this->behaviors = getDB()->select("behavioral","*");

        }else{

            $this->behaviors = getDB()->get("behavioral", "*",[
					"BehaviorID" => $where
				]);

        }
    }
} 