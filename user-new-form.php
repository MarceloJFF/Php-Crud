<h1>Novo usuário</h1>

<form action="user-new.php" method="post">
	<table>
		<tr><td>Usuário <td> <input type="text" name="usuario" id="usuario" size="10" maxlength="10">
		<tr><td>Nome <td><input type="text" name="nome" id="nome" size="30" maxlength="30">
		<tr><td>Tipo <td><select name="tipo" id="tipo">
			<option value="admin">Administrador do Sistema</option>
			<option value="editor" selected>Editor do Sistema</option>
		</select>

		<tr><td>Senha <td><input type="password" name="senha1" id="senha1" size="10" maxlength="10">

		<tr><td>Confirme sua senha <td><input type="password" name="senha2" id="senha2" size="10" maxlength="10">
			
		<tr><td> <input type="submit" name="" value="Adicionar Usuário">
	</table>
</form>