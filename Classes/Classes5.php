<?php

class Carro {
    public $cor;
    public $vel=0;
    
    function Carro($cor,$ve1) {
        $this->cor=$cor;
        $this->vel=$vel=0;
    }
    
    function status() {
        echo "<br/>";
        echo "Cor: ".$this->cor;
        echo "<br/>Velocidade: ".$this->vel;
        echo "<br/>";
    }
}

$car1=new Carro("Vermelho", 200);
$car2=new Carro("Verde",150);
$car3=new Carro("Azul",100);

$car1->status();
$car2->status();
$car3->status();


?>


<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        
        
    </body>
</html>

