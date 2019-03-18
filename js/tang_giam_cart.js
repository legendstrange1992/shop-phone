$(function(){
    $('.tang').on('click',function(){
        var id_sanpham = $(this).attr('data-id_sanpham');
        var soluong = $('#quantity_input_'+id_sanpham).val();
        soluong++;
        if(soluong == 11){soluong = 10 ;}
        $('#quantity_input_'+id_sanpham).val(soluong);
        
        $.ajax({
            url:'xuly/tang_giam_soluong_item_cart.php',
            data:{id_sanpham,soluong},
            type:'GET',
            dataType:'json',
            success:function(data){
                $('#thanhtien_'+id_sanpham).html(data+' VNĐ');
            }
        })
    })
    $('.giam').on('click',function(){
        var id_sanpham = $(this).attr('data-id_sanpham');
        var soluong = $('#quantity_input_'+id_sanpham).val();
        soluong--;
        if(soluong == 0){soluong = 1 ;}
        $('#quantity_input_'+id_sanpham).val(soluong);
        $.ajax({
            url:'xuly/tang_giam_soluong_item_cart.php',
            data:{id_sanpham,soluong},
            type:'GET',
            dataType:'json',
            success:function(data){
                $('#thanhtien_'+id_sanpham).html(data+' VNĐ');
            }
        })
    })
})