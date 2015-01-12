<?php
define("PATH", "/test_login/");
define("DB_NAME", "znakomstva_db");
define("USER", "root");
define("PASS", "pass@word1");

$mysqli = new mysqli("localhost", USER, PASS, DB_NAME);

if ($mysqli->connect_errno) {
	echo "Не удалось соединиться с базой данных MySQL: ошибка - " . $mysqli->connect_errno;
}
?>