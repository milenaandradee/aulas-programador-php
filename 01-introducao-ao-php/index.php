<?php

$valorDaHora = 54.75;
$quantidadeDeHorasTrabalhadas = 144;

$salario = $valorDaHora * $quantidadeDeHorasTrabalhadas;

echo "<p>O salário total é de R$ {$salario}</p>";


$quantidadeDeAmigos = 4;
$valorDaComanda = 177.54;

$quantidadeDePessoas = $quantidadeDeAmigos++;

$valorPorPessoa = $valorDaComanda / $quantidadeDePessoas;

echo "<p>O valor que cada pessoa irá pagar é de R$ {$valorPorPessoa}</p>";



$quantidadeDedias = 20;
$quantidadeDeConsumoDiario = 1;

$dias = $quantidadeDedias / $quantidadeDeConsumoDiario;

echo "A quantidade de dias que o Bob dura comendo um saco de ração de 20 quilos é {$dias}";