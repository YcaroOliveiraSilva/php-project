<?php

$vet=array("mouse", "teclado", "monitor", "memoria", "sair", "microfone", "impressora");
$tam=count($vet);
$i=0;



$i=0;
while($i < $tam) {
    echo "$vet[$i]<br/>";
    $i++;
    
    if ($vet[$i] == "sair") {
        break;
    }
}

echo "<br/><br/><br/>";
echo "Loop For<br/>";

 for($i=0;$i<$tam;$i++) {
     echo "$vet[$i]<br/>";
 }



?>



<html>
    <head>
        <meta charset="utf-8">
        <title>Curso de PHP BREAK</title>
       <body>
        
      </body>
    </head>
</html>
