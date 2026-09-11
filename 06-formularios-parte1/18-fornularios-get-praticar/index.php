<?php

require __DIR__ . "/../../senac/senac.php";

var_dump(
    $_GET
);

$livroBuscado = $_GET["livro"];

var_dump($livroBuscado);