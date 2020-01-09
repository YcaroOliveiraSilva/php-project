<?php

 class Carro {
     var $tipo; //1=passeio/ 2=esporte / 3=utilitario
     var $velMax;
     var $nome;
     var $liga;
     var $vel;
     
     function Carro($tp,$no) {
         $this->tipo=$tp;          
        $this->liga=false;
        $this->nome=$no;
        
        if ($tp==1) {
            $this->velMax=160;
        } else if ($tp==2) {
            $this->velMax=300;
        } else {
            $this->velMax=100;
        }
     }
     
      function ligar() {
          $this->liga=true;
      }
      
      function desligar() {
          $this->liga=false;
      }
      
      function velocidade($vl) {
          if ($vel-> $this-velMax) {
              $this->vel=  $this->velMax;
          } else {
              $this->vel=$v1;
          }
      }
     
     function id() {
         echo "<hr/>";
         echo "Nome do carro: ".$this->nome;
         echo "<br/>Tipo do carro: ".$this->tipo;
         echo "<br/>Velocidade máxima: ".$this->velMax;
         echo "<br/>Velocidade atual:  ".$this->vel;
         if ($this->liga) {
             echo "<br/>Este carro está ligado";
         } else {
             echo "<br/>Desligado";
         }
     }
 }

 
 $carro1=new Carro(2,"Rapid");
 $carro2=new Carro(3,"Carregador");
 $carro3=new Carro(2,"Basic");

  $carro1->ligar();
  $carro3->ligar();

 
 
 $carro1->id();
 $carro2->id();
 $carro3->id();
 
 
 
?>



<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        
    </body>
</html>

