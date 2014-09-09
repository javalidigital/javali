<?php
/************************
	Content Page No Title
************************/
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
			
			<div class="the-content">
				<?php the_content(); ?>
			</div>

			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'identiq' ), 'after' => '</div>' ) ); ?>

		</div> <!-- .entry-content -->

	</article> <!-- #post -->