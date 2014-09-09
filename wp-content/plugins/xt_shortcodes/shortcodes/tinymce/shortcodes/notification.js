var previewSrc = "";
var sample = '';

var content = 'Message Box Content';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Type",
			id:"type",
			help:"Select the type of notification", 
			controlType:"select-control", 
			selectValues:['info', 'warning', 'success', 'error', 'notice']
		},
		{
			label:"Close",
			id:"close",
			help:"To hide the close button set this as false", 
			controlType:"select-control", 
			selectValues:['','false']
		},
		{
			label:"Align",
			id:"align",
			help:"Defines text alignment inside box", 
			controlType:"select-control", 
			selectValues:['center', 'left', 'right']
		}
		],
	defaultContent:content,
	shortcode:"notification"
};