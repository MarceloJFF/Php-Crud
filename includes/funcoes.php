
<?php
	
	function thumb($arq){
		$caminho = "imagens/$arq";
		
		if (is_null($arq) || !file_exists($caminho)){
			return "imagens/indisponivel.png";
		}else{
			return $caminho;
		}
	}

	function msg_sucesso($m){
		$resp ="<div class='sucesso'> <i class='material-icons'>check_circle</i>$m </div>";
		return $resp;
	}
	function msg_aviso($m){
		$resp ="<div class='aviso'> <i class='material-icons'>info</i>$m </div>";
		return $resp;
	}
	function msg_erro($m){
		$resp ="<div class='erro'> <i class='material-icons'>error</i>$m </div>";
		return $resp;
	}
?>