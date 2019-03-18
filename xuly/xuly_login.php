<?php
	include "../ketnoi_database/database.php";
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$result = mysqli_query($ketnoi,"select * from khachhang where TAIKHOAN = '$username' and MATKHAU = '$password'  ");

		if(mysqli_num_rows($result) == 0 ){
			echo 'dang nhap that bai';
		}
		else{
			echo ' dang nhap thanh cong';
		}
	}


 ?>