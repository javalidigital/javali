<?php
/**
*
*	XT Shortcodes WordPress Plugin
*
*	This file contains ALL Shortcodes Declaration Avaliable in the Plugin
**
 */

 function xt_shortcodes_wp_addvar() {
	echo '<script type="text/javascript">var XT_SHORTCODES_DIR = "'. plugins_url("", __FILE__) .'";</script>';
 }
 
 add_action( 'wp_print_scripts', 'xt_shortcodes_wp_addvar' );

/*----------------------*/
/* Enqueue Scripts
/*----------------------*/

function xt_wp_enqueue_scripts() {
	
	/* Enqueue jQuery */
	wp_enqueue_script( 'jquery' );
	
	/* JS Shortcodes Init */
	
	wp_register_script( 'xt-shortcodes-init', plugins_url("assets/js/xt-shortcodes-init.js", __FILE__), array( 'jquery' ), '1.0', true );

	/* Pretty Photo */

	wp_register_script( 'jquery-pretty-min', plugins_url("assets/magnific/jquery.magnific-popup.min.js", __FILE__), array('jquery'), NULL );	
	//wp_register_script( 'jquery-pretty-init', plugins_url("assets/prettyphoto/init.js", __FILE__), array('jquery'), NULL );

	wp_enqueue_script('jquery-pretty-min');
	//wp_enqueue_script("jquery-pretty-init");

	/* Tabs */

	wp_register_script( 'jquery-tabs', plugins_url("assets/js/jquery.tools.tabs.min.js", __FILE__), array( 'jquery' ), '1.2.5', true );
	wp_register_script( 'jquery-tabs-init', plugins_url("assets/js/tabs-init.js", __FILE__), array( 'jquery-tabs' ), '1', true );

	/* Tooltips */

	wp_register_script( 'jquery-tooltip', plugins_url("assets/js/jquery.tipTip.minified.js", __FILE__), array('jquery'), '1.3', true );
	wp_register_script( 'jquery-tool-init', plugins_url("assets/js/tooltip-init.js", __FILE__), array('jquery'), '1', true );	

	/* Caroufredsel */

	wp_register_script( 'jquery-caroufredsel', plugins_url("assets/caroufredsel/jquery.carouFredSel-6.2.0-packed.js", __FILE__),
		array('jquery'), '6.2' );
	wp_register_script( 'jquery-mousewheel', plugins_url("assets/caroufredsel/helper-plugins/jquery.mousewheel.min.js", __FILE__),
		array('jquery-caroufredsel') );
	wp_register_script( 'jquery-touchswipe.', plugins_url("assets/caroufredsel/helper-plugins/jquery.touchSwipe.min.js", __FILE__), 
		array('jquery-caroufredsel') );
	wp_register_script( 'jquery-transit', plugins_url("assets/caroufredsel/helper-plugins/jquery.transit.min.js", __FILE__), 
		array('jquery-caroufredsel') );
	wp_register_script( 'jquery-ba-throttle-debounce', plugins_url("assets/caroufredsel/helper-plugins/jquery.ba-throttle-debounce.min.js", __FILE__), 
		array('jquery-caroufredsel') );

	/* Pin it! */

	wp_register_script( 'pin-init', plugins_url("assets/js/pin-init.js", __FILE__), array(), '1', true );

	/* Twitter */

	wp_register_script( 'tweet-api', plugins_url("assets/js/tweet-api.js", __FILE__), array(), '1', true );
	wp_register_script( 'jquery-tweet', plugins_url("assets/js/jquery.tweet.js", __FILE__), array('jquery'), '1', false );

	/* Stellar and Parallax Init */

	wp_register_script( 'jquery-stellar', plugins_url("assets/js/jquery.stellar.min.js", __FILE__), array( 'jquery' ), '1', true );
	wp_register_script( 'wrapper-init', plugins_url("assets/js/wrapper-init.js", __FILE__), array( 'jquery-stellar' ), '1', true );

	/* Animate Init */
	//wp_register_script( 'appear-lib', plugins_url("assets/js/jquery.appear.js", __FILE__), array( 'jquery' ), '1', true );
	//wp_enqueue_script( 'appear-lib' );

	wp_register_script( 'animate-init', plugins_url("assets/js/animate-init.js", __FILE__), array( 'jquery' ), '1', true );

	// Swiper Carousel
	wp_register_script( 'swiper-carousel', plugins_url("assets/js/swiper.js", __FILE__), array( 'jquery' ), '1', true );

	/* Odometer */
	wp_register_script( 'odometer', plugins_url("assets/js/odometer.min.js", __FILE__), array(), '1', true );
}

add_action( 'wp_print_scripts', 'xt_wp_enqueue_scripts' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue the styles used by ShortCodes
/*-----------------------------------------------------------------------------------*/

function xt_wp_enqueue_styles() {

	/* Enqueue Shortcodes CSS */

	/*
	wp_register_style( 'shortcodes-style', plugins_url("assets/css/shortcodes.css", __FILE__), array(), '1', 'all' );
	wp_enqueue_style( 'shortcodes-style' );
	*/
	
	wp_register_style( 'shortcodes-style-min', plugins_url("assets/css/shortcodes-min.css", __FILE__), array(), '1', 'all' );
	wp_enqueue_style( 'shortcodes-style-min' );

	/* Font Awesome */

	wp_register_style( 'font-awesome', plugins_url("assets/css/fonts/font_awesome/css/font-awesome.css", __FILE__), array(), '1', 'all' );
	//wp_register_style( 'font-awesome-animation', plugins_url("assets/css/fonts/font_awesome/css/animation.css", __FILE__), array(), '1', 'all' );

	/* Pretty Photo */

	/*	
	wp_register_style( 'pretty-style', plugins_url("assets/prettyphoto/css/prettyPhoto.css", __FILE__), array(), '1', 'all' );
	wp_enqueue_style( 'pretty-style' );
	*/

	wp_register_style( 'pretty-style', plugins_url("assets/magnific/magnific-popup.css", __FILE__), array(), '1', 'all' );
	wp_enqueue_style( 'pretty-style' );

	/* Zocial */

	wp_register_style( 'zocial', plugins_url("assets/css/fonts/zocial/css/zocial.css", __FILE__), array(), '1', 'all' );
	wp_register_style( 'zocial-animation', plugins_url("assets/css/fonts/zocial/css/animation.css", __FILE__), array(), '1', 'all' );

	/* Animate */
	wp_register_style( 'animate', plugins_url("assets/css/animate-custom.css", __FILE__), array(), '1', 'all' );

	/* Swiper Carousel */
	wp_register_style( 'swiper-carousel', plugins_url("assets/css/swiper.css", __FILE__), array(), '1', 'all' );

	/* Odometer */
	wp_register_style( 'odometer', plugins_url("assets/css/odometer-theme-minimal.css", __FILE__), array(), '1', 'all' );


}
add_action( 'wp_print_styles', 'xt_wp_enqueue_styles' );

/*
* Adds JS global var to detects if we're a mobile device or not
*
* @since: 1.4
*/

function xt_sc_detects_mobile() {
	?>
<script type="text/javascript">
// <![CDATA[
	var XT_IS_MOBILE = <?php if(wp_is_mobile()) echo 'true'; else echo 'false'; ?>;	
// ]]>
</script>
	<?php
}
add_action('wp_head', 'xt_sc_detects_mobile', 5);

/*-----------------------------------------------------------------------------------*/
/* WP Auto Formatting Fix w/Raw shortocde
/*-----------------------------------------------------------------------------------*/

if(!function_exists("xt_wp_empty_paragraph_fix")) :

	add_filter('the_content', 'xt_wp_empty_paragraph_fix');

	function xt_wp_empty_paragraph_fix($content)
	{   
		$array = array (
			'<p>[' => '[', 
			']</p>' => ']', 
			']<br />' => ']'
		);

		$content = strtr($content, $array);

		return $content;
	}

endif;

/*-----------------------------------------------------------------------------------*/
/* [highlight] Highlight a Text Section
/*-----------------------------------------------------------------------------------*/

function xt_wp_highlight($atts, $content = null, $code)
{
	extract( shortcode_atts( array(
		'color' => '',
		'custom' => '',
	), $atts));
		
	if($color != '') { $color = ' highlight-'.$color; }
		
	if($custom != '') { $custom = ' style="background-color: #'.$custom.';"'; }
		
	return '<span class="highlight'.$color.'" '.$custom.'>'.do_shortcode($content).'</span>';	
}
add_shortcode('xt_highlight', 'xt_wp_highlight');


/*-----------------------------------------------------------------------------------*/
/* Columns Shortcodes
/*-----------------------------------------------------------------------------------*/

function xt_wp_column($atts, $content = null, $code) 
{
	$last = '';
		if ( isset( $atts[0] ) && trim( $atts[0] ) == 'last')
		$last = ' last';

	$code = str_replace("xt_", "", $code);

	return '<div class="'.$code.$last.'">' . do_shortcode(trim($content)) . '</div>';
}

add_shortcode('xt_one_half', 'xt_wp_column'); 
add_shortcode('xt_one_third', 'xt_wp_column'); 
add_shortcode('xt_one_fourth', 'xt_wp_column'); 
add_shortcode('xt_one_fifth', 'xt_wp_column'); 
add_shortcode('xt_one_sixth', 'xt_wp_column'); 

add_shortcode('xt_two_third', 'xt_wp_column'); 
add_shortcode('xt_three_fourth', 'xt_wp_column'); 
add_shortcode('xt_two_fifth', 'xt_wp_column'); 
add_shortcode('xt_three_fifth', 'xt_wp_column'); 
add_shortcode('xt_four_fifth', 'xt_wp_column'); 
add_shortcode('xt_five_sixth', 'xt_wp_column'); 

function xt_wp_column_last($atts, $content = null, $code) 
{

	$code = str_replace("xt_", "", $code);

	return '<div class="'.str_replace('_last','',$code).' last">' . do_shortcode(trim($content)) . '</div><div class="clearboth"></div>';
}

add_shortcode('xt_one_half_last', 'xt_wp_column_last'); 
add_shortcode('xt_one_third_last', 'xt_wp_column_last'); 
add_shortcode('xt_one_fourth_last', 'xt_wp_column_last'); 
add_shortcode('xt_one_fifth_last', 'xt_wp_column_last'); 
add_shortcode('xt_one_sixth_last', 'xt_wp_column_last'); 

add_shortcode('xt_two_third_last', 'xt_wp_column_last'); 
add_shortcode('xt_three_fourth_last', 'xt_wp_column_last'); 
add_shortcode('xt_two_fifth_last', 'xt_wp_column_last'); 
add_shortcode('xt_three_fifth_last', 'xt_wp_column_last'); 
add_shortcode('xt_four_fifth_last', 'xt_wp_column_last'); 
add_shortcode('xt_five_sixth_last', 'xt_wp_column_last'); 

/*-----------------------------------------------------------------------------------*/
/* [snapshot] Snapshot
/*-----------------------------------------------------------------------------------*/

function xt_wp_snapshot($atts, $content = null) {
        extract(shortcode_atts(array(
			"snap" => 'http://s.wordpress.com/mshots/v1/',
			"url" => 'http://www.catswhocode.com',
			"alt" => ' ',
			"width" => '400',
			"height" => '300'
        ), $atts));

	$img = '<img src="' . $snap . '' . urlencode($url) . '?w=' . $width . '&h=' . $height . '" alt="' . $alt . '"/>';
        return $img;
}

add_shortcode("xt_snapshot", "xt_wp_snapshot");


/*-----------------------------------------------------------------------------------*/
/* [pay_icon] Displays a Payment Icon
/*-----------------------------------------------------------------------------------*/

function xt_wp_pay_icon($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'icon' => '',
		'type' => 'curved',
		'size' => '32'
	), $atts));
		
	return '<img src="' . plugins_url("assets/images/pay_icons/", __FILE__) .$icon.'-'.$type.'-'.$size.'px.png" alt="'.$icon.'" />';
}

add_shortcode('xt_pay_icon', 'xt_wp_pay_icon');

/*-----------------------------------------------------------------------------------*/
/* [gplus] Google+
/*-----------------------------------------------------------------------------------*/

