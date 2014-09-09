var previewSrc = "";
var sample = '';

var content = '<br />Sample Teaser Content<br />';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Image",
			id:"img",
			help:"Optional Image to use at teaser top"
		},
		],
	defaultContent:content,
	shortcode:"teaser"
};