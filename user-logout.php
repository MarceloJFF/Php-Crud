<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

	<?php require_once("includes/banco.php");
	require_once("includes/funcoes.php");	
	require_once("includes/login.php");
	?>

	<section id="corpo">
		<?php 
			logout();
			echo msg_sucesso("Usuário deslogado com sucesso");
			echo "<a href='modelo.php'><img src='icones/icoback.png'></a>";
		?>
	</section>
</body>
</html>