function xt_wp_gplus($atts, $content = null) {

	wp_enqueue_script('google-plusone', 'https://apis.google.com/js/plusone.js', array(), null);

    extract(shortcode_atts(array(
		"url" => '',
    ), $atts));
		
	global $post;
	
	if($url == '')
	{
		$url = get_permalink();
	}

	$code = '<div class="plusone"><g:plusone size="tall" href="'.$url.'"></g:plusone></div>';
    return $code;
}

add_shortcode("xt_gplus", "xt_wp_gplus");

/*-----------------------------------------------------------------------------------*/
/* [like] Like Facebook+
/*-----------------------------------------------------------------------------------*/


function xt_wp_like($atts, $content = null) {
    extract(shortcode_atts(array(
		'url' => '',
		'lang' => 'en_US',
		'layout' => ''
    ), $atts));
	
	global $post;
	
	if($url == '')
	{
		$url = get_permalink();
	}

	if($layout == '' OR $layout == 'like')
	{
		return '<script src="http://connect.facebook.net/'.$lang.'/all.js#xfbml=1"></script><div class="fb-like" data-href="'.$url.'" data-send="true" data-width="450" data-show-faces="true"></div>';
	}
	else if($layout == 'count')
	{
		return '<script src="http://connect.facebook.net/'.$lang.'/all.js#xfbml=1"></script><div class="fb-like" data-href="'.$url.'" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>';
	}
	else if($layout == 'box')
	{
		return '<script src="http://connect.facebook.net/'.$lang.'/all.js#xfbml=1"></script><div class="fb-like" data-href="'.$url.'" data-send="true" data-layout="box_count" data-width="450" data-show-faces="true"></div>';
	}
}	

add_shortcode( 'xt_fb_like', 'xt_wp_like' );

/*-----------------------------------------------------------------------------------*/
/* [pin] Pinterest Button
/*-----------------------------------------------------------------------------------*/

function xt_wp_pin($atts) {

	wp_enqueue_script( 'pin-init' );

	extract(shortcode_atts(array(
		'url' => '',
		'image' => '',
		'layout' => 'vertical',
		'title' => '',
    ), $atts));
	
	global $post;
	
	if($url == '')
	{
		$url = get_permalink($post->ID);
	}
	if($image == '') {
		$attch = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
		$image = $attch[0];
	}
	if($title == '')
	{
		$title = get_the_title();
	}
	
	return '<a href="http://pinterest.com/pin/create/button/?url=' . urlencode($url) . '&media=' . $image . '&description=' . $title .'" class="pin-it-button" count-layout="'.$layout.'">Pin It</a>'; 
}

add_shortcode('xt_pin', 'xt_wp_pin');

/*-----------------------------------------------------------------------------------*/
/* [tweet] Retweet Button
/*-----------------------------------------------------------------------------------*/

function xt_wp_tweetmeme(){
	return '<div class="tweetmeme"><script type="text/javascript" src="http://tweetmeme.com/i/scripts/button.js"></script></div>';
}
add_shortcode('xt_tweet', 'xt_wp_tweetmeme');

/*-----------------------------------------------------------------------------------*/
/* [tweet_button] Retweet Button
/*-----------------------------------------------------------------------------------*/

function xt_wp_twitter_button($atts){
	wp_enqueue_script( 'tweet-api' );
	extract(shortcode_atts(array(
		'url' => '',
		'layout' => 'none'
    ), $atts));
	
	global $post;
	
	if($url == '')
	{
		$url = get_permalink($post->ID);
	}
	
	return '<a href="https://twitter.com/share" data-url="'.$url.'" class="twitter-share-button" data-related="" data-lang="en" data-size="medium" data-count="'.$layout.'">Tweet</a>';
}
add_shortcode('xt_tweet_button', 'xt_wp_twitter_button');

/*-----------------------------------------------------------------------------------*/
/* [twitter_follow] Followers Twitter
/*-----------------------------------------------------------------------------------*/

function xt_wp_twitter($atts){
	extract(shortcode_atts(array(
		'account' => '',
		'name' => ''
    ), $atts));
	return '<a href="https://twitter.com/'.$account.'" class="twitter-follow-button" data-show-count="true" data-lang="en">Follow @'.$name.'</a>';
}
add_shortcode('xt_twitter_follow', 'xt_wp_twitter');

/*-----------------------------------------------------------------------------------*/
/* [donate] Donate with PayPal
/*-----------------------------------------------------------------------------------*/

function xt_wp_donate( $atts, $content = null) {
	global $post;
	extract(shortcode_atts(array(
		'account' => 'your-paypal-email-address',
		'for' => $post->post_title,
		'onHover' => '',
	), $atts));
	if(empty($content)) $content='Make A Donation';
		return '<a target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business='.$account.'&item_name=Donation for '.$for.'" title="'.$onHover.'">'.$content.'</a>';
}
add_shortcode('xt_donate', 'xt_wp_donate');

/*-----------------------------------------------------------------------------------*/
/* [blank] Blank line
/*-----------------------------------------------------------------------------------*/

function xt_wp_blankline() {
    return '<p>&nbsp;</p>';
}
add_shortcode('xt_new_blank_line', 'xt_wp_blankline');

/*-----------------------------------------------------------------------------------*/
/* [twitter] Displays RSS feed
/*-----------------------------------------------------------------------------------*/

function xt_wp_twitter_feed($atts) 
{

// wp_enqueue_script( 'jquery-tweet' );

extract(shortcode_atts(array(
		'username' => '',
		'count' => 3,
		'query' => 'null',
		'avatarsize' => 'null',
		'domain' => '',
		'width' => ''
	), $atts));

	return do_shortcode('[rotatingtweets screen_name="'.$username.'" include_rts="1" tweet_count="'.$count.'" no_rotate="1" show_follow="1" show_meta_via="0" show_meta_screen_name="0"]');
}
add_shortcode('xt_twitter', 'xt_wp_twitter_feed');

/*-----------------------------------------------------------------------------------*/
/* [related_posts] Displays Related Posts
/*-----------------------------------------------------------------------------------*/

function xt_wp_related_posts( $atts ) {
	extract(shortcode_atts(array(
	    'limit' => '5',
	), $atts));

	global $wpdb, $post, $table_prefix;

	if ($post->ID) {
		$retval = '<ul>';
 		// Get tags
		$tags = wp_get_post_tags($post->ID);
		$tagsarray = array();
		foreach ($tags as $tag) {
			$tagsarray[] = $tag->term_id;
		}
		$tagslist = implode(',', $tagsarray);

		// Do the query
		$q = "SELECT p.*, count(tr.object_id) as count
			FROM $wpdb->term_taxonomy AS tt, $wpdb->term_relationships AS tr, $wpdb->posts AS p WHERE tt.taxonomy ='post_tag' AND tt.term_taxonomy_id = tr.term_taxonomy_id AND tr.object_id  = p.ID AND tt.term_id IN ($tagslist) AND p.ID != $post->ID
				AND p.post_status = 'publish'
				AND p.post_date_gmt < NOW()
 			GROUP BY tr.object_id
			ORDER BY count DESC, p.post_date_gmt DESC
			LIMIT $limit;";

		$related = $wpdb->get_results($q);
 		if ( $related ) {
			foreach($related as $r) {
				$retval .= '<li><a title="'.wptexturize($r->post_title).'" href="'.get_permalink($r->ID).'">'.wptexturize($r->post_title).'</a></li>';
			}
		} else {
			$retval .= '
	<li>No related posts found</li>';
		}
		$retval .= '</ul>';
		return $retval;
	}
	return;
}
add_shortcode('xt_related_posts', 'xt_wp_related_posts');

/*-----------------------------------------------------------------------------------*/
/* [sh] SyntaxHighlight
/*-----------------------------------------------------------------------------------*/

function xt_wp_sh($atts, $content = null, $code) {

	wp_enqueue_script( 'shCore', plugins_url("assets/syntaxhigh/scripts/shCore.js", __FILE__), array(), NULL );
	
	wp_enqueue_script( 'shAutoloader', plugins_url("assets/syntaxhigh/scripts/shAutoloader.js", __FILE__), array(), NULL );
	
	wp_enqueue_script( 'shInit', plugins_url("assets/syntaxhigh/scripts/shInit.js", __FILE__), array(), '1', true);
	
	wp_enqueue_style( 'shCore-style', plugins_url("assets/syntaxhigh/styles/shCore.css", __FILE__), '1', 'all' );
	
	wp_enqueue_style( 'shThemeDefault', plugins_url("assets/syntaxhigh/styles/shThemeDefault.css", __FILE__), '1', 'all' );
		
	extract(shortcode_atts(array(
		'lang' => 'plain',
	), $atts));
	
	$content = str_replace('<pre>', '', $content);
	$content = str_replace('</pre>', '', $content);
	$content = str_replace('<br />', '', $content);
	$content = str_replace('<', '&lt;', $content);
	
	return '<pre class="brush: '.$lang.'">
   '.$content.'
	</pre>';
}

add_shortcode('xt_sh', 'xt_wp_sh');

/*-----------------------------------------------------------------------------------*/
/* [sitemap] Display a SiteMap
/*-----------------------------------------------------------------------------------*/

function xt_wp_sitemap($atts, $content = null, $code) 
{
	if(isset($atts['type'])){
		switch($atts['type']){
			case 'pages':
				return xt_wp_sitemap_pages($atts);
			case 'posts':
				return xt_wp_sitemap_posts($atts);
			case 'categories':
				return xt_wp_sitemap_categories($atts);
			case 'all':
				return xt_wp_sitemap_all($atts);	
			default:
				return xt_wp_sitemap_all($atts);			
		}
	}
	return '';
}

add_shortcode('xt_sitemap', 'xt_wp_sitemap');

function xt_wp_sitemap_pages($atts)
{
	extract(shortcode_atts(array(
		'number' => '0',
		'depth' => '0',
		'child_of' => '0'
	), $atts));
	
	return '<ul class="sitemap">'.wp_list_pages('depth=0&sort_column=menu_order&child_of='.$child_of.'&echo=0&title_li=&depth='.$depth.'&number='.$number ).'</ul>';
}

function xt_wp_sitemap_categories($atts)
{
	extract(shortcode_atts(array(
		'number' => '0',
		'depth' => '0',
		'show_count' => true,
		'show_feed' => true,
	), $atts));
	
	if($show_count === 'false'){
		$show_count = false;
	}
	if($show_feed === true || $show_feed == 'true'){
		$feed = __( 'RSS', 'xt-plugin' );
	}else{
		$feed = '';
	}

	$exclude_cats = '';
	return '<ul class="sitemap">'.wp_list_categories( array( 'feed' => $feed, 'show_count' => $show_count, 'use_desc_for_title' => false, 'title_li' => false, 'echo' => 0 ) ).'</ul>';
}

function xt_wp_sitemap_posts($atts){
	extract(shortcode_atts(array(
		'show_comment' => true,
		'number' => '0',
		'cat' => '',
		'posts' => '',
	), $atts));
	
	if($number == 0){
		$number = 1000;
	}
	if($show_comment === 'false'){
		$show_comment = false;
	}
	
	$query = array(
		'showposts' => (int)$number,
		'post_type'=>'post',
	);
	if($cat){
		$query['cat'] = $cat;
	}
	if($posts){
		$query['post__in'] = explode(',',$posts);
	}
	
	$archive_query = new WP_Query( $query );
	
	$output = '';
	while ($archive_query->have_posts()) : $archive_query->the_post();
		$output .= '<li><a href="'.get_permalink().'" rel="bookmark" title="'.sprintf( __("Permanent Link to %s", 'xt-plugin'), get_the_title() ).'">'. get_the_title().'</a>'.($show_comment?' ('.get_comments_number().')':'').'</li>';
	endwhile;
	return '<ul class="sitemap">'.$output.'</ul>';
}

