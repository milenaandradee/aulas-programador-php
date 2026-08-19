<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Estruturas Condicionais — if, else, elseif");
?>

<?php senacClassSession("if — sozinho - prática", __LINE__); 

$valorTotalDoCarrinho = 370.00;

$valorMinimoFreteGratis = 249.90;

if ($valorTotalDoCarrinho >= $valorMinimoFreteGratis){
    echo "<p>Você ganhou frete grátis na sua compra!    </p>";
}

//Números pares e ímpares

// 10dividir por 2 => o resto sendo 0 (par)
// 9 dividir por 2 => o resto sendo 1 (ímpar)

$numero = 5;

if($numero % 2 === 0){
    echo "<p>O número {$numero} é par!</p>";
}{
    echo "<p>O número {$numero} é ímpar!</p>";
}

// Horário do check-in

/**
 * 20h32
 * 
 * se o horário que você chegou é depois das 14h E antes das 22h
 * horario >= 14h e horario <= 22h
 */

$horarioDeChegada = 20;

if($horarioDeChegada >= 14 && $horarioDeChegada <= 22){
    echo "<p>Pode fazer check-in</p>";
}else{
    echo "<p>Check-in está indiponível</p>";
}


// exercício prático

$tipoDeMoradia = "apartamento"; //apartamento ou casa
$tempoDisponivel = "pouco"; // pouco ou muito
$prefereSilencio = true; // true => prefere ou false => não prefere 

if ($tipoDeMoradia === "apartamento" && $tempoDisponivel === "pouco") {

    echo "<p>Você pode ter um peixe de estimação</p>";

} else if ($tipoDeMoradia === "apartamento" && $prefereSilencio === true) {

    echo "<p>Você pode ter um gato de estimação</p>";

} else if ($tipoDeMoradia === "apartamento" && $tempoDisponivel === "muito") {

    echo "<p>Você pode ter um cachorro de estimação</p>";

}else {
    echo "<p>Você pode ter um hamster de estimação</p>";
}

// exercício prático

$tipoDePersonagem = 
$prefereForçaOuMagia =
$trabalhaEmGrupo = 
