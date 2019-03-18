$(function(){
    $('.order').on('click',function(){
        var fullname = $('.fullname').val();
        var phone = $('.phone').val();
        var email = $('.email').val();
        var address = $('.address').val();
        if(fullname == ''){
            alert('fullname is not empty !!!');
            return ;
        }
        if(phone == ''){
            alert('phone is not empty !!!');
            return ;
        }
        if(email == ''){
            alert('email is not empty !!!');
            return ;
        }
        if(address == ''){
            alert('address is not empty !!!');
            return ;
        }
        if(fullname != '' && phone != '' && email != '' && address != ''){
            $.ajax({
                url:'xuly/dathang.php',
                data:{fullname,phone,email,address},
                type:'GET',
                success:function(data){
                    if(data=='success'){
                        swal({
                            title:'Order Comlete !!!',
                            icon : 'success',
                            button : 'OK'
                        }).then(data=>{
                            if(data){
                                window.location.href = "http://localhost/shop-phone/index.php";
                            }
                        })
                    }
                }
            })
        }
    })
});