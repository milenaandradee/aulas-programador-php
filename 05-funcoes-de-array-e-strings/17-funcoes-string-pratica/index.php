<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Funções de String — normal vs. multi-byte (mb_)");
?>

<?php senacClassSession("strlen() vs mb_strlen()", __LINE__);

   function echo_p(mixed $value){
     echo "<p>" . $value . "</p>";
   }

   $nome = "Vitória";

   echo_p(strlen($nome));
    echo_p(mb_strlen($nome));

    $cidade = "São Luís";

    var_dump(strtoupper($cidade));
    var_dump(mb_strtoupper($cidade));

    $estado = "Paraná";

    var_dump(strtolower($estado));
    var_dump(mb_strtolower($estado));

    $frase = "     conversa de miolo de pote     ";

    var_dump(trim($frase));
    // var_dump(mb_trim($frase));

    $texto = "As duas encontram a posição onde um trecho aparece";

    var_dump(strpos($texto, "onde"));
    var_dump(mb_strpos($texto, "onde"));

    $dicas = "Como fazer fitagem: siga o vídeo";

    echo strstr($dicas, "siga");
    echo mb_strstr($dicas, "siga"); 


