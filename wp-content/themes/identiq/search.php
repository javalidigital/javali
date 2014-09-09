<?php
do_action('xt_enqueue_blog');

get_header(); ?>

<?php do_action('xt_title_wrapper', false, 'search'); ?>

<div class="content-wrapper">
	<div class="container" id="content-container">
		<div class="content page page-left blog blog-large">
			<?php do_action('xt_page_content_before'); ?>
			<div id="page-content" role="main">
		
			<?php if( REMOVE_INNER_TITLE == false ) : ?>
				<header class="entry-header">
					<h1 class="entry-title"><?php printf( __( '"%s"', 'identiq' ), get_search_query()); ?></h1>
				</header>
			<?php endif; ?>

			<?php if ( have_posts() ) : ?>
				<?php get_template_part('xt_framework/layouts/blog/blog', 'archive'); ?>
			<?php else : ?>

				<div class="message-error">
					<?php _e("None results using these terms, please try again!", 'identiq'); ?>
				</div>

			<?php endif; // end of the loop. ?>

			</div><!-- #page-content -->
		</div><!-- .content -->

		<?php get_sidebar('right'); ?>
		
		<div class="xt-clear clear clearboth clearfix"></div>
	</div> <!-- #content-container -->
</div><!-- #content-wrapper -->

<?php get_footer(); ?>