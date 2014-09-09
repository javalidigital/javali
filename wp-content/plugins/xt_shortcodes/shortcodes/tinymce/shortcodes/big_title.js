var previewSrc = "";
var sample = '';

var content = 'Your big title';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Optional Sub Text",
			id:"subtext",
			help:"Type any text that will be placed below main title."
		},
		{
			label:"Alignment Direction",
			id:"align",
			help:"Select the direction to align the content.", 
			controlType:"select-control", 
			selectValues:['center', 'left', 'right']
		}
		],
	defaultContent:content,
	shortcode:"big_title"
};