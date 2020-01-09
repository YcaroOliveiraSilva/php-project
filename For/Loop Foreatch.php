<?php

     
$transp=array("Carro", "Moto", "Bicicleta", "Ônibus", "Avião", "Navio");

foreach($transp as $veiculo) {
    echo "$veiculo<br/>";
   
    /*
    if ($veiculo == "Bicicleta") {
        break;
    }
}*/
    
 echo "<br/>";
 foreach ($transp as $veiculo) {
     if ($veiculo == "Bicicleta") {
         echo "Bicicleta está na lista de veículos";
         break;
        
  }
 }
}

?>



<html>
    <head>
        <meta charset="utf-8">
        <title>Curso de PHP FOR FOREACH</title>
      <body>
        
      </body>
    </head>
</html>

