function validar(){
	if(document.getElementById('numCuenta_id').value == "" || document.getElementById('Matematicas_id').value == "" || document.getElementById('Fisica_id').value == "" || document.getElementById('Ingles_id').value == "" || document.getElementById('Metodologia_id').value == "" || document.getElementById('Programacion_id').value == "" || document.getElementById('Analisis_id').value == "" || document.getElementById('Internet_id').value == ""){
		alert("Inserta todos los datos de la tabla");
		return false;
	}
	if(document.getElementById('Matematicas_id').value > 10 || document.getElementById('Fisica_id').value > 10 || document.getElementById('Ingles_id').value > 10 || document.getElementById('Metodologia_id').value > 10 || document.getElementById('Programacion_id').value > 10 || document.getElementById('Analisis_id').value > 10 || document.getElementById('Internet_id').value > 10){
		alert("Ingresa una calificación menor a 10");
		return false;
	}
		

}