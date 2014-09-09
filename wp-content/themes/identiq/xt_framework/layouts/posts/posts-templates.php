<?php

/* Blog Large Layout */

	/* Aside */
	//add_action('post_large_aside', 'xt_blogs_date_block');
	//add_action('post_large_aside', 'xt_blogs_icon');

	/* Main Top */
	add_action('post_large_top', 'xt_blogs_title');
	add_action('post_large_top', 'xt_blogs_meta');

	/* Main Middle */
	add_action('post_large_middle', 'xt_blogs_thumbnail');

	/* Main Bottom */
	add_action('post_large_bottom', 'xt_blogs_excerpt');
	add_action('post_large_bottom', 'xt_blogs_read_more');

/* Blog Medium Layout */

	/* Aside */
	add_action('post_medium_aside', 'xt_blogs_thumbnail');
	//add_action('post_medium_aside_top_block', 'xt_blogs_date_block');
	add_action('post_medium_aside_top_block', 'xt_blogs_icon');

	/* Main Top */
	add_action('post_medium_top', 'xt_blogs_title');

	/* Main Middle */
	//add_action('post_medium_middle', 'xt_blogs_thumbnail');

	/* Main Bottom */
	add_action('post_medium_bottom', 'xt_blogs_excerpt');

	/* After Post */
	add_action('post_medium_after', 'xt_blogs_meta');
	add_action('post_medium_after', 'xt_blogs_read_more');

/* Blog Mansory Layout */

	/* Aside */
	add_action('post_mansory_aside', 'xt_blogs_date_block');
	add_action('post_mansory_aside', 'xt_blogs_icon');

	/* Main Top */
	add_action('post_mansory_top', 'xt_blogs_title');

	/* Main Middle */
	add_action('post_mansory_middle', 'xt_blogs_thumbnail');

	/* Main Bottom */
	add_action('post_mansory_bottom', 'xt_blogs_meta');
	add_action('post_mansory_bottom', 'xt_blogs_excerpt');
	add_action('post_mansory_bottom', 'xt_blogs_read_more');

/* Blog Full Layout */

	/* Aside */
	//add_action('post_full_aside', 'xt_blogs_date_block');
	//add_action('post_full_aside', 'xt_blogs_icon');

	/* Main Top */
	add_action('post_full_top', 'xt_blogs_title');
	add_action('post_full_top', 'xt_blogs_meta');

	/* Main Middle */
	add_action('post_full_middle', 'xt_blogs_thumbnail');

	/* Main Bottom */
	add_action('post_full_bottom', 'xt_blogs_excerpt');
	add_action('post_full_bottom', 'xt_blogs_read_more');

/* Single Post Layout */

	/* Aside */
	//add_action('post_single_aside', 'xt_blogs_date_block');
	//add_action('post_single_aside', 'xt_blogs_icon');

	/* Main Top */
	add_action('post_single_top', 'xt_blogs_title');
	add_action('post_single_top', 'xt_blogs_meta');

	/* Main Middle */
	add_action('post_single_middle', 'xt_blogs_thumbnail');

	/* Main Bottom */
	add_action('post_single_bottom', 'xt_blogs_content');

