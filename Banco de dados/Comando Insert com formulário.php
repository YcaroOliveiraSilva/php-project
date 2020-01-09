<?php

include "conexao.inc";

$vcod=$_POST["F_codigo"];
$vprod=$_POST["F_produto"];
$vpreco=$_POST["F_preco"];
$vqtde=$_POST["F_qtde"];

$sql="INSERT INTO db_produtos VALUES ('$vcod','$vprod',$vpreco,$vqtde)";
$res=mysqli_query($con, $sql);

$linhas=mysqli_affected_rows($con);

if ($linhas == 1) {
    echo "Registro gravado com sucesso";
} else {
    echo "Falha na gravação do registro<br/>";
}

mysqli_close($con);

?>


