$(document).ready(function() {
	ajax();
});

$(function(){
	$(".btn-att").on("click", function(){
		ajax();
	});
});

function ajax() {

	$.ajax({		
		url: "functions/usuarios.php",	
	}).done((response) => {		
		$(".tb").remove();
		$(".msg-fail").remove();
		$("#bodytable").append(response);
	}).fail((error) => {
		console.log(error);
	}).always(() => {
		
	});

	
}
