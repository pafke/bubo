    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

    <script>
        var showtext = 2700;
        var fade = 1500;

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
    </script>
    <?php wp_footer(); ?>
</body>

</html>