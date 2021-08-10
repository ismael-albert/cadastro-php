<?php
	include 'conexao.php';

	$chassi = $_POST['chassi'];
	$ano_fab = $_POST['ano_fab'];
	$cor = $_POST['cor'];
	$placa = $_POST['placa'];
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];

	$sql = mysqli_query($conexao, "INSERT into carros (chassi,ano_fab,cor, placa, marca, modelo) values ('$chassi', '$ano_fab', '$cor' ,'$placa', '$marca', '$modelo')");

	echo "cadastrado com sucesso!";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br><br>
	<a href="cadastro.html">Voltar</a>
</body>
</html>