var previewSrc = "";
var sample = '';

var content = '';

var description = '';
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Show Title?",
			id:"show_title",
			help:"Show or hide project title.", 
			controlType:"select-control", 
			selectValues:['yes', 'no']
		},
		{
			label:"Show Excerpt?",
			id:"show_excerpt",
			help:"Show or hide project excerpt.", 
			controlType:"select-control", 
			selectValues:['yes', 'no']
		},
		{
			label:"Show Meta?",
			id:"show_meta",
			help:"Show or hide post meta.", 
			controlType:"select-control", 
			selectValues:['yes', 'no']
		},
		{
			label:"Excerpt Chars Limit",
			id:"excerpt_chars",
			help:"Select how many chars of excerpt will be displayed at max. Default: 200"
		},
		{
			label:"(Optional) Categories",
			id:"categories",
			help:"Use categories slug to get posts of one or more specific categories"
		},
		{
			label:"Number of posts",
			id:"num",
			help:"Set how many posts will be displayed. Default: 4"
		}
		],
	defaultContent:content,
	shortcode:"latest_posts_list"
};