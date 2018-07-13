<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Rexsork</title>
		<meta charset="utf-8">
		<script type="text/javascript" src="js/jquery.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/semantic/semantic.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/java.js"></script>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/massa.css">
		<link rel="shortcut icon"  href="images/LOGITO.jpg" type="image/x-icon">
		<meta name="viewport" content="width=device-width, initial-scale=1">

	    
	    <!--OUTROS-->
	    <link rel="shortcut icon" href="imagens/favicon.png" />
	</head>
	<body>
		<header>
			<a href="index.php"><img src="images/LOGITO.jpg" id="logo"/></a>
			<a href="index.php"><img src="images/palav.png" id="palav"/></a>
		</header>	
		<?php 

								//isset - verifica se uma variável está definida
								if ( isset($_SESSION['login']) ){  // SE ESTIVER LOGADO

									?>	
											<!-- MENSAGEM QUANDO LOGADO -->
											<section class="losenhaa">
											<p> Logado</p>
											<a href="minhaconta.php" id="alinocanto">Minha Conta</a>
											<div class="divider"></div>
											<br>
											<a href="logout.php" id="alinocanto">Sair</a>
											</section>

											<!-- MENSAGEM QUANDO LOGADO -->	
			
									<?php

								}else{  //

							?>
							<!-- FORM DE LOGIN -->
								<form class="losenha" method="post" action="login.php">
									<label for="login">Login:</label>
									<input type="text" name="login" id="logi">
									<br>
									<label for="senha">Senha:</label>
									<input type="password" name="senha" id="senh">
									<br>
									<input type="submit" name="Entrar" id="botaco">
									<br>
									<a href="cadastro_user.php" id="cadastt">Não tem conta? Cadastre-se aqui!</a> 
									<br>
									<a href="recuperasen.php" id="cadastt">Esqueci minha senha!</a> 
								</form>


						
							<!-- FORM DE LOGIN -->	
							<?php
							}	
							?>	
							<div id="divider"></div>	
		<nav class="menu">
						<a href="index.php"><section class="item menu"> Home </section></a>
						<a href="novidades.php"><section class="item menu"> Novidades </section></a>
						<a href="resenhas.php"><section class="item menu"> Resenhas </section></a>
						<a href="suporte.php"><section class="item menu"> Suporte </section></a>

						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- The form -->
						<form class="example" action="action_page.php">
						  <input type="text" placeholder="Buscar..." name="search">
						  <button type="submit"><i class="fa fa-search"></i></button>
						</form>	
		</nav>
		<div id="divider"></div>
	</body>
</html>

