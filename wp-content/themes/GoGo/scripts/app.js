jQuery(function() {
    // accordion
    jQuery('.go-accordion-title').siblings('br').remove();
    jQuery('.go-accordion-content').hide();
    jQuery('.go-accordion-title').on("click", function(){
        var that = this;
        jQuery(that).next('.go-accordion-content').slideToggle(function(){
            jQuery(that).toggleClass("open");
        });
    });

    // slider
    jQuery('.slick').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        centerMode: true,
        variableWidth: true
    });

    // jcarousel
    jQuery('#mycarousel').jcarousel();
    jQuery('#mycarousel1').jcarousel();
    jQuery('#mycarousel2').jcarousel();
    jQuery('#mycarousel3').jcarousel();
    jQuery('#mycarousel4').jcarousel();

    // scroll
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('.scrollup').fadeIn();
        } else {
            jQuery('.scrollup').fadeOut();
        }
    });

    jQuery('.scrollup').click(function () {
        jQuery("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
});