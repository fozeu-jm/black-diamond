<?php
get_header();

$custom = new WP_Query(array(
    'posts_per_page' => -1,
    'post_type' => 'slider',
    'orderby' => 'date',
    'order' => 'DESC'
        ));
?>
<section style="margin-bottom: 45px;">

    <div style="height: 100vh" class="hero-slider owl-carousel">
        <?php
        while ($custom->have_posts()) {
            $custom->the_post();
            ?>
            <div class=" site-hero overlay" style="background-image: url(<?php echo get_field('featured'); ?>)" data-stellar-background-ratio="0.5">
                <div class="container ">
                    <div class="row site-hero-inner justify-content-center align-items-center">
                        <div class="col-md-10 text-center" data-aos="fade-up">
                            <span class="custom-caption text-uppercase text-white d-block  mb-3"><?php echo get_field('caption'); ?></span>
                            <h1 class="heading"><?php echo get_field('big_title'); ?></h1>
                        </div>
                    </div>
                </div>

                <a class="mouse smoothscroll" href="#next">
                    <div class="mouse-icon">
                        <span class="mouse-wheel"></span>
                    </div>
                </a>
            </div>
        <?php } wp_reset_postdata(); ?>
    </div>
</section>

<section id="next" class="py-5 bg-light">
    <div class="container">
        <div style="text-align: center;" class="row align-items-center">
            <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
                <figure class="img-absolute">
                    <img src="<?php echo get_theme_file_uri('images/eat.jpg'); ?>" alt="Image" class="img-fluid">
                </figure>
                <img src="<?php echo get_theme_file_uri('images/traiteur.jpg'); ?>" alt="Image" class="img-fluid rounded">
            </div>
            <div class="col-md-12 col-lg-4 order-lg-1 testiral" data-aos="fade-up">
                <h2 class="heading">Bienvenue!</h2>
                <?php
                while (have_posts()) {
                    the_post();
                    ?>
                    <p style="text-align: justify;" class="mb-4"><?php echo get_field('custom1'); ?></p>
                <?php } ?>
                <p style="text-align: center;">
                    <a href="#" class="btn btn-primary text-white py-2 mr-3">A propos</a> 
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div style="padding-left:80px;padding-right: 80px;" class="container-fluid services">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading" data-aos="fade-up">Nos Services</h2>
                <p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
        </div>
        <div class="row">
            <?php
            $custom = new WP_Query(array(
                'post_type' => 'product',
                'post_status' => 'publish',
                'ignore_sticky_posts' => 1,
                'posts_per_page' => '-1',
                'orderby' => 'date',
                'order' => 'ASC'
            ));
            while ($custom->have_posts()) {
                $custom->the_post();
                $feature = getFeaturedImage(get_the_ID());
                ?>
            <div style="margin-bottom: 40px;" class="col-md-6 col-lg-4" data-aos="fade-up">
                    <a href="<?php the_permalink(); ?>" class="room">
                        <figure style="" class="img-wrap">
                            <img src="<?php echo $feature; ?>" alt="KaizerWebDesgin" class="img-fluid mb-3">
                        </figure>
                        <div class="p-3 text-center room-info">
                            <h2><?php the_title(); ?></h2>
                            <span class="text-uppercase letter-spacing-1">Reserver</span>
                        </div>
                    </a>
                </div>
            <?php } wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<section class="section slider-section bg-light">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading" data-aos="fade-up">Black diamond en image</h2>
                <p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
                    <?php
                    while (have_posts()) {
                        the_post();
                        $images = acf_photo_gallery('gallery', get_the_ID());
                        $img_count = count($images);
                        if (count($images)) {
                            for ($counter = 0; $counter < $img_count; $counter++) {
                                ?>
                                <div class="slider-item">
                                    <a href="<?php echo $images[$counter]['full_image_url']; ?>" data-fancybox="images" data-caption="<?php echo $images[$counter]['title']; ?>">
                                        <img src="<?php echo $images[$counter]['full_image_url']; ?>" alt="KaizerWebdesign" class="img-fluid">
                                    </a>
                                </div>
                                <?php
                            }
                        }
                    }wp_reset_postdata();
                    ?>
                </div>
                <!-- END slider -->
            </div>

        </div>
    </div>
</section>