function xt_wp_sitemap_all($atts){
	extract(shortcode_atts(array(
		'number' => '0',
		'shows' => 'pages,categories,posts,portfolios',
	), $atts));
	
	$shows = explode(',', $shows);
	if(empty($shows)){
		return '';
	}
	
	$output = '';
	
	if(in_array('pages',$shows)){
		$output .= '<h2>'.__('Pages', 'xt-plugin').'</h2>';
		$output .= sitemap_pages($atts);
		$output .= '<div class="divider top"><a href="#">'.__('Top', 'xt-plugin').'</a></div> ';
	}
	if(in_array('categories',$shows)){
		$output .= '<h2>'.__('Category Archives').'</h2>';
		$output .= sitemap_categories($atts);
		$output .= '<div class="divider top"><a href="#">'.__('Top', 'xt-plugin').'</a></div> ';
	}
	if(in_array('posts',$shows)){
		$output .= '<h2>'.__('Blog Posts').'</h2>';
		$output .= sitemap_posts($atts);
		$output .= '<div class="divider top"><a href="#">'.__('Top', 'xt-plugin').'</a></div> ';
	}
	
	return $output;

}

/*-----------------------------------------------------------------------------------*/
/* [flickr] Display a Flickr Gallery
/*-----------------------------------------------------------------------------------*/

function xt_wp_flickr($atts) 
{
	extract(shortcode_atts(array(
		'id' => '',
		'type' => 'user',
		'count' => 4,
		'display' => 'latest'//lastest or random
	), $atts));
	
	return <<<HTML

<div class="flickr_wrap">
	<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count={$count}&amp;display={$display}&amp;size=s&amp;layout=x&amp;source={$type}&amp;{$type}={$id}"></script>
</div>
<div class="clearboth"></div>

HTML;
}
add_shortcode('xt_flickr', 'xt_wp_flickr');

/*-----------------------------------------------------------------------------------*/
/* [popular_posts] Display a Popular Posts
/*-----------------------------------------------------------------------------------*/

function xt_wp_popular_posts($atts) 
{
	extract(shortcode_atts(array(
		'count' => '4',
		'thumbnail' => 'true',
		'extra' => 'desc',
		'cat' => '',
		'desc_length' => '80',
	), $atts));
	
	$query = array('showposts' => $count, 'nopaging' => 0, 'orderby'=> 'comment_count', 'post_status' => 'publish', 'ignore_sticky_posts' => 1);
	if($cat){
		$query['cat'] = $cat;
	}
	$r = new WP_Query($query);

	if ($r->have_posts()){
		$output = '<div class="popular_posts_wrap">';
		$output .= '<ul class="posts_list">';
		while ($r->have_posts()){
			$r->the_post();
			$output .= '<li>';
			if($thumbnail!='false'){
				$output .= '<a class="thumbnail" href="'.get_permalink().'" title="'.get_the_title().'">';
				if (has_post_thumbnail() ){
					$output .= get_the_post_thumbnail(get_the_ID(),array(65,65),array('title'=>get_the_title(),'alt'=>get_the_title()));
				}else{
					$output .= '<img src="'.plugins_url("assets/widgets/widget_posts_thumbnail.png", __FILE__).'" width="65" height="65" title="'.get_the_title().'" alt="'. get_the_title().'"/>';
				}
				$output .= '</a>';
			}
			$output .= '<div class="post_extra_info">';
			$output .= '<a class="post_title" href="'.get_permalink().'" title="'.get_the_title().'" rel="bookmark">'.get_the_title().'</a>';
			if($extra=='time'){
				$output .= '<time datetime="'.get_the_time('Y-m-d').'">'.get_the_date().'</time>';
			}else{
				global $post;
				$excerpt = $post->post_excerpt;
				if($excerpt==''){
					$excerpt = get_the_content('');
				}
				$output .= '<p>'.do_shortcode(wp_html_excerpt($excerpt,$desc_length)).'...</p>';
			}
			$output .= '</div>';
			$output .= '<div class="clearboth"></div>';
			$output .= '</li>';
		}
		$output .= '</ul>';
		$output .= '</div>';
	} 
	wp_reset_query();
	return ''.$output.'';
}
add_shortcode('xt_popular_posts', 'xt_wp_popular_posts');

/*-----------------------------------------------------------------------------------*/
/* [recent_posts] Display a Recent Posts
/*-----------------------------------------------------------------------------------*/

function xt_wp_recent_posts($atts) 
{
	extract(shortcode_atts(array(
		'count' => '4',
		'thumbnail' => 'true',
		'extra' => 'desc',
		'cat' => '',
		'desc_length' => '80',
	), $atts));
	
	$query = array('showposts' => $count, 'nopaging' => 0, 'post_status' => 'publish', 'ignore_sticky_posts' => 1);
	if($cat){
		$query['cat'] = $cat;
	}
	$r = new WP_Query($query);
	
	if ($r->have_posts()){
		$output = '<div class="popular_posts_wrap">';
		$output .= '<ul class="posts_list">';
		while ($r->have_posts()){
			$r->the_post();
			$output .= '<li>';
			if($thumbnail!='false'){
				$output .= '<a class="thumbnail" href="'.get_permalink().'" title="'.get_the_title().'">';
				if (has_post_thumbnail() ){
					$output .= get_the_post_thumbnail(get_the_ID(),array(65,65),array('title'=>get_the_title(),'alt'=>get_the_title()));
				}else{
					$output .= '<img src="'.plugins_url("assets/widgets/widget_posts_thumbnail.png", __FILE__) .'" width="65" height="65" title="'.get_the_title().'" alt="'. get_the_title().'"/>';
				}
				$output .= '</a>';
			}
			$output .= '<div class="post_extra_info">';
			$output .= '<a class="post_title" href="'.get_permalink().'" title="'.get_the_title().'" rel="bookmark">'.get_the_title().'</a>';
			if($extra=='time'){
				$output .= '<time datetime="'.get_the_time('Y-m-d').'">'.get_the_date().'</time>';
			}else{
				global $post;
				$excerpt = $post->post_excerpt;
				if($excerpt==''){
					$excerpt = do_shortcode(get_the_content(''));
				}
				$output .= '<p>'.wp_html_excerpt($excerpt,$desc_length).'...</p>';
			}
			$output .= '</div>';
			$output .= '<div class="clearboth"></div>';
			$output .= '</li>';
		}
		$output .= '</ul>';
		$output .= '</div>';
	} 
	wp_reset_query();
	return ''.$output.'';
}
add_shortcode('xt_recent_posts', 'xt_wp_recent_posts');

/*-----------------------------------------------------------------------------------*/
/* [fb_box]
/*-----------------------------------------------------------------------------------*/

function xt_wp_fb_box($atts, $content = null, $code) {

	extract(shortcode_atts(array(
		'href' => '',
		'colorscheme' => 'light',
		'show_faces' => 'true',
		'stream' => 'false',
		'header' => 'true',
		'width' => '292',
		'height' => '290'
	), $atts));

	$href = urlencode($href);

	return '<iframe src="//www.facebook.com/plugins/likebox.php?href='.$href.'&amp;width='.$width.'&amp;height='.$height.'&amp;show_faces='.$show_faces.'&amp;colorscheme='.$colorscheme.'&amp;stream='.$stream.'&amp;border_color&amp;header='.$header.'" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:'.$width.'px; height:'.$height.'px;" allowTransparency="true"></iframe>';
}
add_shortcode('xt_fb_box', 'xt_wp_fb_box');

/*-----------------------------------------------------------------------------------*/
/* [pre]
/*-----------------------------------------------------------------------------------*/

function xt_no_texturized_shortcodes_filter( $shortcodes ) {
	$shortcodes[] = 'pre';
	return $shortcodes;
}
	
add_filter( 'no_texturize_shortcodes', 'xt_no_texturized_shortcodes_filter' );

function xt_clean_code_content ( $content ) {
	return str_replace('[', '&#91;', htmlentities( trim( $content ), ENT_NOQUOTES, 'UTF-8', false ) );
}

function xt_wp_pre($atts, $content = null, $code) {	
	return '<pre class="pre"><code>' .do_shortcode( xt_clean_code_content($content) ) . '</code></pre>';
}

add_shortcode('pre', 'xt_wp_pre');

/*-----------------------------------------------------------------------------------*/
/* [accordions] Accordion Wrapper
/*-----------------------------------------------------------------------------------*/

function xt_wp_accordions($atts, $content = null, $code) 
{
	wp_enqueue_script( 'xt-shortcodes-init' );

	extract(shortcode_atts(array(
		//'style' => false
	), $atts));

	return '<div class="accordions">' . do_shortcode($content) . '</div>';
}

add_shortcode('xt_accordions', 'xt_wp_accordions');

/*-----------------------------------------------------------------------------------*/
/* [accordion] Single Accordion
/*-----------------------------------------------------------------------------------*/

function xt_wp_accordion($atts, $content = null, $code) 
{
	wp_enqueue_script( 'xt-shortcodes-init' );
	wp_enqueue_style( 'font-awesome' );
	// wp_enqueue_style( 'font-awesome-animation' );
	
	extract(shortcode_atts(array(
		'open' => '',
		'title' => 'Tab Title',
		'icon' => ''
	), $atts));

	if($open != '')
		$open = ' accordion-active';

	if($icon != '')
		$icon = '<i class="font-icon-'.$icon.'"></i> ';

	return '
	<div class="accordion-title'.$open.'"><a href="#">'.$icon.$title.'<i class="font-icon-plus xt-more-details"></i><i class="font-icon-minus xt-less-details"></i></a></div>
	<div class="accordion-content'.$open.'">' . do_shortcode($content) . '</div>';
}

add_shortcode('xt_accordion', 'xt_wp_accordion');

/*-----------------------------------------------------------------------------------*/
/* [notification] Displays notification box with close button
/*-----------------------------------------------------------------------------------*/

function xt_wp_notification($atts, $content = null, $code) 
{
	wp_enqueue_script( 'xt-shortcodes-init' );
	
	extract(shortcode_atts( array(
		'close' => 'true',
		'type' => 'info',
		'align' => 'center'
	), $atts));
		
	$closeCode = '<a href="#" class="notification-close">x</a>';

	if($close == 'false')
		$closeCode = '';
		
	return '<div class="notification-box notification-box-'.$align.' notification-box-'.$type.'">' . do_shortcode($content) . $closeCode .'</div>';
}

add_shortcode('xt_notification','xt_wp_notification');

/*-----------------------------------------------------------------------------------*/
/* [divider] Display different dividers
/*-----------------------------------------------------------------------------------*/

function xt_wp_sc_divider($atts)
{
	extract(shortcode_atts( array(
		'style' => 'normal',
		'margin' => '40px 0 40px 0',
	), $atts));

	return '<div class="divider divider-'.$style.'" style="margin: '.$margin.';"></div>';
}
add_shortcode('xt_divider', 'xt_wp_sc_divider');

/*-----------------------------------------------------------------------------------*/
/* [dropcap] Add a dropcap to a letter
/*-----------------------------------------------------------------------------------*/

function xt_wp_dropcaps($atts, $content = null, $code) {
	extract( shortcode_atts( array (
		'color' => 'default',
		'type' => 'normal'
	), $atts));

	$color = ' dropcap-'.$color;
	
	return '<span class="dropcap dropcap-'.$type . $color . '">' . do_shortcode($content) . '</span>';
}
add_shortcode('xt_dropcap', 'xt_wp_dropcaps');


/*-----------------------------------------------------------------------------------*/
/* [video] Display a video player
/*-----------------------------------------------------------------------------------*/

function xt_wp_video($atts){
	if(isset($atts['type'])){
		switch($atts['type']){
			case 'youtube':
				return xt_wp_video_youtube($atts);
				break;
			case 'vimeo':
				return xt_wp_video_vimeo($atts);
				break;
			case 'dailymotion':
				return xt_wp_video_dailymotion($atts);
				break;
		}
	}
	return '';
}

add_shortcode('xt_video', 'xt_wp_video');

/* Vimeo Player */

function xt_wp_video_vimeo($atts) {
	extract(shortcode_atts(array(
		'clip_id' 	=> '',
		'max_width' => '',
	), $atts));

	$_css = '';

	if (!empty($clip_id) && is_numeric($clip_id)){

		if($max_width != '')
			$_css = ' max-width: '.$max_width.'; margin-left: auto; margin-right: auto;';

		return "<div class='video-frame' style='".$_css."'><div class='video-fluid-wrapper' style='padding-top: 56.25%;'><iframe src='http://player.vimeo.com/video/$clip_id?&amp;byline=0&amp;portrait=0' frameborder='0'></iframe></div></div>";
	}
}

