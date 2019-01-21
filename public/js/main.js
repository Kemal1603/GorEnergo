var scrolled;
window.onscroll = function() {



    scrolled = window.pageYOffset || document.documentElement.scrollTop;


    if(scrolled > 100){
        $(".block_for_scroll").addClass('active')
    }
    if(100 > scrolled){
        $(".block_for_scroll").removeClass('active')
    }
}

