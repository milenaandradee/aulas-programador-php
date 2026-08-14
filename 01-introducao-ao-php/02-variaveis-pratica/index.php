<?php

$nome = "Milena";
$anoDeNascimento = 2004;
$curso = "Programador Web";
$altura = 1.65;
$peso = 85.0;
$temTatuagem = true;

echo "Meu nome é {$nome} e eu faço o curso de {$curso} eu nasci no ano de {$anoDeNascimento}";

var_dump($altura, $peso);
var_dump($temTatuagem);


// Exercicío Prático

/**
 * VINGADORES - GUERRA INFINITA | $nomeDoFilme
 * ficção científica | $genero
 * 2018 | $anoDeLancamento
 * é um filme ... | $sinopse
 */

$nomeDoFilme = "Vingadores - Guerra Infinita";
$genero = "Ficção científica";
$anoDeLancamento = 2018;
$sinopse = "É um filme de super herois da marvel";

echo "<h2>{$nomeDoFilme}</h2>";
echo "<h3>{$genero}</h3>";
echo "<p>{$anoDeLancamento}</p>";
echo "<p>{$sinopse}</p>";