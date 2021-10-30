<?php

require_once 'connect.php';


$sql = $pdo->prepare("SELECT * FROM usuarios");
$sql->execute();

if($sql->rowCount() > 0) {

	$dados = $sql->fetchAll(PDO::FETCH_ASSOC);
	

	foreach ($dados as $key) {
		echo '
		<tr class="tb">
			<th>'.$key["id"].'</th>
			<th>'.$key["nome"].'</th>
			<th>'.$key["email"].'</th>
			<th>'.$key["telefone"].'</th>
			<th class="table-btn"><button id="'.$key["id"].'" onclick="editaruser('.$key["id"].')" class="editar-btn">Editar</button></th>
			<th class="table-btn"><button onclick="excluiruser('.$key["id"].')" class="excluir-btn">Excluir</button></th>
		</tr>';
	}

}else {
	echo '<h1 class="msg-fail">Nenhuma usuário encotrado</h1>';
}


