<!DOCTYPE html>
<html lang="en">
<head>
	<base href="http://localhost/cadastrousuarios/">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema</title>
	<link rel="stylesheet" type="text/css" href="static/css/painel.css">
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
	<!-- Fontawesome -->
	<script src="https://kit.fontawesome.com/39ec67b48e.js" crossorigin="anonymous"></script>
</head>
<body>

	<nav>
		<h1 class="logo-painel" href="#">Painel do Administrador</h1>
		
		<button class="logout" id="sair" type="button" onclick="sair()">Sair</button>
		
	</nav>

	<div id="boxmodal">
	<main>
		<div class="menu-box">
			<h1 class="menu-title">Opçoes</h1>
			<div>
				<button id="cadastrar" class="sucess-button">Novo cadastro</button>
			</div>
			<div class="pesquisar">
				
					<input class="input-pesquisar" id="buscar" type="text" name="" placeholder="Nome de usuário">
					<button class="submit-pesquisar" type="submit">Buscar</button>
				
			</div>
		</div>
	</main>

	<main>
		<div class="menu-box">
			<h1 class="menu-title">Usuarios</h1>
			<button class="btn-att"><i class="fa fa-refresh"></i></button>
			<table>
				<thead>
					<th>Id</th>
					<th>Nome</th>
					<th>Email</th>
					<th>telefone</th>
					<th class="table-btn">Editar</th>
					<th class="table-btn">Excluir</th>
				</thead>
				<tbody id="bodytable">
				</tbody>
			</table>
		</div>
	</main>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="static/js/usuarios.js"></script>
	<script src="static/js/modals.js"></script>
	<script src="static/js/functions.js"></script>
	<script src="static/js/fecharModals.js"></script>
	<script src="static/js/cadastroController.js"></script>

</body>
</html>

