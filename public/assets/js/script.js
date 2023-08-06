console.log("test");

$(document).ready(function () {
    $(".open_close_nav").click(function () {
        $(".responsive_nav_bar").toggleClass("responsive_bar");
    });

    $(".home_banner_slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        appendDots: $(".home_banner_slider-dots"),
        fade: true,
        cssEase: "linear",
        arrows: false,
        prevArrow:
            " < button class = 'slick-prev home_banner_slider_prev_arrow' > < i class = 'mdi mdi-chevron-left' > < /i> < /button>",
        nextArrow:
            " < button class = 'slick-next home_banner_slider_next_arrow' > < i class = 'mdi mdi-chevron-right' > < /i> < /button>",
    });

    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
});
