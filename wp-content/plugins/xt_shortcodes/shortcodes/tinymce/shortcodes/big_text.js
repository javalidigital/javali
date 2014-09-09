var previewSrc = "";
var sample = '';

var content = 'Your big text';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Tag",
			id:"tag",
			help:"Select the tag of header to be used, h1 is the biggest and h6 the smaller.", 
			controlType:"select-control", 
			selectValues:['h1', 'h2', 'h3', 'h4', 'h5', 'h6']
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
	shortcode:"big_text"
};