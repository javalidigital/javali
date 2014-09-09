<?php
/**
 * Template Name: Blog Full
 */
 
do_action('xt_enqueue_blog');

if(!is_front_page())
	get_header();
?>

<?php if(!is_front_page()) : ?>
<div class="content-wrapper">
	<div class="container inner-wrapper" id="content-container">
<?php endif; ?>

		<?php do_action('xt_title_wrapper', false, 'blog-full'); ?>

		<div class="content page page-full blog blog-full">
			<?php do_action('xt_page_content_before'); ?>
			<div id="page-content" role="main">

				<?php
				if(is_front_page()) : ?>

					<?php get_template_part('xt_framework/layouts/blog/blog', 'full'); ?>

				<?php else : ?>

					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part('xt_framework/layouts/blog/blog', 'full'); ?>
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
get_footer(); ?>