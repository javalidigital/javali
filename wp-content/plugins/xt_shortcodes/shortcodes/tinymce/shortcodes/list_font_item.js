var previewSrc = "";
var sample = '';

var content = 'Your Content';

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
		}
		],
	defaultContent:content,
	shortcode:"list_font_item"
};