
$('.nav-toggle').on('click',function(){
    if($('.burger-menu').hasClass('display-none')){
        $('.burger-menu').removeClass('display-none');
    }else{
        $('.burger-menu').addClass('display-none');
    }
});
