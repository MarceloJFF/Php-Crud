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

	$ordem = $_GET['o']?? "n";
	$chave = $_GET['c']?? " ";

	?>

	<section id="corpo">
		<?php require_once("topo.php")?>
		<h1>Escolha seu jogo</h1>
		<?php echo msg_sucesso('arquivo aberto com sucesso'); ?>
		<form action="modelo.php" id="busca" method="GET">
			Ordenar: 
			<a href="modelo.php?o=n&&c=<?php echo $chave;?>">Nome </a> |
			<a href="modelo.php?o=p&&c=<?php echo $chave;?>">Produtora  </a> |
			<a href="modelo.php?o=n1&&c=<?php echo $chave;?>">Nota Alta  </a> |
			<a href="modelo.php?o=n2&&c=<?php echo $chave;?>">Nota Baixa </a> |
			<a href="modelo.php">Mostrar Todos</a>
			
			Buscar: <input type="text" name="c" size="10" maxlength="40">
			<input type="submit" value="ok">	
		</form>

		<table class="listagem">
			<?php 
			$q = "SELECT j.cod, j.nome, g.genero, j.capa, p.produtora 
			FROM jogos j 
			join generos g on j.genero = g.cod
			join produtoras p on j.produtora = p.cod ";


			if(!empty($chave)){
				$q.= "WHERE j.nome like '%$chave%' 
				OR p.produtora like '%$chave%' 
				OR g.genero like '%$chave%' ";

			}

			switch ($ordem) {
				case "p":
					$q.="ORDER BY p.produtora";
				break;
				
				case "n1":
					$q.="ORDER BY j.nota DESC";
				break;
				
				case "n2":
					$q.= "ORDER BY j.nota ASC";
				break;
				
				default:
					$q.="ORDER BY j.nome";	
				break;
			}

			$busca = $banco->query($q);
			
				if(!$busca){
					echo "<tr><td>".msg_erro('Infelizmente a busca deu errada')." </td> </tr>";
				}else if($busca->num_rows == 0){
					echo "<tr><td>".msg_aviso('Nenhum registro encontrado')."</td></tr>";
				}else{
					if($busca->num_rows > 0){
						while($reg = $busca->fetch_object() ){
							echo "<tr><td>";
							$t = thumb($reg->capa);
							echo " <img  class = 'mini' src='$t' >";

							echo "<td><a href = 'detalhes.php?cod=$reg->cod'> $reg->nome </a>";
							echo "<br>[$reg->genero] $reg->produtora";
							
							if(is_admin()){
								echo "<td>";
								echo "<i class = 'material-icons'>add_circle</i> ";
								echo "<i class = 'material-icons'>edit</i> ";
								echo "<i class = 'material-icons'>delete</i> ";
							
							}else if(is_editor()){
								echo "<td>";
								echo "<i class = 'material-icons'>edit</i>";
							}
						}	
					}
				}
			?>
		</table>
	</section>

	<?php 
		include_once("rodape.php");
	?>
</body>
</html>