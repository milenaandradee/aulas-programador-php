<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Funções Nativas do PHP");
?>

<?php senacClassSession("Funcoes isset prática", __LINE__);

$nome = "Milena Andrade"; 

var_dump(
    isset($nome),
    isset($sobrenome)
);

if(isset($nome)){ // se isso for verdade

}

if(!isset($nome)){ // se isso não for verdade

}

$senha = "abcde123";
$confirmaSenha = "";

var_dump(
    empty($senha),
    empty($confirmaSenha)
);

if(!empty($senha)){

}

if(empty($senha)){

}

$telefone = null;

var_dump(
    is_null($nome), //false
    is_null($confirmaSenha), //false
    is_null($telefone), //true
    isset($telefone), //false
    empty($telefone) //true
);