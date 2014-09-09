<?php 
header("Content-Type:text/javascript");

global $xt_slider_REMOVE_SCS;

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
		"tinymce.plugins.xt_slider_wpShortcodes",
		{
			init: function(d,e) {
					
					
					
					d.addCommand( "xt_slider_wpOpenDialog",function(a,c){
						
						// Grab the selected text from the content editor.
						selectedText = '';
					
						if ( d.selection.getContent().length > 0 ) {
					
							selectedText = d.selection.getContent();
							
						} // End IF Statement
						
						xt_slider_wpSelectedShortcodeType = c.identifier;
						xt_slider_wpSelectedShortcodeTitle = c.title;
						
						jQuery.get(e+"/dialog.php",function(b){
							
							var a;
							
							jQuery('#xt_slider_wp-shortcode-options').addClass( 'shortcode-' + xt_slider_wpSelectedShortcodeType );
							
							// Skip the popup on certain shortcodes.
							
							switch ( xt_slider_wpSelectedShortcodeType ) {
								
								default:
								
								jQuery("#xt_slider_wp-dialog").remove();
								jQuery("body").append(b);
								jQuery("#xt_slider_wp-dialog").hide();
								var f=jQuery(window).width();
								b=jQuery(window).height();
								f=720<f?720:f;
								f-=80;
								b-=120;
							
							tb_show("XiaoThemes Slider Plugin- Insert "+ xt_slider_wpSelectedShortcodeTitle +" Shortcode", "#TB_inline?width="+f+"&height="+b+"&inlineId=xt_slider_wp-dialog");jQuery("#xt_slider_wp-shortcode-options h3:first").text(""+c.title+" Shortcode Settings");
							
								break;
							
							} // End SWITCH Statement
						
						}
												 
					)
					 
					} 
				);

				},
					
				createControl:function(d,e){
				
						if(d=="xt_slider_wp_shortcodes_button"){
						
							d=e.createMenuButton("xt_slider_wp_shortcodes_button",{
								title:"XiaoThemes Slider - Insert Shortcode",
								image:icon_url,
								icons:false
								});
								
								var a=this;d.onRenderMenu.add(function(c,b){

									c=b.addMenu({title:"XT Sliders"});
										a.addWithDialog(c,"Select a Slider","xt_slider");
										c.addSeparator();
						
							});
							
							return d
						
						} // End IF Statement
						
						return null
					},
		
				addImmediate:function(d,e,a){d.add({title:e,onclick:function(){tinyMCE.activeEditor.execCommand("mceInsertContent",false,a)}})},
				
				addWithDialog:function(d,e,a){d.add({title:e,onclick:function(){tinyMCE.activeEditor.execCommand("xt_slider_wpOpenDialog",false,{title:e,identifier:a})}})},
		
				getInfo:function(){ return{longname:"DC Slider Plugin Generator",author:"VisualShortcodes.com",authorurl:"http://visualshortcodes.com",infourl:"http://visualshortcodes.com/shortcode-ninja",version:"1.0"} }
			}
		);
		
		tinymce.PluginManager.add("xt_slider_wpShortcodes",tinymce.plugins.xt_slider_wpShortcodes)
	}
)();
