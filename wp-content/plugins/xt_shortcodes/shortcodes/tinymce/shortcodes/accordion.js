var previewSrc = "";
var sample = '';

var content = '<br />Accordion Content Here<br />';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Open?",
			id:"open",
			help:"Set true to do this accordion begin opened automatically.", 
			controlType:"select-control", 
			selectValues:['', 'true']
		},
		{
			label:"Title",
			id:"title",
			help:"The accordion title."
		},
		{
			label:"Icon",
			id:"icon",
			help:"Use here a Font Awesome Icon name (check Docs to see avaliable names)"
		}
		],
	defaultContent:content,
	shortcode:"accordion"
};