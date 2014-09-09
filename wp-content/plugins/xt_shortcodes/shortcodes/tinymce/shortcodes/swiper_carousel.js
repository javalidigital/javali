var previewSrc = "";
var sample = '';

var content = '<br /><br />';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Speed",
			id:"speed",
			help: "Scroll speed in miliseconds, default is 300."
		},
		{
			label:"Auto Play",
			id:"autoplay",
			help: "Time in miliseconds to auto play, leave blank to don't auto play."
		},
		{
			label:"Mode",
			id:"mode",
			help:"Defines carousel layout.", 
			controlType:"select-control", 
			selectValues:['horizontal', 'vertical']
		},
		{
			label:"Loop?",
			id:"loop",
			help:"Enable loop scroll in the carousel.", 
			controlType:"select-control", 
			selectValues:['false', 'true']
		},
		{
			label:"Visible",
			id:"slidesperview",
			help:"Minimum of items that MUST be displayed in normal resolution."
		},
		{
			label:"Tablet Visible",
			id:"slidesperviewtablet",
			help:"Items visible at tablet resolution"
		},
		{
			label:"Landscape Visible",
			id:"slidesperviewmobile",
			help:"Items visible at mobile resolution"
		},
		{
			label:"Pagination?",
			id:"pagination",
			help:"Enable pagination (bottom circles) to this carousel.", 
			controlType:"select-control", 
			selectValues:['', 'yes']
		},
		{
			label:"Arrow Navigation?",
			id:"arrow_nav",
			help:"Enable arrows navigation to this carousel.", 
			controlType:"select-control", 
			selectValues:['', 'yes']
		}
		],
	defaultContent:content,
	shortcode:"swiper_carousel"
};