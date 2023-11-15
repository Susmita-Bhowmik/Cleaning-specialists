$(document).ready(function () {

    $(window).scroll(function(){
        var scrollfixed= $(this).scrollTop()
        if(scrollfixed > 0){
            $(".main-nav").addClass("fixed")
        }else{
            $(".main-nav").removeClass("fixed")
        }
    });

    $(".pull_mob_nav").click(function () {
        $(".nav_list").slideToggle(100);
      });
      $(window).resize(function () {
        if ($(this).width()) {
          $(".nav_list").removeAttr("style")
        }
    })

    $('.menu_drop_down > a').click(function(e) {
        e.preventDefault()
        var winwidth = $(window).width();
        if(winwidth){
            if($(this).parent("li").hasClass("sub-active")){
                $(this).parent("li").find("ul").slideUp(200)
                $(this).parent("li").removeClass("sub-active")
            }else{
                $(".menu_drop_down").removeClass("sub-active")
                $(".menu_drop_down").find("ul").slideUp(200)         
                $(this).parent("li").find("ul").slideDown(200)
                $(this).parent("li").addClass("sub-active")
            }
            
        }
    });

    $(".banner_slider_main").slick({
        slidesToShow: 1,
        infinite: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: false,
    });

    $(".feature_slider").slick({
        slidesToShow: 3,
        infinite: true,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        arrows: false,
    });

    $(".latest_project_slider").slick({
        slidesToShow: 3,
        infinite: true,
        slidesToScroll: 3,
        centerMode: true,
        centerPadding: '60px',
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        arrows: false,
    });

    $(".testimonials_slider").slick({
        slidesToShow: 3,
        infinite: true,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        arrows: false,
    });

    

});

// Range

