<?php 
require('db.php'); 
session_start(); 
if (isset($_POST['login'])) { 
$login = $_POST['login']; 
$pasw = $_POST['pasw']; 

$query = "SELECT * FROM login WHERE login = '$login'"; 
$result = mysqli_query($conn, $query) or die(mysqli_errno()); 
if (mysqli_num_rows($result) == 0) { 
echo "Пользователя с данным логином не существует</br>"; 
echo "<a href='login.html'>Войти заново</a>"; 
} else { 
$query = " 
SELECT * 
FROM login 
WHERE 
login = '$login' 
AND pass = '".md5($pasw)."' 
"; 
$result = mysqli_query($conn, $query) or die(mysqli_errno()); 
if (mysqli_num_rows($result) == 0) { 
echo "Вы ввели неправильный пароль</br>"; 
echo "<a href='login.html'>Войти заново</a>"; 
} else { 
$_SESSION['login'] = $login; 
header("Location: index.php"); 
echo "Вы успешно авторизованы";  
} 
} 
} 
?>
