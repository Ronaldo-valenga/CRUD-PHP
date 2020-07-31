<?php
	
	include_once("conexao.php");

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$data = $_POST['data'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$observacao = $_POST['observacao'];
	

	
	if(isset($_POST['ativo']))
	{
		$ativo = 1;
		

	}
	else
	{
		$ativo = 0;
	}
	
	
	$sql = "INSERT INTO usuario(nome, email, senha, data_nascimento, cidade, uf, observacao, ativo) VALUES ('$nome','$email','$senha', '$data'	,'$cidade', '$estado', '$observacao', '$ativo')";	
	
	if (mysqli_query($conexao, $sql)) {
		  echo "<h2><font color=blue>Adicionado ao Banco de Dados.</font></h2>";
		  echo "<a href='Home.html '>Voltar </a><br>";
		  echo "<a href='lista.php '>lista de cadastros </a><br>";
		  
	} else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
	}
	mysqli_close($conexao);
	
	
?>