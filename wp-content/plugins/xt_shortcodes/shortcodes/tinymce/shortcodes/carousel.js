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
			label:"Style",
			id:"style",
			help:"The navigation can be normal (top), center and bottom.", 
			controlType:"select-control", 
			selectValues:['normal', 'center', 'bottom']
		},
		{
			label:"Scroll",
			id:"scroll",
			help: "How many items scroll per scroll."
		},
		{
			label:"Visible",
			id:"visible",
			help:"Minimum of items that MUST be displayed in normal resolution."
		},
		{
			label:"(Optional) Tablet Visible",
			id:"ipad",
			help:"Items visible at tablet resolution"
		},
		{
			label:"(Optional) Landscape Visible",
			id:"land",
			help:"Items visible at mobile Landscape resolution"
		},
		{
			label:"(Optional) Portrait Visible",
			id:"portrait",
			help:"Items visible at mobile Portrait resolution"
		},
		{
			label:"Enable Mouse Wheel Scrolling?",
			id:"mousewheel",
			help:"Enable or disable mouse wheel scroll.", 
			controlType:"select-control", 
			selectValues:['true', 'false']
		},
		{
			label:"Enable Navigation?",
			id:"navigation",
			help:"Enable or disable navigation.", 
			controlType:"select-control", 
			selectValues:['true', 'false']
		},
		{
			label:"Enable Timer?",
			id:"timer",
			help:"Enable or disable timer.", 
			controlType:"select-control", 
			selectValues:['false', 'true']
		},
		{
			label:"Duration",
			id:"duration",
			help:"Duration of timer or autoslide. Default: 800"
		},	
		{
			label:"Autoplay?",
			id:"autoplay",
			help:"Enable or disable autoslide (autoplay)?", 
			controlType:"select-control", 
			selectValues:['true', 'false']
		}
		],
	defaultContent:content,
	shortcode:"carousel"
};