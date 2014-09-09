<?php
do_action('xt_enqueue_blog');

if(!is_front_page())
	get_header();
?>

<?php if(!is_front_page()) : ?>
<div class="content-wrapper">
	<div class="container inner-wrapper" id="content-container">
<?php endif; ?>
		
		<?php do_action('xt_title_wrapper', false, 'archive'); ?>

		<div class="content page page-left blog blog-large">
			<?php do_action('xt_page_content_before'); ?>
			<div id="page-content" role="main">

				<?php if( REMOVE_INNER_TITLE == false ) : ?>
					<header class="entry-header">
						<h1 class="entry-title"><?php single_month_title(' '); ?></h1>
					</header>
				<?php endif; ?>

				<?php if ( have_posts() ) : ?>
					<?php get_template_part('xt_framework/layouts/blog/blog', 'archive'); ?>
				<?php endif; // end of the loop. ?>

			</div><!-- #page-content -->
		</div><!-- .content -->

		<?php get_sidebar('right'); ?>
		
		<div class="xt-clear clear clearboth clearfix"></div>
		
<?php if(!is_front_page()) : ?>
	</div> <!-- #content-container -->
</div><!-- #content-wrapper -->
<?php endif; ?>

<?php 
if(!is_front_page())
	get_footer(); 
?>