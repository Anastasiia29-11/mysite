<?php
include ('connect.php');


if (isset($_POST['submit']))
{
	$login= ($_POST['login']);
	$password= sha1(($_POST['password']));
	$query= "INSERT INTO messages (login, password)
	VALUES ('($login)', '($password)')";
	$result= mysqli_query($query);
	if ($result)
	{
		$message= "Поздравляем с успешной регистрацией!";
	}
	else {
		$message= "При регистрации произошла ошибка";
	}
}
?>
<html>
<head>
<meta charset="utf-8">
<title> Регистрация </title>
</head>
<body>
<div class="main">
<h2> My site </h2>
<h3> Регистрация на сайте </h3>
<?php
if(!empty($message)) {echo "<p class='msg'>".$message."</p>";
echo "<p> Для входа на сайт нажмите <a href= 'login.php'> войти </a>";} ?>

<form method="post" action="registration.php">
Логин: <input id="login" type="text" name="login" /><br />
Пароль: <input id="pass" type="password" name="password" /><br />
<input type="submit" name="submit" value="Регистрация">
</form>
</div>
</body>
</html>
