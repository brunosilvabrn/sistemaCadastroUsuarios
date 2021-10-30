<?php

require_once 'connect.php';

$id = $_POST["id"];

$sql = $pdo->prepare("SELECT * FROM usuarios where id = :id");
$sql->bindValue(":id", $id);
$sql->execute();

if($sql->rowCount() > 0) {

	$dados = $sql->fetch(PDO::FETCH_ASSOC);

	echo '
		<div class="back" id="modalCadastro">
			<div class="modal-cadastrar">
				<h1 class="menu-title">Editar cadastro</h1>
				
					<input class="form-input" id="usuario" value="'.$dados["nome"].'" type="text" name="" placeholder="nome">
					<input class="form-input" id="email" value="'.$dados["email"].'"  type="text" name="" placeholder="email">
					<input class="form-input" id="telefone" value="'.$dados["telefone"].'" type="text" name="" placeholder="telefone">
					<button type="submit" onclick="editarCadastro('.$dados["id"].')" class="input-submit">Editar</button> 
				
				<button onclick="fecharModalCadastrar()" class="bnt-fechar-form">Fechar formulário</button>
			</div>
		</div>
		';
		
}else {
	echo json_encode(["status" => false]);
}


