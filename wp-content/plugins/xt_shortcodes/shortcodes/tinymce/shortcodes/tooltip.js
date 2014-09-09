var previewSrc = "";
var sample = '';

var content = 'Sample Tooltip Text';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Tooltip Text",
			id:"title",
			help:"Text showed inside tooltip"
		},
		{
			label:"Link",
			id:"href",
			help:"Optional link to the icon"
		},
		{
			label:"Target",
			id:"target",
			help:"Select the target of icon link", 
			controlType:"select-control", 
			selectValues:['_self', '_blank']
		}
		],
	defaultContent:content,
	shortcode:"tooltip"
};