function comprobar()
{
	if(document.getElementById('password').value == document.getElementById('password2').value && document.getElementById('password2').value != "" && document.getElementById('password').value != "")
	{
		document.getElementById('password').style.background='#41FD41';
		document.getElementById('password2').style.background='#41FD41';
		document.getElementById('no').innerText = "";
	}
	else if(document.getElementById('password2').value != "" && document.getElementById('password').value != "")
	{
		document.getElementById('password').style.background='#FF5555';
		document.getElementById('password2').style.background='#FF5555';
		document.getElementById('no').innerText = 'Las contraseñas no coinciden';
		return false
	}
}
function validar()
{
	if(document.getElementById('password').value == "" || document.getElementById('password2').value== "" || document.getElementById('use').value== "")
	{
		alert("Ingresa todos los campos");
		return false
	}
}