var previewSrc = "";
var sample = '';

var content = 'Blockquote Sample Content';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Author",
			id:"author",
			help:"Author Name"
		}
		],
	defaultContent:content,
	shortcode:"blockquote"
};