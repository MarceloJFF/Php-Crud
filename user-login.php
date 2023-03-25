<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style type="text/css">
		section#corpo{
			width: 270px;
			font-size: 15pt;
		}
		table{
			padding: 10px;
		}
	</style>
</head>
<body>

	<?php require_once("includes/banco.php");
	require_once("includes/funcoes.php");	
	require_once("includes/login.php");

	?>

	<section id="corpo">
		<?php
			$u = $_POST['usuario']?? null;
			$s = $_POST['senha']?? null;

			if(is_null($u) || is_null($s) ){
				require ("user-login-form.php");
			}else{
				$q = "SELECT usuario,nome, senha, tipo FROM usuarios WHERE usuario = '$u' limit 1";
				$busca =  $banco->query($q);

				if(!$busca){
					echo msg_erro("Falha ao acessar o banco");
				}else{
					if($busca->num_rows>0){
						$reg = $busca->fetch_object();
						if(testarHash($s, $reg->senha)){
							$_SESSION['user'] = $reg->usuario;
							$_SESSION['nome'] = $reg->nome;
							$_SESSION['tipo'] = $reg->tipo;

							echo msg_sucesso('Logado com sucesso');

						}else{
							echo msg_erro('Senha invalida');
						}	
					}else{
						echo msg_erro('Usuario não encontrado');
					}
					
				}
			}
		?>
		<a href="modelo.php"><img src="icones/icoback.png"></a>
	</section>
</body>
</html>