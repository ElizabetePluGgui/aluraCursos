<?php

$peso = 60;
$altura = 1.74;
$imc = $peso/$altura ** 2;

echo "Seu IMC é de $imc. Você está com o IMC";

if($imc < 18.5){
    echo "Abaixo";
}elseif ($imc < 25) {
    echo "DENTRO";
}else {
    echo "ACIMA";
}

echo " do recomendado";