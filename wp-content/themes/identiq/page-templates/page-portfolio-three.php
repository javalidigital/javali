<?php
/**
 * Template Name: Portfolio Grid 3 Columns
 */

do_action('xt_enqueue_portfolio');

if(!is_front_page())
	get_header();
?>

<?php if(!is_front_page()) : ?>
<div class="content-wrapper">
	<div class="container inner-wrapper" id="content-container">
<?php endif; ?>

		<?php do_action('xt_title_wrapper', false, 'page-portfolio'); ?>

		<div class="content page page-full page-portfolio page-portfolio-grid">
			<?php do_action('xt_page_content_before'); ?>
			<div id="page-content" role="main">

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<?php if( REMOVE_INNER_TITLE == false ) : ?>
						<header class="entry-header">
							<h1 class="entry-title"><?php the_title(); ?></h1>
						</header>
					<?php endif; ?>

					<div class="entry-content">
						<div class="the-content">

								<?php 
								if(!is_front_page())
									the_post();

								the_content(); ?>
								
								<?php 
									// Insert 3 Columns Portfolio
									get_template_part('xt_framework/portfolio/portfolio', 'three'); 
								?>

						</div>
					</div><!-- .entry-content -->
				</article><!-- #post -->

			</div><!-- #content -->
		</div><!-- .page-portfolio -->

<?php if(!is_front_page()) : ?>
	</div> <!-- #content-container -->
</div><!-- #content-wrapper -->
<?php endif; ?>

<?php 
if(!is_front_page())
	get_footer(); 
?>