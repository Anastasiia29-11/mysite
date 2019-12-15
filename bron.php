<?php 
require('db.php'); 
include('auth.php'); 
?> 

<!DOCTYPE html> 
<html> 
<head> 
<meta charset="utf-8"> 
<title>Бронирование. Кафе "У Палны"</title> 
<link rel="stylesheet" href="style.css">
<style>
html {
	background-image: url(pizza.jpg);
	
}
</style>
</head> 
<body> 
<div class="caf4"> <p align="center"> Кафе "У Палны" </p></div>
<div class="form"> 
	<p align="center"><?php echo $_SESSION['login']; ?> </br> 
	<a class="col" href="logout.php">Выйти</a> </p>
</div></br>
<div class="vip">
<p align="center">Бронирование столиков</p>
</div>
<div class="br">
<input class="n1" style=" margin-left:50px;width:100px; height:100px" type="submit" name="st1" value="1"> </input>
<input class="n2" style="width:100px; height:100px; margin-left:50px" type="submit" name="st2" value="2"> </input>
<input class="n3" style="width:100px; height:100px; margin-left:50px" type="submit" name="st3" value="3"> </input></br>
<input class="n4" style="margin-left:50px;width:100px; height:100px; margin-top: 50px" type="submit" name="st4" value="4"> </input>
<input class="n5" style="width:100px; height:100px; margin-left:50px" type="submit" name="st5" value="5"> </input>
<input class="n6" style="width:100px; height:100px; margin-left:50px" type="submit" name="st6" value="6"> </input></br>
<input class="n7" style="margin-left:50px;width:100px; height:100px; margin-top:50px" type="submit" name="st7" value="7"> </input>
<input class="n8" style="width:100px; height:100px; margin-left:50px" type="submit" name="st8" value="8"> </input>
<input class="n9" style="width:100px; height:100px; margin-left:50px" type="submit" name="st9" value="9"> </input>
</div>
<form action="bronirovanie.php" method="POST">
<div class="doh">
<p style="font-size:20px; font-family:Segoe Script" align="center"> Бронирование столика </p>
<p align="center">Выберите день:</br>
<select name="den">
	<option value="p"> Понедельник </option>
	<option value="v"> Вторник </option>
	<option value="s"> Среда </option>
	<option value="ch"> Четверг </option>
	<option value="pi"> Пятница </option>
	<option value="su"> Суббота </option>
	<option value="vo"> Воскресенье </option>
	</p>
</select></br>
<p align="center"> Выберите время:</br>
<input type="time" name="time" min="11:00" max="21:30" required/></p>
<p align="center"> Выберите столик:</br>
<input  name="stol" min="1" max="9" required/></p>
<p align="center"><input style="height: 30px" type="submit" name="submit" value="Отправить"  required/></p>
</div>	
<p align="center" style="background-color:black; color:white"> Мы будем ожидать Вас в указанное Вами дату и время по данному адресу: ул.Льва Толстого д.23к1 </br>
Назовите администратору все введенные вами данные (в том числе и имя), чтобы Вас провели к нужному столику. </p>
</form>

</body> 
</html>