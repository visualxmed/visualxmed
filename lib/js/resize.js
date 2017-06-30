$(window).resize(function () { 
   $('body').css('padding-top', parseInt($('.hide-on-search').css("height"))+10);
});

$(window).load(function () { 
   $('body').css('padding-top', parseInt($('.hide-on-search').css("height"))+10);        
});

$(window).scroll(
    {
        previousTop: 0
    }, 
    function () {
    var currentTop = $(window).scrollTop();
    if (currentTop < this.previousTop) {
        $(".header").show();
    } else {
        $(".header").hide();
    }
    this.previousTop = currentTop;
});