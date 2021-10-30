<!DOCTYPE html>
<html lang="en">
<head>
	<base href="http://localhost/cadastrousuarios/">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema</title>
	<link rel="stylesheet" type="text/css" href="static/css/style.css">
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
	<!-- Fontawesome -->
	<script src="https://kit.fontawesome.com/39ec67b48e.js" crossorigin="anonymous"></script>
</head>
<body>
	<main>
		<div class="login-box">
			<div class="login-logo">
				<i class="fas fa-user"></i>
			</div>
			<h1 class="login-title">Acessar sistema</h1>
			<form class="login-form" id="form">
				<input class="login-input" type="text" id="usuario" name="usuario" placeholder="Usuário">
				<input class="login-input" type="password" id="senha" name="senha" placeholder="Senha">
				<button class="login-input-submit" id="button" onclick="load()" type="submit" name="">Entrar</button>
				<div class="loading invisible" id="sub" style="">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: rgba(255, 255, 255, 0); display: block; shape-rendering: auto;" width="40px" height="40px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
					<circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138">
					  <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
					</circle>
				 </div> 
			</form>
		</div>
	</main>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="static/js/loading.js"></script>
	<script src="static/js/authController.js"></script>
	
</body>
</html>

