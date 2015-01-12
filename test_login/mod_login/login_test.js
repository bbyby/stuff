// скрыть/показать панель авторизации
$(document).ready(function() {
	$('.spoiler_links').click(function(){
		$(this).parent().children('div.spoiler_body').slideToggle('fast');
		return false;
	});
});

//загрузка модуля авторизации в div
$(document).ready(function() {
	$('.login_bar_content').load('/test_login/mod_login/first_step_login.html');
});

$(document).ready(function() {
	$('auth_button').onclick(function() {
		//$('.login_bar_content').load('');
		$('.page_content').load('/test_login/mod_login/second_step_login.php');
	});
});

//-----------------------------------------------------------------------------------------//


//контроль корректности ввода e-mail и пароля пользователем
function controllFormFill(login_form) {
	
	var email =	document.getElementById('user_email');
	var pass  = document.getElementById('user_passwd');
		
	/*if ( a) {
		alert('отправка отменена');
		return false;
	}*/	
}

//триггер на кнопку 'Войти/Регистрация'
function changeAuthMethod(){	
	
	var regTrigger = document.getElementsByName('is_registered');
	
	if ( regTrigger[0].checked && regTrigger[0].value == 'NO') {
		document.getElementById('auth_button').value = 'Регистрация';
		document.getElementById('user_passwd').setAttribute("readonly","readonly");		
	}
	
	if ( regTrigger[1].checked && regTrigger[1].value == 'YES') {
		document.getElementById('auth_button').value = 'Войти';
		document.getElementById('user_passwd').removeAttribute("readonly","readonly");		
	}	
}



/*
function loadLogin() {
	var xmlhttp;
	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	} else {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() {
	if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		document.getElementById("login").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","ajax_info.txt",true);
xmlhttp.send();
}*/