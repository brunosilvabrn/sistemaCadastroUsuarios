$('#cadastrar').on('click', function(){
	
	$("#boxmodal").append(`

	<div class="back" id="modalCadastro">
		<div class="modal-cadastrar">
			<h1 class="menu-title">Novo cadastro</h1>
			
				<input class="form-input" type="text" id="usuario" name="" placeholder="nome">
				<input class="form-input" type="text" id="email" name="" placeholder="email">
				<input class="form-input" type="text" id="telefone" name="" placeholder="telefone">
				<button class="input-submit" onclick="cadastrar()">Cadastrar</button> 
			
			<button onclick="fecharModalCadastrar()" type="submit" class="bnt-fechar-form">Fechar formulário</button>
		</div>
	</div>

	`);
});

function editaruser(id) {
	let idUser = id;
	$.ajax({
			method: "POST",
			url: "functions/editarUser.php",
			data: {id : idUser},
		}).done((response) => {
			$("#boxmodal").append(response);
		}).fail((error) => {
			console.log(error);
		}).always(() => {
		
		});
}

function editarCadastro(id) {
		
	let user = document.getElementById("usuario").value;
	let email = document.getElementById("email").value;
	let telefone = document.getElementById("telefone").value;
	let idUser = id;
	
	if (user == "" || email == "" || telefone == "") {
		alert("Preencha todos os campos!");
	}else {

		$.ajax({
				method: "POST",
				url: "functions/updateUser.php",
				data: {id : idUser, nome : user, email : email, telefone : telefone},
				dataType: "JSON"
			}).done((response) => {
				if (response.status == true) {
					ajax()
					alert("Informações atualizadas");
				}else {
					alert("Erro ao atualizar informações")
				}
			}).fail((error) => {
				console.log(error);
			}).always(() => {
			$("#modalCadastro").remove();
		});


	}

}

function excluiruser(id) {
	let idUser = id;

	if (window.confirm("Deseja realmente apagar esse usuário? id :" + idUser)) {

		$.ajax({
				method: "POST",
				url: "functions/excluirUser.php",
				data: {id : idUser},
				dataType: "JSON"
			}).done((response) => {
				if (response.status == true) {
					ajax();					
				}else {
					alert("Erro ao apagar");
					ajax();		
				}
				
			}).fail((error) => {
				console.log(error);
			}).always(() => {
			
		});
	}
}


function cadastrar() {

	let user = document.getElementById("usuario").value;
	let email = document.getElementById("email").value;
	let telefone = document.getElementById("telefone").value;
	
	
	if (user == "" || email == "" || telefone == "") {
		alert("Preencha todos os campos!");
	}else {
		$.ajax({
				method: "POST",
				url: "functions/novoUser.php",
				data: {nome : user, email : email, telefone : telefone},
				dataType: "JSON"
			}).done((response) => {
				if (response.status == true) {
					ajax()
					alert("Informações cadastradas");
				}else {
					alert("Erro ao cadastrar informações")
				}
			}).fail((error) => {
				console.log(error);
			}).always(() => {
			$("#modalCadastro").remove();
		});
	}
}