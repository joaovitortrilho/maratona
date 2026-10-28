<?php
$par = 1234592;
$impar = 123459;
$prim = $par % 2;
$ipra = $impar % 2;

if ($prim <= 0){
    echo "Numero $par é par e numero $impar é impar";
}else{
    echo "Numeros invalidos";
}
?>