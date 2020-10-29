<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>PET Shop</title>
	<link rel="stylesheet" href="css/bootsrap.css">
	<link rel="stylesheet" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
</head>
<body>
	<div id="conteudo"> <!--conteúdo geral-->

		<div id="banner"> <!--conteúdo banner-->
			<img src="img/pets.png" width="20%">
			<h1>Pet Shop</h1>

		</div>

		<div id="menu-lateral-esquedo">
			<ul>
				<li><a href="index.php?p=cc">Cadastrar cliente</a></li>
				<li><a href="index.php?p=vc">Ver cliente</a></li>
				<li><a href="index.php?p=cf">Cadastrar funcionário</a></li>
				<li><a href="index.php?p=vf">Ver funcionário</a></li>
				<li><a href="index.php?p=ca">Cadastrar animal</a></li>
				<li><a href="index.php?p=va">Ver animal</a></li>
				<li><a href="index.php?p=rv">Realizar venda</a></li>
				<li><a href="index.php?p=vv">Ver vendas</a></li>
			</ul>
		</div>

		<div id="conteudo-direita">

			<?php 

				if(isset($_GET['p'])) {
					$pagina = $_GET['p'];
				} else {
					$pagina = 'cc';
				}

				if($pagina == 'cc') {

					include "cliente_form.html";

				} elseif($pagina == 'vc') {

					include "cliente_ver.php";

				} elseif($pagina == 'cf') {

					include "funcionario_form.html";

				} elseif($pagina == 'vf') {

					include "funcionario_ver.php";

				} elseif($pagina == 'ca') {

					include "animal_form.html";

				} elseif($pagina == 'va') {

					include "animal_ver.php";

				} elseif($pagina == 'rv') {

					include "venda_form.php";

				} elseif($pagina == 'vv') {

					include "venda_ver.php";

				}
			?>
			
		</div>

		<div id="rodape">
			<p>2020 - Todos os direitos reservados!</p>
		</div>
		
	</div>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</body>
</html>