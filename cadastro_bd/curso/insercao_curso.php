<?php

require("../inc/conectabd.inc.php");

$nome = $_GET["nome_curso"];
$carga_horaria =$_GET["carga_horaria"];
$data_inicio = $_GET["inicio_curso"];

$comandosql = "INSERT INTO tb_curso (ds_curso, nr_carga_horaria, dt_inicio) value ('$nome',$carga_horaria,'$data_inicio')";

$respostaDB = mysqli_query($link,$comandosql);


if($respostaDB){
    echo "Cadastro efetuado com sucesso <br>"; 
    echo "<a href='consulta_curso.php'>Voltar a tabela</a>";
}