<h2>Alterando Dados</h2>

<form action="user-edit.php" method="post">
	<table>
		<tr><td> Usuario
			<td><input type="text" name="usuario" id="usuario">
		<tr><td>Nome
			<td><input type="text" name="nome" id="nome" maxlength="30" size="30">

		<tr><td> Tipo
			<td><input type="text" name="tipo" id="tipo" readonly>
		
		<tr><td>Senha
			<td><input type="password" name="senha1" id="senha1" maxlength="30" size="30">
			
		<tr><td>Confirme a Senha
			<td><input type="password" name="senha2" id="senha2" maxlength="30" size="30">
		<tr><td> <button type="submit">Alterar</button>
	</table>
</form>