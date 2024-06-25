<!DOCTYPE html>
<!-- cadastro.html -->
<html>
	<head>
	  <title>Cadastro de aluno</title>
	  <meta charset="utf-8">
	</head>
	<body>
	<h1>Cadastrar novo curso</h1>
		<form action="insercao_curso.php" method="GET">

			<label for="">Curso</label>	 
			<input type="text" name="nome_curso"> <br> <br>

			<label for="">Carga horario</label>	 
			<input type="number" name="carga_horaria"> <br> <br>

			
			<label for="">Inicio</label>	
			<input type="date" name="inicio_curso">  <br> <br>

			<button type="submit">cadastrar</button>

		</form>
	</body>
</html>