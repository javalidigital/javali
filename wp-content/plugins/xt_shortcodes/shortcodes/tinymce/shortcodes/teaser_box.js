var previewSrc = "";
var sample = '';

var content = '<br />Sample Teaser Content<br />';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Title",
			id:"title",
			help:"Teaser Header Text"
		},
		{
			label:"Style",
			id:"style",
			help:"Select the teaser box style", 
			controlType:"select-control", 
			selectValues:['normal', 'minimal']
		},
		{
			label:"Button Link",
			id:"href",
			help:"Optional button link"
		},
		{
			label:"Button Target",
			id:"target",
			help:"Optional Button Target", 
			controlType:"select-control", 
			selectValues:['_self', '_blank']
		},
		{
			label:"Button Text",
			id:"btntext",
			help:"Optional text that will appear in the button"
		},
		{
			label:"Button Style",
			id:"btnstyle",
			help:"Optional button style", 
			controlType:"select-control", 
			selectValues:['normal', 'flat']
		},
		{
			label:"Color",
			id:"color",
			help:"Optional button color",
			controlType:"select-control", 
			selectValues:['default', 'black', 'gray','white','red', 'orange','magenta','yellow','blue','pink','green','rosy']
		},
		{
			label:"Button Size",
			id:"btnsize",
			help:"Optional button size", 
			controlType:"select-control", 
			selectValues:['medium', 'small','large']
		},
		{
			label:"Icon",
			id:"icon",
			help:"Optional icon showed inside button. Use here a Font Awesome Icon name (check Docs to see avaliable names)"
		},
		],
	defaultContent:content,
	shortcode:"teaser_box"
};