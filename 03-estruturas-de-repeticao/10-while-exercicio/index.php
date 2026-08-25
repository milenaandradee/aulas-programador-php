<?php

require __DIR__ . "/../../senac/senac.php";
senacClassName("Estrutura de Repetição — while");
?>

<?php senacClassSession("Exercicio", __LINE__);

echo "<h1>Exercício - 01</h>";

$quantasPessoasNaFrente = 5;

while ($quantasPessoasNaFrente > 0){
    echo "<p>Há {$quantasPessoasNaFrente} pessoas na sua frente.</p>";
    $quantasPessoasNaFrente--;
}

echo "<p>Já é a sua vez!</p>";

echo "<h1>Exercício - 02</h1>";

$capacidadeDeAlunos = 20;
$entradaDeAlunos = 3;

while ($entradaDeAlunos >= $capacidadeDeAlunos);

