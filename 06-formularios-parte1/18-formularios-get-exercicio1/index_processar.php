<?php

$egressos = [
    "Milena Andrade Abreu",
    "Amaury Damasceno Soares",
    "Marly Conceição Andrade",
    "Marcos Vinicius Andrade",
    "Raimundo Nonato da Silva",
    "Marcia Conceição Andrade",
    "Kamylly Vitória Andrade Lima",
    "Ana Kelly Lima",
    "Ana Lúcia da Siva Abreu",
];

if(isset($_GET["busca"])){
    $termoBuscado = trim($_GET["busca"]);
    echo "<p>Resultados para: {$termoBuscado}</p>";

    $resultados = [];

    foreach($egressos as $egresso){

        if(mb_stristr($egresso, $termoBuscado) !== false) {
        $resultados[] = $egresso;
        }
    }

    if(count($resultados) > 0) {

    foreach($resultados as $resultado){
        echo "<p>{$resultado}</p>";
        }
    }else{
        echo "<p>Nenhum egresso identificado</p>";
    }

}else{
    echo "<p> Não foi possível realizar a pesquisa! </p>";




}