<section class="section bg-image overlay" style="background-image: url('<?php echo get_theme_file_uri('images/hero_3.jpg'); ?>');">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading text-white" data-aos="fade">Menu du restaurant</h2>
                <p class="text-white" data-aos="fade" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
        </div>
        <div class="food-menu-tabs" data-aos="fade">
            <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active letter-spacing-2" id="mains-tab" data-toggle="tab" href="#mains" role="tab" aria-controls="mains" aria-selected="true">Principale</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link letter-spacing-2" id="desserts-tab" data-toggle="tab" href="#desserts" role="tab" aria-controls="desserts" aria-selected="false">Desserts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link letter-spacing-2" id="drinks-tab" data-toggle="tab" href="#drinks" role="tab" aria-controls="drinks" aria-selected="false">Boissons</a>
                </li>
            </ul>

            <div class="tab-content py-5" id="myTabContent">


                <div class="tab-pane fade show active text-left" id="mains" role="tabpanel" aria-labelledby="mains-tab">
                    <div class="row">
                        <?php
                        $custom = new WP_Query(array(
                            'posts_per_page' => -1,
                            'post_type' => 'menu',
                            'orderby' => 'date',
                            'order' => 'ASC'
                        ));
                        while ($custom->have_posts()) {
                            $custom->the_post();
                            if (get_field('category') == 'mains') {
                                ?>
                                <div class="col-md-6 food-menu mb-5">
                                    <span class="d-block text-primary h4 mb-3"><?php echo number_format(get_field('price')); ?> CFA</span>
                                    <h3 class="text-white"><a href="#" class="text-white"><?php the_title(); ?></a></h3>
                                    <p class="text-white text-opacity-7"><?php echo get_field('description'); ?></p>
                                </div>
                                <?php
                            }
                        }wp_reset_postdata();
                        ?>
                    </div>


                </div> <!-- .tab-pane -->

                <div class="tab-pane fade text-left" id="desserts" role="tabpanel" aria-labelledby="desserts-tab">
                    <div class="row">
                        <!-- .tab-pane -->
                        <?php
                        $custom = new WP_Query(array(
                            'posts_per_page' => -1,
                            'post_type' => 'menu',
                            'orderby' => 'date',
                            'order' => 'ASC'
                        ));
                        while ($custom->have_posts()) {
                            $custom->the_post();
                            if (get_field('category') == 'desserts') {
                                ?>
                                <div class="col-md-6 food-menu mb-5">
                                    <span class="d-block text-primary h4 mb-3"><?php echo number_format(get_field('price')); ?> CFA</span>
                                    <h3 class="text-white"><a href="#" class="text-white"><?php the_title(); ?></a></h3>
                                    <p class="text-white text-opacity-7"><?php echo get_field('description'); ?></p>
                                </div>
                                <?php
                            }
                        }wp_reset_postdata();
                        ?>
                    </div>
                </div> 
                <!-- .tab-pane -->
                <div class="tab-pane fade text-left" id="drinks" role="tabpanel" aria-labelledby="drinks-tab">
                    <div class="row">
                        <?php
                        $custom = new WP_Query(array(
                            'posts_per_page' => -1,
                            'post_type' => 'menu',
                            'orderby' => 'date',
                            'order' => 'ASC'
                        ));
                        while ($custom->have_posts()) {
                            $custom->the_post();
                            if (get_field('category') == 'drinks') {
                                ?>
                                <div class="col-md-6 food-menu mb-5">
                                    <span class="d-block text-primary h4 mb-3"><?php echo number_format(get_field('price')); ?> CFA</span>
                                    <h3 class="text-white"><a href="#" class="text-white"><?php the_title(); ?></a></h3>
                                    <p class="text-white text-opacity-7"><?php echo get_field('description'); ?></p>
                                </div>
                                <?php
                            }
                        }wp_reset_postdata();
                        ?>
                    </div>
                </div> <!-- .tab-pane -->
            </div>
        </div>
    </div>
</section>

<section class="section blog-post-entry bg-light">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading" data-aos="fade-up">Actualités</h2>
                <p data-aos="fade-up">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
        </div>
        <div class="row">
            <?php
            $custom = new WP_Query(array(
                'posts_per_page' => 3,
                'post_type' => 'post',
                'orderby' => 'date',
                'order' => 'DESC'
            ));
            while ($custom->have_posts()) {
                $custom->the_post();
                ?>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">
                    <div class="media media-custom d-block mb-4 h-100">
                        <a href="<?php the_permalink(); ?>" class="mb-4 d-block"><img src="<?php echo get_field('blog_thumb'); ?>" alt="KaizerWebDesgin" class="img-fluid"></a>
                        <div class="media-body">
                            <span class="meta-post">  <?php the_time('F d, Y'); ?></span>
                            <h2 class="mt-0 mb-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>
            <?php } wp_reset_postdata(); ?>
        </div>
    </div>
</section>


<?php
get_footer();
?>

