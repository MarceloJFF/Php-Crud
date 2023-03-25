<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>

<body>

	<?php require_once("includes/banco.php");
	require_once("includes/funcoes.php");	
	require_once("includes/login.php");	
	
	?>
	<section id="corpo">
		<?php require_once("topo.php"); ?>
		<?php 
		$c = $_GET['cod']?? 0;
		$busca = $banco->query("select* from jogos where cod = $c");

		?>

		<h1>Detalhes do jogo</h1>
		<table class="detalhes">
			<?php
				if(!$busca){
					echo "<tr> <td>Busca falhou! $banco->error </td></tr>";
				}else if($busca->num_rows == 1){
					$reg = $busca->fetch_object();
					$t = thumb($reg->capa);
					echo " <tr> <td rowspan='3'> <img class = 'full' src = $t>";
					echo"<td>  <h2>$reg->nome</h2></td>";
					
					echo " <tr><td> $reg->nota / 10";
							if(is_admin()){
								echo " ";
								echo "<i class = 'material-icons'>add_circle</i> ";
								echo "<i class = 'material-icons'>edit</i> ";
								echo "<i class = 'material-icons'>delete</i> ";
							
							}else if(is_editor()){
								
								echo "<i class = 'material-icons'>edit</i>";
							}
					echo "<tr> <td> $reg->descricao";
				}else{
					echo"<tr> <td> nenhum regristro encontrado </td></tr>";
				}
			?>
		</table>

		<a href="modelo.php"><img src="icones/icoback.png"></a>
		
	</section>
	<?php require_once("rodape.php"); ?>
</body>
</html>
