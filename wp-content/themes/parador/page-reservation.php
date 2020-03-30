<?php
get_header();
?>

<section class="site-hero inner-page overlay" style="background-image: url(<?php echo get_field('banner'); ?>); " data-stellar-background-ratio="0.5">
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
<?php
$test = WC()->cart->get_cart_contents_count();
if ($test) {
    if (isset($_REQUEST['message'])) {
        ?>
        <div style="margin-top: 100px;" class = "container">
            <div class = "row">
                <div class = "col-12 text-center">
                    <span style='font-family: "Ubuntu", sans-serif; color: red;font-weight: bold;'>
                        <?php echo $_REQUEST['message']; ?>

                    </span>
                </div>
            </div>
        </div>
    <?php }
    ?>
    <section class="section contact-section" id="next">
        <div class="container">
            <div class="row">
                <?php
                $test = WC()->cart->get_cart_contents();
                $later;
                foreach ($test as $values) {
                    $product1 = new WC_Product($values['product_id']);
                    $the_product_factory = new WC_Product_Factory();
                    $product1 = $the_product_factory->get_product($product1);
                    $later = $product1;
                    $feature = getFeaturedImage($product1->get_id());
                    ?>
                    <div style="box-shadow: -18px 15px 99px -21px #888888; height: auto; padding-top: 20px; margin-bottom: 90px;" class="col-md-5 " data-aos="fade-up">
                        <a href="<?php echo $product1->get_permalink(); ?>" class="room">
                            <figure style="" class="img-wrap">
                                <img src="<?php echo $feature; ?>" alt="KaizerWebDesgin" class="img-fluid mb-3">
                            </figure>
                            <div class="p-3 text-center room-info">
                                <h2 style="font-family: unset; font-weight: bold"><?php echo $product1->get_title(); ?></h2>
                                <span class="text-uppercase letter-spacing-1">En savoir plus</span>
                            </div>
                        </a>
                    </div>
                <?php } ?>

                <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                    <?php global $wp ?>
                    <form action="<?php echo esc_url(home_url($wp->request)); ?>" method="post" class="bg-white p-md-5 p-4 mb-5 border">
                        <div class="row">
                            <div style="margin-top: -20px;" class="col-12 text-center">
                                <h2 style="font-weight: bold; font-family: 'Ubuntu', sans-serif;">Demande de reservation</h2>
                            </div>
                        </div>
                        <div style="margin-top: 30px;" class="row">
                            <div class="col-md-6 form-group">
                                <label class="text-black font-weight-bold" for="nom">Nom</label>
                                <input name="nom" type="text" id="nom" class="form-control ">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="text-black font-weight-bold" for="prenom">Prénom</label>
                                <input name="prenom" type="text" id="prenom" class="form-control ">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="text-black font-weight-bold" for="email">Email</label>
                                <input name="email" type="email" id="email" class="form-control ">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="text-black font-weight-bold" for="tel">Téléphone</label>
                                <input name="telephone" type="text" id="tel" class="form-control ">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="text-black font-weight-bold" for="ville">Ville</label>
                                <input name="town" type="text" id="ville" class="form-control ">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="text-black font-weight-bold" for="address">Adresse</label>
                                <input name="addresse" type="text" id="adresse" class="form-control ">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="text-black font-weight-bold" for="checkin_date">Date Début reservation</label>
                                <input readonly="" name="begin-date" type="text" id="checkin_date" class="form-control">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="text-black font-weight-bold" for="checkout_date">Date Fin reservation</label>
                                <input readonly="" name="end-date" type="text" id="checkout_date" class="form-control">
                            </div>
                        </div>
                        <?php if (strtoupper($later->get_title()) == 'RESTAURANT') { ?>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="adults" class="font-weight-bold text-black">N° Personnes</label>
                                    <div class="field-icon-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="persons" id="adults" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5+">5+</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="children" class="font-weight-bold text-black">Arrivée</label>
                                    <div class="field-icon-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="arrival" id="children" class="form-control">
                                            <option value="Je ne sais pas">Je ne sais pas</option>
                                            <option value="9:00-10:00">9:00-10:00</option>
                                            <option value="10:00-11:00">10:00-11:00</option>
                                            <option value="11:00-12:00">11:00-12:00</option>
                                            <option value="12:00-13:00">12:00-13:00</option>
                                            <option value="13:00-14:00">13:00-14:00</option>
                                            <option value="14:00-15:00">14:00-15:00</option>
                                            <option value="15:00-16:00">15:00-16:00</option>
                                            <option value="16:00-17:00">16:00-17:00</option>
                                            <option value="17:00-18:00">17:00-18:00</option>
                                            <option value="18:00-19:00">18:00-19:00</option>
                                            <option value="19:00-20:00">19:00-20:00</option>
                                            <option value="20:00-21:00">20:00-21:00</option>
                                            <option value="21:00-22:00">21:00-22:00</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="row mb-4">
                            <div class="col-md-12 form-group">
                                <label class="text-black font-weight-bold" for="message">Plus de details sur la réservation ?</label>
                                <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center form-group">
                                <input name="reserve-now" type="submit" value="Reserver Maintenant" class="btn btn-primary text-white py-3 px-5 font-weight-bold">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
<?php } else {
    ?>

    <section id="next" class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p style='font-size: 16px; font-family: "Ubuntu", sans-serif; font-weight: bold;'>Veuillez choisir un service avant la reservation </p>
                    <p class="mt-4">
                        <a href="<?php echo esc_url(site_url('/service')) ?>" class="btn btn-primary text-white py-3 px-5 font-weight-bold">Nos Services</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <?php
}
?>
<?php
get_footer();
?>