function xt_wp_video_youtube($atts, $content=null) {
	extract(shortcode_atts(array(
		'clip_id' 	=> '',
		'max_width' => '',
	), $atts));

	$_css = '';
	
	if (!empty($clip_id)){

		if($max_width != '')
			$_css = ' max-width: '.$max_width.'; margin-left: auto; margin-right: auto;';

		return "<div class='video-frame' style='".$_css."'><div class='video-fluid-wrapper' style='padding-top: 56.25%;'><iframe src='http://www.youtube.com/embed/$clip_id' frameborder='0'></iframe></div></div>";
	}
}

function xt_wp_video_dailymotion($atts, $content=null) {

	extract(shortcode_atts(array(
		'clip_id' 	=> ''
	), $atts));
	
	if (!empty($clip_id)){
		return "<div class='video-frame'><div class='video-fluid-wrapper' style='padding-top: 56.25%;'><iframe src=http://www.dailymotion.com/embed/video/$clip_id?theme=none&foreground=%23F7FFFD&highlight=%23FFC300&background=%23171D1B&start=&animatedTitle=&iframe=1&additionalInfos=0&autoPlay=0&hideInfos=0' frameborder='0'></iframe></div></div>";
	}
}

/*-----------------------------------------------------------------------------------*/
/* [gmap] Display a GMAP
/*-----------------------------------------------------------------------------------*/

function xt_wp_googlemap($atts, $content = null, $code) 
{
	
	wp_enqueue_script( 'gmap-api', "http://maps.googleapis.com/maps/api/js?sensor=false", array(), NULL );

	extract(shortcode_atts(array(
		'full' => 'yes',
		'width' => '400',
		'height' => '300',
		'address' => '',
		'zoom' => 10,
		'lat' => '0',
		'long' => '0',
		'marker' => 'no',
		'infowindow' => '',
		'scrollwheel' => 'true'
	), $atts));

	if($width && is_numeric($width)){
		if($width != 'auto') {
			$width = 'width:'.$width.'px;';
		}
		else
		{
			$width = 'width: auto;';
		}
	} else{
		$width = '';
	}
	if ($height && is_numeric($height)){
		$height = 'height:'.$height.'px;';
	} else{
		$height = '';
	}

	if($full == 'yes') {
		$full = ' gmap-full';
	}
	else {
		$full = '';
	}

	$id = rand(100,1000);

	$output = '
	
	<div class="map_canvas gmap-wrapper'.$full.'" id="'.$id.'" style="'.$width.$height.'"></div>
	<script type="text/javascript">
		jQuery(document).ready(function($) {

			var geocoder;
			var map;
			
			geocoder = new google.maps.Geocoder();
			 var myOptions = {
				center: new google.maps.LatLng('.$lat.', '.$long.'),
				zoom: '.$zoom.',
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				scrollwheel: '.$scrollwheel.'
			};
			map = new google.maps.Map(document.getElementById("'.$id.'"),
				myOptions);';

	if($address != '') {
		$output .= '
			var address = "'.$address.'";
			geocoder.geocode( { "address" : address}, function(results, status) {
				if (status == google.maps.GeocoderStatus.OK) {

					map.setCenter(results[0].geometry.location);
				';

				if($marker == 'yes') {

					$output .= '

					var marker = new google.maps.Marker({
						map: map,
						position: results[0].geometry.location,
					});';

					if($infowindow != '') {

						$output .= '

						var infowindow = new google.maps.InfoWindow({
							content: "'.str_replace("/n", '<br />', stripslashes(str_replace('"', "'", $infowindow))) .'"
						});

						google.maps.event.addListener(marker, "click", function() {
							infowindow.open(map,marker);
						});

						infowindow.open(map,marker);';
					}

				}

		$output .= '
					
				} else {
					alert("Geocode was not successful for the following reason: " + status);
				}
			});';
	}
				
	$output .= '
		});	  
	</script>';

	return $output;
}

add_shortcode('xt_gmap','xt_wp_googlemap');

/*-----------------------------------------------------------------------------------*/
/* [p] [div] [br] Markup Shortcodes
/*-----------------------------------------------------------------------------------*/

function xt_wp_div($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'id' => '',
		'class' => '',
	), $atts));
		
	if($id != '') { $id = ' id="'.$id.'"'; }
	if($class!= '') { $class = ' class="'.$class.'"'; }

		
	return '<div '.$id.$class.'>' .do_shortcode($content). '</div>';
}
add_shortcode('xt_div', 'xt_wp_div');
	
function xt_wp_p($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'id' => '',
		'class' => '',
		'align' => '',
	), $atts));
		
	if($id != '') { $id = ' id="'.$id.'"'; }
	if($align!= '') { $align = ' align-'.$align; }
	
	return '<p '.$id.' class="'.$class.$align.'">' .do_shortcode($content). '</p>';
}
add_shortcode('xt_p', 'xt_wp_p');
	
function xt_wp_br($atts, $content = null, $code) {
	return '<br />';
}
add_shortcode('xt_br', 'xt_wp_br');

/**********************************
* [empty_space]
**********************************/

function xt_wp_empty_space($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'gap' => '10',
	), $atts));
		
	return '<div class="empty-space" style="height: '.$gap.'px;"></div>';
}
add_shortcode('xt_empty_space', 'xt_wp_empty_space');

/**********************************
* [clear]
**********************************/

function xt_wp_clear() {

	return '<div class="clearboth"></div>';
}
add_shortcode('xt_clear', 'xt_wp_clear');


/**********************************
* [color_icon]
**********************************/

function xt_wp_color_icon($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'icon' => '',
	), $atts));
		
	return '<span class="coloricon-'.$icon.'""></span>';
}
add_shortcode('xt_color_icon', 'xt_wp_color_icon');

/**********************************
* [box_icon]
**********************************/

function xt_wp_box_icon($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'icon' => ''
	), $atts));
		
	return '<div class="box-icon">
	<span class="coloricon-'.$icon.'""></span>
	'.do_shortcode($content).'
	</div>';
}
add_shortcode('xt_box_icon', 'xt_wp_box_icon');

/**********************************
* [mini_icon]
**********************************/

function xt_wp_mini_icon($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'icon' => '',
	), $atts));
		
	return '<i class="mini-icon-'.$icon.'""></i>';
}
add_shortcode('xt_mini_icon', 'xt_wp_mini_icon');

/**********************************
* [font_icon]
**********************************/

function xt_wp_font_icon($atts, $content = null, $code) {

	wp_enqueue_style('font-awesome');
	wp_enqueue_style('font-awesome-animation');

	extract(shortcode_atts(array(
		'icon' => '',
		'size' => '',
		'color' => '',
		'margin' => '',
		'href' => '',
		'target' => ''
	), $atts));

	$id = rand(0,1000);

	$styleBegin = '';
	$styleEnd = '';
	$styleMiddle = '';

	if($size != '' OR $color != '' OR $margin != '') {
		$styleBegin = '<style type="text/css">
		#font-icon-'.$id.':before {';

		if($size != '') {
			$styleMiddle .= 'font-size: '.$size.';';
		}

		if($color != '') {
			$styleMiddle .= 'color: '.$color.';';
		}

		if($margin != '') {
			$styleMiddle .= 'margin: '.$margin.';';
		}

		$styleEnd = '} </style>';
	}

	$aBegin = '';
	$aEnd = '';

	if($href != '') {

		if($target != '') {
			$target = ' target="'.$target.'"';
		}
		$aBegin = '<a href="'.$href.'"'.$target.'>';
		$aEnd = '</a>';
	}
		
	return $aBegin.'<i id="font-icon-'.$id.'" class="font-icon-'.$icon.'"></i>'.$aEnd.$styleBegin.$styleMiddle.$styleEnd;
}
add_shortcode('xt_font_icon', 'xt_wp_font_icon');

/**********************************
* [box_font_icon]
**********************************/

function xt_wp_box_font_icon($atts, $content = null, $code) {

	wp_enqueue_style('font-awesome');
	wp_enqueue_style('font-awesome-animation');

	extract(shortcode_atts(array(
		'icon' => '',
		'size' => '',
		'color' => '',
		'space' => '',
	), $atts));

	$id = rand(0,1000);

	$styleBegin = '';
	$styleEnd = '';
	$styleMiddle = '';

	if($size != '' OR $color != '') {
		$styleBegin = '<style type="text/css">
		#box-font-icon-'.$id.' [class^="font-icon-"]:before {';

		if($size != '') {
			$styleMiddle .= 'font-size: '.$size.';';
		}

		if($color != '') {
			$styleMiddle .= 'color: '.$color.';';
		}

		$styleEnd = '} </style>';
	}

	if($space != '')
		$space = 'padding-left: '.$space.';';
		
	return '<div id="box-font-icon-'.$id.'" style="'.$space.'" class="box-font-icon">
	<i class="font-icon-'.$icon.'"></i>
	'.do_shortcode($content).'
	</div>'.$styleBegin.$styleMiddle.$styleEnd;
}
add_shortcode('xt_box_font_icon', 'xt_wp_box_font_icon');

/**********************************
* [block_font_icon]
**********************************/

function xt_wp_block_font_icon($atts, $content = null, $code) {

	wp_enqueue_style('font-awesome');
	wp_enqueue_style('font-awesome-animation');

	extract(shortcode_atts(array(
		'icon' => '',
		'href' => '',
		'target' => '',
		'type' => 'square'
	), $atts));

	$id = rand(0,1000);

	$aBegin = '';
	$aEnd = '';

	if($href != '') {

		if($target != '') {
			$target = ' target="'.$target.'"';
		}
		$aBegin = '<a class="icon-wrap" href="'.$href.'"'.$target.'>';
		$aEnd = '</a>';
	}
	else {
		$aBegin = '<span class="icon-wrap">';
		$aEnd = '</span>';
	}

	$output = '<div class="block-font-icon">
		<div class="block-icon-wrapper block-icon-'.$type.'">
			'.$aBegin.'<i id="font-icon-'.$id.'" class="font-icon-'.$icon.'"></i>'.$aEnd.'
		</div>
		<div class="block-font-content">
		'.do_shortcode($content).'
		</div>
	</div>';
		
	return $output;
}
add_shortcode('xt_block_font_icon', 'xt_wp_block_font_icon');

/**********************************
* [list]
**********************************/

function xt_wp_list($atts, $content = null, $code) {
		
	return '<ul class="icon-list">'.do_shortcode($content).'</ul>';
}
add_shortcode('xt_list', 'xt_wp_list');

/**********************************
* [list_mini_item]
**********************************/

function xt_wp_list_mini_item($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'icon' => '',
	), $atts));
		
	return '<li><i class="mini-icon-'.$icon.'"></i> '.do_shortcode($content).'</li>';
}
add_shortcode('xt_list_mini_item', 'xt_wp_list_mini_item');

/**********************************
* [list_font_item]
**********************************/

function xt_wp_list_font_item($atts, $content = null, $code) {
	wp_enqueue_style('font-awesome');
	wp_enqueue_style('font-awesome-animation');

	extract(shortcode_atts(array(
		'icon' => ''
	), $atts));
		
	return '<li><i class="font-icon-'.$icon.'"></i> '.do_shortcode($content).'</li>';
}
add_shortcode('xt_list_font_item', 'xt_wp_list_font_item');


/*-----------------------------------------------------------------------------------*/
/* [pricing_wrapper]
/*-----------------------------------------------------------------------------------*/

function xt_wp_pricing_wrapper($atts, $content = null, $code) {

	wp_enqueue_script("xt-shortcodes-init");

	extract(shortcode_atts(array(
		'cols' => '1',
	), $atts));

	global $numcols;

	$numcols = $cols;

	return '
	<div class="xt-pricing-container">
		<div class="price-container-inner">
			'.do_shortcode($content).'
		</div>
	</div>
	<div class="clearboth clearfix"></div>';
}
add_shortcode('xt_pricing_wrapper', 'xt_wp_pricing_wrapper');

/*-----------------------------------------------------------------------------------*/
/* [pricing_table]
/*-----------------------------------------------------------------------------------*/

