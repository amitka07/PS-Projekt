<?php
namespace app\sqelki;

class ProcedureDogoo {

 public function __construct($zmienna1,$zmienna2,$zmienna3){

		$link = mysqli_connect('localhost','root','root','mydb');
        echo $zmienna3;
		$lista_pytan = "call procedure6($zmienna1,$zmienna2,'$zmienna3');";
		$query_lista_pytan = mysqli_query($link,$lista_pytan);
		mysqli_close($link);
 }
}
        ?>