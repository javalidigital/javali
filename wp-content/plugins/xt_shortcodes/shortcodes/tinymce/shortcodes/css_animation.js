var previewSrc = "";
var sample = '';

var content = 'Sample Text';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Animation",
			id:"animation",
			help:"Select the animation to be used.", 
			controlType:"select-control", 
			selectValues:['flash', 'bounce', 'shake', 'tada', 'swing', 'wobble', 'pulse', 'flip', 'flipInX', 'flipOutX', 'flipInY', 'flipOutY', 'fadeIn', 'fadeInUp', 'fadeInDown', 'fadeInLeft', 'fadeInRight', 'fadeInUpBig', 'fadeInDownBig', 'fadeInLeftBig', 'fadeInRightBig', 'fadeOut', 'fadeOutUp', 'fadeOutDown', 'fadeOutLeft', 'fadeOutRight', 'fadeOutUpBig', 'fadeOutDownBig', 'fadeOutLeftBig', 'fadeOutRightBig', 'slideInDown', 'slideInLeft', 'slideInRight', 'slideOutUp', 'slideOutLeft', 'slideOutRight', 'bounceIn', 'bounceInDown', 'bounceInUp', 'bounceInLeft', 'bounceInRight', 'bounceOut', 'bounceOutDown', 'bounceOutUp', 'bounceOutLeft', 'bounceOutRight' ]
		},
		{
			label:"Display",
			id:"display",
			help:"Defines the way it will be rendered in the page (block or inline).", 
			controlType:"select-control", 
			selectValues:['block', 'inline-block']
		},
		{
			label:"Duration",
			id:"duration",
			help:"Optional animation duration, only numbers accepted. (duration is measured in seconds)"
		},
		{
			label:"Delay",
			id:"delay",
			help:"Optional animation delay to start, only numbers accepted. (duration is measured in seconds)"
		}
		],
	defaultContent:content,
	shortcode:"css_animation"
};