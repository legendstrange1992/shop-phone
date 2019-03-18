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
$top_donhang = mysqli_query($ketnoi,"select * from dondathang order by ma_donhang desc limit 1");
$row_top_donhang = mysqli_fetch_assoc($top_donhang);
$ma_donhang_top = $row_top_donhang['ma_donhang'];
foreach($cart as $k => $v){
    $MADT = $v['id_sanpham'];
    $TENDT = $v['tensanpham'];
    $hinh = $v['hinh'];
    $soluong = $v['soluong'];
    $gia = $v['gia'];
    $thanhtien = $v['thanhtien'];
    $sql2 = "insert into chitietdonhang(ma_donhang,MADT,TENDT,hinh,soluong,gia,thanhtien) values ($ma_donhang_top,$MADT,'$TENDT','$hinh',$soluong,$gia,$thanhtien)";
    mysqli_query($ketnoi,$sql2);
}
echo "success";

?>