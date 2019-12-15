<?php 
  $stolik = $_POST['stolik'];

 

  $time = $_POST['time'];

 
    $date =  date("Y-m-d");

  $email = $_POST['email'];

  $login = $_POST['login'];


$mysql =  mysqli_connect('localhost','root','','users');

 

  $mysql->query("INSERT INTO `bron` (`date`,`time`,`stolik`,`login`,`email`)

  VALUES('$date','$time','$stolik','$login','$email')"); 

 

  $mysql->close();

  header('Location:cong.php');

?>
