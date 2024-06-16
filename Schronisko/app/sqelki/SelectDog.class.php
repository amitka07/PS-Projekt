<?php

namespace app\sqelki;

class SelectDog {

	public $dogs; // Dogs

    public function __construct($where = null,$get = null,$page = 0) {

        $items = 2;
        $limit = [ $items * $page, $items];
        if (is_null($where)) {

            $this->dogs = getDB()->select("dog","*",[
                'LIMIT' => $limit
            ]);

        }else{
            if ($get) {
                $this->dogs = getDB()->get("dog","*",[
                    'AND' => ['idDog' => $where]
                ]);
            }else{
                $this->dogs = getDB()->select("dog","*",[
                    'OR' => [
                        'Name[~]' => $where,
                        'Breed[~]' => $where,
                        'idDog[~]' => $where
                    ], 
                
                    
                    'LIMIT' => $limit
                ]);
            }
        
        }
    }
} 