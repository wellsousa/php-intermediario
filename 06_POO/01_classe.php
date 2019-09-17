<?php

/*

Em PHP não é necessario que o arquivo tenha o mesmo nome da classe embora esta
possa ser uma boa pratica de programaçao.

*/
    class MinhaClass{
        private $atributo = "um dado";

        function getAtributo(){
            return $this->atributo;
        }
    }

    $obj = new MinhaClass();

    echo $obj->getAtributo();
?>