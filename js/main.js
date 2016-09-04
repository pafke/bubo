$( document ).ready(function() {
    // Elements to inject
    var mySVGsToInject = document.querySelectorAll('img.inject-me');

    // Do the injection
    SVGInjector(mySVGsToInject);

    $('.work .page-title').fitText(0.9);
    $('.contact .page-title').fitText(0.85);
    $('.cases .page-title').fitText(0.895);
    $('.page-sub-title').fitText(4.67);

});