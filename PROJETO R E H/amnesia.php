<?php 
	include("cabecalho.php");
?>
			<h1> Amnesia: A Machine for Pigs</h1>
			<<br>
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
				        <img src="images/amnesia.jpg" style="width:100%;">
				        <div class="carousel-caption">
				        </div>
				      </div>

				      <div class="item">
				        <img src="images/amnesia2.jpg" style="width:100%;">
				        <div class="carousel-caption">
				        </div>
				      </div>
				    
				      <div class="item">
				        <img src="images/amnesia3.jpg" style="width:100%;">
				        <div class="carousel-caption">
				        </div>
				      </div>
				      <div class="item">
				        <img src="images/amnesia4.jpg" style="width:100%;">
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
			<p class="caracteristicas">: PS4 / PC</p>
			<div class='divider'></div>
			<br>

			<p class="titulos">Data de Lançamento  </p>
			<p class="caracteristicas">: 10/09/2013 </p>
			<div class='divider'></div>
			<br>

			
			<p class="descricao">* Dos criadores de Amnesia – The Dark Descent e Dear Esther, o mundo recebe um novo jogo de terror em primeira pessoa que o apresentará às profundezas da ambição, do poder e da loucura. A Machine for Pigs não sairá da sua cabeça e devorará o seu coração.<br>
			“O mundo é uma máquina. Uma máquina para porcos. Útil apenas para o abate de porcos.</p>

			<div class='divider'></div>
			<br /><br />

			<img src="images/rexview.png" class="rexview">
			<p class="descricao"> - A história em “A Machine for Pigs” é cercada de mistério, e o maior apelo deste jogo é justamente desvendá-los. Seu personagem é um inventor/industrialista britânico chamado Oswald Mandus, que acorda na fatídica noite do réveillon de 1899 sem memória de nada que ocorreu nos últimos seis meses. Ele está completamente sozinho em sua gigantesca mansão londrina, sem nenhum sinal de sua esposa ou de seus filhos gêmeos. Conforme ele explora a sua casa e os seus arredores, fica claro que algo de muito errado está acontecendo.<br /><br />

			- A história é simplesmente brilhante e sutil, ocorrendo de maneira soturna enquanto você encontra pedaços de anotações, atende ligações e explora os lugares. As influências literárias são muito claras, com dezenas de referências a clássicos do século XIX como “A ilha do Doutor Moreau” de H.G. Wells, tudo em uma crítica macabra a revolução industrial e suas consequências.<br /><br />

			- Uma das coisas mais interessantes é que o protagonista mantém um diário em tempo real enquanto você está jogando. Além de descrever as ações que você acaba de tomar, também lhe ajudam a compreender melhor o que está passando pela cabeça de Oswald naquele momento, muitas vezes ajudando a revelar um pouco melhor a trama do jogo.<br /><br />

			- O cenário de “Amnesia: A Machine for Pigs” é terrivelmente assustador. Com ambientes escuros, cheios de cadáveres de porcos por todos os lados enquanto você explora a região. é de embrulhar o estômago de jogadores mais senssíveis.<br /><br />

			- Todos os quebra-cabeças presentes no título são simples e de fácil resolução, e eles podem todos ser resolvidos in loco, ou seja, seu personagem não possui um inventório aonde ele possa guardar itens para serem usados em outros momentos. Tudo se resume a linearidade do "aqui e do agora".<br /><br />

			- Amnesia: A Machine for Pigs é um dos mais assustadores e interessantes jogos deste ano. O título carrega um clima perfeito para aterrorizar até o mais valente dos corações, o que é raro hoje em dia. Apesar de certos problemas com a jogabilidade e uma linearidade exagerada, o título conta com uma história surpreendente e instigante que lhe deixará o tempo todo na beira da cadeira, pronto para levar o próximo susto!<br /><br /></p>

			<div class='divider'></div>


			<div class='divider'></div>

			<div class="nots">

			<p class="nota"> 8,3 </p>
			</div>
			<div class='divider'></div>
			<p class="avaliacao"> - Gráficos : 8; </p> <img src="images/green.png" class="avaliacg">
			<div class='divider'></div>
			<p class="avaliacao"> - Jogabilidade : 7; </p> <img src="images/yellow.png" class="avaliacy">
			<div class='divider'></div>
			<p class="avaliacao"> - Som : 10: </p> <img src="images/green.png" class="avaliacg">
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
			if (isset($_SESSION['login'])) {
				echo '<form id="cadastres">';
				echo('<a href="excluiresenha.php"><input type="button" id="butecao" name="botao" value="Excluir Resenha"></a>');
				echo '</form>';
			}
			?>

<?php 
			include("rodape.php");
?>