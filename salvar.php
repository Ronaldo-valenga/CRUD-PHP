<?php
include("conexao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$data = $_POST['data'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$observacao = $_POST['observacao'];
$ativo = $_POST ['ativo'];

if ($ativo  == 'on' ){ 
				$ativo=1;
			}
			else{ 
			$ativo=0;
				
			}




$salvar = ("UPDATE usuario SET nome='$nome', email='$email', data_nascimento='$data', senha='$senha', uf='$estado',  cidade='$cidade', observacao='$observacao', ativo='$ativo'  WHERE	 id='$id'");
 
$query = mysqli_query($conexao, $salvar);	

if(!$query){
	echo("Algo deu errado... Tente novamente.' " . mysqli_error());	
} else	{
	echo("<p style='color:green;'>Seus dados foram salvos com sucesso!.<br><br>");
	echo "<a href='lista.php '>Voltar para lista</a><br>";
}

?>