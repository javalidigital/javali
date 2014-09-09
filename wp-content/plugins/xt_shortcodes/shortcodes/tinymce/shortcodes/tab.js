var previewSrc = "";
var sample = '';

var content = 'Sample Tab Content';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Title",
			id:"title",
			help:"Tab title"
		},
		{
			label:"Icon (Optional)",
			id:"icon",
			help:"Use here a Font Awesome Icon name (check Docs to see avaliable names)"
		}
		],
	defaultContent:content,
	shortcode:"tab"
};