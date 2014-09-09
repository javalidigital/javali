var previewSrc = "";
var sample = '';

var content = '';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Address",
			id:"address",
			help:"Valid address to use instead Latitude and Longitude"
		},
		
		{
			label:"Width",
			id:"width",
			help:"Only number Width"
		},
		{
			label:"Height",
			id:"height",
			help:"Only number Height"
		},
		{
			label:"Zoom",
			id:"zoom",
			help:"Zoom of map (0 – 20)"
		},
		{
			label:"Latitude",
			id:"lat",
			help:"Latitude code between -90 and 90"
		},
		{
			label:"Longitude",
			id:"long",
			help:"Longitude code between -180 and 180"
		},
		{
			label:"Full?",
			id:"full",
			help:"Define if will fill all the space", 
			controlType:"select-control", 
			selectValues:['yes', 'no']
		},
		{
			label:"Marker",
			id:"marker",
			help:"Use marker? yes or no.", 
			controlType:"select-control", 
			selectValues:['no', 'yes']
		},
		{
			label:"Window Marker Text",
			id:"infowindow",
			help:"Text to be displayed abover marker. Support HTML tags like strong, em and br, for example."
		},
		{
			label:"Enable Scrollwheel zoom?",
			id:"scrollwheel",
			help:"Define if the zoom will increase or decrease when user use the scrollwheel of mouse above the map.", 
			controlType:"select-control", 
			selectValues:['true', 'false']
		}
		],
	defaultContent:content,
	shortcode:"gmap"
};