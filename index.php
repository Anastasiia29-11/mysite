<?php
include ('session.php');
?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<title> У Палны </title>
</head>
<body>
<div class= "main">
<h2 align="center"> У Палны </h2>
<div class= "menu">
	<p><a href="menu.php"> Меню </a> <a href="akcii.php"> Акции </a> <a href= "contacti.php"> Контакты </a>
		<span class="vi"> Привет, <?php echo $_SESSION ['login']; ?> <a href="login.php?logout=1"> Выход </a></span></p>
		</div>
		</div>
		</body>
		</html>
