<?php
$nome = $_POST['nome']?? "";
$idade = $_POST['idade']?? "";
$imc = $_POST['imc']?? "";
$peso = $_POST['peso']?? "";
$altura = $_POST['altura']?? "";

$IMC = $peso / ($altura ** 2);

echo "$nome tem $idade anos e seu IMC equivale a: " . (int)$IMC . "<br>";
if ($IMC < 18.5) {
    echo "Abaixo do peso";
} elseif ($IMC >= 18.5 && $IMC < 24.9) {
    echo "Peso normal";
} elseif ($IMC >= 25 && $IMC < 29.9) {
    echo "Sobrepeso";
} elseif ($IMC >= 30 && $IMC < 34.9) {
    echo "Obesidade grau I";
} elseif ($IMC >= 35 && $IMC < 39.9) {
    echo "Obesidade grau II";
} else {
    echo "Obesidade grau III";
}