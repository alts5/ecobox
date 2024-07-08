<!DOCTYPE html>
<html>
<head>
	<!--Кодировка-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<!--Название страницы-->
	<title>BioBOX</title>
	
	<!--Логотип сайта-->
	<link rel = "shorcut icon" href ="../5-small.png" type="image/png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--Таблицы стилей css, прочие файлы-->
	<link rel="stylesheet" href="../style.css">
	
	<!--Параметры стиля-->
	<style>
	.wrap2{
display: none;
opacity: 0.8;
position: fixed;
left: 0;
right: 0;
top: 0;
bottom: 0;
padding: 10px;
background-color: rgba(1, 1, 1, 0.725);
z-index: 100;
overflow: auto;
}
 
.window2{
width: 400px;
height: 580px;
margin: 20px auto;
display: none;
background: #fff;
z-index: 200;
position: fixed;
left: 0;
right: 0;
top: 0;
bottom: 0;
padding: 20px;
border-radius: 15px;
}
.wrap3{
display: none;
opacity: 0.8;
position: fixed;
left: 0;
right: 0;
top: 0;
bottom: 0;
padding: 10px;
background-color: rgba(1, 1, 1, 0.725);
z-index: 100;
overflow: auto;
}
html, body {
	padding:0; margin:0; 
	}
.loading-wrap{
	display: none;
	opacity: 0.8;
	position: fixed;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	padding: 10px;
	background-color: rgba(1, 1, 1, 0.725);
	z-index: 100;
	overflow: auto;

}
 
.loading-window{
	width: 360px;
	height: 150px;
	margin: auto auto;
	display: none;
	background: #fff;
	z-index: 200;
	position: fixed;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	padding: 30px;
	border-radius: 15px;
	text-align: center;
}
	</style>
</head>
<body>
<?
mysql_connect("localhost", "root") or die ("Невозможно подключиться к серверу"); // установление соединения с сервером

mysql_query('SET NAMES utf8_unicode_ci'); // тип кодировки

// подключение к базе данных:

mysql_select_db("ecobox") or die("Нет такой таблицы!");

$user=$_SESSION["session_username"];
$zapr_name=mysql_query("SELECT FIO FROM users where username = '$user'"); // запрос на выборку сведений о пользователях
$name=mysql_fetch_array($zapr_name);
?>
<div>
<table class = 'table-header'>
	<tr>
		<td class = 'td-header'><b>EcoCenter - сеть умных экоцентров</b></td>
		<td class = 'td-header-username'><?print $name['FIO']?></td>
		<td class = 'td-exit' onclick='wait("block", "../logout.php")'>Выход</td>
	</tr>
</table>
</div>