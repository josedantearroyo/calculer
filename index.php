<?php
echo "Calculadora";

function suma($a,$b){
    return $a+$b;
}

function resta($a,$b){
    return $a-$b;
}

function multiplicacion($a,$b){
    return $a * $b;
}

function division($a,$b){
    if($b==0)
        return("Error");
    return $a/$b;
}
function potencia($a,$b){
    return pow($a,$b);
}
function resto($a,$b){
    if($b==0)
        return "Error"
    else
        return $a%$b;
}
?>