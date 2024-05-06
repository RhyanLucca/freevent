<?php

// function replaceSQL($string){
//     $string = str_replace(array('-', '.', '/', '*', ';', ()), ' ', $string);
//     return $string;
// }

function floatInt($value){
    $value = str_replace('.', ',', number_format($value, 2));
    return $value;
}

?>