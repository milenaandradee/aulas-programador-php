<?php

require __DIR__ . "/../../senac/senac.php";
senacClassName("Operadores Lógicos - Prática");
?>

<?php senacClassSession("Operadores Lógicos - Prática", __LINE__); 

$idade = 29;
$temCarteira = true;

var_dump($idade >= 18 && $temCarteira === true);

$nota = 5;
$presencaMinima = true;

var_dump($nota >= 7 && $presencaMinima === true);

senacClassSession("Operadores Lógicos - Prática ||", __LINE__);

$mesAniversário = false;
$temCupom = true;

var_dump($mesAniversário === true || $temCupom === true);
