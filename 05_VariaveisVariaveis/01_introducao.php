<?php

/*
VARIAVEIS VARIAVEIS sao variaveis que podem ser definidas e utilizadas dinamicamente.
*/

//variavel comum é definida com um $

$bar = "a";
$foo = "bar";
$world = "foo";
$hello = "world";
$a = "hello";

//uma variavel variavel contem o nume de uma variavel e é definida por $$ 

//nesse caso $$b referencia uma variavel chamada world.
$$b = "hello";

echo "</br>".$a;
echo "</br>".$$a;
echo "</br>".$$$a;
echo "</br>".$$$$a;
echo "</br>".$$$$$a;



