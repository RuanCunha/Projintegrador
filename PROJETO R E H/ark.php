<?php 
	include("cabecalho.php");
?>
				<h1> ARK: Survival Evolved </h1>
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
				        <img src="images/ark.jpg" style="width:100%;">
				        <div class="carousel-caption">
				        </div>
				      </div>

				      <div class="item">
				        <img src="images/ark2.jpg" style="width:100%;">
				        <div class="carousel-caption">
				        </div>
				      </div>
				    
				      <div class="item">
				        <img src="images/ark3.jpg" style="width:100%;">
				        <div class="carousel-caption">
				        </div>
				      </div>
				      <div class="item">
				        <img src="images/ark4.jpg" style="width:100%;">
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
			<p class="caracteristicas">: Ação-aventura</p>
			<div class='divider'></div>
			<br>

			<p class="titulos"> Disponível em  </p>
			<p class="caracteristicas">: PS4 / Xbox One / PC</p>
			<div class='divider'></div>
			<br>

			<p class="titulos">Data de Lançamento  </p>
			<p class="caracteristicas">: 29/08/2017</p>
			<div class='divider'></div>
			<br>

			
			<p class="descricao">* ARK Survival Evolved é um jogo desenvolvido pela Studio Wildcard do gênero Ação-Aventura com um mapa Mundo Aberto. O jogo foi desenvolvido utilizando o motor gráfico Unreal Engine. O jogo consiste em sobreviver em uma ilha repleta de dinossauros e outras criaturas pré históricas. O jogo te coloca na pele de um sobrevivente em uma ilha conhecida como ARK. Você dispõe apenas de sua sorte e recursos naturais. Você pode caçar ou domar criaturas para te ajudar no decorrer do jogo.</p>
			<div class='divider'></div>
			<br /><br />

			<img src="images/rexview.png" class="rexview">
			<p class="descricao"> - Como todo multiplayer de sobrevivência, Ark: Survival Evolved traz fórmula que pode ser tanto frustrante quanto divertida. O título coloca o jogador no papel de um sobrevivente, sem roupas ou armas, na ilha repleta de praias, florestas, tribos, construções aliens e dinossauros colossais, uns mais amigáveis que outros.<br /><br />

			- Durante suas tentativas de não sucumbir aos perigos da ilha, é possível coletar materiais, construir ferramentas e armas, montar acampamento e até mesmo domar animais para usar em colheitas, lutas e transporte. Tudo depende de como você administra seu tempo, recursos e encontros entre animais e dinossauros no mapa. No geral, o game possui mecânica simples, bem divertida e repleta de possibilidades estratégicas. <br /><br />

			- Ao começar um novo jogo, Ark: Survival Evolved possibiliza a personalização de um sobrevivente homem ou mulher e a escolha de uma região da ilha para começar. Dependendo do local de início, você encontrará outros jogadores, dinossauros, criaturas raras e extintas, além dos diferentes efeitos climáticos que o game pode oferecer. <br /><br />

			- Em termos gráficos, Ark: Survival Evolved realmente impressiona. Os cenários são belíssimos, detalhados e muito reais. Os efeitos de movimento, água e clima são bem caprichados até mesmo nas opções gráficas mais baixas. Cavernas secretas, estruturas alienígenas e todas as áreas exploráveis do mapa são quase um espetáculo à parte. O único problema na hora de apreciar essas paisagens é a otimização do jogo. <br /><br />

			- Não há como negar que Ark é um game pesado, tanto em tamanho quanto em requisitos. As telas de carregamento são demoradas e o jogo apresenta problemas de renderização, texturas que demoram a carregar e alguns bugs na hora de mostrar os animais no mapa. A boa notícia é que o game ainda está em acesso antecipado, ou seja, todos esses pontos negativos ainda podem ser corrigidos com a ajuda dos próprios jogadores. <br /><br />

			- Para um título que ainda está em acesso antecipado, Ark: Survival Evolved tem muito a oferecer para os fãs dos jogos de sobrevivência O título é muito divertido, impressiona com gráficos belíssimos e se mantém fiel à fórmula dos multiplayers online, como H1Z1 e DayZ, só que com dinossauros e animais extintos. Mas ao mesmo tempo, ele não apresenta nada de novo ou revolucionário em termos de mecânicas e jogabilidade, o que pesa negativamente para quem procura algo inovador. No geral, Ark é uma aventura reciclada que acertou em cheio e tem tudo para ser melhorada com o tempo. <br /><br /></p>

			<div class='divider'></div>

			<div class="nots">
			<p class="nota"> 8,6 </p>
			</div>
			<div class='divider'></div>
			<p class="avaliacao"> - Gráficos - 10; </p> <img src="images/green.png" class="avaliacg">
			<div class='divider'></div>
			<p class="avaliacao"> - Jogabilidade - 8; </p> <img src="images/green.png" class="avaliacg">
			<div class='divider'></div>
			<p class="avaliacao"> - Som - 8: </p> <img src="images/green.png" class="avaliacg">
			<div class='divider'></div>
			</div>

			<br>

			<?php
				if (isset($_SESSION['login'])) {
					echo '<form id="cadastres">';
					echo('<a href="excluiresenha.php"><input type="button" id="butecao" name="botao" value="Excluir Resenha"></a>');
					echo '</form>';
				}
			?>

			<br>
			<hr/>	
			<h1> Comentários</h1>
			<br>

			<div id="divider"></div>
	
			<img src="images/avatar.jpg" id="avatar"/>

			<div id="divider"></div>

			<textarea id="comen" placeholder="Insira um Comentário..."></textarea>

			<div id="divider"></div>
			<div id="divider"></div>

			<br><br><br><br><br><br><br><br><br><br><br><br>

			<section class="comentarios">

				<img src="images/avatar1.jpg" id="avatarOutros"/>

				<a href="usuario.php" class="nomeUsuario"><strong> Roccieli Bachielo </strong> </a>
				<br>
				<p class="coments"> Skyrim é um jogo que não é revolucionário, porém é muito aclamado pelo fato de ser um dos primeiros da série, um jogo excelente, porém é reverinciado por canto das outras pessoas não saberem dos outros jogos. </p>
				<a href="denunciarcoment.php"><input type="button" id="botaoComentario" name="botao" value="Denunciar"></a>

				<section class="comentarioResposta">
					
					<img src="images/avatar2.jpg" id="avatarOutros"/>

					<a href="usuario.php" class="nomeUsuario"><strong> Suriemanny Kerdoni </strong> </a>
					<br>
					<p class="coments"> Concordo, apesar de ser um jogo muito bom, ele é superestimado, não pode ser considerado o melhor jogo do mundo. </p>
					<a href="denunciarcoment.php"><input type="button" id="botaoComentario" name="botao" value="Denunciar"></a>

				</section>

				<br>
				<br>

				<img src="images/avatar3.jpg" id="avatarOutros"/>

				<a href="usuario.php" class="nomeUsuario"><strong> Sumikets Baierkots </strong> </a>
				<br>
				<p class="coments"> Um jogo praticamente atemporal. Lançado em 2011, mas jogado por milhões de pessoas até o dia de hoje. Poucos jogos conseguem ter o mesmo valor de replay! Seja jogando no modo vanilla ou com mods, você vai querer voltar várias e várias vezes para apreciar outra vez o céu estrelado de Skyrim, ouvir aquela música calma de Whiterun, sair por aí explorando sem caminho ou direção e se surpreender com centenas de coisas para fazer sempre aparecendo na sua lista de quests. </p>
				<a href="denunciarcoment.php"><input type="button" id="botaoComentario" name="botao" value="Denunciar"></a>

				<br>
				<br>
				<br>
				<br>
				<br>

				<img src="images/avatar4.jpg" id="avatarOutros"/>

				<a href="usuario.php" class="nomeUsuario"><strong> Bonitex Correirkovsk </strong> </a>
				<br>
				<p class="coments"> Skyrim é um clássico, que por muito tempo tive vontade de jogar, porem, o jogo ainda peca no preço, ainda não completei o jogo por ter tido a oportunidade de apenas jogar a promo grátis do jogo... </p>
				<a href="denunciarcoment.php"><input type="button" id="botaoComentario" name="botao" value="Denunciar"></a>

				<section class="comentarioResposta">
					
					<img src="images/avatar.jpg" id="avatarOutros"/>

					<a href="usuario.php" class="nomeUsuario"><strong> Hilaun Tonab ( Autor da resenha ) </strong> </a>
					<br>
					<p class="coments"> Mesmo tendo o preço um pouco elevado, o jogo ainda está valendo seu preço, recomendo esperar uma promoção chegar e logo adquirir seu jogo. Aproveite! </p>
					<a href="denunciarcoment.php"><input type="button" id="botaoComentario" name="botao" value="Editar"></a>
					<br>
					<a href="denunciarcoment.php"><input type="button" id="botaoComentario" name="botao" value="Excluir"></a>

				</section>

			</section>

			<div id="divider"></div>
			<br>

<?php 
			include("rodape.php");
?>