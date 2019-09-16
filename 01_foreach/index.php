<?php

/*
    O forech é usado para percorrer arrays
*/
$cidades = ["Belo Horizonte", "Rio de Janeiro", "Sao Paulo", "Salvador", "Porto Alegre"];

foreach($cidades as $cidade){
    echo "</br>$cidade";
}


/*
    Arrays com indices associativos
*/
$pessoas = array("Guilherme"=>23, "Joao"=>19, "Felipe"=>21, "Vinicius"=>20);

foreach($pessoas as $key=>$value){
    echo "</br>$key => $value";
}


/*
codigo similar ao foreach usando a função count. Esse código
não funciona com arrays com indice associativo
*/

$totCidades = count($cidades);

for($contador = 0; $contador < $totCidades; $contador++){
    echo "</br>$cidades[$contador]";
}