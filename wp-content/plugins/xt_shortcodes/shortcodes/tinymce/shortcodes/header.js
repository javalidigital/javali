var previewSrc = "";
var sample = '';

var content = 'Your Header';

if(selectedText != '') {
	content = selectedText;
}

var description = '';

xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Border Position",
			id:"border",
			help:"Define where the border will be displayed.", 
			controlType:"select-control", 
			selectValues:['bottom', 'top', 'no']
		},
		{
			label:"Enable Sub Border?",
			id:"subborder",
			help:"Define if sub border effect will be used.", 
			controlType:"select-control", 
			selectValues:['yes', 'no']
		},
		{
			label:"Header Type",
			id:"tag",
			help:"Which header you want use", 
			controlType:"select-control", 
			selectValues:['h1', 'h2', 'h3', 'h4', 'h5', 'h6']
		},
		{
			label:"Alignment Direction",
			id:"align",
			help:"Select the direction to align the content.", 
			controlType:"select-control", 
			selectValues:['left', 'center', 'right']
		},
		{
			label:"Optional Icon",
			id:"icon",
			help:"Use here a Font Awesome Icon name (check Docs to see avaliable names)"
		},
		{
			label:"Padding Top",
			id:"padding_top",
			help:"Optional padding top CSS property, example: 40px, 25% or leave blank to default."
		},
		{
			label:"Padding Bottom",
			id:"padding_bottom",
			help:"Optional padding bottom CSS property, example: 40px, 25% or leave blank to default."
		},
		{
			label:"Margin Top",
			id:"margin_top",
			help:"Optional margin top CSS property, example: 40px, 25% or leave blank to default."
		},
		{
			label:"Margin Bottom",
			id:"margin_bottom",
			help:"Optional margin bottom CSS property, example: 40px, 25% or leave blank to default."
		}
		],
	defaultContent:content,
	shortcode:"header"
};