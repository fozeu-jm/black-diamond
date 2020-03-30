<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */
defined('ABSPATH') || exit;

if (post_password_required()) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}

global $woocommerce;
global $product;
?>

<section class="site-hero inner-page overlay" style="background-image: url(<?php echo get_theme_file_uri('images/hero_4.jpg'); ?>)" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade">
                <h1 class="heading mb-3"><?php echo $product->get_title() ?></h1>
                <ul class="custom-breadcrumbs mb-4">
                    <li><a href="<?php echo esc_url(site_url('/service')) ?>">Services</a></li>
                    <li>&bullet;</li>
                    <li><?php echo $product->get_title() ?></li>
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
                    $images = GetImageUrlsByProductId($product->get_id());
                    $feature = getFeaturedImage($product->get_id());
                    ?>
                    <div class="slider-item">
                        <a href="<?php echo $feature; ?>" data-fancybox="images" data-caption="">
                            <img src="<?php echo $feature; ?>" alt="KaizerWebdesign" class="img-fluid">
                        </a>
                    </div>
                    <?php foreach ($images as $img) { ?>
                        <div class="slider-item">
                            <a href="<?php echo $img; ?>" data-fancybox="images" data-caption="">
                                <img src="<?php echo $img; ?>" alt="KaizerWebdesign" class="img-fluid">
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-1">

            </div>
            <div style="color: black;" class="col-md-6 desc-div " data-aos="fade-up" data-aos-delay="200">
                <h1 style="font-family: 'Ubuntu', sans-serif; font-weight: bold;"><?php echo $product->get_title() ?></h1>
                <?php $prices = getProductPrice($product); ?>
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
                            <div style="text-align: justify;" class="panel-body">
                                <?php
                                echo $product->get_description();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <?php global $wp ?>
                    <form action="<?php echo esc_url(home_url($wp->request)); ?>" method="POST">
                        <input <?php echo $product->is_in_stock() ? ' ' : 'disabled'; ?> name="reserve_sub" type="submit" value="<?php echo $product->is_in_stock() ? 'Reserver Maintenant' : 'Pas De Reservation'; ?>" class="btn btn-primary text-white py-2 mr-3" />
                        <input name="reserv_id" type="hidden" value="<?php echo $product->get_id(); ?>">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="margin-bottom: 10rem;">
    <div class="container">
        <div class="row">
            <div style="text-align: center; " class="col-12 mb-5">
                <h1 style="font-weight: bold;font-family: unset;">Autres Services</h1>
            </div>

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
                if ($product->get_id() !== get_the_ID()) {
                    ?>
                    <div style="text-align: center;" class="col-md-6 col-lg-3" data-aos="fade-up">
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
                    <?php
                }
            } wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

