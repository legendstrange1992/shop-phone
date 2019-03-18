<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$name_database = 'shop_phone';

	$ketnoi = mysqli_connect($host,$user,$pass,$name_database);

	mysqli_set_charset($ketnoi,'utf8');
 ?>
