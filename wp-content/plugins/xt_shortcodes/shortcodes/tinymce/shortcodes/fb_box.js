var previewSrc = "";
var sample = '';

var content = '';

var description = '';

xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Href",
			id:"href",
			help:"Facebook Profile Address, like http://www.facebook.com/Microsoft"
		},
		{
			label:"Color Scheme",
			id:"colorscheme",
			help:"Select the color scheme", 
			controlType:"select-control", 
			selectValues:['light', 'dark']
		},
		{
			label:"Show Faces?",
			id:"show_faces",
			help:"Show thumbnail of who liked the page", 
			controlType:"select-control", 
			selectValues:['true', 'false']
		},
		{
			label:"Stream",
			id:"stream",
			help:"Disable or Enable Stream", 
			controlType:"select-control", 
			selectValues:['false', 'true']
		},
		{
			label:"Header",
			id:"header",
			help:"Show or hide header of Like Box", 
			controlType:"select-control", 
			selectValues:['true', 'false']
		},
		{
			label:"Width",
			id:"width",
			help:"Optional Custom Width. Default: 292"
		},
		{
			label:"Height",
			id:"height",
			help:"Optional Custom Height. Default: 290"
		}
		],
	defaultContent:content,
	shortcode:"fb_box"
};