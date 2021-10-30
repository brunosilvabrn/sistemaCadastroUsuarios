
$("#form").on("submit", function(e) {
	e.preventDefault();
	
	let data = {
		usuario : $("#usuario").val(),
		senha : $("#senha").val()
	}

	if (data.usuario == "" || data.senha == "") {
		alert("Preencha todos os campos!");
		
		const elemento = document.getElementById('sub');
		elemento.classList.add("invisible");

		return;
	}

	// FAZER REQUISIÇÃO AJAX PARA API DE LOGIN

	$.ajax({
		method: "POST",
		url: "functions/login.php",
		data: data,
		dataType: "JSON"
	}).done((response) => {
		if (response.status == false) {
			alert("Senha e/ou usuário incorretos");
		}
		if (response.status ==  true) {
			window.location.href="./painel/"
		}
	}).fail((error) => {
		console.log(error);
	}).always(() => {
		const elemento = document.getElementById('sub');
		elemento.classList.add("invisible");
	});

});
