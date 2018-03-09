(function($) {
    "use strict";
    if(screen.width < 767) {
        var count_menu = 0;
        $(".menu-responsive").click(function () {
            if(count_menu == 0) {
                $('#menu').addClass('active');
                $('#wrapper').addClass('mask');
                count_menu = 1;
            }
            else if(count_menu == 1){
                $('.mega-menu-dropdown .dropdown-menu').removeClass('show');
                $('#menu').removeClass('active');
                $('#wrapper').removeClass('mask');
                count_menu = 0;
            }
        });


        var count_dropmenu = 0;
        $("#menu > li.dropdown > a").click(function () {
            if (count_dropmenu == 0) {
                $(this).parent().addClass('active');
                $(this).next().addClass('show');
                count_dropmenu = 1;
            }
            else if (count_dropmenu == 1) {
                $(this).parent().removeClass('open');
                $(this).parent().removeClass('active');
                $(this).next().removeClass('show');
                count_dropmenu = 0;
            }
        });


        $('body').click(function (event) {
            if ( ($('.menu-responsive').has(event.target).length == 0 && !$('.menu-responsive').is(event.target))
                && ($('#menu').has(event.target).length == 0 && !$('#menu').is(event.target)) ) {
                if (count_menu == 1) {
                    $('.mega-menu-dropdown .dropdown-menu').removeClass('show');
                    $("#menu > li.dropdown").removeClass('active');
                    $('#menu').removeClass('active');
                    $('#wrapper').removeClass('mask');
                    count_menu = 0;
                    count_dropmenu = 0;
                }
            }
        });

    }



//    /* Clicks within the dropdown won't make
//     it past the dropdown itself */
//    $("#menu,.menu-responsive").click(function(e){
//        e.stopPropagation();
//    });

})(jQuery);