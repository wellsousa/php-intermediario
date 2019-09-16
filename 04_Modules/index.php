<?php

/*
    Esse exemplo mostra como modularizar páginas PHP criando compónents para 
    estruturar a página, desse modo, pode evitar repetições desnecessárias de 
    código criando código reutilizável.
*/
$titulo = "Modularização com PHP";

include('header.php');
?>

<h1>Página Principal</h1>

<?php
    include('footer.php');
?>