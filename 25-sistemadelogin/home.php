<?php
// Concexão
	require_once 'db_connect.php';

	// Sessão
	session_start();

	//Verificação
	if(!isset($_SESSION['logado'])):
		header('Location: index.php');
	endif;

	// Dados
	$id = $_SESSION['id_usuario'];
	$sql = "SELECT * FROM usuario WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
	mysqli_close($connect);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pagina restrita</title>
</head>
<body>

	<h1>Olá <?php// echo $dados['']; ?></h1>

	<a href="logout.php">Sair</a>

</body>
</html>