<?php 
	include("cabecalho.php");
?>
	<section class="jooj">
			<h3 id="resenho"> Cadastro de Resenha </h3>

			<form id="cadastres">
				
				<label class="labelcadastro" > Nome do Jogo:</label>
				<br>
				<input type="text" name="nomej" id="inputes">

				<br>
				<br>
				<br>

				<label class="labelcadastro" > Fotos da Resenha:</label>
				<br>
				<input type="file" name="nomej" id="inputess">
				<br>
				<input type="file" name="nomej" id="inputess">
				<br>
				<input type="file" name="nomej" id="inputess">
				<br>
				<input type="file" name="nomej" id="inputess">

				<br>
				<br>
				<br>

				<label class="labelcadastro" > Genêro:</label>
				<br>
				<select id="selecao">
				  <option value="acao">Ação</option>
				  <option value="aventura">Aventura</option>
				  <option value="rpg">RPG</option>
				  <option value="terror">Terror</option>
				</select>

				<br>
				<br>
				<br>

				<label class="labelcadastro" > Disponível em:</label>
				<br>
				
				<input type="checkbox" value="PS4" name="nomej">
				<label class="labelcadastro"> PS4</label>
				<br>

				<input type="checkbox" value="PS3" name="nomej">
				<label class="labelcadastro"> PS3</label>
				<br>

				<input type="checkbox" value="PS2" name="nomej">
				<label class="labelcadastro"> PS2</label>
				<br>

				<input type="checkbox" value="Xbox One" name="nomej">
				<label class="labelcadastro"> Xbox One</label>
				<br>

				<input type="checkbox" value="Xbox 360" name="nomej">
				<label class="labelcadastro"> Xbox 360</label>
				<br>

				<input type="checkbox" value="Nintendo Switch" name="nomej">
				<label class="labelcadastro"> Nintendo Switch</label>
				<br>

				<input type="checkbox" value="PC" name="nomej">
				<label class="labelcadastro"> PC</label>

				<br>
				<br>
				<br>

				<label class="labelcadastro"> Data de lançamento: </label>
				<br>
				<input type="date" name="nomej" id="inputes">

				<br>
				<br>
				<br>

				<label class="labelcadastro"> Duração aproximada:</label>
				<br>
				<input type="text" name="nomej" id="inputesss">

				<br>
				<br>
				<br>

				<label class="labelcadastro"> Resenha: </label>
				<br>
				<textarea id="resen"></textarea>

				<br>
				<br>
				<br>

				<label class="labelcadastro"> Nota do Jogo: </label>
				<br>

				<input type="number" name="nomej" id="inputesss">

				<br>
				<br>

				<a href="index.php"><input type="button" id="butecao" name="botao" value="Registrar Resenha"></a>


			</form>

			<?php 
				include("rodape.php");
			?>
			<div class="divider"></div>
			</section>