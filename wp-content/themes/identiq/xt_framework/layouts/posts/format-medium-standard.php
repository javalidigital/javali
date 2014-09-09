<div class="post-inner<?php if(!has_post_thumbnail()) echo ' post-nothumb'; ?>">

	<?php do_action('post_medium_before', 'medium'); ?>

	<div class="post-aside">

		<?php do_action('post_medium_aside', 'medium'); ?>

		<div class="post-aside-top-block"><?php do_action('post_medium_aside_top_block', 'medium'); ?></div>

	</div> <!-- .post-aside -->

	<div class="post-main">

		<div class="post-main-top"><?php do_action('post_medium_top', 'medium'); ?></div>

		<div class="post-main-middle"><?php do_action('post_medium_middle', 'medium'); ?></div>

		<div class="post-main-bottom"><?php do_action('post_medium_bottom', 'medium'); ?></div>

	</div> <!-- .post-main -->

	<div class="clear clearboth"></div>

	<?php do_action('post_medium_after', 'medium'); ?>

</div> <!-- .post-inner -->