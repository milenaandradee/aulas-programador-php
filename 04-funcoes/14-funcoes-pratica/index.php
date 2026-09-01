<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Funções — Declaração, Parâmetros e Retorno");
?>

<?php senacClassSession("O que é uma função e por que ela existe", __LINE__); 

//sem parâmentro
function olaMundo(){
    echo "<p>Olá, Mundo!</p>";
}

for($contador = 0; $contador < 3; $contador++){
    olaMundo();
}

// com parâmetros e tipos
function saudacao($nome){
    echo "<p>Olá, {$nome}. Seja muito bem vindo(a)!</p>";
}

saudacao("Milena");
$aluno = "Amaury";
saudacao($aluno);
saudacao("Elisabeth");
saudacao(1000);

function calcularIdade(int $anoNascimento){
    $idade = date("Y") - $anoNascimento; // 2026 $anoNascimento
    echo "<p>Nasceu em {$anoNascimento} e nesse ano você tem/terá {$idade} anos de idade!</p>";
}

calcularIdade(2004);
calcularIdade(1995);

// com parâmetros obrigatórios e opcionais

function saudacaoPersonalizada(string $nome, string $saudacao = "Seja muitobem vindo(a)!"){
    echo "<p>Olá, {$nome}. {$saudacao}</p>";
}

saudacaoPersonalizada ("Elisabeth");
saudacaoPersonalizada ("Milena");