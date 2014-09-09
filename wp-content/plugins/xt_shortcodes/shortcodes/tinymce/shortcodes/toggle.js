var previewSrc = "";
var sample = '';

var content = '<br />Toggle Sample Content<br />';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Title",
			id:"title",
			help:"Toggle Title"
		},
		{
			label:"Open?",
			id:"open",
			help:"Set it as true and the toggle will be opened by default", 
			controlType:"select-control", 
			selectValues:['', 'true']
		},
		{
			label:"Icon",
			id:"icon",
			help:"Use here a Font Awesome Icon name (check Docs to see avaliable names)"
		},
		],
	defaultContent:content,
	shortcode:"toggle"
};