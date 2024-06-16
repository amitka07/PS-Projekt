<?php

namespace app\sqelki;

class SelectUser {

    public $user;

    public function __construct($where = null,$type = null,$page = 0) {

       //$items = 5;
       //$limit = [$items * $page, $items];
        if (is_null($where)) {

            $this->user = getDB()->select("user", "*",[
                //'LIMIT' => $limit
            ]);

        }else{

            if (!is_null($type)) {
                
                $this->user = getDB()->select("user","*",[

				'OR' => ['firstName[~]' => '%'.$where.'%'],
                'OR' => ['surname[~]' => '%'.$where.'%']
			]);

            }else if ($type === "Like"){

                $this->user = getDB()->get("user", "*",[
                    "UserID" => $where
                ]);

            }
        }
    }
} 