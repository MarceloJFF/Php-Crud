<?php 
	echo "<footer>";
	echo "Acessado por " . $_SERVER['REMOTE_ADDR']." em ".date("d/M/Y").
	" </p>";
	echo "<p>Desenvolvido por Marcelo &copy</p>";
	
	echo "</footer>";
	$banco->close();
?>