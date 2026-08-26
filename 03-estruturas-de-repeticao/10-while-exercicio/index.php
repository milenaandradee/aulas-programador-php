<?php

require __DIR__ . "/../../senac/senac.php";
senacClassName("Estrutura de Repetição — while");
?>

<?php senacClassSession("Exercicio", __LINE__);

echo "<h1>Exercício - 01</h>";

$quantasPessoasNaFrente = 5;

while ($quantasPessoasNaFrente > 0){
    echo "<p>Há {$quantasPessoasNaFrente} pessoas na sua frente.</p>";
    $quantasPessoasNaFrente--;
}

echo "<p>Já é a sua vez!</p>";

echo "<h1>Exercício - 02</h1>";

const CAPACIDADE_MAXIMA = 20;
$alunosNaSala = 1;
$alunosEmAtraso = 0;

while ($alunosNaSala <= CAPACIDADE_MAXIMA){
    
if ($alunosNaSala % 3 === 0){
        echo "<p>Bloqueado: Aluno {$alunosNaSala} está com a mensalidade em atraso.</p>";
        $alunosEmAtraso++; // quantidade de alunos em atraso 
        $alunosNaSala++;
        continue;
    }
    echo "<p>Aluno liberado. Entrada {$alunosNaSala} de " . CAPACIDADE_MAXIMA . "</p>";
    $alunosNaSala++;
}
    

echo "<p><strong> Capacidade Maxima atingida </strong></p>";
echo "<p>Total de bloqueados realizadas: {$alunosEmAtraso}</p>";


