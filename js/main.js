$(document).ready(function(){   
    PopUpHide();
});
$('.nav-toggle').on('click',function(){
    if($('.burger-menu').hasClass('display-none')){
        $('.burger-menu').removeClass('display-none');
    }else{
        $('.burger-menu').addClass('display-none');
    }
});

$(function(){$("#phone").mask("8(999)-999-9999");})
$(function(){$("#popup_phone").mask("8(999)-999-9999");})

function PopUpShow(){
    $("#popup").show();
    
}
function PopUpHide(){

    $("#popup").hide();
}

$('.drop_bid').click(function(){
    $.fancybox.open({
        src : '#popup',
        opts : {
            touch : false,
        }
    })
});


