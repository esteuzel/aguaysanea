(function($) {
    "use strict";

    // LAYOUT SCROLL MENU FIXED
    $(window).bind('scroll load', function() {
        if($('body').hasClass('menu-options')){
            if ($(this).scrollTop() > 160) {
                $('body').addClass('header-menu-fixed');
            } else {
                $('body').removeClass('header-menu-fixed');
            }
        }
    });

    // THEME SETTING
    $('#theme-setting > a.btn-theme-setting').click(function(){
        if($('#theme-setting').css('right') < '0'){
            $('#theme-setting').css('right', '0');
        } else {
            $('#theme-setting').css('right', '-245px');
        }
    });

    // Layout Options
    $('#layout-wide').click(function() {
        $('body').removeClass('layout-boxed');
        $('body').css('background', '#ffffff');
        $('#layout-boxed').removeClass('active');
        $('#layout-wide').addClass('active');
        $('.boxed-background-patterns, .boxed-background-images').slideUp('fast');
    });
    $('#layout-boxed').click(function() {
        $('body').addClass('layout-boxed');
        $('body').css('background', 'url(../assets/images/patterns/brickwall.png)');
        $('#layout-boxed').addClass('active');
        $('#layout-wide').removeClass('active');
        $('.boxed-background-patterns, .boxed-background-images').slideDown('fast');
    });
    $('.boxed-background-patterns ul > li > a').click(function() {
        var imageUrl = $(this).children().attr("src");
        $('body').css('background', 'url(' + imageUrl + ')');
    });
    $('.boxed-background-images ul > li > a').click(function() {
        var imageUrl = $(this).children().attr("src");
        $('body').css('background', 'url(' + imageUrl + ') no-repeat 100% 100% fixed');
        $('body').css('background-size', 'cover' );
    });

    // Menu Options
    $('#menu-static').click(function() {
        $('body').removeClass('menu-options');
        $('#menu-fixed').removeClass('active');
        $(this).addClass('active');
    });
    $('#menu-fixed').click(function() {
        $('body').addClass('menu-options');
        $('#menu-static').removeClass('active');
        $(this).addClass('active');
    });

    // Get Current Date
    var objToday = new Date(),
        weekday = new Array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'),
        dayOfWeek = weekday[objToday.getDay()],
        months = new Array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
        curMonth = months[objToday.getMonth()],
        curYear = objToday.getFullYear();
    var today = dayOfWeek + ", " + curMonth + " " + objToday.getDate() + ", " + curYear;
    var today_date1 = objToday.getDate() + 1;
    var today_date2 = objToday.getDate() + 2;
    var today_date3 = objToday.getDate() + 3;
    var today1 = curMonth + " " + today_date1 + ", " + curYear;
    var today2 = curMonth + " " + today_date2 + ", " + curYear;
    var today3 = curMonth + " " + today_date3 + ", " + curYear;

    $('.date, .today-weather .info small').html(today);
    $('.date-weather.date1').html(today1);
    $('.date-weather.date2').html(today2);
    $('.date-weather.date3').html(today3);


    // BACK TOP
    $('#back-top a').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 700);
        return false;
    });
})(jQuery);