/* Modules */

	/* 
	* [Module] - Title
	*/
	function xt_blogs_title() {
		$format = get_post_format();
		if( false === $format )
			$format = 'standard';
		?>
		<?php if($format != 'quote' && $format != 'link') : ?>
		<div class="post-title">
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		</div>
		<?php elseif($format == 'link') : ?>
		<div class="post-title">
			<h1><a href="<?php echo get_post_meta(get_the_ID(), '_format_link_url', true); ?>" target="_blank"><?php the_title(); ?></a></h1>
		</div>	
		<?php endif; ?>
		<?php
	}

	/* 
	* [Module] - Icon
	*/
	function xt_blogs_icon() {
		$format = get_post_format();
		if( false === $format )
			$format = 'standard';

		$_iconClass = 'doc-text';

		if($format == 'standard')
			$_iconClass = 'doc-text';
		else if($format == 'gallery')
			$_iconClass = 'picture';
		else if($format == 'image')
			$_iconClass = 'camera';
		else if($format == 'link')
			$_iconClass = 'link';
		else if($format == 'quote')
			$_iconClass = 'quote';
		else if($format == 'video')
			$_iconClass = 'video';
		else if($format == 'audio')
			$_iconClass = 'note-beamed';
		else
			$_iconClass = 'doc-text';

		?>

		<div class="post-format-icon">
			<span><i class="blog-icon-<?php echo $_iconClass; ?>"></i></span>
		</div>

		<?php
	}

	/* 
	* [Module] - Meta
	*/
	function xt_blogs_meta() {
		$format = get_post_format();
		if( false === $format )
			$format = 'standard';
		?>
		<?php if($format != 'quote' && $format != 'link') : ?>
		<div class="post-meta">
			<span class="date"><i class="font-icon-calendar"></i> <?php echo get_the_date(); ?></span>
			<span class="author"><i class="font-icon-user"></i> <?php _e("by", 'identiq'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php the_author(); ?></a></span>
			<span class="cats"><i class="font-icon-tag"></i> <?php _e("In", 'identiq'); ?> <?php the_category(', '); ?></span>
			<span class="comments"><a href="<?php comments_link(); ?>"><i class="font-icon-comments"></i> <?php comments_number( __('No Comments', 'identiq'), __('1 Comment', 'identiq'), __('% Comments', 'identiq') ); ?></a></span>
		</div>
		<?php endif; ?>
		<?php
	}

	/* 
	* [Module] - Excerpt
	*/
	function xt_blogs_excerpt() {
		$format = get_post_format();
		if( false === $format )
			$format = 'standard';
		?>
		<?php if($format != 'quote' && $format != 'link') : ?>
		<div class="post-excerpt">
			<?php if(!CONTENT_AT_BLOG) : ?>
				<?php the_excerpt(); ?>
			<?php else : ?>
				<div class="the-content">
					<?php the_content(); ?>
				</div>
			<?php endif; ?>
		</div>
		<?php endif; ?>
		<?php
	}

	/* 
	* [Module] - Content
	*/
	function xt_blogs_content() {
		$format = get_post_format();
		if( false === $format )
			$format = 'standard';
		?>
		<?php if($format != 'quote' && $format != 'link') : ?>
		<div class="post-content">
			<div class="the-content">
				<?php the_content(); ?>
			</div>
		</div>
		<?php endif; ?>
		<?php
	}

	/* 
	* [Module] - Read More
	*/
	function xt_blogs_read_more() {
		?>
		
		<div class="read-more">
			<a href="<?php the_permalink(); ?>"><?php _e("Read More", 'identiq'); ?></a>
		</div>
		
		<?php
	}

	/* 
	* [Module] - Date Block
	*/
	function xt_blogs_date_block() {
		?>
		
		<div class="date-block">
			<span class="day"><?php the_time("d"); ?></span>
			<span class="month"><?php the_time("M"); ?></span>
		</div>
		
		<?php
	}

	/* 
	* [Module] - Thumbnail
	*/
	function xt_blogs_thumbnail( $blog_type = null ) {
		$format = get_post_format();
		if( false === $format )
			$format = 'standard';

		$_iconClass = 'doc-text';

		$size = 'blog-size';
		if ( 'full' == $blog_type )
			$size = 'blog-size-full';
		elseif ( 'mansory' == $blog_type OR 'medium' == $blog_type )
			$size = 'blog-size-mansory';

		?>

		<?php if($format == 'standard') : ?>

			<?php if( has_post_thumbnail() ) : ?>	
			<div class="thumbnail">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail( $size, array('title' => get_the_title(), 'class' => '') ); ?>
					<div class="post-thumb-hover">
						<span><i class="blog-icon-doc-text"></i></span>
					</div>
				</a>
			</div>
			<?php endif; ?>

		<?php elseif($format == 'gallery') : ?>
			<?php

			$galleryID = rand(0, 1000);

			$args = array(
				'post_type' => 'attachment',
				'numberposts' => -1,
				'post_status' => null,
				'post_parent' => get_the_ID(),
				'orderby' => 'menu_order',
				'order' => 'ASC',
			);
																						  
			$attachments = get_posts( $args );
																						  
			if ( $attachments ) : ?>

				<div class="flexslider thumbnail post-gallery-inner">
					<ul class="slides">
							<?php
								foreach ( $attachments as $attachment ) {
									$thumb = wp_get_attachment_image_src($attachment->ID,  $size);
									$large = wp_get_attachment_image_src($attachment->ID, 'full');
							?>
								<li>
									<a href="<?php echo $large[0]; ?>" rel="prettyPhoto" title="<?php echo str_replace('"', '\'', $attachment->post_excerpt); ?>">
										<img src="<?php echo $thumb[0]; ?>" alt="" />
										<div class="post-thumb-hover">
											<span><i class="blog-icon-camera"></i></span>
										</div>
									</a>
								</li>
							
						<?php	
						} // foreach ?>
					</ul>
				</div>

			<?php endif; ?>

		<?php elseif($format == 'image') : ?>

			<?php if( has_post_thumbnail() ) : ?>	
				<div class="thumbnail">

					<?php
						$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full');
					?>
					<a href="<?php echo $large_image_url[0]; ?>" rel="prettyPhoto" title="<?php the_title(); ?>">
						<?php the_post_thumbnail( $size, array('title' => get_the_title(), 'class' => '') ); ?>
						<div class="post-thumb-hover">
							<span><i class="blog-icon-camera"></i></span>
						</div>
					</a>
				</div>
			<?php endif; ?>

		<?php elseif($format == 'video') : ?>

			<div class="thumbnail post-video-inner">
				<?php
				
				$videoEmbed = get_post_meta(get_the_ID(), '_format_video_embed', true);
					
				if($videoEmbed != '') :
				?>
				<div class="video-frame">
					<div class="video-fluid-wrapper" style="padding-top: 56.25%;">
						<?php echo $videoEmbed; ?>
					</div>
				</div>
				<?php endif; ?>

			</div>

		<?php elseif($format == 'audio') : ?>

			<div class="thumbnail post-audio-inner">
				<?php
				
				$audioEmbed = get_post_meta(get_the_ID(), '_format_audio_embed', true);
					
				if($audioEmbed != '') :
				?>
				<div class="audio-frame">	
						<?php echo $audioEmbed; ?>
				</div>
				<?php endif; ?>

			</div>

		<?php elseif($format == 'quote') : ?>

			<div class="thumbnail post-quote-inner">
				<div class="post-quote">
					<?php the_content(); ?>
				</div>

				<?php
					$authorName = get_post_meta(get_the_ID(), '_format_quote_source_name', true);
					$authorURL = get_post_meta(get_the_ID(), '_format_quote_source_url', true);
				?>
				<?php if($authorName != '') : ?>

					<div class="post-quote-author">
						<?php if($authorURL != '') : ?>
							<a href="<?php echo $authorURL; ?>" target="_blank"><?php echo $authorName; ?></a>
						<?php else : ?>
							<?php echo $authorName; ?>
						<?php endif; ?>
					</div>

				<?php endif; ?>
			</div>

		<?php endif; ?>

		<?php
	}