function xt_wp_pricing_table($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'top_title' => '',
		'title' => '',
		'price' => '',
		'per' => '',
		'href' => '',
		'button' => '',
		'featured' => '',
		'color' => '',
	), $atts));

	global $numcols;

	$width = (100 / $numcols) - 0.2;

	$width = 'style="width: '.$width.'%;"';

	if($featured == 'yes') {
		$featured = ' pricing-featured';
	}

	$colorTxt = '';
	if($color != '') {
		$colorTxt = ' style="color: '.$color.' !important;"';
		$color = ' style="background: '.$color.' !important;"';
	}

	if($top_title != '')
		$top_title = '<div class="pricing-top"'.$color.'>'.$top_title.'</div>';

	$_pricingBtn = '';

	if($href != '' OR $button != '')
		$_pricingBtn = '<div class="pricing-button">
			<a href="'.$href.'" class="button">'.$button.'</a>
			</div>';

	$_html = '
		<div class="xt-column-pricing'.$featured.'" '.$width.'>
			'.$top_title.'
			<div class="pricing-details">
				<h1'.$colorTxt.'>'.$title.'</h1>
				<h2'.$colorTxt.'>'.$price.'</h2>
				<h3'.$colorTxt.'>'.$per.'</h3>
			</div>
			<div class="pricing-content">
			'.do_shortcode($content).'
			</div>
			'.$_pricingBtn.'
		</div>
	';

	return $_html;
	
}
add_shortcode('xt_pricing_table', 'xt_wp_pricing_table');

/*-----------------------------------------------------------------------------------*/
/* [img] Displays in Images in PrettyPhoto
/*-----------------------------------------------------------------------------------*/

function xt_wp_img($atts, $content = null, $code) {

	extract(shortcode_atts(array(
		'lightbox' => '',
		'type' => 'image', // image or iframe
	), $atts));
	
	$id = rand(0, 1000);

	if($lightbox == 'yes') 
		$lightbox = ' xt-responsive-gallery';
	else
		$lightbox = '';
	
	return '<span rel="'.$type.'" id="xt-responsive-'.$id.'" class="xt-responsive-image'.$lightbox.'">' . do_shortcode($content) . '</span>';
}

add_shortcode('xt_img', 'xt_wp_img');

/*-----------------------------------------------------------------------------------*/
/* [mobile_visibility] Defines Visibility of element
/*-----------------------------------------------------------------------------------*/

function xt_wp_mobile_visibility($atts, $content = null, $code) {

	extract(shortcode_atts(array(
		'type' => ''
	), $atts));
	
	return '<div class="mobile_visibility mobile_visibility-'.$type.'">' . do_shortcode($content) . '</div>';
}

add_shortcode('xt_mobile_visibility', 'xt_wp_mobile_visibility');

/*-----------------------------------------------------------------------------------*/
/* [table] Tables
/*-----------------------------------------------------------------------------------*/

function xt_wp_table($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'id' => '',
		'class' => '',
		'style' => 'zebra',
	), $atts));
		
	if($id != '') { $id = ' id="'.$id.'"'; }
	if($style != '') { $style = 'table_style_'.$style; }
	
	return '<div'.$id.' class="table-style '.$style.' '.$class.'">' .do_shortcode($content). '</div>';
}

add_shortcode('xt_table', 'xt_wp_table');

/*-----------------------------------------------------------------------------------*/
/* [tabs] Different Tabs
/*-----------------------------------------------------------------------------------*/

function xt_wp_tabs($atts, $content = null, $code) 
{
	wp_enqueue_style('font-awesome');
	wp_enqueue_style('font-awesome-animation');

	wp_enqueue_script( 'jquery-tabs' );
	wp_enqueue_script( 'jquery-tabs-init' );
	
	extract(shortcode_atts(array(
		'style' => false
	), $atts));
	
	if (!preg_match_all("/(.?)\[(xt_tab)\b(.*?)(?:(\/))?\](?:(.+?)\[\/xt_tab\])?(.?)/s", $content, $matches)) {
		return do_shortcode($content);
	} else {
		for($i = 0; $i < count($matches[0]); $i++) {
			$matches[3][$i] = shortcode_parse_atts($matches[3][$i]);
		}
		$output = '<ul class="'.$code.'">';
		
		for($i = 0; $i < count($matches[0]); $i++) {
			$icon = '';
			if(@$matches[3][$i]['icon'] != '')
				$icon = '<i class="font-icon-'.$matches[3][$i]['icon'].'"></i> ';

			$output .= '<li><a href="#">' . $icon . @$matches[3][$i]['title'] . '</a></li>';
		}
		$output .= '</ul>';
		$output .= '<div class="panes">';
		for($i = 0; $i < count($matches[0]); $i++) {
			$output .= '<div class="pane">' . do_shortcode(trim($matches[5][$i])) . '</div>';
		}
		$output .= '</div>';
		
		return '<div class="'.$code.'_container">' . $output . '<div class="clear xt-clear clearboth"></div></div>';
	}
}

add_shortcode('xt_tabs_framed', 'xt_wp_tabs');
add_shortcode('xt_tabs_button', 'xt_wp_tabs');
add_shortcode('xt_tabs_vertical', 'xt_wp_tabs');

/*-----------------------------------------------------------------------------------*/
/* [button] Default Button
/*-----------------------------------------------------------------------------------*/

function xt_wp_button($atts, $content = null, $code) 
{
	wp_enqueue_style('font-awesome');
	wp_enqueue_style('font-awesome-animation');

	extract(shortcode_atts(array(
		'id' => '',
		'class' => '',
		'style' => 'normal',
		'size' => 'medium',
		'href' => '#',
		'target' => '_self',
		'color' => 'default',
		'lightbox' => '',
		'type' => '',
		'icon' => ''
	), $atts));
	
	if($id != '') { $id = ' id="'.$id.'" '; } else { $id = ''; }	
	if($target != '') { $target = ' target="'.$target.'" '; }

	if($lightbox == 'yes') {
		$lightbox = ' rel="prettyPhoto"';
		$type = ' mfp-'.$type;
	}

	if($icon != '')
		$icon = '<i class="font-icon-'.$icon.'"></i> ';
	
	return '<a href="'.$href.'" '.$id.' '.$target.' class="'.$type.' button button-'.$size.' button-'.$color.' button-'.$style.' '.$class.'"'.$lightbox.'>' . $icon . trim($content) . '</a>';	
}

add_shortcode('xt_button','xt_wp_button');

/*-----------------------------------------------------------------------------------*/
/* [toggle] Toggle
/*-----------------------------------------------------------------------------------*/

function xt_wp_toggle($atts, $content = null, $code) 
{
	wp_enqueue_script( 'xt-shortcodes-init' );

	wp_enqueue_style( 'font-awesome' );
	// wp_enqueue_style( 'font-awesome-animation' );
	
	extract(shortcode_atts(array(
		'title' => '',
		'open' => '',
		'icon' => ''
	), $atts));

	if($icon != '')
		$icon = '<i class="font-icon-'.$icon.'"></i> ';

	if($open != '')
		$open = ' toggle-active';

	return '<div class="toggle">
		<div class="toggle-title'.$open.'"><a href="#">'.$icon.$title.'<i class="font-icon-plus xt-more-details"></i><i class="font-icon-minus xt-less-details"></i></a></div>
		<div class="toggle-content'.$open.'">' . do_shortcode($content) . '</div>
		</div>';
}

add_shortcode('xt_toggle', 'xt_wp_toggle');

/*-----------------------------------------------------------------------------------*/
/* [tooltip] Displays Tooltip
/*-----------------------------------------------------------------------------------*/

function xt_wp_tooltip($atts, $content = null, $code) {
	wp_enqueue_script( 'jquery-tooltip' );
	wp_enqueue_script( 'jquery-tool-init' );
	
	extract(shortcode_atts(array(
		'title' => '',
		'href' => '',
		'target' => '_self'
	), $atts));
			
	return '<a href="'.$href.'" target="'.$target.'" class="tooltip-top" title="'.$title.'">' . do_shortcode($content) . '</a>';
}

add_shortcode('xt_tooltip', 'xt_wp_tooltip');

/*-----------------------------------------------------------------------------------*/
/* [gfont] Embed Google Font
/*-----------------------------------------------------------------------------------*/

function xt_wp_gfont($atts, $content = null, $code) {	
	extract(shortcode_atts(array(
		'font' => '',
		'size' => '',
		'margin' => '',
		'align' => '',
		'weight' => 'normal', // normal, bold, lighter, bolder, ultra-bold, ultra-light
		'italic' => '' // '', italic
	), $atts));

	if($size != '') {
		$size = 'font-size: '.$size.' !important;';
	}

	if($margin != '') {
		$margin = 'margin: '.$margin.' !important;';
	}

	if($align != '')
		$align = 'text-align: '.$align.';';

	if($weight == 'normal')
		$weight = '400';
	else if($weight == 'bold')
		$weight = '700';
	else if($weight == 'lighter')
		$weight = '300';
	else if($weight == 'bolder')
		$weight = '800';
	else if($weight == 'ultra-bold')
		$weight = '900';
	else if($weight == 'ultra-light')
		$weight = '100';

	$font_style = '';
	if($italic != '')
		$font_style = 'font-style: italic;';

	wp_enqueue_style('gfont_'.$font.$weight.$italic, 'http://fonts.googleapis.com/css?family='. str_replace(' ', '+', $font) .':'.$weight.$italic);
			
	return '
	<div class="gfont" style="font-weight: '.$weight.'; '.$align.' '.$font_style.' font-family: \''.trim($font).'\', serif; '.$size.$margin.'">' . do_shortcode($content) . '</div>';
}

add_shortcode('xt_gfont', 'xt_wp_gfont');

/*-----------------------------------------------------------------------------------*/
/* [gfont_inline] Embed Google Font Inline
/*-----------------------------------------------------------------------------------*/

function xt_wp_gfont_inline($atts, $content = null, $code) {	
	extract(shortcode_atts(array(
		'font' => '',
		'size' => '',
		'weight' => 'normal', // normal, bold, lighter, bolder, ultra-bold, ultra-light
		'italic' => '' // '', italic
	), $atts));

	if($size != '') {
		$size = 'font-size: '.$size.' !important;';
	}

	if($weight == 'normal')
		$weight = '400';
	else if($weight == 'bold')
		$weight = '700';
	else if($weight == 'lighter')
		$weight = '300';
	else if($weight == 'bolder')
		$weight = '800';
	else if($weight == 'ultra-bold')
		$weight = '900';
	else if($weight == 'ultra-light')
		$weight = '100';

	$font_style = '';
	if($italic != '')
		$font_style = 'font-style: italic;';

	wp_enqueue_style('gfont_'.$font.$weight.$italic, 'http://fonts.googleapis.com/css?family='. str_replace(' ', '+', $font) .':'.$weight.$italic);
			
	return '
	<span class="gfont-inline" style="font-weight: '.$weight.'; '.$font_style.' font-family: \''.trim($font).'\', serif; '.$size.'">' . do_shortcode($content) . '</span>';
}

add_shortcode('xt_gfont_inline', 'xt_wp_gfont_inline');

/**********************************
* [social_icon]
**********************************/

function xt_wp_social_icon($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'icon' => '',
		'href' => '',
		'tooltip' => ''
	), $atts));

	wp_enqueue_style('zocial');
	wp_enqueue_style('zocial-animation');

	$class = '';

	if($tooltip != '') {
		wp_enqueue_script( 'jquery-tooltip' );
		wp_enqueue_script( 'jquery-tool-init' );

		$class = ' tooltip-top';
		$tooltip = ' title="'.$tooltip.'"';
	}

	return '<a href="'.$href.'"'.$tooltip.' class="zocial-icon-wrap zocial-'.$icon.$class.'" target="_blank"><i class="zocial-icon-'.$icon.'"></i></a>';
}
add_shortcode('xt_social_icon', 'xt_wp_social_icon');

/**********************************
* [member_block]
**********************************/

