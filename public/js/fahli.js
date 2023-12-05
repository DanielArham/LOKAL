$(document).ready(function() {
    var scroll_start = 0;
    var startchange = $('#startchange');
    var offset = startchange.offset();
    if (startchange.length) {
        $(document).scroll(function() {
            scroll_start = $(document).scrollTop();
            if (scroll_start > offset.top) {
                $(".navbar").css('background-color', '#F2F2F2');

            } else {
                $('.navbar').css('background-color', 'transparent');
            }
        });
    }

    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });

    $('#back-to-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });

    $('ul.navbar-nav > li')
        .click(function(e) {
            $('ul.navbar-nav > li')
                .removeClass('active');
            $(this).addClass('active');
        });

    $('.navbar').on('show.bs.collapse', function() {
        $('.navbar').css('background-color', '#F2F2F2');
    }).on('hide.bs.collapse', function() {
        if (scroll_start > offset.top) {
            $(".navbar").css('background-color', '#F2F2F2');

        } else {
            $('.navbar').css('background-color', 'transparent');
        }
    });
});

function order(paket) {
    var subject = "Saya ingin memesan " + paket;
    var body = "Halo admin, saya ingin memesan " + paket + " yang terdapat pada website";
    var url = 'mailto:desainin@fah.li?subject=' + subject + '&body=' + body;
    window.open(url, '_blank').focus();
}

function sendmail() {
    var body = $('#email-cust').val();
    if (body == '') {
        alert("Harap masukkan pesan terlebih dahulu");
        return;
    }
    var subject = "Halo admin";
    var url = 'mailto:desainin@fah.li?subject=' + subject + '&body=' + body;
    window.open(url, '_blank').focus();
}