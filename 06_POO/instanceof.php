<?php

/*
    A palavra reservada instanceof verifica se um objeto é uma instancia de 
    uma classe especifica. Isso pode ser util quando voce trabalha com varios objetos
    diferentes que sao instanciados dinamicamente e voce precisa saber qual é o tipo deles
*/

class baseClass{

}

class mainClass extends baseClass{

}

$obj1 = new mainClass();

$teste1 = ($obj1 instanceof mainClass);
$teste2 = ($obj1 instanceof baseClass);

var_dump($obj1);
if($teste1){
    echo "<br/>obj1 é instancia de mainClass";
}else{
    echo "<br/>obj1 não é instancia de mainClass";
}

if($teste2){
    echo "<br/>obj1 é instancia de baseClass";
}else{
    echo "<br/>obj1 não é instancia de baseClass";
}

