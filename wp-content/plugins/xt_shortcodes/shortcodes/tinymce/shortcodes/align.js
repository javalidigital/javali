var previewSrc = "";
var sample = '';

var content = 'Content to be aligned';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Alignment Direction",
			id:"direction",
			help:"Select the direction to align the content.", 
			controlType:"select-control", 
			selectValues:['left', 'center', 'right']
		}
		],
	defaultContent:content,
	shortcode:"align"
};