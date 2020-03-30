<?php
get_header();

while(have_posts()){
    the_post();
    $ID = get_the_ID();
}
?>
<section class="site-hero inner-page overlay" style="background-image: url(<?php echo get_field('banner'); ?>)" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade">
                <h1 class="heading mb-3"><?php the_title(); ?></h1>
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
    <div class="container-fluid container-single">
        <div class="row">
            <div class="col-md-5">
                <div class="single-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
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
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
            <div class="col-md-1">

            </div>
            <div style="color: black;" class="col-md-6 desc-div " data-aos="fade-up" data-aos-delay="200">
                <h1 style="font-family: 'Ubuntu', sans-serif; font-weight: bold;"><?php echo the_title(); ?></h1>
                <h4 style="font-family: 'Ubuntu', sans-serif; font-weight: bold; color: #7a5b41;" class="mt-4">25,000 FCFA</h4>
                <div class="panel-group mt-6" id="accordion">
                    <div class="panel panel-default">
                        <div style="width: 100%;" class="panel-heading p-heading btn btn-outline-black-primary mt-4">

                            <a style="color: black; " data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                <h4 style="font-family: 'Ubuntu', sans-serif;margin-top: -7px;" class="panel-title">
                                    Description
                                </h4>
                            </a>
                            <span class="ion-chevron-down"></span>
                        </div>
                        <div style="margin-top: 25px;" id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <?php
                                while (have_posts()) {
                                    the_post();
                                    the_content();
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <?php global $wp ?>
                    <form action="<?php echo esc_url(home_url($wp->request)); ?>" method="POST">
                        <input name="reserve_sub" type="submit" value="Reserver Maintenant" class="btn btn-primary text-white py-2 mr-3" />
                        <?php
                        while (have_posts()) {
                            the_post();
                            ?>
                            <input name="reserv_id" type="hidden" value="<?php echo get_the_ID(); ?>">
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div style="text-align: center; " class="col-12 mb-5">
                <h1 style="font-weight: bold;font-family: unset;">Autres Service</h1>
            </div>

            <?php
            $custom = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'services',
                'orderby' => 'date',
                'order' => 'ASC'
            ));
            while ($custom->have_posts()) {
                $custom->the_post();
                if($ID !== get_the_ID()){
                ?>
            <div style="text-align: center;" class="col-md-6 col-lg-3" data-aos="fade-up">
                    <a href="<?php the_permalink(); ?>" class="room">
                        <figure style="" class="img-wrap">
                            <img src="<?php echo get_field('thumbnail'); ?>" alt="KaizerWebDesgin" class="img-fluid mb-3">
                        </figure>
                        <div class="p-3 text-center room-info">
                            <h2><?php the_title(); ?></h2>
                            <span class="text-uppercase letter-spacing-1">Reserver</span>
                        </div>
                    </a>
                </div>
            <?php } } wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<?php
get_footer();
?>