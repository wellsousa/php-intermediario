<?php

/*
O código abaixo inverte o conteudo de uma string
*/

$nome = "wellington";
$nome_invertido = "";

$tamanho = strlen($nome);

for($i = ($tamanho -1); $i >=0; $i--){
    $nome_invertido .= $nome[$i];
}

echo $nome_invertido;