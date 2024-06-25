  <?php
  
  //$link = mysqli_connect("localhost", "root", "", "curso");
  //$link = mysqli_connect("localhost", "root", "senac", "curso");
  $link = mysqli_connect("localhost:3306", "aplicacao_curso", "curso123", "curso");
  // Verificar porta que esta sendo usada na conexao.

  // mysqli_connect_errno - devolve o código do erro
  if (mysqli_connect_errno()) {
	  // mysqli_connect_error - devolve a mensagem de erro
	  printf("Erro ao conectar ao banco de dados: %s<br> ", mysqli_connect_error() );
	  exit();
  }

 // var_dump($link);
 //   echo 'aqui <br>';