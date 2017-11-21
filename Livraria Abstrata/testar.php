<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("HerdaTeste.php");


$testePai = new Teste("Mariana Tancredi");

$teste = new HerdaTeste("Mariana Tancredi");

//$teste->setNome();


echo $testePai->getNome()."<br>";
echo $teste->getNome();


?>