/*========================================
Script
==========================================*/

/*---------------------- Login -----------------------*/
var signupForm = document.querySelector("#signup-form");
var loginForm = document.querySelector("#login-form");

//Открыть форму авторизации 
var login = document.querySelector(".login");
	login.onclick = function() {
		document.getElementById("signup").className = "outline";
		document.getElementById("login").className = "full";
		signupForm.style.display = "none";
		loginForm.style.display = "block";			
	}

//Открыть форму регистрации
var signup = document.querySelector(".signup");
	signup.onclick = function() {
		document.getElementById("login").className = "outline";	
		document.getElementById("signup").className = "full";
		loginForm.style.display = "none";
		signupForm.style.display = "block";		
	}
