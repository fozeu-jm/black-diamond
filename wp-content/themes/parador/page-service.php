<?php get_header(); ?>

<section class="site-hero inner-page overlay" style="background-image: url(<?php echo get_field('banner'); ?>)" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade">
                <h1 class="heading mb-3">Nos Services</h1>
                <ul class="custom-breadcrumbs mb-4">
                    <li><a href="<?php echo esc_url(site_url('')) ?>">Accueil</a></li>
                    <li>&bullet;</li>
                    <li>Services</li>
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


<section class="section" id="next">
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

<?php
get_footer();
?>
