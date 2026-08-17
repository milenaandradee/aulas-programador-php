<?php

require __DIR__ . "/../../senac/senac.php";
senacClassName("Operadores Relacionais - Prática");
?>

<?php senacClassSession("Operadores Relacionais - Prática", __LINE__); 

$anoDeNascimento = 1997;
$anoAtual = 2026;

$idade = $anoAtual - $anoDeNascimento;

var_dump($idade);
var_dump($idade >= 18);
var_dump($idade == 30);

$ehIdoso = ($idade >=60);
var_dump($ehIdoso);

// Exemplo prático com Senha

$login = 0;
$gmail = 0;
$facebook = ($login !== $gmail);
var_dump($facebook);

//correção

$senhaCadastrada = "123456";
$senhaFormulario = "123456";

var_dump($senhaFormulario === $senhaCadastrada);