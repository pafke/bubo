$( document ).ready(function() {
    // Elements to inject
    var mySVGsToInject = document.querySelectorAll('img.inject-me');

    // Do the injection
    SVGInjector(mySVGsToInject);
    
    var showtext = 2200;
    var fade = 800;

    $('#cycleThis li:first-child').each(function(){
        checkFade($(this));
    });

    function checkFade(item){
        item.fadeIn(fade, function() {
            if(!item.is(':last-child')){
                item.delay(showtext).fadeOut(fade, function() {
                    $(this).next().each(function(){
                        checkFade($(this));
                    });
                });
            }
        });
    }
    var checkvar = true;
    $('#bgvid').on('timeupdate', function(event) {
        var current = Math.round(event.target.currentTime * 1000);
        var total = Math.round(event.target.duration * 1000);        
        if ( (( total - current ) < 4000) && checkvar == true) {
            checkvar = false;
            //$(this).fadeOut(4000);
            /* var oldClass = $('#cycleThis svg').attr('class');
            $('#cycleThis svg').attr('class',oldClass+' showBubo'); */
        } 
    });
    
    $(document).ready(function(){
        $('.bxslider').bxSlider({
            slideWidth: 325,
            minSlides: 5,
            maxSlides: 5,
            pager: false
        });
    });
});