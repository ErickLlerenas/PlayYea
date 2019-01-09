function comprobar()
{
	if(document.getElementById('password').value == document.getElementById('password2').value && document.getElementById('password2').value != "" && document.getElementById('password').value != "")
	{
		document.getElementById('password').style.color='#00FF00';
		document.getElementById('password2').style.color='#00FF00';
		document.getElementById('no').innerText = "";
	}
	else if(document.getElementById('password2').value != "" && document.getElementById('password').value != "")
	{
		document.getElementById('password').style.color='#F00';
		document.getElementById('password2').style.color='#FF0000';
		document.getElementById('no').innerText = 'Las contraseñas no coinciden';
		return false;
	}
}
