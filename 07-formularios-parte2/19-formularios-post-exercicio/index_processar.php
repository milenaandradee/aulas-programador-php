<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Formulários — Método POST - Exercício");

?>

$contas = [
    ["nomeCompleto" => "Ana Souza",     "cpf" => "111.111.111-11", "telefone" => "(85) 98888-1111", "email" => "ana@email.com",                 "senha" => "123456", "plano" => "Básico"],
    ["nomeCompleto" => "Carlos Lima",   "cpf" => "222.222.222-22", "telefone" => "(85) 98888-2222", "email" => "carlos@email.com",              "senha" => "abcdef", "plano" => "Premium"],
    ["nomeCompleto" => "Milena Abreu",  "cpf" => "333.333.333-33", "telefone" => "(85) 98888-3333", "email" => "abreumilena145@gmail.com",      "senha" => "321654", "plano" => "Intermediário"]
];


$nomeCompleto   = $_POST["nomeCompleto"];
$cpf            = $_POST["cpf"];
$telefone       = $_POST["telefone"];
$email          = $_POST["email"];
$senha          = $_POST["senha"];
$confirmarSenha = $_POST["confirmarSenha"];
$plano          = $_POST["plano"];

// 1) Todos os campos são obrigatórios
if (empty($nomeCompleto) || empty($cpf) || empty($telefone) || empty($email) || empty($senha) || empty($confirmarSenha) || empty($plano)) {
    echo "<p>Todos os campos são obrigatórios.</p>";
    die;
}

// 2) As duas senhas precisam ser iguais
if ($senha !== $confirmarSenha) {
    echo "<p>As senhas não conferem.</p>";
    die;
}

// 3) O e-mail e o CPF não podem já estar cadastrados
$cadastroDuplicado = false;

foreach ($contas as $conta) {

    if ($email === $conta["email"] || $cpf === $conta["cpf"]) {
        $cadastroDuplicado = true;
    }
}

if ($cadastroDuplicado) {
    echo "<p>Já existe uma conta com esse e-mail ou CPF.</p>";
    die;
}

// 4) Deu tudo certo: adiciona a nova conta na lista
$contas[] = [
    "nomeCompleto" => $nomeCompleto,
    "cpf"          => $cpf,
    "telefone"     => $telefone,
    "email"        => $email,
    "senha"        => $senha,
    "plano"        => $plano
];

echo "<p>Cadastro efetuado com sucesso!</p>";
echo "<p>Nome: $nomeCompleto</p>";
echo "<p>CPF: $cpf</p>";
echo "<p>Telefone: $telefone</p>";
echo "<p>E-mail: $email</p>";
echo "<p>Plano: $plano</p>";

