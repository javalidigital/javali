<?php
/**
 * Template Name: Only Slider
 */

if(!is_front_page())
	get_header();
?>

<?php $sliderAlias = get_post_meta(get_the_ID(), "xt-slider-alias", true);
	
	if($sliderAlias != '' && function_exists('xt_slider')) : ?>

	<div id="xt-slider-wrapper" class="xt-only-slider">
		<?php echo xt_slider( array( "id" => $sliderAlias ) ); wp_reset_postdata(); ?>
	</div> <!-- #xt-slider-wrapper -->

<?php endif; ?>

<?php 
if(!is_front_page())
	get_footer(); 
?>