<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Funções de Array");
?>

<?php senacClassSession("count() — quantos itens existem", __LINE__); 

$cosmeticosEstoque = ["Shampoo", "Condicionador", "Creme de pentear", "Óleo de coco", "Escova", "Ativador de Cachos"];

echo count($cosmeticosEstoque); 

$numeros = [1, 2, 3, 4, 5, 6];

var_dump(
    in_array("1", $numeros),
    in_array("1", $numeros, true),
    in_array(1, $numeros, true)
);

echo "<br>";

//array push

$listadeCompras = ["Café", "Leite"];

var_dump(
    $listadeCompras
);

array_push($listadeCompras, "Açucar");

var_dump(
    $listadeCompras
);


print_r($listadeCompras);

echo "<br>";

//array sort() e rsort()

$idadeDosAlunos = [12, 17, 13, 16, 14];

sort($idadeDosAlunos);
print_r($idadeDosAlunos); 

rsort($idadeDosAlunos);
print_r($idadeDosAlunos); 

echo "<br>";

// array_merge()

$alunos = ["Beatriz", "Ronaldo", "Letícia", "Erick"];
$professores = ["Milena", "Amaury", "Gustavo", "Josué"];

$faculdade = array_merge($alunos, $professores);

print_r($faculdade);