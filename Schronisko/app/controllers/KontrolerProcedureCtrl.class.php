<?php

namespace app\controllers;

use app\sqelki\ProcedureDogoo;

class KontrolerProcedureCtrl {   //jakas tam klasa

    private $idPsa;    // jakies tam zmienne
    private $idZachowania;
    private $dzialanie;   //tu jest smietnik

    public function __construct(){
        
    }

    public function action_showTpl()
    {
        getSmarty()->assign('user',unserialize($_SESSION['user']));
        getSmarty() -> display('removedoggobeh.tpl');
    }

    public function action_NazwaAkcji()
    {
        $this->idPsa = getFromRequest('idPsa');    
        $this->idZachowania = getFromRequest('idZachowania');
		$this->dzialanie = getFromRequest('dzialanie'); 
        
        try 
        {
            $smietnikpies = new ProcedureDogoo($this->idPsa,$this->idZachowania,$this->dzialanie);
        } catch (Throwable $th) {
            $smietnikpies = [];
        }
        getSmarty()->assign('user',unserialize($_SESSION['user']));
        getSmarty() -> display('removedoggobeh.tpl');

    }
}




