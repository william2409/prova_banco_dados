<!DOCTYPE html>
<!-- form_alteracao.html -->
<?php
 include "../inc/conectabd.inc.php";
 
 
 $id = $_GET["id"];
 $nome_curso = $_GET ["curso"];
?>

<html>
	<head>
	  <title>Cadastro de curso</title>
	  <meta charset="utf-8">
	</head>
	<body>
		
		<h1>Atualizar Curso</h1>
		<form action="alteracao_curso.php" method = "GET"> 
			<label for="">Id Curso</label>
			<input type="text" name="id" value="<?php echo $id?>"> <br>
			<label for=""> Novo nome </label>
			<input type="text" name="nome_curso" value="<?php echo $nome_curso ?>" ><br>
			<button type="submit">Alterar</button>
		      
		</form>
	</body>
</html>