<?php

/*
A função die serve para encerrar a execução do código como se fosse um break. 
O codigo posterior a chamada de die() será ignorado.
*/

$contador = 0;

for($contador=0; $contador < 1000; $contador+=2){
    if($contador == 88){
        echo "</br>contariamos até 1000 mas vamos terminar antes!";
        die();
    }else{
        echo "</br>contando de dois em dois: $contador";
    }
}