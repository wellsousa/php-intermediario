<?php

/*
    Para saber a lista completa de funções digite 
    funções para strings php no google
 */

 $conteudo = "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.";

 //substr - recorta a string
 echo "</br>". substr($conteudo, 0, 20);

//explode - cria um vetor de substrings a partir da string baseado em um separator

$palavras = explode(' ', $conteudo);

//retorna a quantidade de palavras no paragrafo
echo "</br>". count($palavras);

//implode - serve para juntar um array de strings com um delimitador especifico

//fazendo o caminho inverso recriaremos o valor da variavel $conteudo
$paragrafo = implode(' ', $palavras);

echo "</br> $paragrafo";

/*
    htmlentities - força o navegador a mostrar o codigo html
*/

$codigo = "<div>Escrevendo um codigo html</div>";

echo $codigo;
echo "</br>";
echo htmlentities($codigo);

/*
strip_tags - remove todas as tags html da string 
*/
echo "</br>";
$codigo_sem_tags = strip_tags($codigo);

var_dump($codigo);
var_dump($codigo_sem_tags);