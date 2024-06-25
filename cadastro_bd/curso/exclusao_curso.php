<?php
require("../inc/conectabd.inc.php");
$id = $_GET["id"];
$comandosql = "DELETE FROM  tb_curso WHERE id_curso = $id";


$respostaDB = mysqli_query($link,$comandosql);


if($respostaDB){
    echo "Exclusão efetuada com sucesso <br>"; 
    echo "<a href='consulta_curso.php'>Voltar a tabela de curso</a>";
}