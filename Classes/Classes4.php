<?php

interface CarroPadrao{
    function liga();
    function desliga();
    function status();
    function acelera();
    function freia();
}

interface CarroGuerra{
    function atiraCanhao();
    function atiraMetralhadora();
}

abstract class CarroBase implements CarroPadrao {
    public $potencia;
    public $velMax;
    private $ligado=false;
    
    function liga() {
        $this->ligado=true;
    }
}

 function status() {
     echo "<br/>";
     echo "Potência: ".$this->potência;
     echo "<br/>Velocidade Máxima: ">$this->velMax;
     echo "<br/>";
     if ($this->ligado) {
         echo "Este carro está ligado";
     } else {
         echo "Este carro não está ligado";
     }
     
     echo "<br/>";
 }
 
  function acelera() {};
  function freia() {};
  function atiraCanhao() {};
  function atiraMetralhadora() {};
  

abstract class Carro extends CarroBase{
    
    function Carro($pt,$vm) {
        
        
    }
    
}
$carro1=new Carro();



?>



<html>
    <head>
        <meta charset="utf-8">
         
    </head>
    <body>
        
    </body>
</html>