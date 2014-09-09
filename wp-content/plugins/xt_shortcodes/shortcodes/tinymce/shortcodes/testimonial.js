var previewSrc = "";
var sample = '';

var content = '<br> Sample Testimonial<br />';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Author",
			id:"author",
			help:"Testimonial author name"
		}
		],
	defaultContent:content,
	shortcode:"testimonial"
};