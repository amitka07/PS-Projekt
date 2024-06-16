<?php

namespace app\transfer;

class User{
	public $login;
	public $id;
	public $privilege;
	
	public function __construct($login, $id, $privilege){
		$this->login = $login;
		$this->id = $id;
		$this->privilege = $privilege;		
	}	
}