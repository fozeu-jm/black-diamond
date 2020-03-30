<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <?php wp_head(); ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
        <header class="site-header js-site-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-6 col-lg-4 site-logo" data-aos="fade">
                        <a href="<?php echo esc_url(site_url('')); ?>"><img class="logo-img" style="max-width: 23%; border-radius: 50%;" src="<?php echo get_theme_file_uri('images/logo_transparent.png'); ?>" alt=""></a>
                    </div>
                    <div class="col-6 col-lg-8">


                        <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <!-- END menu-toggle -->

                        <div class="site-navbar js-site-navbar" style="background-size: cover;background-origin: border-box;">
                            <nav role="navigation">
                                <div class="container">
                                    <div class="row full-height align-items-center">
                                        <div class="col-md-6 mx-auto">
                                            <ul class="list-unstyled menu">
                                                <li class="<?php if(is_front_page()){echo 'active';} ?>"><a href="<?php echo esc_url(site_url('')); ?>">Accueil</a></li>
                                                <li class="<?php if(is_page('service') OR get_post_type() == 'product'){echo 'active';} ?>"><a href="<?php echo site_url('/service'); ?>">Services</a></li>
                                                <li class="<?php if(get_post_type() == 'post'){echo 'active';} ?>"><a href="<?php echo esc_url(site_url('blog')) ?>">Actualités</a></li>
                                                <li class="<?php if(is_page('a-propos')){echo 'active';} ?>"><a href="<?php echo esc_url(site_url('a-propos')) ?>">A propos</a></li>
                                                <li class="<?php if(is_page('contact')){echo 'active';} ?>"><a href="<?php echo esc_url(site_url('contact')) ?>">Contact</a></li>
                                                <li class="<?php if(get_post_type() == 'reference'){ echo 'active';} ?>"><a href="<?php echo get_post_type_archive_link('reference'); ?>">Reférences</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END head -->