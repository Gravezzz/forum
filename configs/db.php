<?php 

/*========================================
Database
==========================================*/

// Данные для подключения к базе данных
$server = "localhost";
$username = "root";
$password = "";
$dbname = "forum";

// Подключение к БД forum
$connect = mysqli_connect($server, $username, $password, $dbname);
//кодировка БД
mysqli_set_charset($connect, 'utf8');

?>