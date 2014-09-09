var previewSrc = "";
var sample = '';

var content = '';

var description = '';

xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Icon",
			id:"icon",
			help:"Use here a Font Awesome Icon name (check Docs to see avaliable names)"
		},
		{
			label:"Link",
			id:"href",
			help:"Optional link to the icon"
		},
		{
			label:"Color",
			id:"color",
			help:"Custom CSS color like #253344 or rgba(12, 33, 45, 1)"
		},
		{
			label:"Size",
			id:"size",
			help:"Custom CSS font size, like 40px or 3em"
		},
		{
			label:"Target",
			id:"target",
			help:"Select the target of icon link", 
			controlType:"select-control", 
			selectValues:['_self', '_blank']
		},
		{
			label:"Margin",
			id:"margin",
			help:"Custom margin in CSS format, like 5px 25px 5px 25px"
		}
		],
	defaultContent:content,
	shortcode:"font_icon"
};