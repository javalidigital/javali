<?php
/**
 * Template Name: Blog Mansory Full
 */
 
do_action('xt_enqueue_blog_mansory');

if(!is_front_page())
	get_header();
?>

<?php if(!is_front_page()) : ?>
<div class="content-wrapper">
	<div class="container inner-wrapper" id="content-container">
<?php endif; ?>
	
		<?php do_action('xt_title_wrapper', false, 'blog-mansory-full'); ?>

		<div class="content page page-full blog blog-mansory-full">
			<?php do_action('xt_page_content_before'); ?>
			<div id="page-content" role="main">

				<?php
				if(is_front_page()) : ?>

					<?php get_template_part('xt_framework/layouts/blog/blog', 'mansory-full'); ?>
				
				<?php else : ?>

					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part('xt_framework/layouts/blog/blog', 'mansory-full'); ?>
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