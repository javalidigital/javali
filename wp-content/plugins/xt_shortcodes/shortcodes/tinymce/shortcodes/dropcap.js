var previewSrc = "";
var sample = '';

var content = 'L';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		
		{
			label:"Type",
			id:"type",
			help:"Dropcap style to be used.", 
			controlType:"select-control", 
			selectValues:['normal', 'circle', 'square', 'classic']
		},
		{
			label:"Color",
			id:"color",
			help:"Select dropcap default color.",
			controlType:"select-control", 
			selectValues:['default', 'light-blue', 'green', 'pink', 'blue', 'yellow', 'dark', 'light-green', 'red', 'gray', 'orange', 'violet']
		}
		],
	defaultContent:content,
	shortcode:"dropcap"
};