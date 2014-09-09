<?php
	get_header();	
?>
	<?php if( of_get_option( 'header_callout' ) != '' ) : ?>
	<section id="adv">
			<div class="container">
				<?php echo do_shortcode( of_get_option( 'header_callout' ) ); ?>
			</div>
	</section>
	<?php endif; ?>

	<?php

	/** Starts dynamic code to get the sections from WP Nav Menu **/

	// Get posts IDs from backend
	$theme_pages_ids_opts = '';

	if(has_nav_menu('main_menu')) :
		$menu_name = 'main_menu';
		if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
			$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
		
			$items = wp_get_nav_menu_items($menu->term_id);
			//var_dump( wp_get_nav_menu_items($menu->term_id) );

			foreach ($items as $item) {
				if($item->object == 'page' && $item->target == '' && get_post_meta($item->ID, 'xt_menu_item_external_open', true) != 'on')
					$theme_pages_ids_opts .= $item->object_id . ',n;';
			}
		}
	endif;

	if($theme_pages_ids_opts != '') :

		$theme_pages_ids_opts = substr_replace( $theme_pages_ids_opts, "", -1); // Removes last char of Ids, the ; in the case

		$theme_pages_ids_opts = explode(";", $theme_pages_ids_opts);

		foreach ($theme_pages_ids_opts as $id) {
			$id = explode(',', $id);

			if(function_exists('icl_object_id'))
				$id[0] = icl_object_id($id[0], 'page', false);

			$theme_pages_ids[] = $id[0];

			$theme_pages_external[ $id[0] ] = $id[1];	
		}

		$theme_pages_args = array( 'post__in' => $theme_pages_ids, 'post_type' => 'page', 'orderby' => 'post__in',
				'posts_per_page' => -1 );

		$theme_pages_posts = new WP_Query( $theme_pages_args );

		$currentPage = 0; // 0 => first

		while( $theme_pages_posts->have_posts() ) : $theme_pages_posts->the_post();

			if($theme_pages_external[get_the_ID()] != 'y' ) :

				$slug = xt_get_the_slug();
				$title = get_the_title();
				$link = '#'.$slug;

				$template = get_post_meta( get_the_ID(), '_wp_page_template', true );
			?>

			<!-- Section
			==================================== -->

			<?php do_action('xt_parallax_section_init'); 
			$_the_ID = get_the_ID(); ?>
			<?php do_action('xt_parallax_section_above', $_the_ID); ?>	
			
			<section id="<?php echo $slug; ?>-menu" class="section-page">
				<div class="container">

					<?php
					if($template == 'default') : ?>

						<div class="one-single-title">
							<h1><?php the_title(); ?></h1>
						</div> <!-- .one-single-title -->
								
						<div class="the-content">
							<?php the_content(); ?>	
						</div> <!-- .the-content -->

					<?php
					else : 

						$template_part = str_replace(array('page-templates/', '.php'), '', $template);
						//$template_part = str_replace('.php', '', $template_part);
											
						$template_part = explode('-', $template_part, 2);
											
						get_template_part("page-templates/".$template_part[0], $template_part[1]);

					endif; ?>
				</div> <!-- // .container -->
			</section> <!-- .section -->

			<?php do_action('xt_parallax_section_below', $_the_ID); ?>

			<?php
					
				$currentPage++;
			endif; // if $pTemplate !- 'external'

		endwhile;

		wp_reset_postdata();

	endif; // if $theme_pages_ids != ''
	?>
	
<?php
	get_footer();
?>