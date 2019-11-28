<?php
$server= "127.0.0.1:3306";
$user= "mysql";
$pass= "mysql";
$db= "itrem";
require_once 'connect.php'; // подключаем скрипт
 
// подключаемся к серверу
$link = mysqli_connect($server, $user, $pass, $db) 
    or die("Ошибка " . mysqli_error($link));
 
// выполняем операции с базой данных
     
// закрываем подключение
mysqli_close($link);
?>
