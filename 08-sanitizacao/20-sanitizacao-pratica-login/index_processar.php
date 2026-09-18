<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Prática — Processamento da Avaliação");
?>

<?php senacClassSession("Processamento da avaliação", __LINE__); 

$nota = filter_input(INPUT_POST, "nota", FILTER_VALIDATE_FLOAT);

if(!$nota){
    echo "<p>Informe uma nota válida</p>";
    die;
}else if($nota < 0 || $nota > 10){
    echo "<p>Informe uma nota entre 0 e 10</p>";
    die;
}

echo "nota recebida" . htmlspecialchars($nota) . "<p>";

$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

if(!$email){
    echo "<p>Informe um email válido</p>";
    die;
}else{
    echo"<p>email validado</p>";
}

$Comentario = filter_input(INPUT_POST, "comentário", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    echo $Comentario;

senacFooter("Pedro Leandro");

