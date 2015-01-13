<?php
	//CHAAAAAANGE
	
	//коннектимся к бд
	if (!require('person_tools.php')) {
		echo "Ошибка подключения класса! Попробуйте перезагрузить страницу или обратиться в администрацию сайта.";
		break;
	}
	
	if (!require('db_connect.php')) {
		echo "Ошибка подключения к БД! Попробуйте перезагрузить страницу или обратиться в администрацию сайта.";
		break;
	}
	
	$is_reg = cleanGarbige($_POST['is_registered']);
	
	if (!empty($is_reg)) {
		$err = "Должно быть выбрано хотя бы одно значение: 'Зарегистрироваться сейчас' или 'У меня уже есть анкета'";
		//break;
	}
	
	$new_user = new Person();
	if($is_reg == "YES"){
		//ищем человека по ящику и паролю, если находим - отображаем профиль, не находим - форма входа с ошибкой
		//$new_user->email = strip_tags($_POST['user_email']);
		//$new_user->$pass = password_hash($_GET['user_passwd'], PASSWORD_DEFAULT);
		//echo $new_user->email;
	}else{
		//ищем человека по ящику, если есть - форма регистрации с ошибкойб нет - форма регистрации
		$new_user->name = cleanGarbige($_POST['user_name']);
		$new_user->email = cleanGarbige($_POST['email']);
		$new_user->pass = cleanGarbige($_POST['user_name']);
	}
	
	//echo*/
	//$new_user->controlFillFormServerSide($_POST['user_email']);
	//var_dump($new_user);
	//$res = $mysqli-query("Select ");
	




?>

<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="/test_login/css/styles.css">
	<link rel="stylesheet" type="text/css" href="/test_login/css/login_form.css">
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="/test_login/mod_login/login_test.js"></script>	
</head>
<body>
	<div class="all">
		<div class="header"></div>
		<div class="page_content">
			<div class="login">
				<form name="login_form" onsubmit="" action="" method="post">
					<fieldset>
						<p><?php// echo $err; ?></p>
					</fieldset>
					<label>Ваше имя:<input type="text" class="input_text" name="user_name"></label><br>
					<label>Ваш E-mail:<input type="text" class="input_text" name="email"></label><br>
					<label>Пароль:<input type="password" class="input_text" name="pass_1"></label><br>
					<label>Повторите пароль:<input type="password" class="input_text" name="pass_2"></label><br>
					<p>Пол:</p>
					<label><input type="radio" name="gender" value="male" checked>мужской</label><br>
					<label><input type="radio" name="gender" value="female">женский</label><br>
					<textarea name="about" class="input_text" maxlength="150" rows="3" ></textarea>
				</form>
			</div>
		</div>
		<div class="footer"></div>
	</div>
</body>
</html>
