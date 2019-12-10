<?php 
	$conn= mysqli_connect ('localhost', 'root','', 'users');
	if (!$conn) {
		die ("Подключение не удалось: ".
		mysqli_connect_error());
	}
?>
