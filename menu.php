<?php 
require('db.php'); 
include('auth.php'); 
?> 

<!DOCTYPE html> 
<html> 
<head> 
<meta charset="utf-8"> 
<title>Меню. Кафе "У Палны"</title> 
<link rel="stylesheet" href="style.css">
<style>
html {
	background-image: url(pizza.jpg);
	
}
</style>
</head> 
<body class="body"> 
<div class="caf1"> <p align="center"> Кафе "У Палны" </p></div>
<div class="form"> 
	<p align="center"><?php echo $_SESSION['login']; ?> </br> 
	<a class="col" href="logout.php">Выйти</a> </p>
</div></br>
<div class="tip">
<p align="center"> Меню </p>
</div></br>
<div>
<img width="430px" src="burgery.jpg">
<img width="475px" src="salaty.jpg">
<img width="420px" src="supy.jpg">
<img width="430px" src="pasta.jpg">
<img width="475px" src="sous.jpg">
<img width="420px" src="deserty.jpg">
</div>
</body> 
</html>
