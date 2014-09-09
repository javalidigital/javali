var previewSrc = "";
var sample = '';

var content = '';

var description = '';
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Columns",
			id:"columns",
			help:"Select the latest projects layout columns.", 
			controlType:"select-control", 
			selectValues:['3', '4', '2']
		},
		{
			label:"(Optional) Filters",
			id:"categories",
			help:"Use filters slug to get projects of one or more specific filters"
		},
		{
			label:"Excerpt Chars Limit",
			id:"excerpt_chars",
			help:"Select how many chars of excerpt will be displayed at max. Default: 80"
		},
		{
			label:"Number of projects",
			id:"num",
			help:"Set how many projects will be displayed. Default: 4"
		},
		{
			label:"(Optional) Portfolio",
			id:"portfolio",
			help:"Use portfolios slug to get projects of one or more specific portfolios"
		},
		{
			label:"(Optional) Offset",
			id:"offset",
			help:"Define the offset of results. Default: 0"
		}
		],
	defaultContent:content,
	shortcode:"latest_projects"
};