var previewSrc = "";
var sample = '';

var content = 'Sample highlighted Text';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Color",
			id:"color",
			help:"Highlight Color", 
			controlType:"select-control", 
			selectValues:['light-blue', 'green','pink','blue','yellow','dark','light-green','red','gray','white','orange','violet','bordo']
		}
		],
	defaultContent:content,
	shortcode:"highlight"
};