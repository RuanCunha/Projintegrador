<?php 
	include("cabecalho.php");
?>
			<h1> Call of Duty: World War 2</h1>
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
				        <img src="images/codwwii.jpg" style="width:100%;">
				        <div class="carousel-caption">
				        </div>
				      </div>

				      <div class="item">
				        <img src="images/codwwii2.jpg" style="width:100%;">
				        <div class="carousel-caption">
				        </div>
				      </div>
				    
				      <div class="item">
				        <img src="images/codwwii3.jpg" style="width:100%;">
				        <div class="carousel-caption">
				        </div>
				      </div>
				      <div class="item">
				        <img src="images/codwwii4.jpg" style="width:100%;">
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
			<p class="caracteristicas">: Tiro em primeira pessoa</p>
			<div class='divider'></div>
			<br>

			<p class="titulos"> Disponível em  </p>
			<p class="caracteristicas">: Xbox One / PS4 / PC</p>
			<div class='divider'></div>
			<br>

			<p class="titulos">Data de Lançamento  </p>
			<p class="caracteristicas">: 03/11/2017</p>
			<div class='divider'></div>
			<br>

			
			<p class="descricao">* Call of Duty: World War II (também conhecido como Call of Duty: WWII) é um jogo eletrônico de tiro em primeira pessoa produzido pela empresa Sledgehammer Games e distribuído pela Activision. Call of Duty: WWII tem como foco às ações de um esquadrão de 1944 a 1945 no campo de batalha europeu, enquanto as forças Aliadas começam a ganhar força em seu caminho à Alemanha. A campanha cobrirá batalhas nas ocupadas França, Bélgica, e através do rio Reno até a Alemanha.</p>

			<div class='divider'></div>
			<br /><br />

			<img src="images/rexview.png" class="rexview">
			<p class="descricao"> - Sem grandes novidades, a campanha do novo Call of Duty segue a mesma estrutura dos jogos anteriores. A história é dividida em capítulos e começa com o soldado norte-americano Ronald "Red" Daniels na batalha da Normandia, no Dia D. O objetivo do protagonista e sua equipe é justamente reverter a propagação alemã que assolou a Europa.  <br /><br />

			- A dinâmica da campanha mantém a tradicional estrutura linear: elimine todos os inimigos da tela para avançar. A participação especial da vez é a presença do ator Josh Duhamel (que interpreta o Major William Lennox nos filmes Transformers) no papel do sargento William Pierson. <br /><br />

			- Apesar de contar com os clichês típicos, há níveis cinematográficos incríveis que conseguem imergir o jogador no clima sangrento da Segunda Guerra. O enredo também procura explorar de forma inteligente a relação de amizade entre soldados no campo de batalha, o que torna tudo mais interessante e emotivo. <br /><br />

			- World War II preserva a jogabilidade que caracteriza Call of Duty, mas aposta em um ritmo cadenciado e realista, algo mais "pé no chão". O personagem não tem tanta velocidade para percorrer os cenários e ainda precisa poupar fôlego na corrida para não ficar em desvantagem diante dos inimigos. Além disso, é preciso consumir kits de sobrevivência durante os confrontos para recuperar o medidor de vida.  <br /><br />

			- O modo multiplayer é exatamente aquilo que todos nós esperávamos: mapas projetados ao cenário competitivo e sistema de progressão viciante - e ainda uma área social no melhor estilo Destiny para renovar a estrutura online. Em outras palavras, esta é a modalidade que certamente vai consumir a sua vida pelos próximos meses.   <br /><br />

			- World War II consegue proporcionar uma experiência espetacular em todos os seus três modos ao aliar a boa e velha temática de Segunda Guerra com o clássico combate de Call of Duty. O título marca o retorno às origens e recoloca a franquia no caminho certo, ainda que sem grandes inovações. <br /><br /></p>

			<div class='divider'></div>

			<div class="nots">
			<p class="nota"> 9,0 </p>
			</div>
			<div class='divider'></div>
			<p class="avaliacao"> - Gráficos : 10; </p> <img src="images/green.png" class="avaliacg">
			<div class='divider'></div>
			<p class="avaliacao"> - Jogabilidade : 8; </p> <img src="images/green.png" class="avaliacg">
			<div class='divider'></div>
			<p class="avaliacao"> - Som : 9. </p> <img src="images/green.png" class="avaliacg">
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

<?php 
			include("rodape.php");
?>