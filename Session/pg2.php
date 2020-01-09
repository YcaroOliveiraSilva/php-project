<?php

  session_start();
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
        
        <a href="pg1.php" target="_self"> Segunda página</a>
        
    </body>
</html>




