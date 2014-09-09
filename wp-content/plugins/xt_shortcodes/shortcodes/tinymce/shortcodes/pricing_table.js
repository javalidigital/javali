var previewSrc = "";
var sample = '';

var content = '<ul><li>Up to 20 Products</li><li>Premium Support</li></ul>';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Top title (optional)",
			id:"top_title",
			help:"The text displayed in the top square (optional)"
		},
		{
			label:"Title",
			id:"title",
			help:"Plan name, like: Professional"
		},
		{
			label:"Price",
			id:"price",
			help:"Plan price, like: $25"
		},
		{
			label:"Per",
			id:"per",
			help:"Plan recurrence, like monthly, yearly"
		},
		{
			label:"Button Link",
			id:"href",
			help:"Button URL"
		},
		{
			label:"Button Text",
			id:"button",
			help:"Button text, like: Sign Up or Buy Now"
		},
		{
			label:"Featured?",
			id:"featured",
			help:"Define as yes to turn the plan bigger than others", 
			controlType:"select-control", 
			selectValues:['', 'yes']
		},
		{
			label:"Color",
			id:"color",
			help:"Custom color, like #2addee or green, for example"
		}
		],
	defaultContent:content,
	shortcode:"pricing_table"
};