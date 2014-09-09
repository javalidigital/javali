<form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
	<div>
		<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php _e( 'Search for products', 'acrisshop' ); ?>" />
		<input type="submit" id="searchsubmit" value="<?php echo esc_attr__( 'Search', 'acrisshop' ); ?>" />
		<input type="hidden" name="post_type" value="product" />
	</div>
</form>