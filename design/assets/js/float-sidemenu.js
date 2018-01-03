$(function() {
    var offset = $(".sidebar-menu").offset();
    var topPadding = 10;
    $(window).scroll(function() {
        if ($(window).scrollTop() > offset.top) {
            $(".sidebar-menu").stop().animate({
                marginTop: $(window).scrollTop() - offset.top + topPadding
            });
        } else {
            $(".sidebar-menu").stop().animate({
                marginTop: 0
            });
        };
    });
});
