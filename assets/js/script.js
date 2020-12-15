/*========================================
Script
==========================================*/

/*---------------------- Login -----------------------*/
var signupForm = document.querySelector("#signup-form");
var loginForm = document.querySelector("#login-form");

//Открыть форму авторизации 
var login = document.querySelector(".login");
if(login) {
	login.onclick = function() {
		document.getElementById("signup").className = "outline";
		document.getElementById("login").className = "full";
		signupForm.style.display = "none";
		loginForm.style.display = "block";			
	}
}

//Открыть форму регистрации
var signup = document.querySelector(".signup");
if(signup) {
	signup.onclick = function() {
		document.getElementById("login").className = "outline";	
		document.getElementById("signup").className = "full";
		loginForm.style.display = "none";
		signupForm.style.display = "block";		
	}
}



// Отправка комментария
const formComment = document.querySelector('#form-comment');
const comments = document.querySelector(".comments__list");

const topicList = (document.querySelector('.products__list')).children;

if(formComment) {
	formComment.onsubmit = (event) => {
		event.preventDefault();
		const textarea = formComment.querySelector('textarea');
		const text = textarea.value;
		if(text.trim()) {
			const topic 	= (formComment.querySelector("input[name='topic_id']")).value;
			const person 	= (formComment.querySelector("input[name='person_id']")).value;
			const data 		= `send=1&topic_id=${topic}&person_id=${person}&text=${text.trim()}`;

			const ajax 		= new XMLHttpRequest();
			ajax.open('POST', formComment.action, false);
			ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			ajax.send(data);

			comments.innerHTML = ajax.response;
			comments.scrollTop = comments.scrollHeight;

			textarea.value = '';

			for(const item of topicList) {
				if(item.href[item.href.length - 1] == topic) {

					const itemAbout = item.querySelector('.item__about');
					const span = itemAbout.querySelector('span');

					const itemMessage = item.querySelector('.item__message');
					const spanCount = itemMessage.querySelector('span');

					const username = (formComment.querySelector("input[name='person_name']")).value;

					span.innerHTML = `${username}: <span>${text.trim()}</span>`;
					spanCount.innerText = Number(spanCount.innerText) + 1;
					break;
				}
			}
		}
	}
}
