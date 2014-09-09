var previewSrc = "";
var sample = '';

var content = '1234';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Number after Animation",
			id:"number_after",
			help:"The number to be displayed after the animation be finished."
		},
		{
			label:"Optional Tag",
			id:"tag",
			help:"Optional custom tag to wrap the number counter, default tag is span."
		}
		],
	defaultContent:content,
	shortcode:"counter"
};