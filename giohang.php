<?php
	session_start();
	include "ketnoi_database/database.php"; // tra ve $ketnoi



	if(isset($_GET['id_sanpham'])){  // kiem tra bien ten thanh dia chi
		$id_sanpham = $_GET['id_sanpham']; // id = 3   , samsung
		$data = mysqli_query($ketnoi,"select * from dienthoai where MADT = $id_sanpham");
		$row = mysqli_fetch_array($data);  // samsung

		if( $_SESSION['giohang'] == null ){
			$_SESSION['giohang'][$id_sanpham] = array(
				'id_sanpham' => $row['MADT'],
				'tensanpham' => $row['TENDT'],
				'gia' => $row['GIA'],
				'soluong' => 1,
				'thanhtien' => $row['GIA']
			) ;
		}
		else{
			if(array_key_exists($id_sanpham, $_SESSION['giohang'])){
				$_SESSION['giohang'][$id_sanpham]['soluong']++;
				$_SESSION['giohang'][$id_sanpham]['thanhtien'] = $_SESSION['giohang'][$id_sanpham]['soluong'] * $_SESSION['giohang'][$id_sanpham]['gia'];
			}
			else{
				$_SESSION['giohang'][$id_sanpham] = array(
					'id_sanpham' => $row['MADT'],
					'tensanpham' => $row['TENDT'],
					'gia' => $row['GIA'],
					'soluong' => 1,
					'thanhtien' => $row['GIA']
				) ;
			}
		}

		echo '<pre>';
		print_r($_SESSION['giohang']);

	}
 ?>