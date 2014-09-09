var previewSrc = "";
var sample = '';

var content = 'Your lead text content';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Alignment Direction",
			id:"align",
			help:"Select the direction to align the content.", 
			controlType:"select-control", 
			selectValues:['left', 'center', 'right']
		}
		],
	defaultContent:content,
	shortcode:"lead_text"
};