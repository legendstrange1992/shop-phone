<?php
include "../ketnoi_database/database.php";
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$ngaydathang =  date('d-m-Y h:i:s a');
$fullname = $_GET['fullname'];
$phone = $_GET['phone'];
$email = $_GET['email'];
$address = $_GET['address'];
$cart = $_SESSION['giohang'];
$tongtien = 0;
foreach($cart as $k => $v){
    $tongtien+= $v['thanhtien'];
}
$sql = "insert into dondathang(tenkhachhang,sodienthoai,email,diachi,ngaydathang,tongtien) values ('$fullname',$phone,'$email','$address','$ngaydathang',$tongtien)";
mysqli_query($ketnoi,$sql);
echo "success";

?>