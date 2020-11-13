        <!DOCTYPE html>
        <html <?php language_attributes(); ?>>

        <head>
            <meta charset="utf-8"/>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <?php wp_head(); ?>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" />
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper.min.css" />
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/nav-style.css" />
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" />

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

            <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">

        </head>

        <body <?php body_class(); ?>>

            <div class="page-wrapper">
                <!------------ Main heaader --------->
                <div class="container-fluid pl-0 pr-0 full-screen-hgt">
                    <div class="main-header">
                        <div class="container height_inherit">
                            <div class="row height_inherit align-items-center">
                                <div class="col-sm-12 col-md-12 col-lg-3 logo-img">
                                    <a href="<?php echo site_url(); ?>">
                                        <img src="<?php 
                                        if ( has_custom_logo() ){
                                           $imgIdVal = get_theme_mod( 'custom_logo' );
                                       // var_dump($imgIdVal);
                                           $src = wp_get_attachment_url( $imgIdVal,'full' );
                                           echo $src;
                                       }
                                       ?>" class="img-fluid logo-wd" />
                                   </a>
                               </div>
                               <div class="col-sm-12 col-md-12 col-lg-9 d-flex align-items-center justify-content-md-end pl-0 pr-0">
                                <nav id="nav" class="width_100_sm">
                                    <a id="resp-menu" class="responsive-menu" href="#">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ecopack_logo@2x.png" class="img-fluid logo-wd" />
                                            <i class="fa fa-reorder" style="color: #333;"></i>
                                        </div>
                                    </a>


                                    <?php
                                    wp_nav_menu (
                                     array(
                                       'theme_location'  => 'main',
                                       'items_wrap'      => '<ul class="menu mb-0 pl-0 align-items-end">%3$s</ul>',
                                       'container'       => false
                                   )
                                 );
                                 ?>

                                  <!--  <ul class="menu mb-0 pl-0 align-items-end">
                                    <li><a class="homer" href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li>
                                        <a href="#">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Blog 2</a></li>
                                            <li><a href="#">Blog 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Contact</a></li>
                                </ul> -->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>