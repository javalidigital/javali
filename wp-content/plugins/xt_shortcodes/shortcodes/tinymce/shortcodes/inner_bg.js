var previewSrc = "";
var sample = '';

var content = ' ';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Background",
			id:"bg",
			help:"Select the background that will be used.", 
			controlType:"select-control", 
			selectValues:['laptop', 'display']
		}
		],
	defaultContent:content,
	shortcode:"inner_bg"
};