<?php
$palavra = "joao";
$letras = strlen($palavra);

for ($i = 1; $i <= $letras && $i == -1; $i--) {
    echo $palavra[$i];
}
?>