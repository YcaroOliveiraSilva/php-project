<?php

include "conexao.inc";

$vnome="Ycaro";
$vuser="brca";
$vsenha="Ycaro123";
$vmail="ycaros@emial";
$vtel="0800";
$vst=1;
$vobs="tudo ok";

$sql="INSERT INTO tb_cadastro VALUES (NULL, '$vnome','$vuser','$vsenha','$vmail','$vtel','$vst','$vobs')";
$res=mysqli_query($con, $sql);
$num=mysqli_affected_rows($con);
echo "$num registro inserido.";

mysqli_close($con);



?>



<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        
    </body>
</html>

