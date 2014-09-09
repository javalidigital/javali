var previewSrc = "";
var sample = '';

var content = 'Your slogan content';

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
			selectValues:['center', 'left', 'right']
		}
		],
	defaultContent:content,
	shortcode:"slogan"
};