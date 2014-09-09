var previewSrc = "";
var sample = '';

var content = 'Content Here';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
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
	shortcode:"full_section"
};