$(document).ready(function(){
	$('.tang_giam').click(function(){
		var id_sanpham = $(this).attr('data-id_sanpham') ;
		var soluong = Number($('.soluong').val());
		$.ajax({
			url : 'xuly/xuly_tang_soluong.php',
			type:'GET',
			data : {soluong : soluong , id_sanpham : id_sanpham},
			success:function(data){ //
				const JPY = value => currency(value, { precision: 0, symbol: '¥' });
				$('#thanhtien_'+id_sanpham).html("");
				$('#thanhtien_'+id_sanpham).html(JPY(data).format() + " VNĐ");
			}
		});
	});
})