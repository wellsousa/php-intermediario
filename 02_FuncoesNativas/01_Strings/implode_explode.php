<?php

/*
    Quebra uma string em diversar variaveis de um arrey a partir de um separador
    passado como parametro
*/
$paises = explode(" ", "Brasil Argentina Uruguai Paraguai Bolívia Venezuela Chile Colômbia Equador Peru Guiana");

var_dump($paises);

$total_paises = count($paises);

$frase = implode(", ", $paises);

echo "</br>Os países são $frase. São ao todo $total_paises paises.";
