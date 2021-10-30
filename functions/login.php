<?php

require_once 'connect.php';

$usuario = filter_var($_POST['usuario'], FILTER_DEFAULT);
$senha = filter_var($_POST['senha'], FILTER_DEFAULT);

if (isset($_POST['usuario']) && $_POST['senha']) {
	
	$sql = $pdo->prepare("SELECT * FROM administrador WHERE nome = :usuario AND senha = :senha");
	$sql->bindValue(":usuario", $usuario);
	$sql->bindValue(":senha", md5($senha));
	$sql->execute();

	if($sql->rowCount() > 0) {

		$dados = $sql->fetch();
		$_SESSION["idUser"] = $dados["id"];

		echo json_encode(["status" => true]);

	}else {

		echo json_encode(["status" => false]);

	}

}


