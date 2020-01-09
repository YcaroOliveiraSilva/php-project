<?php

$var = 1;
function teste_global() {
    global $var;
    for($var=0; $var<5; $var++) {
        
    }
}

teste_global();
var_dump($var); // return: int[5]


?>