<?php

namespace app\sqelki;

class InsertUser {

    public function __construct($where = null) {

        if (!is_null($where)) {

            getDB()->insert("user", [
	        	"FirstName" => $where->name,
	        	"Surname" => $where->surname,
	        	"Mail" => $where->mail,
	        	"Password" => md5($where->pass),
	        	"CreatedBy" => 1,
	        	"LastUpdatedBy" => 1,
	        	"LastUpdatedAT" => getdate(),
	        	"Date_of_Creation" => getdate()
	        ]);

            $id = getDB()->get("user","*",[
				"Mail" => $where->mail
			]);

			getDB()->insert("user_has_role", [
				"User_UserID" => $id['UserID'],
				"ChangedAt" => getdate(),
				"Role_Role_ID" => 3,
				"ChangeBy" => 1,
				"Role_assign" => getdate(),
				"Role_unassign" => getdate()
			]);
        }
    }
} 