function xt_wp_member_block($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'img' => '',
		'name' => '',
		'occupation' => '',
		'twitter' => '',
		'facebook' => '',
		'skype' => '',
		'google' => '',
		'linkedin' => '',
		'mail' => '',
		'dribbble' => '',
		'git' => '',
		'pinterest' => ''
	), $atts));

	wp_enqueue_style('zocial');
	wp_enqueue_style('zocial-animation');

	wp_enqueue_script( 'jquery-tooltip' );
	wp_enqueue_script( 'jquery-tool-init' );

	if($img != '')
		$img = '<img src="' .$img. '" alt="' .$name. '" />';

	if($occupation != '')
		$occupation = '<h4 class="member-occupation">'.$occupation.'</h4>';

	$social = '';

	if($twitter != '')
		$social .= '<a target="_blank" class="zocial-icon-wrap zocial-twitter-2 tooltip-top" href="'.$twitter.'" title="Twitter"><i class="zocial-icon-twitter-2"></i></a> ';

	if($facebook != '')
		$social .= '<a target="_blank" class="zocial-icon-wrap zocial-facebook-2 tooltip-top" href="'.$facebook.'" title="Facebook"><i class="zocial-icon-facebook-2"></i></a> ';

	if($skype != '')
		$social .= '<a target="_blank" class="zocial-icon-wrap zocial-skype-1 tooltip-top" href="callto:'.$skype.'" title="Skype"><i class="zocial-icon-skype-1"></i></a> ';

	if($google != '')
		$social .= '<a target="_blank" class="zocial-icon-wrap zocial-gplus-2 tooltip-top" href="'.$google.'" title="Google+"><i class="zocial-icon-gplus-2"></i></a> ';

	if($linkedin != '')
		$social .= '<a target="_blank" class="zocial-icon-wrap zocial-linkedin-2 tooltip-top" href="'.$linkedin.'" title="LinkedIn"><i class="zocial-icon-linkedin-2"></i></a> ';

	if($mail != '')
		$social .= '<a target="_self" class="zocial-icon-wrap zocial-email tooltip-top" href="mailto:'.$mail.'" title="Mail"><i class="zocial-icon-email"></i></a> ';

	if($dribbble != '')
		$social .= '<a target="_blank" class="zocial-icon-wrap zocial-dribbble-1 tooltip-top" href="'.$dribbble.'" title="Dribbble"><i class="zocial-icon-dribbble-1"></i></a> ';

	if($git != '')
		$social .= '<a target="_blank" class="zocial-icon-wrap zocial-github-2 tooltip-top" href="'.$git.'" title="GitHub"><i class="zocial-icon-github-2"></i></a> ';

	if($pinterest != '')
		$social .= '<a target="_blank" class="zocial-icon-wrap zocial-pinterest-1 tooltip-top" href="'.$pinterest.'" title="Pinterest"><i class="zocial-icon-pinterest-1"></i></a> ';

	if($social != '')
		$social = '<div class="member-social">'.$social.'</div>';

	return '
	<div class="member-block">
		<div class="member-img">
			'.$img.'
		</div>
		<div class="member-header">
			<h2>'.$name.'</h2>
			'.$occupation.'
		</div>
		<div class="member-content">
			'.do_shortcode($content).'
		</div>
		'.$social.'
	</div>';
}
add_shortcode('xt_member_block', 'xt_wp_member_block');

/*-----------------------------------------------------------------------------------*/
/* [skill_bar]
/*-----------------------------------------------------------------------------------*/

function xt_wp_skill_bar($atts, $content = null, $code) {	

	wp_enqueue_script("xt-shortcodes-init");

	extract(shortcode_atts(array(
		'title' => '',
		'value' => '10',
		'color' => ''
	), $atts));
			
	if($color != '')
		$color = ' style="background: '.$color.' !important;"';

	return '<div class="skill-bar">
	<div class="skill-title">'.$title.'</div>
	<div class="skill-wrapper" data-value="'.$value.'">
		<div class="skill-progress"'.$color.'></div>
	</div>
	</div>';
}

add_shortcode('xt_skill_bar', 'xt_wp_skill_bar');

/*-----------------------------------------------------------------------------------*/
/* [teaser]
/*-----------------------------------------------------------------------------------*/

function xt_wp_teaser($atts, $content = null, $code) {	
	extract(shortcode_atts(array(
		'img' => ''
	), $atts));

	if($img != '')
		$img = '<div class="teaser-simple-img"><img src="'.$img.'" alt=" " /></div>';
			
	return '<div class="teaser-simple">
		'.$img.'
		<div class="teaser-simple-content">
			'.do_shortcode($content).'
		</div>
	</div>';
}

add_shortcode('xt_teaser', 'xt_wp_teaser');

/*-----------------------------------------------------------------------------------*/
/* [teaser_box]
/*-----------------------------------------------------------------------------------*/

function xt_wp_teaser_box($atts, $content = null, $code) {	

	wp_enqueue_style("font-awesome");

	extract(shortcode_atts(array(
		'title' => '',
		'style' => 'normal', // normal or minimal
		'href' => '',
		'target' => '',
		'btntext' => '',
		'btnstyle' => 'normal', // normal or flat
		'btncolor' => 'default',
		'btnsize' => 'medium',
		'icon' => ''
	), $atts));

	$btn = '';

	if($href != '') {
		if($icon != '')
			$icon = '<i class="font-icon-'.$icon.'"></i> ';

		if($target != '')
			$target = ' target="'.$target.'"';

		$btn = '<div class="teaser-box-button"><a href="'.$href.'" '.$target.' class="button button-'.$btnsize.' button-'.$btncolor.' button-'.$btnstyle.'">' . $icon . trim($btntext) . '</a></div>';
	}

	return '<div class="teaser-box teaser-'.$style.'">
		<div class="teaser-box-content">
			<h1 class="teaser-box-title">'.$title.'</h1>
			'.do_shortcode($content).$btn.'
		</div>
	</div>';
}

add_shortcode('xt_teaser_box', 'xt_wp_teaser_box');

/*-----------------------------------------------------------------------------------*/
/* [callout]
/*-----------------------------------------------------------------------------------*/

function xt_wp_callout($atts, $content = null, $code) {	

	wp_enqueue_style("font-awesome");

	extract(shortcode_atts(array(
		'title' => '',
		'style' => 'normal', // normal or minimal
		'btnpos' => 'bottom', // bottom or right
		'href' => '',
		'target' => '',
		'btntext' => '',
		'btnstyle' => 'normal', // normal or flat
		'btncolor' => 'default',
		'btnsize' => 'medium',
		'icon' => ''
	), $atts));

	$btn = '';
	$floating = '';

	if($href != '') {
		if($icon != '')
			$icon = '<i class="font-icon-'.$icon.'"></i> ';

		if($target != '')
			$target = ' target="'.$target.'"';

		$btn = '<div class="callout-col-right">
			<div class="callout-box-button"><a href="'.$href.'" '.$target.' class="button button-'.$btnsize.' button-'.$btncolor.' button-'.$btnstyle.'">' . $icon . trim($btntext) . '</a></div>
			</div> <div class="clear clearboth"></div>';
	
		$floating = 'callout-col-left';
	}

	return '<div class="callout-box callout-'.$style.' callout-'.$btnpos.'">
		<div class="callout-box-content">
			<div class="'.$floating.'">
				<h1 class="callout-box-title">'.$title.'</h1>
				'.do_shortcode($content).'
			</div>
			'.$btn.'
		</div>
	</div>';
}

add_shortcode('xt_callout', 'xt_wp_callout');

/*-----------------------------------------------------------------------------------*/
/* [styled_box]
/*-----------------------------------------------------------------------------------*/

function xt_wp_styled_box($atts, $content = null, $code) {	
	extract(shortcode_atts(array(
		'style' => '1'
	), $atts));

	return '<div class="styled-box styled-box-'.$style.'">'.do_shortcode($content).'</div>';
}

add_shortcode('xt_styled_box', 'xt_wp_styled_box');

/*-----------------------------------------------------------------------------------*/
/* [xt_carousel]
/*-----------------------------------------------------------------------------------*/

function xt_wp_carousel($atts, $content = null, $code) {	

	wp_enqueue_style("font-awesome");

	wp_enqueue_script("jquery-caroufredsel");
	wp_enqueue_script("jquery-mousewheel");
	wp_enqueue_script("jquery-touchswipe");
	wp_enqueue_script("jquery-transit");
	wp_enqueue_script("jquery-ba-throttle-debounce");

	extract(shortcode_atts(array(
		'style' => 'normal', // normal, center, bottom
		'scroll' => '2',
		'visible' => '4',
		'ipad' => '3',
		'land' => '2',
		'portrait' => '1',
		'mousewheel' => 'true',
		'navigation' => 'true',
		'timer' => 'false',
		'duration' => '800',
		'autoplay' => 'true'

	), $atts));

	$id = rand(0, 1500);

	$navigationCode = '<a id="prev-'.$id.'" class="prev" href="#"><i class="font-icon-angle-left"></i></a>
		<a id="next-'.$id.'" class="next" href="#"><i class="font-icon-angle-right"></i></a>';

	$timerCode = '<div id="timer'.$id.'" class="timer"></div>';

	if($navigation != 'false')
		$navigation = 'prev: "#prev-'.$id.'",
				next: "#next-'.$id.'",';
	else 
		$navigation = $navigationCode = '';

	if($timer != 'false')
		$timer = 'progress: "#timer'.$id.'",';
	else
		$timer = $timerCode = '';

	return '
	<div class="list_carousel list_carousel_'.$style.'">
		'.$timerCode.'
		<ul id="caroufred-'.$id.'">'.do_shortcode($content).'</ul>
		<div class="clearfix"></div>
		'.$navigationCode.'
	</div>
	<script type="text/javascript">
		jQuery(window).load(function() {

			var _carousel_'.$id.' = jQuery("#caroufred-'.$id.'");

			var _visible_'.$id.' = '.$visible.';
			var _window = jQuery(window).width();

			if(_window >= 768 && _window <= 959)
				_visible_'.$id.' = '.$ipad.';

			else if(_window >= 480 && _window <= 767)
				_visible_'.$id.' = '.$land.';

			else if(_window <= 479)
				_visible_'.$id.' = '.$portrait.';

			_carousel_'.$id.'.carouFredSel({
				width: "100%",
				scroll: '.$scroll.',
				infinite: true,
				items: {
					visible: _visible_'.$id.'
				},
				mousewheel: '.$mousewheel.',
				swipe: {
					onMouse: true,
					onTouch: true
				},
				'.$navigation.'
				auto: {
					pauseOnHover: "resume",
					play: '.$autoplay.',
					'.$timer.'
					duration: 800
				},
				responsive: true
			});

		});
	</script>';
}

add_shortcode('xt_carousel', 'xt_wp_carousel');

/*-----------------------------------------------------------------------------------*/
/* [xt_item]
/*-----------------------------------------------------------------------------------*/

function xt_wp_carousel_item($atts, $content = null, $code) {	
	extract(shortcode_atts(array(
		'width' => '33%'
	), $atts));

	if($width != '')
		$width = ' style="width: '.$width.';"';

	return '<li class="caroufredsel-item"'.$width.'><div class="carousel-content">'.do_shortcode($content).'</div><div class="clear clearboth clearfix"></div></li>';
}
add_shortcode('xt_item', 'xt_wp_carousel_item');

/*-----------------------------------------------------------------------------------*/
/* [blockquote] Displays blockquote
/*-----------------------------------------------------------------------------------*/

function xt_wp_blockquote($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'align' => '',
		'style' => 'default',
		'author' => '',
		'color' => ''
	), $atts));
	
	if($align != '') { $align = 'block-'.$align; }
	
	if($color != '') { $color = 'block-'.$color; }
		
	return '<div class="blockquote blockquote-'.$style.' '.$color.' '.$align.'"><blockquote>' . do_shortcode($content) . ($author ? '<p class="author">- '  . $author . '</p>' : '') . '</blockquote></div>';
}

add_shortcode('xt_blockquote', 'xt_wp_blockquote');

/*-----------------------------------------------------------------------------------*/
/* [pullquote] Displays Pullquote
/*-----------------------------------------------------------------------------------*/

function xt_wp_pullquote($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'align' => '',
		'style' => 'default',
	), $atts));
	
	if($align != '') { $align = 'pull-'.$align; }
	
	return '<span class="pullquote pullquote-'.$style.' '.$align.'"> ' . do_shortcode($content) . ' </span>';
}

add_shortcode('xt_pullquote', 'xt_wp_pullquote');

