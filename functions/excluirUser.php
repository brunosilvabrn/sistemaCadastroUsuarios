<?php

require_once 'connect.php';

$id = $_POST['id'];

$sql = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
$sql->bindValue(":id", $id);
$sql->execute();

if($sql->rowCount() > 0) {
	echo json_encode(["status" => true]);
}else {
	echo json_encode(["status" => false]);
}