function validation()
{
	var myname = document.forms['form']['myname'];
	var email = document.forms['form']['email'];
	var username = document.forms['form']['username'];
	var password = document.forms['form']['password'];
	var confirm = document.forms['form']['confirm'];
	//var gender = document.forms['form']['gender'];
	//var dob = document.forms['form']['dob'];
	//document.getElementById ("show").innerHTML = myname.value;
	//document.getElementById ("show1").textContent = "*empty*";
	//document.getElementById ("show4").textContent = "*empty*";
	//document.getElementById ("show3").textContent = "*empty*";
	//document.getElementById ("show5").textContent = "*empty*";


	let retval = 1;
	
	if(myname.value === ""){
		//myname.value = "**Field cannot be left empty**";
		//myname.style.color = "red";
		retval = 0;
		document.getElementById("show").textContent = "*Name cannot be empty*";
		document.getElementById("show").style.color = "red";
	}
	if(email.value === ""){
		//email.value = "**Field cannot be left empty**";
		//email.style.color = "red";
		retval = 0;
		document.getElementById("show3").textContent = "*Email cannot be empty*";
		document.getElementById("show3").style.color = "red";
	}
	if(username.value === "" || username.value.length <= 5 ){
		//if(username.value === "") username.value = "**Field cannot be left empty**";
		//else username.value = "*Username must at least be 6 characters*";
		//username.style.color = "red";
		retval = 0;
		if(username.value === ""){
		document.getElementById("show1").textContent = "*Username cannot be empty*";}
		else{
			document.getElementById("show1").textContent = "*Username must have 6 characters*";
		}
		    document.getElementById("show1").style.color = "red";
	}

	
	if(password.value != confirm.value || password.value === ""){
		if(password.value === "") {
			document.getElementById("show5").textContent = "*password and confirm password cannot be empty*";
			document.getElementById("show4").textContent = "*password and confirm password cannot be empty*";
		}
		else{
			document.getElementById("show5").textContent = "*password and confirm password does not match*";
			document.getElementById("show4").textContent = "*password and confirm password does not match*";
		}
		document.getElementById("show5").style.color = "red";
		document.getElementById("show4").style.color = "red";
		retval = 0;
	}
	if(password.value.length < 6)
	{
		document.getElementById("show5").textContent = "*password must at least be 6 characters*";
		document.getElementById("show4").textContent = "*password must at least be 6 characters*";
		document.getElementById("show5").style.color = "red";
		document.getElementById("show4").style.color = "red";
		retval = 0;
	}

	if(retval == 0) return false;
	return true;

	//return false;
}
