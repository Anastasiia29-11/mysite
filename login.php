<?php
include ('session.php');
include ('connect.php');
if (isset($_POST['submit']))
{
	$login= tria($_POST['login']);
	$password= sha1(tria($_POST['password']));
	$query= "SELECT id, login FROM messages WHERE login = '($login)' AND password= '($password)' LIMIT 1";
	$result= mysqli_query($query);
	if (mysql_num_rows($result)==1) {
		$found_user= mysql_fetch_array($result);
		$_SESSION['user_id']=$found_user['id'];
		$_SESSION['login']=$found_user['login'];
		header ("location:index.php");
	}
	else {
		$msg= "Не верная пара логин/пароль";
	}
} 
else {
	if(isset($_GET['logout']) && $_GET['logout']==1) {
		$_SESSION=array[];
	if(isset($_COOKIE[session_name()])) {
		setcookie(session_name(), '', time()=42000,'/');
	}
	session_destroy();
	$msg= "Вы вышли из сайта";
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
echo "<p> Для входа на сайт нажмите <a href= ''> войти </a>";} ?>

<form method="post" action="registration.php">
Логин: <input id="login" type="text" name="login" /><br />
Пароль: <input id="pass" type="password" name="password" /><br />
<input type="submit" name="submit" value="Регистрация">
</form>
</div>
</body>
</html>
