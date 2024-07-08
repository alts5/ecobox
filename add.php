<?php 
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:../");
}

mysql_connect("localhost", "root") or die ("Невозможно подключиться к серверу"); // установление соединения с сервером

mysql_query('SET NAMES utf8_unicode_ci'); // тип кодировки

// подключение к базе данных:

mysql_select_db("ecobox") or die("Нет такой таблицы!");
$sql_add = ("UPDATE  SET status='Закрыта' where id = ".$_GET['id']."");

mysql_query($sql_add); // Выполнение запроса
header("location: create.php");
