<?php

function add_some_extra($string) {
    
    $string .= ' e alguma coisa mais.';
    
}

$str = 'Isto é uma string,';
add_some_extra($str);

echo $str;



?>


<?php

 function makecoffee($type = "cappuccino") {
     
     return "Fazendo uma xícara de café $type.\n";
     
 }
 
 echo makecoffee();
 echo makecoffee(null);
 echo makecoffee("espresso");
 
?>

<?php

 function iorgutera ($sabor, $tipo = "azeda") {
     
     return "Fazendo uma taça de $sabor $tipo.\n";
 }
 
 echo iorgutera ("framboesa");

?>