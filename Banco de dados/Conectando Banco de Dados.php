<?php

include "conexao.inc";

$res=mysqli_query($con,"SELECT * FROM tb_cadastro");
$linhas=mysqli_num_rows($res);

echo "Encontrados  $linhas  registrados na tabela tb_cadastro";


mysqli_close($con);

?>


<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        
    </body>
</html>
