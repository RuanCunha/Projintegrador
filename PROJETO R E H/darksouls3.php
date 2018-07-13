<?php 
	include("cabecalho.php");
?>
			<h1> Dark Souls 3</h1>
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
				        <img src="images/darksouls3.jpg" style="width:100%;">
				        <div class="carousel-caption">
				        </div>
				      </div>

				      <div class="item">
				        <img src="images/darksouls32.jpg" style="width:100%;">
				        <div class="carousel-caption">
				        </div>
				      </div>
				    
				      <div class="item">
				        <img src="images/darksouls33.jpg" style="width:100%;">
				        <div class="carousel-caption">
				        </div>
				      </div>
				      <div class="item">
				        <img src="images/darksouls34.jpg" style="width:100%;">
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
			<p class="caracteristicas">: RPG</p>
			<div class='divider'></div>
			<br>

			<p class="titulos"> Disponível em  </p>
			<p class="caracteristicas">: Xbox One / PS4 / PC</p>
			<div class='divider'></div>
			<br>

			<p class="titulos">Data de Lançamento  </p>
			<p class="caracteristicas">: 24/03/2016 </p>
			<div class='divider'></div>
			<br>

			
			<p class="descricao">* Com o fogo se apagando e o mundo caindo em ruínas, você precisa se aventurar em um universo repleto de inimigos e ambientes colossais. Jogadores entrarão em um mundo de trevas e atmosfera épica, com uma jogabilidade mais ágil e combates mais intensos. Agora só restam cinzas... Prepare-se para abraçar a escuridão mais uma vez.</p>

			<div class='divider'></div>
			<br /><br />

			<img src="images/rexview.png" class="rexview">
			<p class="descricao"> - Pode-se argumentar que a experiência de jogar Dark Souls 3 é familiar até demais. Após experimentar tantas mortes e lutas enervantes na série Souls e em Bloodborne, o jogador veterano estará preparado para boa parte das armadilhas presentes no novo game.<br /><br />

			- É um prazer desbravar os mapas em busca de itens, experiência e mais detalhes sobre a história, e o game alcança a excelência no fator imersão. No entanto, seus desafios e armadilhas são manjados para jogadores calejados, que já conhecem a necessidade de abrir cada porta com o escudo em mãos.<br /><br />

			- Para tentar compensar esse fato, Dark Souls 3 aumentou consideravelmente o número de mortes artificiais. Está presente também o tipo de cenário quase impossível de ser superado na primeira tentativa, com armadilhas baratas e inevitáveis. Isso revela sinais de desgaste na fórmula e um sério problema de balanceamento, substituindo competência por sorte em diversas situações.<br /><br />

			- O fascinante mundo de Dark Souls fica ainda melhor no PS4, Xbox One e PC, já que seus poderosos processadores renderizam cenários de tirar o fôlego. Isso permite, obviamente, que ainda mais chefes gigantescos apareçam pelo jogo, em combates memoráveis que figuram entre os melhores da série.<br /><br />

			- A aventura é um tanto linear desta vez, mas bastante extensa. Fazer viagens rápidas entre as fogueiras é, mais do que um recurso, algo obrigatório. Os melhoramentos de níveis e equipamentos são feitos em um hub separado do mapa principal, exatamente como acontece em Demon’s Souls e Bloodborne. <br /><br />

			- Se Dark Souls 3 é realmente o fim da franquia, então podemos comemorar sua despedida com um título digno do legado da série. Ainda que o jogo nem sempre seja justo e esbarre em momentos de pura frustração, superar os desafios é gratificante. Sua atmosfera imersiva, unida ao combate afiado, geram um game altamente recomendado para fãs de RPGS de ação. Desde que eles não se incomodem com um pouco de masoquismo e centenas de mortes na campanha, claro.<br /><br /></p>

			<div class='divider'></div>

			<div class="nots">
			<p class="nota"> 8,0 </p>
			</div>
			<div class='divider'></div>
			<p class="avaliacao"> - Gráficos : 9; </p> <img src="images/green.png" class="avaliacg">
			<div class='divider'></div>
			<p class="avaliacao"> - Jogabilidade : 7; </p> <img src="images/yellow.png" class="avaliacy">
			<div class='divider'></div>
			<p class="avaliacao"> - Som : 8: </p> <img src="images/green.png" class="avaliacg">
			<div class='divider'></div>
			</div>

			<?php
			if (isset($_SESSION['login'])) {
				echo '<form id="cadastres">';
				echo('<a href="excluiresenha.php"><input type="button" id="butecao" name="botao" value="Excluir Resenha"></a>');
				echo('<a href="editaresenha.php"><input type="button" id="butecao" name="botao" value="Editar Resenha"></a>');
				echo '</form>';
			}
			?>
<?php 
			include("rodape.php");
?>

