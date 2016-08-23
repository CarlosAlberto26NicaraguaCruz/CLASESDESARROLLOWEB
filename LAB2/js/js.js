//LLAMAMO A LA FUNCION READY  PARA CARGAR DOM
$(document).on("ready",inicio);

function inicio(){
	//al hacer clip en el boton publica llama la  funcio inicio
$("#publicar").on("click",mensaje);
}

function mensaje(){
	alert("haz precionado el boton Puclicar")
}