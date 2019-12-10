<?php 
include('auth.php'); 
?> 

<!DOCTYPE html> 
<html> 
<head> 
<title>"У Палны"</title> 
<meta charset="utf-8"> 
<link rel="stylesheet" href="style.css">
</head> 
<body class="ip"> 
<div class="caf"> <p align="center"> Кафе "У Палны" </p></div>
<div class="form"> 
	<p align="center"><?php echo $_SESSION['login']; ?> </br> 
	<a class="col" href="logout.php">Выйти</a> </p>
</div> 

<table border="1px" bordercolor="white" width="300" height="50" bgcolor="#666666">
<tr>
<td align="center"><a class="col" href="menu.php"> Меню </a></td>
<td align="center"><a class="col" href="akci.php"> Акции </a></td>
<td align="center"><a class="col" href="kontakt.php"> Контакты </a></td>
</tr>
</table></br>
<div>
<div class="tri">
<img src="img_58.jpg" alt="Картинка">
</div>
<div class="top">
<p class="il" align="center"> Принципы </p><p align="center"> #1: НАТУРАЛЬНОЕ </br></br> Мы используем только натуральные продукты. Никаких заменителей, никаких компромиссов!</br></br></br>
#2: СВЕЖЕЕ </br></br> Мы не экономим на свежести и качестве: каждый день отбираем свежие продукты и готовим с вдохновением и большой ответственностью на нашей большой кухне.</br>
 </p>
</div></div></br>

</body> 
</html>
