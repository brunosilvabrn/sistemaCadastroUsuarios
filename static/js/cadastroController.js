
$("#formCadastro").on("submit", function(e) {
	e.preventDefault();
	
	let data = {
		usuario : $("#usuario").val(),
		email : $("#email").val(),
		telefone : $("#telefone").val()
	}

	if (data.usuario == "" || data.email == "" || data.telefone == "") {

		alert("Preencha todos os campos!");
		return;
		
	}

	$.ajax({
		method: "POST",
		url: "auth.php",
		data: data,
		dataType: "JSON"
	}).done((response) => {
		console.log(response.status);
		console.log(response.msg);
		if (response.status == true) {
			alert("Redirecionar Painel");
		}
	}).fail((error) => {
		console.log(error);
	}).always(() => {
		console.log("REQUISIÇÃO FINALIZADA");
		teste();
	});

});

function teste() {

	const elemento = document.getElementById('sub');
	
	elemento.classList.add("invisible");
	
}