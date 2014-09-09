var previewSrc = "";
var sample = '';

var content = '<br /><br />';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Columns",
			id:"cols",
			help:"Define the columns number, like 4, 3 or 2"
		}
		],
	defaultContent:content,
	shortcode:"pricing_wrapper"
};