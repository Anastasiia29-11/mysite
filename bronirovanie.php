<?php

  $stolik = filter_var(trim($_POST['stolik']),

  FILTER_SANITIZE_STRING);

  $time = filter_var(trim($_POST['time']),

  FILTER_SANITIZE_STRING);
    $date = filter_var(trim($_POST['date']),

  FILTER_SANITIZE_STRING);

  $email = $_COOKIE['email'];

  $login = $_COOKIE['login'];




  $mysql = new mysqli('localhost','root','','users');

 

  $mysql->query("INSERT INTO `bron` (`date`,`time`,`stolik`,`login`,`email`)

  VALUES('$date','$time','$stolik','$login','$email')"); 

 

  $mysql->close();

  header('Location:cong.php');

?>