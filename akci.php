<?php 
require('db.php'); 
include('auth.php'); 
?> 

<!DOCTYPE html> 
<html> 
<head> 
<meta charset="utf-8"> 
<title>Акции. Кафе "У Палны"</title> 
<link rel="stylesheet" href="style.css">

</head> 
<body class="body"> 
<div class="caf2"> <p align="center"> Кафе "У Палны" </p></div>
<div class="form"> 
	<p align="center"><?php echo $_SESSION['login']; ?> </br> 
	<a class="col" href="logout.php">Выйти</a> </p>
</div></br>
<div class="tip">
<p align="center"> Акции </p>
</div></br>
<div align="center">
<img width="600px" src="03.jpg">
</div></br><hr>
<div class="xfq">
<img width="400px" src="xfq.jpg">
</div>
<div class="bol">
<p align="center"> АКЦИЯ</br>
Кофе(или чай)+ десерт = 200p!</br>
<table border="2px" width="600px">
<tr>
<td> На выбор:
<ul>
<li>Штрудель фруктовый с орехами </li>
<li>Чизкейк Нью-Йорк</li>
</ul></td>
<td> На выбор:
<ul> 
<li>Чай(0,5л)</li>
<li>Кофе(0,5л)</li>
</ul></td>
</tr>
</table> </p>
</div></br>
</body> 
</html>
