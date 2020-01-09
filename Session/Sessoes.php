<?php

  session_start();
  $_SESSION['vnome']="Ycaro";
  $_SESSION['vtexto']="texto para teste";
  
  
  //unset($_SESSION['vnome']);
  
  echo  $_SESSION['vnome'];
  echo  "<br/>".$_SESSION['vtexto'];




?>


<html>
    <head>
        <meta charset="utf-8">
        
    </head>
    <body>
        
          <a href="pg1.php" target="_self"> Segunda página</a>

        
    </body>
</html>
