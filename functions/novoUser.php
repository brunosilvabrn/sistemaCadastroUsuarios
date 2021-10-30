<?php

require_once 'connect.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$sql = $pdo->prepare("INSERT INTO usuarios (nome, email, telefone) VALUES (:nome, :email, :telefone)");
$sql->bindValue(":nome", $nome);
$sql->bindValue(":email", $email);
$sql->bindValue(":telefone", $telefone);
$sql->execute();

if ($sql->rowCount() > 0) {
	echo json_encode(["status" => true]);
}else {
	echo json_encode(["status" => false]);
}