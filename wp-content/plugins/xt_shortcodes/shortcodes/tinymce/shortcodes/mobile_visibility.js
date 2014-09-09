var previewSrc = "";
var sample = '';

var content = 'Sample Text';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Type",
			id:"type",
			help:"Select in which screen width the content will be visible", 
			controlType:"select-control", 
			selectValues:['destktop', 'tablet', 'mobile-all', 'mobile-landscape', 'mobile-portrait']
		}
		],
	defaultContent:content,
	shortcode:"mobile_visibility"
};