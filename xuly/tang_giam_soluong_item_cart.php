<?php
	session_start();
	if(isset($_GET['soluong']) && isset($_GET['id_sanpham']))
	{
		$soluong = $_GET['soluong'];
        $id_sanpham = $_GET['id_sanpham'];
        $_SESSION['giohang'][$id_sanpham]['soluong'] = $soluong;
        $_SESSION['giohang'][$id_sanpham]['thanhtien'] = $soluong * $_SESSION['giohang'][$id_sanpham]['gia'];
        
        $thanhtien_moi = number_format($_SESSION['giohang'][$id_sanpham]['thanhtien']);
        echo json_encode($thanhtien_moi);
	}
	

 ?>