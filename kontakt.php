<?php 
require('db.php'); 
include('auth.php'); 
?> 

<!DOCTYPE html> 
<html> 
<head> 
<meta charset="utf-8"> 
<title>Контакты. Кафе "У Палны"</title> 
<link rel="stylesheet" href="style.css">
<style>
html {
	background-image: url(pizza.jpg);
	
}
</style>
</head> 
<body class="body"> 
<div class="caf3"> <p align="center"> Кафе "У Палны" </p></div>
<div class="form"> 
	<p align="center"><?php echo $_SESSION['login']; ?> </br> 
	<a class="col" href="logout.php">Выйти</a> </p>
</div></br>
<div class="tip">
<p align="center">Контакты</p>
</div>
<div class="pul">
<p class="con" align="center">Кафе "У Палны"</p>
<p align="center"><img src="1.png"> ул.Льва Толстого д.23к1</br>
<img width="15px" src="2.png"> Парк Культуры </br>
☏ 8-926-870-01-65</br>
<img src="3.png"> Режим работы: ежедневно 10.00-23.00 </br>


</p>
</div>

</body> 
</html>
