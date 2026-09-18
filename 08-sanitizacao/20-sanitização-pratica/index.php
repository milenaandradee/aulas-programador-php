<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Prática — Avaliação de Serviço");


$comentario = "<h1>Olá, Mundo.</h1>";
    echo $comentario;
    echo htmlspecialchars($comentario);
    echo "<br>";
    echo strip_tags($comentario);
    
    $novoComentario = "<script>alert('Olá, Mundo.')</script>";

    echo "<br>";
    echo htmlspecialchars($novoComentario);
    echo"<br>";
    echo strip_tags($novoComentario);

    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    var_dump($email);

    if(!$email){
        echo "<p>Informe um e-mail válida</p>";
    }else{
        echo "<p>Muito bem, isso é um e-mail!</p>";
    }
    
    ?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Validando E-mail</title>
    </head>
    <body>
        
    <form action="index.php" method="POST">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">

        <button type="submit">Verificar</button>
    </form>
    </body>
    </html>