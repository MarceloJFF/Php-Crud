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
		<h1>Editando dados</h1>
		<?php
			if(!is_logado()){
				echo msg("Efetue o login pra alterar seus dados");
			}else{
				if(!isset($_POST['usuario'])){
					include "user-edit-form.php";
				}else{
					echo "dados recebedidos";
				}
			}
		?>
	</section>
</body>
</html>