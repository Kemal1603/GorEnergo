var scrolled;
window.onscroll = function() {



    scrolled = window.pageYOffset || document.documentElement.scrollTop;


    if(scrolled > 50){
        $(".block_for_scroll").addClass('active')
    }
    if(50 > scrolled){
        $(".block_for_scroll").removeClass('active')
    }
}

