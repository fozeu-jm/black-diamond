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


<section class="section contact-section" id="next">
    <div class="container">
        <div class="row">
            <div class="col-md-7 form-container" data-aos="fade-up" data-aos-delay="100">

                <?php
                while (have_posts()) {
                    the_post();
                    the_content();
                }
                ?>

            </div>
            <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
                <div class="row">
                    <div class="col-md-10 ml-auto contact-info">
                        <p><span class="d-block">Address:</span> <span> Centre Yaoundé, Elig-essono</span></p>
                        <p><span class="d-block">Phone:</span> <span> (+237) 696 46 83 33</span></p>
                        <p><span class="d-block">Email:</span> <span> contact@blackdiamond.com</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>