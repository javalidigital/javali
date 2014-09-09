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
			label:"Icon",
			id:"icon",
			help:"Use here a Font Awesome Icon name (check Docs to see avaliable names)"
		},
		{
			label:"Link",
			id:"href",
			help:"Optional link to the icon"
		},
		{
			label:"Target",
			id:"target",
			help:"_self or _blank, defines if the link will open in a new window or not.", 
			controlType:"select-control", 
			selectValues:['_self', '_blank']
		}
		],
	defaultContent:content,
	shortcode:"block_font_icon"
};