<?php 
	include("cabecalho.php");
?>
	<section class="jooj">
			<h1 id="resenho"> Cadastro de Usuário </h1>

			<form id="cadastres">
				
				<label class="labelcadastro"> Nome completo: </label>
				<br>
				<input type="text" name="nomej" id="inputes">

				<br>
				<br>
				<br>

				<label class="labelcadastro"> Apelido: </label>
				<br>
				<input type="text" name="nomej" id="inputes">

				<br>
				<br>
				<br>

				<label class="labelcadastro"> Foto de perfil:</label>
				<br>
				<input type="file" name="nomej" id="inputess">

				<br>
				<br>
				<br>

				<label class="labelcadastro"> Genêro:</label>
				<br>
				<select id="selecao">
				  <option value="acao">Masculino</option>
				  <option value="aventura">Feminino</option>
				</select>

				<br>
				<br>
				<br>

				<label class="labelcadastro"> Data de nascimento: </label>
				<br>
				<input type="date" name="nomej" id="inputes">

				<br>
				<br>
				<br>

				<label class="labelcadastro"> Email: </label>
				<br>
				<input type="text" name="nomej" id="inputes">

				<br>
				<br>
				<br>
				
				<label class="labelcadastro" > Senha: </label>
				<br>
				<input type="password" name="nomej" id="inputes">

				<br>
				<br>
				<br>

				<label class="labelcadastro" > Confirmação de senha: </label>
				<br>
				<input type="password" name="nomej" id="inputes">

				<br>
				<br>
				<br>

				<label class="labelcadastro" > Observações: </label>
				<br>
				<textarea id="resen"></textarea>
				
				<br>
				<br>

				<a href="index.php"><input type="button" id="butecao" name="botao" value="Cadastrar"></a>


			</form>

	<?php 
			include("rodape.php");
?>