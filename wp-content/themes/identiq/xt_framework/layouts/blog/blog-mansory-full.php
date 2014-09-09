<?php

/* Blog Full Template */

global $numposts;

$per_page = $numposts;

// Args

$args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'posts_per_page' => $per_page,
	'paged' => get_query_var('paged')
	);

// Blog Query
$blog_query = new WP_Query( $args );

if($blog_query->have_posts()) : ?>

	<div class="post-list">

		<?php
		// The Loop
		$i = 0;
		while ( $blog_query->have_posts() ) :
			$blog_query->the_post();

			$_class = '';
			if($i == 2) $_class = ' last';
			?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('post-large post-full post-mansory post-mansory-full'.$_class); ?>>

				<?php
					$format = get_post_format();
					if( false === $format )
						$format = 'standard';

					get_template_part( 'xt_framework/layouts/posts/format-mansory', 'standard' );
				?>

			</article>
			<?php
			if($i < 2) $i++;
			else $i = 0;
		endwhile;
		?>

	</div> <!-- .post-list -->

	<?php
		xt_nav_pagination(4, $blog_query->max_num_pages);
endif;

// Restore original Post Data
wp_reset_postdata();
