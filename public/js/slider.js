
$(function(){
    $('.my_slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,

        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
        ]
    });


    $('.my_slider1').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
    });
})
    // $('.my_slaider').slick();


    