$(function(){
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });

    $('.menu').on('click', function(){
        if ($('nav').hasClass('in')){
            $('nav').toggleClass('in');
            setTimeout(function(){
                $('nav').toggleClass('active');
            }, 500);
        } else {
            $('nav').toggleClass('active');
            setTimeout(function(){
                $('nav').toggleClass('in');
            }, 50);
        }
    });
    $('.nav-close').on('click', function(){
        $('nav').toggleClass('in');
        setTimeout(function(){
            $('nav').toggleClass('active');
        }, 500);
    });
    $('nav a').on('click', function(){
        $('nav').toggleClass('in');
        setTimeout(function(){
            $('nav').toggleClass('active');
        }, 500);
    });
});
