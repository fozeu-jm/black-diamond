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

<section class="section" id="next">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="success-message">
                    <?php
                    while (have_posts()) {
                        the_post();
                        the_content();
                    }
                    ?>
                    <a href="<?php echo esc_url(site_url('')) ?>" class="btn btn-primary text-white py-3 px-5 font-weight-bold mt-4">Accueil</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>