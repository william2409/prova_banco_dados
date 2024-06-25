<?php

$estudante = $_GET["nome"];
$n1 = $_GET["nota1"];
$n2 = $_GET["nota2"];

$media = ($n1 + $n2) / 2;

$situacao;

if ($media >= 6 && $media <=10){
    echo "O aluno $estudante esta Aprovado";

} else if ( $media >0 && $media < 6){
    
    echo "O aluno $estudante esta Reprovado";

} else {
    
    echo "Insira uma nota valida";
}
