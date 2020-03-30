<?php
get_header();
?>

<section class="site-hero inner-page overlay" style="background-image: url(<?php echo get_field('banner'); ?>)" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade">
                <h1 class="heading mb-3"><?php echo get_the_title(); ?></h1>
                <ul class="custom-breadcrumbs mb-4">
                    <li><a href="<?php echo esc_url(site_url('')) ?>">Accueil</a></li>
                    <li>&bullet;</li>
                    <li><?php the_title(); ?></li>
                </ul>
            </div>
        </div>
    </div>

    <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
            <span class="mouse-wheel"></span>
        </div>
    </a>
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
                <h2 style="font-size: 53px;" class="heading">A votre service</h2>
                <?php
                while (have_posts()) {
                    the_post();
                    ?>
                    <p style="text-align: justify;" class="mb-4"><?php echo get_field('custom1'); ?></p>
                <?php } ?>

            </div>
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
                    $custom = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'page',
                        'p' => 5
                    ));
                    while ($custom->have_posts()) {
                        $custom->the_post();
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

<?php
get_footer();
?>