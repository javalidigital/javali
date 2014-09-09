<?php get_header(); ?>

<?php $sliderAlias = get_post_meta(get_the_ID(), "xt-slider-alias", true);
	
	if($sliderAlias != '' && function_exists('xt_slider')) : ?>

	<div id="xt-slider-wrapper">
		<?php echo xt_slider( array( "id" => $sliderAlias ) ); wp_reset_postdata(); ?>
	</div> <!-- #xt-slider-wrapper -->

<?php endif; ?>

<?php do_action('xt_title_wrapper', false, 'page-default'); ?>

<div class="content-wrapper">
	<div class="container" id="content-container">
		<div class="content page page-left">
			<?php do_action('xt_page_content_before'); ?>
			<div id="page-content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part('xt_framework/layouts/pages/content', 'page'); ?>
				<?php endwhile; // end of the loop. ?>

			</div><!-- #page-content -->
		</div><!-- .content -->

		<?php get_sidebar('right'); ?>
		
		<div class="xt-clear clear clearboth clearfix"></div>
	</div> <!-- #content-container -->
</div><!-- #content-wrapper -->

<?php get_footer(); ?>