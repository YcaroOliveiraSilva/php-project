<?php


$i=0;
$tam=5;
$vet=array($tam);

for ($i=0; $i < $tam; $i++) {
    echo "Valor de i: $i<br/>";    
}

echo "<br/>--------------------------<br/>";

   for($i=0; $i < $tam; $i++) {
       $vet[$i]=0;
   }
   
   for($i=0; $i < $tam; $i++) {
       echo "Valor da pos. $i: $vet[$i]<br/>";
   }

?>



<html>
    <head>
        <meta charset="utf-8">
        <title>Curso de PHP aula FOR</title>
    <body>
        
    </body>
  </head>
</html>
