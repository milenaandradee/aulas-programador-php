<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Arrays e a Estrutura foreach");
?>

<?php senacClassSession("O que é um array", __LINE__); 


$nomeDosAlunos = [
    "Elisabeth",
    "Enzo",
    "Renan",
    "Felipe",
    "Amaury",
    "Milena",
    "Emily",
    "Guilherme",
    "Yasmin",
    "Walyson",
];

echo "<p>{$nomeDosAlunos[3]}</p>";
echo "<p>{$nomeDosAlunos[8]}</p>";

$produtos = [
    "Computador",
    "Mouse",
    "Teclado",
    "Monitor",
];
/*
echo "<p>{$produtos[0]}</p>";
echo "<p>{$produtos[1]}</p>";
echo "<p>{$produtos[2]}</p>";
echo "<p>{$produtos[3]}</p>";
*/

foreach($produtos as $produto){
    echo "<p>{$produto}</p>";
}

$listaDeCursos = [
    "Oratória",
    "Informática",
    "Administração",
    "Programador Web",
];

foreach($listaDeCursos as $curso){
    echo "<p>{$curso}</p>";
}