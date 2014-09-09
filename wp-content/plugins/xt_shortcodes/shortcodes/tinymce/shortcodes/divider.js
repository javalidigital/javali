var previewSrc = "";
var sample = '';

var content = '';

var description = '';

xt_wpShortcodeAtts={
	attributes:[
		
		{
			label:"Style",
			id:"style",
			help:"Select divider style.", 
			controlType:"select-control", 
			selectValues:['normal', 'dotted', 'shadow', 'vertical-line', 'colored']
		},
		{
			label:"Margin",
			id:"margin",
			help:"Optional custom margin like 45px 0px 45px 0px"
		}
		],
	defaultContent:content,
	shortcode:"divider"
};