$(function() {
    $('.go-accordion-title').siblings('br').remove();
    $('.go-accordion-content').hide();
    $('.go-accordion-title').on("click", function(){
        var that = this;
        $(that).next('.go-accordion-content').slideToggle(function(){
            $(that).toggleClass("open");
        });
    });
});