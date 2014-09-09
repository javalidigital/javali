var previewSrc = "";
var sample = '';

var content = 'Sample Pullquote Content';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Align",
			id:"align",
			help:"Optional Align of pullquote", 
			controlType:"select-control", 
			selectValues:['left', 'right']
		}
		],
	defaultContent:content,
	shortcode:"pullquote"
};