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
			label:"Icon",
			id:"icon",
			help:"Use here a Font Awesome Icon name (check Docs to see avaliable names)"
		},
		{
			label:"Color",
			id:"color",
			help:"Optional Custom CSS color like #253344 or rgba(12, 33, 45, 1)"
		},
		{
			label:"Size",
			id:"size",
			help:"Optional Custom CSS font size, like 40px or 3em"
		},
		{
			label:"Margin",
			id:"space",
			help:"Optional Lateral Margin, default is 100px."
		}
		],
	defaultContent:content,
	shortcode:"box_font_icon"
};