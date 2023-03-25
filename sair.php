<?php
	require_once("includes/banco.php");
	require_once("includes/funcoes.php");	
	require_once("includes/login.php");

	$_SESSION['user'] = '';
	$_SESSION['nome'] = '';
	$_SESSION['tipo'] = '';

	header("Location: modelo.php");
?>