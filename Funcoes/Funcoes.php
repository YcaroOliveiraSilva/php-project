<?php

  function aula() {
      echo "<br/>Olá Mundo<br/>";
      echo "Aula sobre funções<hr/>";
      
  }
  aula();
  
  function soma($n1, $n2) {
      $res=$n1+$n2;
      echo " Soma de $n1 com $n2 = $res<br/>";
  }

 soma(3,7);
 
  function soma2($n1,$n2) {
      $res=$n1+$n2;
      return $res;
  }
  
  $so=soma2(10,5);
  
  echo "resultado = $so<br/>";
  
  $valores=array(1,3,7,9,12,6,4,20,18);
  
  function media($val) {
      $tam=count($val);
      $soma=0;
      for($i=0;$i<$tam;$i++) {
          $soma+=$val[$i];
      }
      return $soma/$tam;
  }
  $med=media($valores);
  echo "<br/>Média = $med<br/>";
  
?>



<html>
    <head>
        <meta charset="utf-8">
        <title>Curso de PHP FUNCOES</title>
      <body>
             
      </body>
   </head>
</html>
       

