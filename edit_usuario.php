<?php

include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM usuario WHERE id = '$id'";
$resultado_usuario = mysqli_query($conexao, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Editar</title>		
	</head>
	<body>
		<a href="cad_usuario.php">Cadastrar</a><br>
		<a href="index.php">Listar</a><br>
		<h1>Editar Usuário</h1>	
		
	<form  method="post" action="salvar.php">
	<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
	<label for="nome">Nome Completo:</label>
	<input type="text" id="nome" name="nome" required value="<?php echo $row_usuario['nome']; ?>"><br><br>
	<label for="email">E-mail:</label>
	<input type="email" id="email" name="email" required value="<?php echo $row_usuario['email']; ?>"><br><br> 	
	<label for="senha">Senha:</label>
	<input type="password" id="senha" name="senha" required value="<?php echo $row_usuario['senha']; ?>"><br><br>  
	<label for="data">Data de nascimento: </label>
	<input type="date" id="data" name="data" required value="<?php echo $row_usuario['data_nascimento']; ?>"><br><br>
	<label for="cidade">Cidade:</label>
	<input type="text" id="cidade" name="cidade" required value="<?php echo $row_usuario['cidade']; ?>"><br><br>
	<label for="cars">UF:</label>
	
	<select   id="estado"name="estado" required>
    <option value="AC"  <?=($row_usuario['uf']== 'AC' )? 'selected':''?>>Acre</option>
    <option value="AL"  <?=($row_usuario['uf']== 'AL' )? 'selected':''?>>Alagoas</option>
    <option value="AP"  <?=($row_usuario['uf']== 'AP' )? 'selected':''?>>Amapá</option>
    <option value="AM"	<?=($row_usuario['uf']== 'AM' )? 'selected':''?>>Amazonas</option>
    <option value="BA"	<?=($row_usuario['uf']== 'BA' )? 'selected':''?>>Bahia</option>
    <option value="CE"  <?=($row_usuario['uf']== 'CE' )? 'selected':''?>>Ceará</option>
    <option value="DF"  <?=($row_usuario['uf']== 'DF' )? 'selected':''?>>Distrito Federal</option>
    <option value="ES"  <?=($row_usuario['uf']== 'ES' )? 'selected':''?>>Espírito Santo</option>
    <option value="GO"  <?=($row_usuario['uf']== 'GO' )? 'selected':''?>>Goiás</option>
    <option value="MA"  <?=($row_usuario['uf']== 'MA' )? 'selected':''?>>Maranhão</option>
    <option value="MT"  <?=($row_usuario['uf']== 'MT' )? 'selected':''?>>Mato Grosso</option>
    <option value="MS"  <?=($row_usuario['uf']== 'MS' )? 'selected':''?>>Mato Grosso do Sul</option>
    <option value="MG"  <?=($row_usuario['uf']== 'MG' )? 'selected':''?>>Minas Gerais</option>
    <option value="PA"  <?=($row_usuario['uf']== 'PA' )? 'selected':''?>>Pará</option>
    <option value="PB"  <?=($row_usuario['uf']== 'PB' )? 'selected':''?>>Paraíba</option>
    <option value="PR"  <?=($row_usuario['uf']== 'PR' )? 'selected':''?>>Paraná</option>
    <option value="PE"  <?=($row_usuario['uf']== 'PE' )? 'selected':''?>>Pernambuco</option>
    <option value="PI"	<?=($row_usuario['uf']== 'PI' )? 'selected':''?>>Piauí</option>
    <option value="RJ"  <?=($row_usuario['uf']== 'RJ' )? 'selected':''?>>Rio de Janeiro</option>
    <option value="RN"  <?=($row_usuario['uf']== 'RN' )? 'selected':''?>>Rio Grande do Norte</option>
    <option value="RS"	<?=($row_usuario['uf']== 'RS' )? 'selected':''?>>Rio Grande do Sul</option>
    <option value="RO"	<?=($row_usuario['uf']== 'RO' )? 'selected':''?>>Rondônia</option>
    <option value="RR"	<?=($row_usuario['uf']== 'RR' )? 'selected':''?>>Roraima</option>
    <option value="SC"	<?=($row_usuario['uf']== 'SC' )? 'selected':''?>>Santa Catarina</option>
    <option value="SP"	<?=($row_usuario['uf']== 'SP' )? 'selected':''?>>São Paulo</option>
    <option value="SE"	<?=($row_usuario['uf']== 'SE' )? 'selected':''?>>Sergipe</option>
    <option value="TO"	<?=($row_usuario['uf']== 'SE' )? 'selected':''?>>Tocantins</option>
    
</select> <br><br>
<label for="observacao">Observação:</label><br>
<textarea  id="observacao" name="observacao" rows="8" cols="50" required > 
  <?php echo $row_usuario['observacao']; ?>
  </textarea>
  <br><br>
<label for="ativo">Ativo:</label>
<?php  
	if ($row_usuario ['ativo'] == 1 ){ 
				echo "<input type='checkbox' id='ativo' name='ativo' required checked><br><br>";
			}
			else{ 
				echo "<input type='checkbox' id='ativo' name='ativo' required ><br><br>";
				
			}	
			?>
 <input type="submit" value="Editar">
</form>