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
			label:"ID",
			id:"id",
			help:"Optional custom ID attribute."
		},
		{
			label:"Class",
			id:"class",
			help:"Optional custom Class attribute."
		},
		{
			label:"Style",
			id:"style",
			help:"Select the style of the button.", 
			controlType:"select-control", 
			selectValues:['normal', 'flat']
		},
		{
			label:"Size",
			id:"size",
			help:"Select the size of the button.", 
			controlType:"select-control", 
			selectValues:['medium', 'small', 'large']
		},
		{
			label:"Link",
			id:"href",
			help:"The button href, ex: http://google.com"
		},
		{
			label:"Target",
			id:"target",
			help:"Select where the link will be opened.", 
			controlType:"select-control", 
			selectValues:['_self', '_blank']
		},
		{
			label:"Color",
			id:"color",
			help:"Select color of button.",
			controlType:"select-control", 
			selectValues:['default', 'black', 'gray','white','red', 'orange','magenta','yellow','blue','pink','green','rosy']
		},
		{
			label:"Lightbox",
			id:"lightbox",
			help:"Set as yes to open the link in a lightbox.", 
			controlType:"select-control", 
			selectValues:['', 'yes']
		},
		{
			label:"Content Type",
			id:"type",
			help:"Select the content type to be displayed, iframe is great to vimeo, maps or youtube.", 
			controlType:"select-control", 
			selectValues:['image', 'iframe']
		},
		{
			label:"Icon",
			id:"icon",
			help:"Use here a Font Awesome Icon name (check Docs to see avaliable names)"
		}
		],
	defaultContent:content,
	shortcode:"button"
};