function validar(){
	if(document.getElementById('Matematicas_id').value > 10 || document.getElementById('Fisica_id').value > 10 || document.getElementById('Ingles_id').value > 10 || document.getElementById('Metodologia_id').value > 10 || document.getElementById('Programacion_id').value > 10 || document.getElementById('Analisis_id').value > 10 || document.getElementById('Internet_id').value > 10){
		alert("Ingresa una calificación menor a 10");
		return false;
	}


}
function abrirEditar(){
	window.open("https://playyea.com/siceuc/evaluaciones/editar.php")
}

function abrirEditar2(){
	window.open("https://playyea.com/siceuc/evaluaciones/editar2.php")
}

function abrirEditar3(){
	window.open("https://playyea.com/siceuc/evaluaciones/editar3.php")
}