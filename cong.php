<?php 
require('db.php'); 
include('auth.php'); 
?> 
<html>

 <head>

  <meta charset="utf-8">

  <title> Кафе "У Палны" </title>

  <link rel="stylesheet" href="style.css">

 </head>

 <body>
<div class="caf4"> <p align="center"> Кафе "У Палны" </p></div>
<div class="form"> 
	<p align="center"><?php echo $_SESSION['login']; ?> </br> 
	<a class="col" href="logout.php">Выйти</a> </p>
</div></br>
<div class="main" style="text-align:center">

   <p>Поздравляем с успешным заверщением операции!</

  </div>
  <div>

   <p align=center> <a href="index.php" >Вернуться на главную страницу</a></p>

  </div>

 </body>

</html>