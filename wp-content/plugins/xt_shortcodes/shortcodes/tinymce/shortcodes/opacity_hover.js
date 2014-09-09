var previewSrc = "";
var sample = '';

var content = '<br />Accordion Content Here<br />';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Display (Optional)",
			id:"display",
			help:"Set it do display block instead default inline-block.", 
			controlType:"select-control", 
			selectValues:['', 'block']
		}
		],
	defaultContent:content,
	shortcode:"opacity_hover"
};