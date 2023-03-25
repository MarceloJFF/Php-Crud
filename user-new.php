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

		if(!isset($_POST['usuario'])){
			require_once "user-new-form.php";
		} else {
			$usuario = $_POST['usuario']?? null;
			$nome = $_POST['nome']?? null;
			$senha1 = $_POST['senha1']?? null;
			$senha2 = $_POST['senha2']?? null;
			$tipo = $_POST['tipo']?? null;
			
			if($senha1 === $senha2){
				echo msg_sucesso("Tudo certo pra gravar");
			}else{
				echo("Senhas não conferem repita  procedimento");
			}
		}
		?>

		<a href="modelo.php"><img src="icones/icoback.png"></a>

	</section>
</body>
</html>