/*-----------------------------------------------------------------------------------*/
/* [testimonial] Displays a single Testimonial
/*-----------------------------------------------------------------------------------*/

function xt_wp_testimonial($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'author' => ''
	), $atts));
	
	if($author != '')
		$author = '<span class="author">'.$author.'</span>';
	return '
		<div class="testimonial">
			<div class="testimonial-content-bubble">'. do_shortcode($content) .'</div>
			<div class="testimonial-meta"><span>'.$author.'</span></div>
		</div>';
}

add_shortcode('xt_testimonial', 'xt_wp_testimonial');

/*-----------------------------------------------------------------------------------*/
/* [testimonial_block] Displays a Testimonial Block
/*-----------------------------------------------------------------------------------*/

function xt_wp_testimonial_block($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'author' => '',
		'authorimg' => '',
		'type' => 'dark-block',
		'bgcolor' => '',
		'color' => '',
		'url' => '',
	), $atts));
	
	if($bgcolor != '') {
		$bgcolor = 'background-color: '.$bgcolor.';';
	}
	
	if($color != '') {
		$color = 'color: '.$color.' !important;';
	}
	
	if($authorimg != '') {
		$authorimg = '<span class="author-img"><img src="'.$authorimg.'" alt="'.$author.'" /></span>';
	}
	
	if($url != '') {
		$url = '<span class="author-url"><a href="http://'.$url.'" target="_blank" style="'.$color.'">'.$url.'</a></span>';
	}
		
	return '
		<div class="testimonial-block '.$type.'" style="'.$bgcolor.' '.$color.'">
			<div class="testimonial-content"> '. do_shortcode($content) .'</div>
			<div class="testimonial-meta">'.$authorimg.'<span class="author-name">'.$author.$url.'</span></div>
		</div>';
}

add_shortcode('xt_testimonial_block', 'xt_wp_testimonial_block');

/* Align */

function xt_wp_align($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'direction' => 'left', // left, right, center
	), $atts));

	return '<div class="xt-align" style="text-align: '.$direction.';">'.do_shortcode($content).'</div>';
}
add_shortcode('xt_align', 'xt_wp_align');

/* Slogan */

function xt_wp_slogan($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'align' => 'center', // left, right, center
	), $atts));

	return '<div class="slogan"><h1 style="text-align: '.$align.';">'.do_shortcode($content).'</h1></div>';
}
add_shortcode('xt_slogan', 'xt_wp_slogan');

/* Big Title */

function xt_wp_big_title($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'align' => 'center', // left, right, center
		'subtext' => '',
	), $atts));

	if($subtext != '')
		$subtext = '<h2 class="sub" style="text-align: '.$align.';">'.$subtext.'</h2>';

	return '<div class="big-title"><h1 style="text-align: '.$align.';">'.do_shortcode($content).'</h1>'.$subtext.'</div>';
}
add_shortcode('xt_big_title', 'xt_wp_big_title');

/* Big Text */

function xt_wp_big_text($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'align' => 'left', // left, right, center
		'tag' => 'h1', // h1, h..., h6
	), $atts));

	return '<div class="big-text"><'.$tag.' style="text-align: '.$align.';">'.do_shortcode($content).'</'.$tag.'></div>';
}
add_shortcode('xt_big_text', 'xt_wp_big_text');

/* Process */

function xt_wp_process($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'front' => 'front', // front text
		'back' => 'back,text,here', // back text comma separated
	), $atts));

	return '<div class="process-wrp">
				<div class="process-circle stage"><span class="vertical-align">'.str_replace(',', '<br />', $front).'</span></div>
				<div class="process-circle direction"><span class="vertical-align">'.str_replace(',', '<br />', $back).'</span></div>
			</div>';
}
add_shortcode('xt_process', 'xt_wp_process');

/* Font Icon Action */

function xt_wp_font_icon_action($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'icon' => 'heart', // icon name
		'href' => '', // icon href
		'target' => '', // icon target
	), $atts));

	$_icon = '';
	if($icon != '')
		$_icon .= '<a class="heart-circle" href="'.$href.'" target="'.$target.'"><i class="font-icon-'.$icon.'"></i></a>';

	return '<div class="ft-icon-action-wrapper"><div class="ft-icon-action-inner">
					'.$_icon.'
					<span class="vertica-align">'.do_shortcode($content).'</span>
			</div></div>';
}
add_shortcode('xt_font_icon_action', 'xt_wp_font_icon_action');

/*
* Shorcode Name: Wrapper 
* Shortcode Tag: [xt_wrapper]
* @since: 1.4
*/

function xt_wp_wrapper($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		// Wrapper Spaces
		'padding_top' => '',
		'padding_bottom' => '',
		'margin_top' => '',
		'margin_bottom' => '',
		// Container
		'container_type' => 'normal', // full
		// Wrapper Color Schemes
		'color_scheme' => 'dark', // dark or light (defines border and text color)
		//'color_scheme_custom' => '', // Custom hex color scheme
		// Wrapper Background Schemes
		'style' => 'normal', // normal, dark, transparent
		'type' => 'background', // image, video
		'shadow' => '', // yes to activate
		'border' => '', // yes to activate
		// Image
		'bg_custom_color' => '', // Custom hex background color
		'bg_img' => '', // Image Background
		'bg_x' => 'center', // Background Img Left
		'bg_y' => 'top', // Background Img Top
		'bg_attachment' => 'fixed', // Background Attachment
		'bg_size' => 'cover', // Background Size
		'bg_repeat' => 'no-repeat', // no-repeat, repeat-x, repeat-y, repeat
		// Parallax
		'parallax' => '', // yes to activate
		'parallax_bg_ratio' => '',
		// Video
		'poster' => '',
		'video_mp4' => '',
		'video_webm' => '',
		'custom_class' => '', // Custom class to be added to our wrapper
		'not_close' => '', // yes to don't print the content and final divs
	), $atts));

	wp_enqueue_script('jquery-stellar');
	wp_enqueue_script('wrapper-init');

	$_class = '';
	$_style = '';
	$_beforeContent = '';
	$_attrs = '';

	// Padding
	if($padding_top != '')
		$_style .= 'padding-top: '.$padding_top.';';
	if($padding_bottom != '')
		$_style .= 'padding-bottom: '.$padding_bottom.';';
	
	// Margin
	if($margin_top != '')
		$_style .= 'margin-top: '.$margin_top.';';
	if($margin_bottom != '')
		$_style .= 'margin-bottom: '.$margin_bottom.';';

	// Container
	$_class .= ' xt-wrapper-container-'.$container_type;

	// Color Scheme
	$_class .= ' xt-wrapper-color-scheme-'.$color_scheme;

	// Section Style
	$_class .= ' xt-wrapper-style-'.$style;

	// Shadow
	if($shadow == 'yes')
		$_class .= ' xt-wrapper-shadowed';

	// Border
	if($border == 'yes')
		$_class .= ' xt-wrapper-border';

	if($type == 'background') {

		if($bg_custom_color != '')
			$_style .= 'background-color:'.$bg_custom_color.';';

		if($bg_img != '')
			$_style .= 'background-image: url('.$bg_img.');';

		$_style .= 'background-position: '.$bg_x.' '.$bg_y.';';

		$_style .= 'background-attachment: '.$bg_attachment.';';

		$_style .= 'background-repeat: '.$bg_repeat.';';

		$_style .= '-webkit-background-size: '.$bg_size.'; -moz-background-size: '.$bg_size.'; -o-background-size: '.$bg_size.'; background-size: '.$bg_size.';';

		if($parallax == 'yes') {
			$_class .= ' xt-wrapper-parallax';

			if($parallax_bg_ratio != '')
				$_attrs .= ' data-stellar-ratio="'.$parallax_bg_ratio.'"';
		}

	} else if($type == 'video') {

		$_beforeContent .= '<video loop="1" preload="1" poster="'.$poster.'" controls="controls" class="xt-wrapper-video-bg" style="margin-top: -825.5px;"><source type="video/mp4" src="'.$mp4.'"><source type="video/webm" src="'.$webm.'"></video>';

	}

	$_endDivs = '';

	if($not_close != 'yes')
		$_endDivs = do_shortcode($content).'</div>';

	return '<div class="xt-full-width-wrapper '.$custom_class.$_class.'" style="'.$_style.'"'.$_attrs.'>'.$_beforeContent.$_endDivs;
}
add_shortcode('xt_wrapper', 'xt_wp_wrapper');

/*
* Shorcode Name: Full Section 
* Shortcode Tag: [xt_full_section]
* @since: 1.4
*/

function xt_wp_full_section($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		// Wrapper Spaces
		'padding_top' => '',
		'padding_bottom' => '',
		'margin_top' => '',
		'margin_bottom' => '',
	), $atts));

	wp_enqueue_script('jquery-stellar');
	wp_enqueue_script('wrapper-init');

	$_style = '';
	// Padding
	if($padding_top != '')
		$_style .= 'padding-top: '.$padding_top.';';
	if($padding_bottom != '')
		$_style .= 'padding-bottom: '.$padding_bottom.';';
	
	// Margin
	if($margin_top != '')
		$_style .= 'margin-top: '.$margin_top.';';
	if($margin_bottom != '')
		$_style .= 'margin-bottom: '.$margin_bottom.';';

	return '<div class="xt-wrapper-container-full" style="'.$_style.'">'.do_shortcode($content).'</div>';
}
add_shortcode('xt_full_section', 'xt_wp_full_section');

/*
* Shorcode Name: CSS Animation
* Shortcode Tag: [xt_css_animation]
* @since: 1.4
*/

function xt_wp_css_animation($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		// Wrapper Spaces
		'animation' => 'fadeIn',
		'display' => 'block', // inline-block
		'delay' => '',
		'duration' => '',
	), $atts));

	wp_enqueue_style('animate');
	wp_enqueue_script('animate-init');

	$_style = '';

	if($delay != '')
		$_style .= '-webkit-animation-delay: '.$delay.'s; -moz-animation-delay: '.$delay.'s; -o-animation-delay: '.$delay.'s; animation-delay: '.$delay.'s;';

	if($duration != '')
		$_style .= '-webkit-animation-duration: '.$duration.'s; -moz-animation-duration: '.$duration.'s; -o-animation-duration: '.$duration.'s; animation-duration: '.$duration.'s;';

	return '<div class="xt-animated-element" style="display: '.$display.';'.$_style.'" data-anim="'.$animation.'">'.do_shortcode($content).'</div>';
}
add_shortcode('xt_css_animation', 'xt_wp_css_animation');

/*
* Shorcode Name: Swiper Carousel
* Shortcode Tag: [xt_swiper_carousel]
* @since: 1.4
*/

