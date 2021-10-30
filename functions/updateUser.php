<?php

require_once 'connect.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$sql = $pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email, telefone = :telefone WHERE id = :id");
$sql->bindValue(":nome", $nome);
$sql->bindValue(":email", $email);
$sql->bindValue(":telefone", $telefone);
$sql->bindValue(":id", $id);
$sql->execute();

if ($sql->rowCount() > 0) {
	echo json_encode(["status" => true]);
}else {
	echo json_encode(["status" => false]);
}