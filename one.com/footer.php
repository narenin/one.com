 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/nav-script.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom-script.js"></script>

 <script>

        // Phone navigation toggle sub menu 
        var res = function () {

            if ($(window).width() <= 767) {
                $(".sub-menu").hide();
                $(".nav-down-sub-img ul").hide();
                $(".nav-down-img a").click(function () {
                    var target = $(this).parent().children(".sub-menu");
                    $(target).toggle();
                });
                $(".nav-down-sub-img a").click(function () {
                    var target = $(this).parent().children("ul");
                    $(target).toggle();
                });

            } else {
                $('.nav-down-img a').off("click");
                // $('.nav-down-sub-img a').off("click");
            }
        };
        $(document).ready(function () {
            $(window).resize(res);
            res();
        });
    </script>
    <?php 
    wp_footer();
    ?>
</body>

</html>