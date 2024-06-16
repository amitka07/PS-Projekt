<?php

namespace app\sqelki;

class InsertDog {

    public function __construct($where = null) {

		if (!is_null($where)) {

			getDB()->insert("dog",[
				"Name" => $where->dogName,
				"Age" => $where->dogAge,
				"Breed" => $where->dogBreed,
				"Hair_Type" => $where->dogHairType,
				"img" => $where->dogImage
			]);

		}
    }
} 