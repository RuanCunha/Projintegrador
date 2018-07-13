<?php 
	include("cabecalho.php");
?>
			<h1>FAR CRY 5</h1>
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
				        <img src="images/farcry.jpg" style="width:100%;">
				        <div class="carousel-caption">
				        </div>
				      </div>

				      <div class="item">
				        <img src="images/farcry2.jpg" style="width:100%;">
				        <div class="carousel-caption">
				        </div>
				      </div>
				    
				      <div class="item">
				        <img src="images/farcry3.jpg" style="width:100%;">
				        <div class="carousel-caption">
				        </div>
				      </div>
				      <div class="item">
				        <img src="images/farcry4.jpg" style="width:100%;">
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
			<p class="caracteristicas">: Ação-aventura, Tiro em primeira pessoa</p>
			<div class='divider'></div>
			<br>

			<p class="titulos"> Disponível em  </p>
			<p class="caracteristicas">: PS4 / Xbox One / PC</p>
			<div class='divider'></div>
			<br>

			<p class="titulos">Data de Lançamento  </p>
			<p class="caracteristicas">: 27/03/2018</p>
			<div class='divider'></div>
			<br>

			
			<p class="descricao">* Em Far Cry 5 o jogador assume o papel de um xerife que foi enviado para o lugar fictício de New Hope, Montana, para prender Joseph Seed, que tem vindo a adquirir predominância no local. Seed é um pregador radical e acredita que foi o escolhido para proteger as pessoas de Hope County de um "colapso inevitável" e criou uma congregação chamada Eden's Gate, um culto apocalíptico militar.</p>
			<div class='divider'></div>
			<br /><br />

			<img src="images/rexview.png" class="rexview">
			<p class="descricao"> - Pode parecer clichê, mas a forma com que tudo se desenrola em Far Cry 5 faz com que o jogador se sinta angustiado para cumprir a tarefa. Seja pelas mensagens de Joseph e seus subordinados enviadas a todo momento pelo rádio, ou pelas consequências violentas e sanguinárias das atitudes dos mesmos - que não contaremos por motivos de spoilers.<br /><br />

			- Mas não só os vilões têm espaço na trama. Os aliados também têm papéis fundamentais no desenrolar de toda a história e colaboram para criar um clima onde você se sente obrigado a ajudar cada um diante de tudo que Seed fez (e faz). Pena que o(a) protagonista não traz um diálogo próprio, criando sua personalidade apenas em cima de suas consequências. <br /><br />

			- Muitos questionam o fato de Far Cry 5 carregar uma mecânica quase inalterada por seus últimos games. Por mais que os jogos de mundo aberto sejam um dos mais atrativos da atual geração, é preciso ter uma diferenciação tanto de seus títulos anteriores como de concorrentes que bebem na mesma fonte. <br /><br />

			- A principal dessas inovações é a inclusão de um modo cooperativo online na campanha principal. Embora Far Cry 5 não seja complexo a ponto de necessitar de apoio a todo momento, é divertido encarar missões do modo principal na companhia de um amigo, criando estratégias cooperativas ou simplesmente mandando tudo para os ares. E o bom de tudo é que ambos não precisam estar exatamente no mesmo ponto da história. <br /><br />

			- Far Cry 5 conta com inovações também no que diz respeito à evolução de seu personagem. O sistema de aquisição agora precisa de Pontos de Vantagem, que são obtidos de diversas formas, desde o cumprimento de missões principais, até tarefas simples, como capturar um urso ou eliminar furtivamente cinco inimigos. <br /><br />

			- Outra grande novidade é um divertido modo online chamado Far Cry Arcade. Nele, você pode se aventurar em mapas criados por outros jogadores com os objetivos mais insanos. É possível, por exemplo, ter que eliminar hordas de inimigos que parecem nunca acabar, ou até mesmo cruzar um cenário repleto de plataformas curtas<br /><br />

			- Far Cry 5 chega cumprindo praticamente tudo o que prometeu. Apesar de alguns bugs e uma fraca I.A. de seus aliados, o título traz um enredo que entretém, um modo cooperativo que cai como uma luva, e uma mecânica consagrada que ainda agrada. Mais uma vez um capítulo da franquia se torna um dos grandes candidatos a jogo do ano. <br /><br /></p>

			<div class='divider'></div>

			<div class="nots">
			<p class="nota"> 9,6 </p>
			</div>
			<div class='divider'></div>
			<p class="avaliacao"> - Gráficos - 10; </p> <img src="images/green.png" class="avaliacg">
			<div class='divider'></div>
			<p class="avaliacao"> - Jogabilidade - 9; </p> <img src="images/green.png" class="avaliacg">
			<div class='divider'></div>
			<p class="avaliacao"> - Som - 10: </p> <img src="images/green.png" class="avaliacg">
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