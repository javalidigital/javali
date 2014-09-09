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
			label:"Author",
			id:"author",
			help:"Author name"
		},
		{
			label:"Author Image",
			id:"authorimg",
			help:"Display a author URL to be displayed aside author name"
		},
		{
			label:"Optional Author URL",
			id:"url",
			help:"Optional URL to show near of author name"
		},
		{
			label:"Type",
			id:"type",
			help:"Select the block type",
			controlType:"select-control", 
			selectValues:['dark-block', 'opacity-block', 'only-text', 'block']
		},
		{
			label:"Background Color",
			id:"bgcolor",
			help:"Custom CSS color like #2eacdd"
		},
		{
			label:"Color",
			id:"color",
			help:"Custom CSS Text color like #ffffff"
		}
		],
	defaultContent:content,
	shortcode:"testimonial_block"
};