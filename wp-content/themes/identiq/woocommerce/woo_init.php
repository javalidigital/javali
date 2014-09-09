<?php

	// Turn off default Woo Styles
	//define('WOOCOMMERCE_USE_CSS', false);

	// Product per Page
	$_productsPerPage = '8';
	if( of_get_option('woo_products_per_page') != '' )
		$_productsPerPage = of_get_option('woo_products_per_page');
	
	add_filter( 'loop_shop_per_page', create_function( '$cols', 'return ' . $_productsPerPage . ';' ), 20 );

	// Remove Breadcrumbs
	remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

	// Products per Row
	add_filter('loop_shop_columns', 'loop_columns');
	if (!function_exists('loop_columns')) {
		function loop_columns() {
			return 3;
		}
	}

	// Shop Wrappers
	add_action('woocommerce_before_main_content', 'xt_woo_wrapper_begin', 5);
	function xt_woo_wrapper_begin() {
		?>
		<div class="content-wrapper">
			<div class="container" id="content-container">
		<?php
	}

	add_action('woocommerce_sidebar', 'xt_woo_wrapper_end', 20);
	function xt_woo_wrapper_end() {
		?>
			</div>
		</div>
		<?php
	}

	// Woo Sidebar
	register_sidebar( array(
		'id'          => 'xt-sidebar-woo',
		'name'        => 'WooCommerce',
		'description' => 'Displayed at Woo Pages',
		'before_title'  => '<h3 class="widgettitle"><span>',
		'after_title'   => '</span></h3>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>'
	) );

	add_action('wp_enqueue_scripts', 'xt_disable_woo_lightbox', 99);

	function xt_disable_woo_lightbox() {
		// Disable default lightbox
		wp_dequeue_script( 'prettyPhoto' );
		wp_dequeue_script( 'prettyPhoto-init' );
		wp_dequeue_style( 'woocommerce_prettyPhoto_css');
	}

	// Change Related Numbers
	add_filter('woocommerce_related_products_args', 'xt_custom_related_items');
	function xt_custom_related_items($args) {
		$args['posts_per_page'] = 3;

		return $args;
	}

	// Change Cross Sales Cart Number
	add_filter('woocommerce_cross_sells_total', 'xt_custom_cross_items');
	function xt_custom_cross_items($num) {
		return 3;
	}

	// Change Cross Sales Cart Columns
	add_filter('woocommerce_cross_sells_columns', 'xt_custom_cross_cols');
	function xt_custom_cross_cols($num) {
		return 3;
	}

	// Ensure cart contents update when products are added to the cart via AJAX (place the following in functions.php)
	add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');
	
	function woocommerce_header_add_to_cart_fragment( $fragments ) {
		global $woocommerce;
		
		ob_start();
		
		?>
		<a class="cart-contents" id="cart-icon" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'acrisshop'); ?>"><?php echo __('Cart', 'acrisshop') . ' <span>(' . $woocommerce->cart->cart_contents_count . ')</span>'; ?></a>
		<?php
		
		$fragments['a.cart-contents'] = ob_get_clean();
		
		return $fragments;
		
	}

	/* Hook in on activation to change image sizes */

	global $pagenow;
	if ( is_admin() && isset( $_GET['activated'] ) && $pagenow == 'themes.php' ) add_action( 'init', 'xt_woocommerce_image_dimensions', 1 );

	function xt_woocommerce_image_dimensions() {
	  	$catalog = array(
			'width' 	=> '480',	// px
			'height'	=> '400',	// px
			'crop'		=> 1 		// true
		);
	 
		$single = array(
			'width' 	=> '600',	// px
			'height'	=> '600',	// px
			'crop'		=> 1 		// true
		);
	 
		$thumbnail = array(
			'width' 	=> '120',	// px
			'height'	=> '120',	// px
			'crop'		=> 0 		// false
		);
	 
		// Image sizes
		update_option( 'shop_catalog_image_size', $catalog ); 		// Product category thumbs
		update_option( 'shop_single_image_size', $single ); 		// Single product image
		update_option( 'shop_thumbnail_image_size', $thumbnail ); 	// Image gallery thumbs
	}