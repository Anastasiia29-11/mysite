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
<body class="body"> 
<div class="caf"> <p align="center"> Кафе "У Палны" </p></div>
<div class="form"> 
	<p align="center"><?php echo $_SESSION['login']; ?> </br> 
	<a class="col" href="logout.php">Выйти</a> </p>
</div> 

<table border="1px" bordercolor="white" width="300" height="50" bgcolor="#666666">
<tr>
<td align="center"><a class="col1" href="menu.php"> Меню </a></td>
<td align="center"><a class="col" href="akci.php"> Акции </a></td>
<td align="center"><a class="col" href="kontakt.php"> Контакты </a></td>
</tr>
</table></br>
<div>
<div class="tri">
<img src="img_58.jpg" alt="Картинка">
</div>
<div class="top">
<p> gcghcycjcxhg,hv</p>
</div></div></br>

</body> 
</html>
