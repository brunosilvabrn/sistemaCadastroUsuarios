$(document).ready(function() {
	buscarNome();
	$("#buscar").keyup(function() {
		let nome = $(this).val();
		if (nome != '') {
			buscarNome(nome);
		}else {
			buscarNome();
		}
	})

})


function sair() {

	if (window.confirm("Você realmente quer sair?")) {
	
	$.ajax({
		url: "functions/logout.php",
		dataType: "JSON"
	}).done((response) => {
		if (response.status ==  true) {
			window.location.href="./login/"
		}
	}).fail((error) => {
		console.log(error);
	}).always(() => {
		const elemento = document.getElementById('sub');
		elemento.classList.add("invisible");
	});

	}
}

function buscarNome(nome) {
	$.ajax({
		url: "functions/search.php",
		method: "POST",
		data: {nome:nome},
	}).done((response) => {
		$(".tb").remove();
		$(".msg-fail").remove();
		$("#bodytable").append(response);
	}).fail((error) => {
		console.log(error);
	}).always(() => {
		
	});
}