function xt_wp_swiper_carousel($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'speed' => '300',
		'autoplay' => '',
		'mode' => 'horizontal', // horizontal, vertical
		'loop' => 'false',
		'slidesperview' => '1', // auto or number
		'slidesperviewtablet' => '1', // auto or number
		'slidesperviewmobile' => '1', // auto or number
		'pagination' => '', // yes to activate
		'arrow_nav' => '', // yes to activate
	), $atts));

	wp_enqueue_style('swiper-carousel');
	wp_enqueue_script('swiper-carousel');

	$id = rand(0, 1000);

	$_jsOutput = '';
	$_htmlMarkupBefore = '';
	$_htmlMarkupAfter = '';
	$_params = '';

	$_params .= 'speed: '.$speed.',';

	if($autoplay != '')
		$_params .= 'autoplay: '.$autoplay.',';

	$_params .= 'mode: "'.$mode.'",';

	$_params .= 'loop: '.$loop.',';

	if($slidesperview == 'auto') $slidesperview = '"'.$slidesperview.'"';
	$_params .= 'slidesPerView: '.$slidesperview.', slidesPerViewBackup: '.$slidesperview.',';

	$_params .= 'slidesPerViewTablet: '.$slidesperviewtablet.',';

	$_params .= 'slidesPerViewMobile: '.$slidesperviewmobile.',';

	if($pagination == 'yes') :
		$_params .= '
		pagination: "#swiper-pagination-'.$id.'",
	    paginationClickable: true,
	    paginationAsRange: false,
	   	';

	    $_htmlMarkupAfter .= '<div class="swiper-pagination" id="swiper-pagination-'.$id.'"></div>';

	endif;

	if($arrow_nav == 'yes') :

		$arrow_nav = '
		jQuery("#xt-swiper-carousel-'.$id.' .arrow-left").on("click", function(e){
			e.preventDefault()
			my_swiper_'.$id.'.swipePrev();
			console.log("previous!");
		});

		jQuery("#xt-swiper-carousel-'.$id.' .arrow-right").on("click", function(e){
			e.preventDefault()
			my_swiper_'.$id.'.swipeNext();
			console.log("next!");
		});';
	
		if($mode == 'horizontal')
			$_htmlMarkupAfter .= '
			<div class="swiper-arrow arrow-left"><i class="font-icon-chevron-left"></i></div>
			<div class="swiper-arrow arrow-right"><i class="font-icon-chevron-right"></i></div>
			';
		else
			$_htmlMarkupAfter .= '
			<div class="swiper-arrow arrow-left"><i class="font-icon-chevron-up"></i></div>
			<div class="swiper-arrow arrow-right"><i class="font-icon-chevron-down"></i></div>
			';

	endif;

	$_jsOutput .= '
	<script type="text/javascript">
	jQuery(document).ready(function() {

		var my_swiper_'.$id.' = new Swiper("#xt-swiper-carousel-'.$id.'", {
			'.$_params.'
			calculateHeight: true,
			grabCursor: true,
			slideElement: "li"
		});

		'.$arrow_nav.'

		my_swiper_'.$id.'.resizeFix();
	});
	</script>';

	return '<div id="xt-swiper-carousel-'.$id.'"class="woocommerce swiper-container swiper-container-'.$mode.'">'.$_htmlMarkupBefore.'<ul class="products swiper-wrapper">'.do_shortcode($content).'</ul>'.$_htmlMarkupAfter.'</div>'.$_jsOutput;
}
add_shortcode('xt_swiper_carousel', 'xt_wp_swiper_carousel');

/*
* Shorcode Name: Swiper Slide
* Shortcode Tag: [xt_swiper_slide]
* @since: 1.4
*/

function xt_wp_swiper_slide($atts, $content = null, $code) {
	/*
	extract(shortcode_atts(array(
		'attr' => 'defaultVal',
	), $atts));
	*/

	return '<li class="swiper-slide">'.do_shortcode($content).'</li>';
}
add_shortcode('xt_swiper_slide', 'xt_wp_swiper_slide');

	/**
	 * Recent Products shortcode
	 *
	 * @access public
	 * @param array $atts
	 * @return string
	 */
	function xt_recent_products_swiper( $atts ) {

		global $woocommerce_loop, $woocommerce;

		extract(shortcode_atts(array(
			'per_page' 	=> '12',
			'columns' 	=> '4',
			'orderby' => 'date',
			'order' => 'desc'
		), $atts));

		$meta_query = $woocommerce->query->get_meta_query();

		$args = array(
			'post_type'	=> 'product',
			'post_status' => 'publish',
			'ignore_sticky_posts'	=> 1,
			'posts_per_page' => $per_page,
			'orderby' => $orderby,
			'order' => $order,
			'meta_query' => $meta_query,
		);

		ob_start();

		$products = new WP_Query( $args );

		$woocommerce_loop['columns'] = 1;

		if ( $products->have_posts() ) : ?>

				<?php while ( $products->have_posts() ) : $products->the_post(); ?>

					<?php woocommerce_get_template_part( 'content', 'product-div' ); ?>

				<?php endwhile; // end of the loop. ?>

		<?php endif;

		wp_reset_postdata();

		return ob_get_clean();
	}
	add_shortcode('xt_recent_products_swiper', 'xt_recent_products_swiper');

	/**
	 * Output featured products
	 *
	 * @access public
	 * @param array $atts
	 * @return string
	 */
	function xt_featured_products_swiper( $atts ) {

		global $woocommerce_loop;

		extract(shortcode_atts(array(
			'per_page' 	=> '12',
			'columns' 	=> '4',
			'orderby' => 'date',
			'order' => 'desc'
		), $atts));

		$args = array(
			'post_type'	=> 'product',
			'post_status' => 'publish',
			'ignore_sticky_posts'	=> 1,
			'posts_per_page' => $per_page,
			'orderby' => $orderby,
			'order' => $order,
			'meta_query' => array(
				array(
					'key' => '_visibility',
					'value' => array('catalog', 'visible'),
					'compare' => 'IN'
				),
				array(
					'key' => '_featured',
					'value' => 'yes'
				)
			)
		);

		ob_start();

		$products = new WP_Query( $args );

		$woocommerce_loop['columns'] = 1;

		if ( $products->have_posts() ) : ?>

				<?php while ( $products->have_posts() ) : $products->the_post(); ?>

					<?php woocommerce_get_template_part( 'content', 'product-div' ); ?>

				<?php endwhile; // end of the loop. ?>

		<?php endif;

		wp_reset_postdata();

		return ob_get_clean();
	}
	add_shortcode('xt_featured_products_swiper', 'xt_featured_products_swiper');

	/**
	 * List all products on sale
	 *
	 * @access public
	 * @param array $atts
	 * @return string
	 */
	function xt_sale_products_swiper( $atts ){
	    global $woocommerce_loop, $woocommerce;

	    extract( shortcode_atts( array(
	        'per_page'      => '12',
	        'columns'       => '4',
	        'orderby'       => 'title',
	        'order'         => 'asc'
	        ), $atts ) );

		// Get products on sale
		$product_ids_on_sale = woocommerce_get_product_ids_on_sale();

		$meta_query = array();
		$meta_query[] = $woocommerce->query->visibility_meta_query();
	    $meta_query[] = $woocommerce->query->stock_status_meta_query();
	    $meta_query   = array_filter( $meta_query );

		$args = array(
			'posts_per_page'=> $per_page,
			'orderby' 		=> $orderby,
	        'order' 		=> $order,
			'no_found_rows' => 1,
			'post_status' 	=> 'publish',
			'post_type' 	=> 'product',
			'meta_query' 	=> $meta_query,
			'post__in'		=> array_merge( array( 0 ), $product_ids_on_sale )
		);

	  	ob_start();

		$products = new WP_Query( $args );

		$woocommerce_loop['columns'] = 1;

		if ( $products->have_posts() ) : ?>

				<?php while ( $products->have_posts() ) : $products->the_post(); ?>

					<?php woocommerce_get_template_part( 'content', 'product-div' ); ?>

				<?php endwhile; // end of the loop. ?>

		<?php endif;

		wp_reset_postdata();

		return ob_get_clean();
	}
	add_shortcode('xt_sale_products_swiper', 'xt_sale_products_swiper');

	/**
	 * List best selling products on sale
	 *
	 * @access public
	 * @param array $atts
	 * @return string
	 */
	function xt_best_selling_products_swiper( $atts ){
	    global $woocommerce_loop;

	    extract( shortcode_atts( array(
	        'per_page'      => '12',
	        'columns'       => '4'
	        ), $atts ) );

	    $args = array(
	        'post_type' => 'product',
	        'post_status' => 'publish',
	        'ignore_sticky_posts'   => 1,
	        'posts_per_page' => $per_page,
	        'meta_key' 		 => 'total_sales',
	    	'orderby' 		 => 'meta_value_num',
	        'meta_query' => array(
	            array(
	                'key' => '_visibility',
	                'value' => array( 'catalog', 'visible' ),
	                'compare' => 'IN'
	            )
	        )
	    );

	  	ob_start();

		$products = new WP_Query( $args );

		$woocommerce_loop['columns'] = 1;

		if ( $products->have_posts() ) : ?>

				<?php while ( $products->have_posts() ) : $products->the_post(); ?>

					<?php woocommerce_get_template_part( 'content', 'product-div' ); ?>

				<?php endwhile; // end of the loop. ?>

		<?php endif;

		wp_reset_postdata();

		return ob_get_clean();
	}
	add_shortcode('xt_best_selling_products_swiper', 'xt_best_selling_products_swiper');

/*
* Shorcode Name: Counter
* Shortcode Tag: [xt_counter]
* @since: 1.4
*/

function xt_wp_counter($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		// Wrapper Spaces
		'number_after' => '4500',
		'tag' => 'span',
	), $atts));

	wp_enqueue_style('odometer');
	wp_enqueue_script('odometer');
	wp_enqueue_script('animate-init');

	return '<'.$tag.' class="odometer" data-after="'.$number_after.'">'.do_shortcode($content).'</'.$tag.'>';
}
add_shortcode('xt_counter', 'xt_wp_counter');

/*
* Shorcode Name: Lead Text
* Shortcode Tag: [xt_lead_text]
* @since: 1.4
*/

function xt_wp_lead_text($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'align' => 'left',
	), $atts));

	return '<div class="lead-text" style="text-align: '.$align.'">'.do_shortcode($content).'</div>';
}
add_shortcode('xt_lead_text', 'xt_wp_lead_text');

/*
* Shorcode Name: Header
* Shortcode Tag: [xt_header]
* @since: 1.4
*/

function xt_wp_header($atts, $content = null, $code) {	

	wp_enqueue_style( 'font-awesome' );

	extract(shortcode_atts(array(
		'border' => 'bottom', // top, bottom or nothing
		'subborder' => 'yes', // yes to enable the subborder effect
		'icon' => '',
		'text' => '',
		'tag' => 'h1',
		'align' => 'left', // left, center, right
		'margin_top' => '',
		'margin_bottom' => '',
		'padding_top' => '',
		'padding_bottom' => '',
	), $atts));

	$_style = '';

	// Padding
	if($padding_top != '')
		$_style .= 'padding-top: '.$padding_top.';';
	if($padding_bottom != '')
		$_style .= 'padding-bottom: '.$padding_bottom.';';
	
	// Margin
	if($margin_top != '')
		$_style .= 'margin-top: '.$margin_top.';';
	if($margin_bottom != '')
		$_style .= 'margin-bottom: '.$margin_bottom.';';

	if($icon != '')
		$icon = '<i class="font-icon-'.$icon.'"></i> ';

	if($subborder == 'yes')
		$subborder = 'subborder';
	
	if($text == '')
		$text = do_shortcode($content);
			
	return '<div class="image-header-wrapper image-header-wrapper-'.$border.' image-header-wrapper-'.$subborder.'-'.$border.'" style="'.$_style.'"><'.$tag.' class="image-header" style="text-align: '.$align.';"><span class="image-header-blank">'. $icon . $text . '</span></'.$tag.'></div>';
}

add_shortcode('xt_header', 'xt_wp_header');

/*
* Shorcode Name: Inner Background
* Shortcode Tag: [xt_inner_bg]
* @since: 1.4
*/

function xt_wp_inner_bg($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'bg' => 'laptop', // laptop, display
	), $atts));

	return '<div class="inner-bg inner-bg-'.$bg.'"><div class="inner-bg-inside">'.do_shortcode($content).'</div></div>';
}
add_shortcode('xt_inner_bg', 'xt_wp_inner_bg');

/*
* Shorcode Name: Centered List
* Shortcode Tag: [xt_centered_list]
* @since: 1.4
*/

function xt_wp_centered_list($atts, $content = null, $code) {
	/*
	extract(shortcode_atts(array(
		'align' => 'left',
	), $atts));
	*/

	return '<div class="centered-list-wrapper"><div class="centered-list">'.do_shortcode($content).'</div></div>';
}
add_shortcode('xt_centered_list', 'xt_wp_centered_list');

/*
* Shorcode Name: Centered List Item
* Shortcode Tag: [xt_centered_li]
* @since: 1.4
*/

function xt_wp_centered_li($atts, $content = null, $code) {
	/*
	extract(shortcode_atts(array(
		'align' => 'left',
	), $atts));
	*/

	return '<div class="centered-list-item">'.do_shortcode($content).'</div>';
}
add_shortcode('xt_centered_li', 'xt_wp_centered_li');

/*
* Shorcode Name: Opacity Hover
* Shortcode Tag: [xt_opacity_hover]
* @since: 1.4
*/

function xt_wp_opacity_hover($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'display' => 'inline-block',
	), $atts));

	return '<div class="opacity-hover" style="display: '.$display.';">'.do_shortcode($content).'</div>';
}
add_shortcode('xt_opacity_hover', 'xt_wp_opacity_hover');