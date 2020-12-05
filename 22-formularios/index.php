<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
    <!--
	<form action="dados.php" method="POST"> (script para passar os dados do formulario )
		Nome: <input type="text" name="nome"><br>
		Email: <input type="email" name="email"><br>
		<button type="submit">Enviar</button>
	</form>

	<form action="dados.php" method="GET"> (script para passar os dados do formulario )
		Nome: <input type="text" name="nome"><br>
		Email: <input type="email" name="email"><br>
		<button type="submit">Enviar</button><br>
	</form>

	(Vc tambem pode enviar arquivos atraves de link)

	<a href="dados.php?idade=21&sobrenome=Ferreira">Enviar</a> -->

	<!-- Filtro de validação -->

	<?php

	if(isset($_POST['enviar-formulario'])):
		// Array de erros
		$erros = array();

		//Validações
		if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
			$erros[] = "Idade precisa ser um numero inteiro";
		endif;

		if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
			$erros[] = "Email invalido";
		endif;

		if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
			$erros[] = "Peso precisa ser um float";
		endif;

		if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
			$erros[] = "IP invalido";
		endif;

		if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
			$erros[] = "URL Invalida";
		endif;

		// Exibindo mensagens
		if(!empty($erros)):
			foreach ($erros as $erro):
				echo "<li> $erro </li>";
			endforeach;
		else:
			echo "Parabéns, seus dados estão corretos";
		endif;
	endif;

	?>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> 
		Idade: <input type="text" name="idade"><br>
		Email: <input type="text" name="email"><br>
		Peso: <input type="text" name="peso"><br>
		IP: <input type="text" name="ip"><br>
		URL: <input type="text" name="url"><br>
		<button type="submit" name="enviar-formulario">Enviar</button>
	</form>

</body>
</html>

<!-- No metodo POST os dados são enviados de forma invisivel -->

<!-- No metodo GET os dados são passados por parametros de url, ficando visiveis -->


<!-- Filtro de validação (para ver todos os filtros emtre filter.validate) -->

<!-- Filtro de sanitização servem para limpar as variaveis (Para ver todos os filtros emtre em Sanitize filters phph)
	
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	((((validação var depois de ↑↑↑↑↑↑↑↑↑))))
	if (!filter_var($idade, FILTER_VALIDATE_INT)): ==>> para numeros
		$erros[] = "Idade precisa der um inteiro";
	endif;

-->