<?php
/**
 * XT Sidebar to be placed at Right side of Content
 */
?>

	<?php if ( is_active_sidebar( 'xt-sidebar-woo' ) ) : ?>
		<div class="widget-area sidebar sidebar-right sidebar-woo" role="complementary">
			<?php dynamic_sidebar( 'xt-sidebar-woo' ); ?>
		</div><!-- #secondary -->
	<?php else : ?>
		<div class="widget-area sidebar sidebar-right" role="complementary">
			<?php dynamic_sidebar( 'xt-sidebar' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>