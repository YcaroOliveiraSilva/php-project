<?php

$opc=2;


switch ($opc) {
    case 1:
        echo "Carro";
        break;
    
    case 2:
        echo "Moto";
        break;
    
    case 3:
        echo "Bicicleta";
        break;
    
    case 4:
        echo "Navio";
        break;
    
    case 5:
        echo "Avião";
        break;
    
    case 6:
        echo "Transporte invalído";
        break;
}

echo "<br/>";

switch ($opc) {
   case ($opc <= 3 and $opc > 0): 
           echo "Transporte Terrestre";
           break;
       
   case 4:
   echo "Transporte Marítimo";
   break;
   
   case 5:
       echo "Transporte aéreo";
       break;
}   
?>







<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <title>Aula de Switch</title>
    </body>
</html>
