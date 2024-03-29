$(document).ready(function () {
    PopUpHide();
    $('.popup_widget').hide()

});

$('.nav-toggle').on('click', function () {
    if ($('.burger-menu').hasClass('display-none')) {
        $('.burger-menu').removeClass('display-none');
    } else {
        $('.burger-menu').addClass('display-none');
    }
});

$(function () {
    $("#phone").mask("8(999)-999-9999");
})
$(function () {
    $("#popup_phone").mask("8(999)-999-9999");
})
$(function () {
    $("#popup_phone_widget").mask("8(999)-999-9999");
})

function PopUpShow() {
    $("#popup").show();

}

function PopUpHide() {
    $("#popup-success").hide();
    $("#popup").hide();
    $("#popup-img1").hide();
    $("#popup-img2").hide();
}

$('.drop_bid').click(function () {
    $.fancybox.open({
        src: '#popup',
        opts: {
            touch: false,
        }
    })
});
$('.callback-bt').click(function () {
    $.fancybox.open({
        src: '#popup_widget',
        opts: {
            touch: false,
        }
    })
});

$("#main_form").validate({
    rules: {
        name: {
            required: true,
        },
        number: {
            required: true
        }
    }
});
$("#popup_form").validate({
    rules: {
        name_popup: {
            required: true,
        },
        number_popup: {
            required: true
        }
    }
});
$("#popup_form_widget").validate({
    rules: {
        number_popup: {
            required: true,
        }
    }
});

$('#main_form').submit(function () {
    if ($(this).find('input.error').length == 0) {
        $('.contact-left_button').attr('disabled', true);
        $.post('ajax/send.php', {
            name: $('input[name=name]').val(),
            number: $('input[name=number]').val(),
            theme: $('input[name=theme]').val(),
            maintext: $('textarea[name=maintext]').val()
        }, function (data, status) {
            if (status == 'success') {
                $('.contact-left_button').attr('disabled', false);
                $.fancybox.open({
                    src: '#popup-success',
                    opts: {
                        touch: false,
                    }
                });
            }
        });
    }
    return false;
});
$('#popup_form').submit(function () {
    if ($(this).find('input.error').length == 0) {
        $('.contact-left_button').attr('disabled', true);
        $.post('ajax/send.php', {
            name: $('input[name=name_popup]').val(),
            number: $('input[name=number_popup]').val()
        }, function (data, status) {
            if (status == 'success') {
                $('.contact-left_button').attr('disabled', false);
                $.fancybox.open({
                    src: '#popup-success',
                    opts: {
                        touch: false,
                    }
                });

            }
        });
    }
    return false;
});
$('.license').on('click', function () {
    if ($(this)[0].id == 1) {
        $.fancybox.open({
            src: '#popup-img1',
            opts: {
                touch: false,
            }
        });
    } else {
        $.fancybox.open({
            src: '#popup-img2',
            opts: {
                touch: false,
            }
        });
    }

});

