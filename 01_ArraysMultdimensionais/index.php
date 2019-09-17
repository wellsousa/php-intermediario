<?php

/*
    Recaptulando arrays undimenasionais
*/

$nomes = ["Joao","Antonio", "Maria"];

$nomes2 = array("Pedro", "Augusto", "sergio'");

$nomes3[] = "Paulo";
$nomes3[] = "Carlos";
$nomes3[] = "Jose"; 

/*
    Arrays multidimensionais
*/

$paises = array(array('Brasil', 'Argentina', 'Uruguai'),
                array('Eua', 'Canada','Mexico'),
                array('Inglaterra', 'França', 'Alemanha'));

echo "</br>".$paises[0][0];
echo "</br>".$paises[0][1];
echo "</br>".$paises[0][2];
echo "</br>".$paises[1][0];
echo "</br>".$paises[1][1];
echo "</br>".$paises[1][2];

echo "<hr>";

/*
 O exemplo abaixo cria uma array multidimensional associando
 continentes, paises e cidades.
*/
$continentes = ['america'=>['brasil'=>['sao paulo',
                                       'belo horizonte',
                                       'rio de janeiro',
                                       'porto alegre'],
                            'eua'=>['washington',
                                    'nova york',
                                    'dallas',
                                    'los angelles']
                            ],
                'europa',
                'asia'];


echo "</br>".$continentes['america']['brasil'][0];
echo "</br>".$continentes['america']['eua'][0];

/*
Percorrendo toda a array multidimensional com o foreach
*/
foreach($continentes as $continente=>$paises){
    foreach($paises as $pais=>$cidades){
        foreach($cidades as $cidade)
        echo "</br>$continente => $pais ==> $cidade";
    }
}

