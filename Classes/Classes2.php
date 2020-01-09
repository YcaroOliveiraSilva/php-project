<?php

class aula{
    private $var1="Bom dia";
    private $var2="canalfessorbruno@gmail.com";
    private $var3="www.webveste.com.br";
    
    function escreve() {
        
        echo "<br/>Método da classe canal";
        echo "<br/>".$this->var1;
        echo "<br/>".$this->var2;
        echo "<br/>".$this->var3;
    }
}


class canal extends aula{
    var $vc1="Curso de PHP";
    var $vc2="Ycaro";
    
    
    function escreve2() {
        echo "<br/>Método da classe canal";
        echo "<br/>".$this->vc1;
        echo "<br/>".$this->vc2;
    }
}




$aulaOBJ=new aula();
$canalOBJ=new canal();

$aulaOBJ->escreve();
echo "<br/>";
$canalOBJ->escreve();




?>




<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        
    </body>
</html>

