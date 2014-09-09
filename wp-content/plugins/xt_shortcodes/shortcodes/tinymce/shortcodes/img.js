var previewSrc = "";
var sample = '';

var content = '<br />Delete this text and place your image instead.</br />';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"LightBox",
			id:"lightbox",
			help:"Select the color of the button.", 
			controlType:"select-control", 
			selectValues:['', 'yes']
		},
		{
			label:"Content Type",
			id:"type",
			help:"Select the content type to be displayed, iframe is great to vimeo, maps or youtube.", 
			controlType:"select-control", 
			selectValues:['image', 'iframe']
		}
		],
	defaultContent:content,
	shortcode:"img"
};