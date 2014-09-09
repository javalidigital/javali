var previewSrc = "";
var sample = '';

var content = '<br />Remove this text and place your table instead<br />';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Style",
			id:"style",
			help:"Select your table style", 
			controlType:"select-control", 
			selectValues:['normal', 'zebra', 'minimal']
		}
		],
	defaultContent:content,
	shortcode:"table"
};