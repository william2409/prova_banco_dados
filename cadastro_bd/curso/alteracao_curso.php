<?php
$nome = $_GET["nome_curso"];
$id = $_GET["id"];

require("../inc/conectabd.inc.php");
$comandosql = "UPDATE tb_curso  SET ds_curso = '$nome' WHERE id_curso = $id";


$respostaDB = mysqli_query($link,$comandosql);


if($respostaDB){
    echo "Alteração efetuada com sucesso <br>"; 
    echo "<a href='consulta_curso.php'>Voltar a tabela curso</a>";
}
