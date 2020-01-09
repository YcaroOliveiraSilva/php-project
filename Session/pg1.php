<?php

  session_start();
  $_SESSION['vcanal']="vlog do fessor Bruno";
  echo "<h3>Segunda página</h3>";
  echo $_SESSION['vnome'];
  $_SESSION['vtexto']="texto para teste";
  
  
  //unset($_SESSION['vnome']);
  
  echo  $_SESSION['vnome'];
  echo  "<br/>".$_SESSION['vtexto'];

 // session_destroy();



?>


<html>
    <head>
        <meta charset="utf-8">
        
    </head>
    <body>
        
        <a href="pg1.php" target="_self"> Volta Sessoes</a>
        <a href="pg2.php" target="_self"> Volta página</a>
    </body>
</html>


