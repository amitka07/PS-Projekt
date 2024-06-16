<?php

namespace app\controllers;

class TestCtrl {   


    private $form;  
    private $pieski;
    private $counter; 

    public function __construct(){
        
    }

    public function action_showMeSmietnik()
    {

        try 
    {
        $smietnikpies = getDB() -> select ('smietnik','*');
    } catch (Throwable $th) {
        $smietnikpies = [];
    }
        getSmarty() -> assign('smietnik',$smietnikpies);
        getSmarty() -> display('smietnikv2.tpl');

    }











}










