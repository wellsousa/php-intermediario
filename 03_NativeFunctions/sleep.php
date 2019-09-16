<?php

/*
A função sleep é usada para fazer o sevidor esperar (x)
milisegundos.
Algumas vezes pode ser util fazer o codigo esperar antes de ser
executado novamente, por exemplo, quando voce ira fazer sucessivas
requsições a servidor web API.
*/

//aguarda 3 segundos até executar o codigo
$x = 3;
sleep($x);

echo "executado após $x segundos.";