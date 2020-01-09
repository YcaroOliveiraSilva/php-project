<?php




$i=0;
$tam=5;
$vet=array($tam);

while($i <= 11) {
    echo "Valor da variável i: $i<br/>";
    $i++; //$i = $i + 1;
}
echo "<br/><br/><br/>";

$i=0;

while($i < $tam) {
    $vet[$i]=0;
    echo "$vel[$i]<br/>";
    $i++;
}

$i=0;
while($i < $tam) {
    echo "$vet[$i]<br/>";
    $i++;
}



?>

<html>
    <head>
        <meta charset="utf8">
        <title>Curso de PHP WHILE</title>
      
    <body>
        
    </body>
    </head>
</html>
