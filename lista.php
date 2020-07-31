<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Listar</title>		
	</head>
	<body>
		<?php 
		if (!empty($_SESSION['msg'])){
			echo $_SESSION['msg'];
		}
		echo "<a href='Home.html '>Cadastro</a><br>";
			
		?>
		<h1>Listar Usuário</h1>
		<?php
		
		
		
		$result_usuarios =	"SELECT * FROM usuario";
		$resultado_usuario = mysqli_query ($conexao, $result_usuarios); 
		while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
			echo "Nome: " . $row_usuario['nome'] . "<br>";
			echo "Estado: " . $row_usuario['uf'] . "<br>";
			echo "email" . $row_usuario['email'] . "<br>";
			echo "data de nascimento" . $row_usuario ['data_nascimento'] . "<br>";
			echo "Cidade" . $row_usuario ['cidade'] . "<br>";
			echo "Observacao" . $row_usuario ['observacao'] . "<br>";
			if ($row_usuario ['ativo'] == 1 ){ 
				echo "Ativo  <br><br>";
			}
			else{ 
				echo "Inativo <br><br><br>";
			}
			echo "<a href='edit_usuario.php?id=" . $row_usuario['id'] . "'>Editar</a><br>";
			echo "<a href='apagar_usuario.php?id=" . $row_usuario['id'] . "'>Apagar</a><br><hr>";
			
				
			
			
			
		
		}			
		
		
		
		?>		
	</body>
</html>