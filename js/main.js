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

    $('.work .page-title').fitText(0.9);
    $('.contact .page-title').fitText(0.85);
    $('.cases .page-title').fitText(0.895);
    $('.page-sub-title').fitText(4.67);

});