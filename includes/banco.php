<?php 
	$banco = new mysqli("localhost","root","","bd_games");
	if($banco->connect_errno){
		echo "Erro $banco->connect_errno encontrado";
		die();
		
	}
	
	// Acentuação Funcionar
	$banco->query("SET NAMES 'utf8'");
	$banco->query("SET character_set_connection=utf8");
	$banco->query("SET character_set_client=utf8");
	$banco->query("SET character_set_results=utf8");


?>