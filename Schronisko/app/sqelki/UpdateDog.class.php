<?php

namespace app\sqelki;

class UpdateDog {

	public $dogs; // Dogs


    public function __construct($what = null)  {

        getDB()->update("Dog",[
        	"Name" => $what->dogName,
        	"Age" => $what->dogAge,
        	"Breed" => $what->dogBreed,
        	"Hair_Type" => $what->dogHairType,
        	"img" => $what->dogImage
        ],[
        	"idDog" => $what->dogID
        ]);
    }
} 