<?php
session_start();
if(isset($_SESSION["session_username"])) {
	header("location:lk.php");
} 
?>
<?php require_once("includes/connection.php");?>

<?php
if(isset($_SESSION["session_username"])){

header("Location: lk.php");
}
if(isset($_POST["users"])){

if(!empty($_POST['users']) && !empty($_POST['password'])) {
    $username=$_POST['users'];
    $password=$_POST['password'];

    $query =mysql_query("SELECT * FROM users WHERE username='".$username."' AND password='".$password."'");

    $numrows=mysql_num_rows($query);
    if($numrows!=0)

    {
    while($row=mysql_fetch_assoc($query))
    {
    $dbusername=$row['username'];
    $dbpassword=$row['password'];
    }

    if($username == $dbusername && $password == $dbpassword)

    {


    $_SESSION['session_username']=$username;
?>
	<script>
    window.location.href = 'lk.php';
	</script>
<?
    }
    } else {
?>
<script>
	alert("Логин или пароль неверный!");
</script>
<?
    }

} 
}
?>

<!DOCTYPE html>
<html>
<head>
	<!--Кодировка-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<!--Название страницы-->
	<title>EcoBOX</title>
	
	<!--Логотип сайта-->
	<link rel = "shorcut icon" href ="5.png" type="image/png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--Таблицы стилей css, прочие файлы-->
	<link rel="stylesheet" href="style.css">
	
	<!--Параметры стиля-->
	<style>
	html, body {
	padding:0; margin:0; 
	background-image: url(city.jpg)
	}
	</style>
</head>
<body>
	<div class = 'login'>
		<img style = 'margin-top: 34%'src = '5.png'>
		<div class = 'login-form-head-reg'><b>Сеть ECO-центров</b></div>
		<div class = 'login-form-head'>Вход в личный кабинет BioBOX</div>
		<form method = "POST">
			<div><input class = 'data-fields' name = 'users' placeholder = 'Введите логин'></div>
			<div><input class = 'data-fields' type = 'password' name = 'password' placeholder = 'Введите пароль'></div>
			<button name = "btn-auth" id="submit" type="submit" class="login-btn">ВОЙТИ</button>
		</form>
	<div class = 'support-url' onclick="location.href = 'http://edu.tatar.ru'"><u>Техническая поддержка</u></div>
	</div>
</body>
</html>