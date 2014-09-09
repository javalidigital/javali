<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header(); ?>


<div class="content-wrapper">
	<div class="container inner-wrapper">
		<div class="content page page-full page-home notfound">
			<div id="page-content" role="main">
				
				<div class="big-404"><?php _e("Not Found", 'identiq'); ?></div>
				<div class="sub-404"><?php _e("Sorry, we didn't found the page or post you are looking for.", 'identiq'); ?></div>
				
			</div><!-- #content -->
		</div><!-- #primary -->
		
		<div class="xt-clear clear clearboth clearfix"></div>
	</div>
</div><!-- #content-wrapper -->

<?php get_footer(); ?>