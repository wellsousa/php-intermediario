<?php

$categorias = array("computadores", "monitores", "redes");
$computadores = array("Micro Pentium Dual Core", "Micro AMD Turion", "Razen 9");
$monitores = array("LCD 17", "LCD 19");
$redes = array("Roteador Cisco", "Switch 3COM");

$produtos = null;

/*
    Criando uma array a partir da uniao de tres quatro arrays
    usando variaveis variaveis
*/
foreach($categorias as $categoria){
    $produtos[$categoria] = $$categoria;
}

var_dump($produtos);