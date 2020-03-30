<?php
get_header();

$custom = new WP_Query(array(
    'posts_per_page' => -1,
    'post_type' => 'page',
    'p' => 7
        ));
while ($custom->have_posts()) {
    $custom->the_post();
?>

<section class="site-hero inner-page overlay" style="background-image: url(<?php echo get_field('banner'); ?>)" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade">
                <h1  class="heading mb-3">Actualités</h1>
                <ul class="custom-breadcrumbs mb-4">
                    <li><a href="<?php echo esc_url(site_url('')) ?>">Accueil</a></li>
                    <li>&bullet;</li>
                    <li>Actualités</li>
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
<?php } wp_reset_postdata(); ?>
<?php
while (have_posts()) {
    the_post();
    $ID = get_the_ID();
    ?>
    <section id="next" class="section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-5">
                    <h2  style='font-weight: bold; text-transform: uppercase;' class="mt-1"> <?php the_title() ?></h2>
                    <p style="text-transform: uppercase; font-style: italic; font-size: 17px;"><?php the_time('F d, Y'); ?></p>
                </div>

                <div class="col-12 blog-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>


<section>
    <div class="container">
        <div class="row">
            <div style="text-align: center; " class="col-12 mb-5">
                <h1 style="font-weight: bold;">Autres Actualités</h1>
            </div>

            <?php
            $i = 0;
            $custom = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'post',
            ));
            while ($custom->have_posts()) {
                $custom->the_post();
                if ($ID !== get_the_ID() AND $i < 4) {
                    ?>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12 post mb-5" data-aos="fade-up" data-aos-delay="100">

                        <div style="background-color: white" class="media media-custom d-block mb-4 h-100">
                            <a href="<?php the_permalink(); ?>" class="mb-4 d-block"><img src="<?php echo get_field('blog_thumb'); ?>" alt="KaizerWebDesign" class="img-fluid"></a>
                            <div class="media-body">
                                <span class="meta-post"><?php the_time('F d, Y'); ?></span>
                                <h2 class="mt-0 mb-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <p style="text-align: justify;"><?php the_excerpt(); ?></p>
                            </div>
                        </div>

                    </div>
                    <?php
                    $i++;
                }
            } wp_reset_postdata();
            ?>
        </div>
    </div>
</section>


<?php
get_footer();
?>
    
