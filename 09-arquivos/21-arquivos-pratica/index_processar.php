<?php

$foto = $_FILES["foto"];

if(!isset($foto) || $foto["error"] !== UPLOAD_ERR_OK){
    echo "<p>Arquivo não existe ou corrompido!</p>";
    die;
}

const TAMANHO_MAXIMO = 2 * 1024 *1024; //2 MB

if($foto["size"] > TAMANHO_MAXIMO){
    echo"<p>Arquivo excedeu o tamanho permitido!</p>";
    die;
}

$extensoesPermitidas = [
    "jpg",
    "jpeg",
    "png",
    "webp"
];

$extensaoFoto = mb_strtolower(pathinfo($foto["name"], PATHINFO_EXTENSION));

if(!in_array($extensaoFoto, $extensoesPermitidas)){
     echo "<p>Arquivo não tem o tipo de extensão permitido.</p>";
    die;
}

$mimeTypesPermitidos = [
    "image/png",
    "image/jpeg",
    "image/webp"
];

$mimeTypeFoto = mime_content_type($foto["tmp_name"]);

if(!in_array($mimeTypeFoto, $mimeTypesPermitidos)){
     echo "<p>Arquivo não tem o conteudo aceito.</p>";
    die;
};

$novoNome = uniqid() . "." . $extensaoFoto;
$destino = __DIR__ . "/upload/" . $novoNome;

if(move_uploaded_file($foto["tmp_name"], $destino)){
     echo "<p>Imagem adicionada com sucesso</p>";
}else{
     echo "<p>Erro ao enviar arquivo!</p>";
}
