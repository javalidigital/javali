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
			help:"Use here a Mini icon name (check Docs to see avaliable names)"
		}
		],
	defaultContent:content,
	shortcode:"list_mini_item"
};