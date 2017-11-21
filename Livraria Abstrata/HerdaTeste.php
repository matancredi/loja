<?php

include("Teste.php");
include("Contrato.php");

class HerdaTeste extends Teste implements Contrato
{
    
    public function __construct($nome)
    {
        
        parent::__construct($nome);
        
        
    }
    
    
    public function getNome(){
        
        return "Nome: ".parent::getNome();
    }
    public function aula()
    {
        
        
    }

    
    
   

    
}


