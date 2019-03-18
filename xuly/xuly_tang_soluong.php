<?php
	session_start();
	include "../ketnoi_database/database.php";
	$cart = $_SESSION['giohang'];
	if(isset($_GET['soluong']) && isset($_GET['id_sanpham']))
	{
		$soluong = $_GET['soluong'];
		$id_sanpham = $_GET['id_sanpham'];

		$data = mysqli_query($ketnoi,"select * from dienthoai where MADT = $id_sanpham");
		$row = mysqli_fetch_array($data);  // samsung

		if( $_SESSION['giohang'] == null ){
			$_SESSION['giohang'][$id_sanpham] = array(
				'id_sanpham' => $row['MADT'],
				'tensanpham' => $row['TENDT'],
				'gia' => $row['GIA'],
				'hinh' => $row['ANHBIA'],
				'soluong' => $soluong,
				'thanhtien' => $row['GIA']
			) ;
		}
		else{
			if(array_key_exists($id_sanpham, $_SESSION['giohang'])){
				$_SESSION['giohang'][$id_sanpham]['soluong']  = $soluong;
				$_SESSION['giohang'][$id_sanpham]['thanhtien'] = $_SESSION['giohang'][$id_sanpham]['soluong'] * $_SESSION['giohang'][$id_sanpham]['gia'];
			}
			else{
				$_SESSION['giohang'][$id_sanpham] = array(
					'id_sanpham' => $row['MADT'],
					'tensanpham' => $row['TENDT'],
					'gia' => $row['GIA'],
					'hinh' => $row['ANHBIA'],
					'soluong' => $soluong,
					'thanhtien' => $row['GIA']
				) ;
			}
		}
		echo $_SESSION['giohang'][$id_sanpham]['thanhtien'];

	}
	

 ?>