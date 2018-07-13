<?php 
	include("cabecalho.php");
?>
			<h1> Five Nights at Freddy's 2</h1>
				<br>
				<div class="divider"></div>
				<div class="container">
				  <div id="myCarousel" class="carousel slide" data-ride="carousel">
				    <!-- Indicators -->
				    <ol class="carousel-indicators">
				      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				      <li data-target="#myCarousel" data-slide-to="1"></li>
				      <li data-target="#myCarousel" data-slide-to="2"></li>
				      <li data-target="#myCarousel" data-slide-to="3"></li>
				    </ol>

				    <!-- Wrapper for slides -->
				    <div class="carousel-inner">

				      <div class="item active">
				        <img src="images/fnaf2.jpg" style="width:100%;">
				        <div class="carousel-caption">
				        </div>
				      </div>

				      <div class="item">
				        <img src="images/fnaf22.jpg" style="width:100%;">
				        <div class="carousel-caption">
				        </div>
				      </div>
				    
				      <div class="item">
				        <img src="images/fnaf23.jpg" style="width:100%;">
				        <div class="carousel-caption">
				        </div>
				      </div>
				      <div class="item">
				        <img src="images/fnaf24.jpg" style="width:100%;">
				        <div class="carousel-caption">
				        </div>
				      </div>
	  
	  			  </div>

	    <!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right"></span>
	      <span class="sr-only">Next</span>
	    </a>
	  </div>
	</div>

			<div class="divider"></div>
			<br>

			<p class="titulos">Gênero </p>
			<p class="caracteristicas">: Terror de sobrevivência</p>
			<div class='divider'></div>
			<br>

			<p class="titulos"> Disponível em  </p>
			<p class="caracteristicas">: iOS / Android / PC</p>
			<div class='divider'></div>
			<br>
			
			<p class="titulos">Data de Lançamento  </p>
			<p class="caracteristicas">: 11/11/2014 </p>
			<div class='divider'></div>
			<br>
			
			<p class="descricao">* Five Nights at Freddy's 2 é um jogo de terror para computadores e dispositivos mobile onde você é um guarda noturno que vigia as câmeras de restaurante onde quando a lua nasce , os animatrônicos e robôs da pizzaria que era pra entreter as crianças, ganham autonomia e vagam pelo lugar mal assombrado. O Jogador terá que sobreviver por 5 noites em seu novo emprego, tendo experiências assustadoras e traumatizantes.</p>

			<div class='divider'></div>
			<br /><br />

			<img src="images/rexview.png" class="rexview">
			<p class="descricao"> - Five Nights at Freddy’s é um jogo que apresenta o mínimo do seu enredo, e é ideal que permanece assim. O jogo ganhou notoriedade na internet não apenas pelo fato de causar muitos sustos, mas também pelos mistérios e várias teorias que os jogadores criaram ao redor do game. Muitas dessas teorias foram confirmadas através do twitter do único desenvolvedor do jogo, Scott Cawton.<br /><br />

			- Depois do sucesso do primeiro jogo, Five Nights at Freddy’s 2 chegou na sequência trazendo pouquíssimas alterações em relação ao primeiro jogo. O jogador deve passear pelas câmeras do circuito interno de TV da pizzaria, sempre ficando de olho nas movimentações dos bonecos.<br /><br />

			- Apesar do conceito simples e pelo fato de que jogos de terror não precisam de gráficos excepcionais para assustar, vide Slender e Haunted Investigations, Five Nights at Freddy’s 2 poderia ter um visual melhor. Um dos problemas de design é o fato das “baterias” do circuito interno de TV, lanterna e até a caixinha de música estarem “conectadas”. Outro exemplo é o fato do jogador poder dar corda na caixinha musical, sem precisar ir necessariamente ao local onde ela está.<br /><br />

			- O áudio do jogo obrigatoriamente se destaca. Já que pouca coisa acontece, e principalmente, se movimenta no começo, é normal ficar com os outros sentidos aguçados. A partir das duas da manhã da primeira noite é possível ouvir passos dos bonecos movimentando-se pela pizzaria. No quesito áudio, o jogo chama bastante atenção, e é grande parte da experiência em Five Nights at Freddy’s 2.<br /><br />

			- Como qualquer jogo indie de terror, Five Nights at Freddy’s 2 não oferece nenhum tipo de dica. Mas o jogo poderia pelo menos mostrar o que se deve fazer. Quem baixar o jogo se baseando apenas na página de download, ficará sem saber o que fazer exatamente.<br /><br />

			- Five Nights at Freddy’s 2 rende bons sustos. Mais difícil que o jogo anterior, o game testa os nervos do jogador na última noite, exigindo muitas trocas rápidas de câmera e uso da máscara, qualquer erro será mortal. Ao manter a expectativa baixa e rodeado de mistérios, Nights at Freddy’s 2 cativa pela premissa simples, mas bem que poderia ter um visual um pouco melhor.<br /><br /></p>

			<div class='divider'></div>

			<div class="nots">
			<p class="nota"> 6,6 </p>
			</div>
			<div class='divider'></div>
			<p class="avaliacao"> - Gráficos : 5; </p> <img src="images/red.png" class="avaliacr">
			<div class='divider'></div>
			<p class="avaliacao"> - Jogabilidade : 6; </p> <img src="images/red.png" class="avaliacr">
			<div class='divider'></div>
			<p class="avaliacao"> - Som : 9: </p> <img src="images/green.png" class="avaliacg">
			<div class='divider'></div>
			</div>

			<?php
			if (isset($_SESSION['login'])) {
				echo '<form id="cadastres">';
				echo('<a href="excluiresenha.php"><input type="button" id="butecao" name="botao" value="Excluir Resenha"></a>');
				echo '</form>';
			}
			?>

<?php 
			include("rodape.php");
?>