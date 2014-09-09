var previewSrc = "";
var sample = '';

var content = 'Sample Inline';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Font",
			id:"font",
			help:"Google Webfonts Name, like PT Sans"
		},
		{
			label:"Size",
			id:"size",
			help:"Custom CSS font size, like 24px or 4em for example"
		},
		{
			label:"Weight",
			id:"weight",
			help:"Define font weight. Note that some weights are not avaliable to all fonts. Check all avaliable weights at Google Webfonts.",
			controlType:"select-control", 
			selectValues:['normal', 'bold', 'lighter', 'bolder', 'ultra-light', 'ultra-bold']
		},
		{
			label:"Italic?",
			id:"italic",
			help:"Select italic to enable italic style.",
			controlType:"select-control", 
			selectValues:['', 'italic']
		}
		],
	defaultContent:content,
	shortcode:"gfont_inline"
};