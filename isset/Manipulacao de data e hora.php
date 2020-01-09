<?php

$dia = date("d");
$mes = date("m");
$ano = date("Y");


$meses=array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");


//echo $dia." de ".$meses[$mes]." de ".$ano;

$hora=date("H");
$minuto=date("i");
$segundo=date("s");

echo $dia." de ".$meses[$mes-1]." de ".$ano."<br/>";
echo $hora.":".$minuto.":".$segundo;





?>


<html>
    <head>
        <meta charset="utf-8">
        
    </head>
    <body>
        
    </body>
</html>

