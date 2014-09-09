var previewSrc = "";
var sample = '';

var content = '<br />Simple Box Content<br />';

var description = '';

if(selectedText != '') {
	content = selectedText;
}

xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Icon",
			id:"icon",
			help:"Place here the icon name (verify docs to get all avaliable names!)"
		}
		],
	defaultContent:content,
	shortcode:"box_icon"
};