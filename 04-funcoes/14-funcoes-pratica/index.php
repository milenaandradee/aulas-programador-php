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

function saudacaoPersonalizada(string $nome, string $saudacao = "Seja muito bem vindo(a)!"){
    echo "<p>Olá, {$nome}. {$saudacao}</p>";
}

saudacaoPersonalizada ("Elisabeth");
saudacaoPersonalizada ("Milena", "Chegou o seu pedido");

//Aprendendo função 

function verificarMaioridade(int $anoNascimento){
    $idade = 2026 - $anoNascimento;

    if($idade < 18){
        return false;
    }else if($idade >= 18){
        return true;
}}

if(verificarMaioridade(2004) === true){
     echo "<p>Você é MAIOR de idade!</p>";
}else{
    echo "<p>Você é MENOR de idade!</p>";}

function calculaIdade(int $anoNascimento, string $nome = ""){
    $idade = 2026 - $anoNascimento;
    return $idade;
}

$idadeDaFabricia = calculaIdade(1998, "Fabricia");
echo "A Fabrícia tem {$idadeDaFabricia} anos de idade";
echo calculaIdade(2011) . " anos de idade";

// novidade

echo "Olá, mundo!";

function echo_p(string $string){
    echo "<p>{$string}</p>";
}

echo_p("Olá, mundo!");
echo_p("A Fabrícia tem {$idadeDaFabricia} anos de idade");
echo_P(calculaIdade(2011) . " anos de idade");

//

$comissao = 20000 * 0.1;

echo "R$ " . number_format($comissao, 2, ",", ".");

// R$ 152,00
// R$ 1.152,00