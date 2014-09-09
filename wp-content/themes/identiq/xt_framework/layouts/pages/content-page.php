<?php
/************************
	Content Page
************************/
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if( REMOVE_INNER_TITLE == false ) : ?>
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
		<?php endif; ?>
		
		<div class="entry-content">
			
			<div class="the-content">
				<?php the_content(); ?>
			</div>

			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'identiq' ), 'after' => '</div>' ) ); ?>

		</div> <!-- .entry-content -->

	</article> <!-- #post -->