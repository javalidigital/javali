var previewSrc = "";
var sample = '';

var content = '<br />Sample Style Box Content<br />';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Style",
			id:"style",
			help:"Select the box style, being 1 = flat and 2 = with details.", 
			controlType:"select-control", 
			selectValues:['1', '2']
		}
		],
	defaultContent:content,
	shortcode:"styled_box"
};