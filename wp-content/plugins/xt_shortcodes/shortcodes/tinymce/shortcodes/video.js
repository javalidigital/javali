var previewSrc = "";
var sample = '';

var content = '';

var description = '';
 
xt_wpShortcodeAtts={
	attributes:[
		
		{
			label:"Type",
			id:"type",
			help:"Select video provider.", 
			controlType:"select-control", 
			selectValues:['youtube', 'vimeo', 'dailymotion']
		},
		{
			label:"Clip ID",
			id:"clip_id",
			help:"The clip ID, like: 'iRh2kF-1X2E' to Youtube, '57815233' to Vimeo or 'xum36d_mini-paceman_fun' to Dailymotion"
		}
		],
	defaultContent:content,
	shortcode:"video"
};