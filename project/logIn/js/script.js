function redirect()
{	
	if(document.getElementById('redirect').innerText == "redirecting..."){

		setTimeout("location.href='http://playyea.com/project/siceuc/'", 1000);

	}else if(document.getElementById('redirect').innerText == "") {

		setTimeout("location.href='http://playyea.com/project/logIn/'", 0);
		
	}
	
}