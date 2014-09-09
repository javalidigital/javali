<?php
/**
 * Template Name: Page Full
 */

if(!is_front_page())
	get_header();
?>

<?php $sliderAlias = get_post_meta(get_the_ID(), "xt-slider-alias", true);
	
	if($sliderAlias != '' && function_exists('xt_slider')) : ?>

	<div id="xt-slider-wrapper">
		<?php echo xt_slider( array( "id" => $sliderAlias ) ); wp_reset_postdata(); ?>
	</div> <!-- #xt-slider-wrapper -->

<?php endif; ?>

<?php if(!is_front_page()) : ?>
<div class="content-wrapper">
	<div class="container inner-wrapper" id="content-container">
<?php endif; ?>

		<?php do_action('xt_title_wrapper', false, 'page-full'); ?>
	
		<div class="content page page-full">
			<?php do_action('xt_page_content_before'); ?>
			<div id="page-content" role="main">

				<?php
				if(is_front_page()) : ?>

					<?php get_template_part('xt_framework/layouts/pages/content', 'page'); ?>

				<?php else : ?>

					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part('xt_framework/layouts/pages/content', 'page'); ?>
					<?php endwhile; // end of the loop. ?>

				<?php endif; ?>

			</div><!-- #page-content -->
		</div><!-- .content -->
		
		<div class="xt-clear clear clearboth clearfix"></div>

<?php if(!is_front_page()) : ?>
	</div> <!-- #content-container -->
</div><!-- #content-wrapper -->
<?php endif; ?>

<?php 
if(!is_front_page())
	get_footer(); 
?>