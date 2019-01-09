function redirect()
{	
	if(document.getElementById('redirect').innerText == "redirecting..."){

		setTimeout("location.href='https://playyea.com/siceuc/'", 1000);

	}else if(document.getElementById('redirect').innerText == "") {

		setTimeout("location.href='http://playyea.com/login/'", 0);
		
	}
	
}