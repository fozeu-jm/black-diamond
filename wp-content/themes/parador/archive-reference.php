<?php
get_header();
?>

<section class="site-hero inner-page overlay" style="background-image: url('<?php echo get_theme_file_uri('images/hero_2.jpg'); ?>')" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade">
                <h1 class="heading mb-3">Nos Références</h1>
                <ul class="custom-breadcrumbs mb-4">
                    <li><a href="<?php echo esc_url(site_url('')) ?>">Accueil</a></li>
                    <li>&bullet;</li>
                    <li>référence</li>
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
            <div class="col-12 table-responsive">
                <table class="table table-bordered table-hover">
                    <tr style="background-color: brown; border: 0;" class="text-center text-white">
                        <th style="background-color: brown; border: 0;">LOGO</th>
                        <th style="background-color: brown; border: 0;">ENTREPRISES / ADMINISTRATIONS</th>
                        <th style="background-color: brown; border: 0;">MANIFESTATIONS</th>
                        <th style="background-color: brown; border: 0;">LIEUX</th>
                    </tr>
                    <?php
                    $custom = new WP_Query(array(
                        'post_type' => 'reference',
                        'post_status' => 'publish',
                        'posts_per_page' => '-1',
                        'orderby' => 'date',
                        'order' => 'ASC'
                    ));

                    while ($custom->have_posts()) {
                        $custom->the_post();
                        ?>
                    <tr class="text-center">
                            <td><img class="img-responsive" src="<?php echo get_field('logo'); ?>" alt="KaizerWebDesign"></td>
                            <td><?php echo get_field('beneficiaires'); ?></td>
                            <td><?php echo get_field('manifestations'); ?></td>
                            <td><?php echo get_field('lieux'); ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>