<?php 
header("Content-Type:text/javascript");

global $XT_REMOVE_SCS;

//Setup URL to WordPres
$absolute_path = __FILE__;
$path_to_wp = explode( 'wp-content', $absolute_path );
$wp_url = $path_to_wp[0];

//Access WordPress
require_once( $wp_url.'/wp-load.php' );

//URL to TinyMCE plugin folder
$plugin_url = plugins_url("", __FILE__);
?>
(function(){
	
	var icon_url = '<?php echo $plugin_url; ?>' + '/tb_icon.png';

	tinymce.create(
		"tinymce.plugins.xt_wpShortcodes",
		{
			init: function(d,e) {
					
					
					
					d.addCommand( "xt_wpOpenDialog",function(a,c){
						
						// Grab the selected text from the content editor.
						selectedText = '';
					
						if ( d.selection.getContent().length > 0 ) {
					
							selectedText = d.selection.getContent();
							
						} // End IF Statement
						
						xt_wpSelectedShortcodeType = c.identifier;
						xt_wpSelectedShortcodeTitle = c.title;
						
						jQuery.get(e+"/dialog.php",function(b){
							
							var a;
							
							jQuery('#xt_wp-shortcode-options').addClass( 'shortcode-' + xt_wpSelectedShortcodeType );
							
							// Skip the popup on certain shortcodes.
							
							switch ( xt_wpSelectedShortcodeType ) {

								case 'xt_centered_list':
								a = '[xt_centered_list]<br />'+selectedText+'<br />[/xt_centered_list]';
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								break;

								case 'xt_centered_li':
								a = '[xt_centered_li]'+selectedText+'[/xt_centered_li]';
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								break;
								
								case 'accordions':
								a = '[xt_accordions]<br />'+selectedText+'<br />[/xt_accordions]';
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								break;

								case 'xt_item':
								a = '[xt_item]'+selectedText+'[/xt_item]';
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								break;

								case 'xt_swiper_item':
								a = '[xt_swiper_slide]'+selectedText+'[/xt_swiper_slide]';
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								break;

								case 'xt_list':
								a = '[xt_list]<br />'+selectedText+'<br />[/xt_list]';
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								break;

								case 'xt_gplus':
								a = '[xt_gplus]';
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								break;

								case 'xt_pin':
								a = '[xt_pin]';
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								break;

								case 'tabs_framed':
								a = '[xt_tabs_framed]<br />'+selectedText+'<br />[/xt_tabs_framed]';
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								break;

								case 'tabs_button':
								a = '[xt_tabs_button]<br />'+selectedText+'<br />[/xt_tabs_button]';
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								break;

								case 'tabs_vertical':
								a = '[xt_tabs_vertical]<br />'+selectedText+'<br />[/xt_tabs_vertical]';
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								break;

								case 'xt_p':
								a = '[xt_p]'+selectedText+'[/xt_p]';
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								break;

								case 'xt_div':
								a = '[xt_div]'+selectedText+'[/xt_div]';
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								break;

								case 'xt_wrapper':
								a = '[xt_wrapper]'+selectedText+'[/xt_wrapper]';
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								break;


								case 'xt_br':
								a = '[xt_br]';
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								break;

								case 'xt_clear':
								a = '[xt_clear]';
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								break;

								<?php do_action("xt_add_non_generator"); ?>
								
								default:
								
								jQuery("#xt_wp-dialog").remove();
								jQuery("body").append(b);
								jQuery("#xt_wp-dialog").hide();
								var f=jQuery(window).width();
								b=jQuery(window).height();
								f=720<f?720:f;
								f-=80;
								b-=120;
							
							tb_show("XiaoThemes WP - Insert "+ xt_wpSelectedShortcodeTitle +" Shortcode", "#TB_inline?width="+f+"&height="+b+"&inlineId=xt_wp-dialog");jQuery("#xt_wp-shortcode-options h3:first").text(""+c.title+" Shortcode Settings");
							
								break;
							
							} // End SWITCH Statement
						
						}
												 
					)
					 
					} 
				);

				},
					
				createControl:function(d,e){
				
						if(d=="xt_wp_shortcodes_button"){
						
							d=e.createMenuButton("xt_wp_shortcodes_button",{
								title:"XT - Insert Shortcode",
								image:icon_url,
								icons:false
								});
								
								var a=this;d.onRenderMenu.add(function(c,b){

								c=b.addMenu({title:"Organizer"});

									a.addWithDialog(c,"Accordions Wrapper","accordions");
									a.addWithDialog(c,"Accordion","accordion");
									c.addSeparator();

									a.addWithDialog(c,"Tabs Framed","tabs_framed");
									a.addWithDialog(c,"Tabs Button","tabs_button");
									a.addWithDialog(c,"Tabs Vertical","tabs_vertical");
									c.addSeparator();

									a.addWithDialog(c,"Tab","tab");
									c.addSeparator();

									a.addWithDialog(c,"Toggle","toggle");
									c.addSeparator();

									a.addWithDialog(c,"Table","table");
									c.addSeparator();

								b.addSeparator();

								c=b.addMenu({title:"Font Icons"});

									a.addWithDialog(c,"Font Icon","font_icon");
									c.addSeparator();

									a.addWithDialog(c,"Box Icon","box_font_icon");
									c.addSeparator();

									a.addWithDialog(c,"Block Icon","block_font_icon");
									c.addSeparator();

									a.addWithDialog(c,"Social Icon","social_icon");
									c.addSeparator();

									a.addWithDialog(c,"Action Icon Slogan","action_icon");
									c.addSeparator();

								b.addSeparator();

								c=b.addMenu({title:"Image Icons"});
									
									a.addWithDialog(c,"Color Icon","color_icon");

									a.addWithDialog(c,"Box Color Icon","box_color_icon");

									c.addSeparator();

									a.addWithDialog(c,"Mini Icon","mini_icon");

									c.addSeparator();

								b.addSeparator();

								c=b.addMenu({title:"Pricing Table"});
									
									a.addWithDialog(c,"Pricing Wrapper","pricing_wrapper");
									c.addSeparator();

									a.addWithDialog(c,"Pricing Section","pricing_table");
									c.addSeparator();

								b.addSeparator();

								c=b.addMenu({title:"Typography"});
									
									a.addWithDialog(c,"Dropcap","dropcap");
									c.addSeparator();

									a.addWithDialog(c,"Google Font","gfont");
									c.addSeparator();

									a.addWithDialog(c,"Google Font Inline","gfont_inline");
									c.addSeparator();

									a.addWithDialog(c,"Blockquote","blockquote");
									c.addSeparator();
								
									a.addWithDialog(c,"Pullquote","pullquote");
									c.addSeparator();

									a.addWithDialog(c,"Tooltip","tooltip");
									c.addSeparator();
								
									a.addWithDialog(c,"Highlight","highlight");
									c.addSeparator();

									a.addWithDialog(c,"Header","header");
									c.addSeparator();

									a.addWithDialog(c,"Slogan","slogan");
									c.addSeparator();

									a.addWithDialog(c,"Big Title","big_title");
									c.addSeparator();

									a.addWithDialog(c,"Big Text","big_text");
									c.addSeparator();

									a.addWithDialog(c,"Lead Text","lead_text");
									c.addSeparator();

									a.addWithDialog(c,"Process Circle","process");
									c.addSeparator();

								b.addSeparator();

								c=b.addMenu({title:"Buttons"});

									a.addWithDialog(c,"Normal Button","button");
									c.addSeparator();

								b.addSeparator();

								c=b.addMenu({title:"Lightbox"});

									a.addWithDialog(c,"Image", "img");
									c.addSeparator();

								b.addSeparator();

								c=b.addMenu({title:"Social Sharing"});

									a.addWithDialog(c,"Facebook Like","fb_like");
									c.addSeparator();

									a.addWithDialog(c,"Google Plus","xt_gplus");
									c.addSeparator();

									a.addWithDialog(c,"Pinterest","xt_pin");
									c.addSeparator();

									a.addWithDialog(c,"Twitter Follow","twitter_follow");
									c.addSeparator();

									a.addWithDialog(c,"Tweet Button","tweet_button");
									c.addSeparator();

									a.addWithDialog(c,"Facebook Box","fb_box");
									c.addSeparator();

								b.addSeparator();

								c=b.addMenu({title:"Videos"});
									
									a.addWithDialog(c,"Video", "video");
									c.addSeparator();

								b.addSeparator();

								c=b.addMenu({title:"Utils"});

									a.addWithDialog(c,"Divider","divider");
									c.addSeparator();
									
									a.addWithDialog(c,"Empty Space","empty_space");
									c.addSeparator();
								
									a.addWithDialog(c,"P Element","xt_p");
									c.addSeparator();

									a.addWithDialog(c,"Div Element","xt_div");
									c.addSeparator();


									a.addWithDialog(c,"Line Break","xt_br");
									c.addSeparator();


									a.addWithDialog(c,"Clear","xt_clear");
									c.addSeparator();

									a.addWithDialog(c, "Align", "align");
									c.addSeparator();

								b.addSeparator();

								c=b.addMenu({title:"Messages"});
									
									a.addWithDialog(c,"Notification","notification");
									c.addSeparator();

								b.addSeparator();

								c=b.addMenu({title:"Teasers and Blocks"});
									
									a.addWithDialog(c,"Member Block","member_block");
									c.addSeparator();

									a.addWithDialog(c,"Skill Bar","skill_bar");
									c.addSeparator();

									a.addWithDialog(c,"Teaser","teaser");

									a.addWithDialog(c,"Teaser Box","teaser_box");
									c.addSeparator();

									a.addWithDialog(c,"Callout","callout");
									c.addSeparator();

									a.addWithDialog(c,"Styled Box","styled_box");
									c.addSeparator();

								b.addSeparator();

								c=b.addMenu({title:"Testimonial"});

									a.addWithDialog(c,"Testimonial","testimonial");
									c.addSeparator();

									a.addWithDialog(c,"Testimonial Block","testimonial_block");
									c.addSeparator();
									
								b.addSeparator();

								c=b.addMenu({title:"Lists"});

									a.addWithDialog(c,"List Wrapper","xt_list");
									c.addSeparator();

									a.addWithDialog(c,"List Font Icon Item","list_font_item");

									a.addWithDialog(c,"List Mini Icon Item","list_mini_item");
									c.addSeparator();

									a.addWithDialog(c,"Centered List","xt_centered_list");
									a.addWithDialog(c,"Centered List Item","xt_centered_li");
									c.addSeparator();

								b.addSeparator();

								c=b.addMenu({title:"Carousel"});

									a.addWithDialog(c,"Carousel Wrapper","carousel");
									c.addSeparator();

									a.addWithDialog(c,"Carousel Item","xt_item");
									c.addSeparator();

									a.addWithDialog(c,"Swiper Carousel","swiper_carousel");
									c.addSeparator();

									a.addWithDialog(c,"Swiper Item","xt_swiper_item");
									c.addSeparator();

								b.addSeparator();

								c=b.addMenu({title:"Animations"});

									a.addWithDialog(c,"CSS Animation","css_animation");
									c.addSeparator();

									a.addWithDialog(c,"Number Counter","counter");
									c.addSeparator();

									a.addWithDialog(c,"Opacity Hover","opacity_hover");
									c.addSeparator();

								b.addSeparator();

								c=b.addMenu({title:"Projects and Posts"});

									a.addWithDialog(c,"Latest Projects","latest_projects");
									c.addSeparator();

									a.addWithDialog(c,"Latest Projects Mansory","latest_projects_mansory");
									c.addSeparator();

									a.addWithDialog(c,"Latest Posts","latest_posts");
									c.addSeparator();

									a.addWithDialog(c,"Latest Posts List","latest_posts_list");
									c.addSeparator();

								b.addSeparator();

								c=b.addMenu({title:"Others"});

									a.addWithDialog(c,"Google Maps","gmap");
									c.addSeparator();

									a.addWithDialog(c,"Media Queries","mobile_visibility");
									c.addSeparator();

									a.addWithDialog(c,"Full Section","full_section");
									c.addSeparator();

									a.addWithDialog(c,"Background Frame","inner_bg");
									c.addSeparator();

								b.addSeparator();

								<?php do_action("xt_add_menu"); ?>

							});
							
							return d
						
						} // End IF Statement
						
						return null
					},
		
				addImmediate:function(d,e,a){d.add({title:e,onclick:function(){tinyMCE.activeEditor.execCommand("mceInsertContent",false,a)}})},
				
				addWithDialog:function(d,e,a){d.add({title:e,onclick:function(){tinyMCE.activeEditor.execCommand("xt_wpOpenDialog",false,{title:e,identifier:a})}})},
		
				getInfo:function(){ return{longname:"XiaoThemes Shortcode Generator",author:"VisualShortcodes.com",authorurl:"http://visualshortcodes.com",infourl:"http://visualshortcodes.com/shortcode-ninja",version:"1.0"} }
			}
		);
		
		tinymce.PluginManager.add("xt_wpShortcodes",tinymce.plugins.xt_wpShortcodes)
	}
)();