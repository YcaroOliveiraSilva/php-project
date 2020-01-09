<?php

  if (isset($_POST["f_nome"])) {
      $vnome=$_POST["f_nome"];
      echo "Nome: $vnome<br/>";
  } else {
      echo "Dados não submetidos";
  

 

/*$aula="";


if (isset($aula)) {
    echo "Variável aula foi definida";
} else {
    echo "Variável não definida";
}*/

?>


<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
       <br/><br/>
       
        <form name="f_aula" method="post" action="Isset.php">
            <label>Nome</label>
            <input type="text" name="f_nome"/><br/>
            <input type="submit" value="Enviar"/>
        </form>
        
    </body>
</html>

<?php

  }

?>