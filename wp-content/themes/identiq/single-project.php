<?php
do_action('xt_enqueue_project');

if(!is_front_page())
	get_header();
?>

<?php if(!is_front_page()) : ?>
<div class="content-wrapper">
	<div class="container inner-wrapper" id="content-container">
<?php endif; ?>

		<?php do_action('xt_title_wrapper', false, 'project'); ?>

		<div class="content project">
			<?php do_action('xt_page_content_before'); ?>
			<div id="page-content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php if( REMOVE_INNER_TITLE_PROJECT == false ) : ?>
						<header class="entry-header project-tile">
							<h1 class="entry-title"><?php the_title(); ?></h1>
						</header>
					<?php endif; ?>

					<?php 
						$layout = 'left';
						
						$_l =  get_post_meta($post->ID, 'layout', true);
						
						if($_l == 'right_sidebar')
							$layout = 'right';
						if($_l == 'full')
							$layout = 'full';
						
						// Require Selected Layout
						get_template_part('xt_framework/portfolio/single', $layout); 
					?>
					
				<?php endwhile; // end of the loop. ?>

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