var previewSrc = "";
var sample = '';

var content = '<br />Sample Member Content<br />';

var description = '';

if(selectedText != '') {
	content = selectedText;
}
 
xt_wpShortcodeAtts={
	attributes:[
		{
			label:"Image",
			id:"img",
			help:"Image URL to display inside Member Block"
		},
		{
			label:"Name",
			id:"name",
			help:"Member Name"
		},
		{
			label:"Occupation",
			id:"occupation",
			help:"Member role inside company, for example, Manager, CEO and others"
		},
		{
			label:"Twitter",
			id:"twitter",
			help:"Twitter address like http://www.twitter.com/xiaothemes"
		},
		{
			label:"Facebook",
			id:"facebook",
			help:"Facebook address like http://www.facebook.com/xiaothemes"
		},
		{
			label:"Skype",
			id:"skype",
			help:"Skype username like xiaothemes"
		},
		{
			label:"Google+",
			id:"google",
			help:"Google+ address like http://www.google.com/xiaothemes"
		},
		{
			label:"Linkedin",
			id:"linkedin",
			help:"LinkedIn address like http://www.linkedin.com/xiaothemes"
		},
		{
			label:"Mail",
			id:"mail",
			help:"Mail address like xiaothemes@xiaothemes.com"
		},
		{
			label:"Dribbble",
			id:"dribbble",
			help:"Dribbble address like http://www.dribbble.com/xiaothemes"
		},
		{
			label:"Git",
			id:"git",
			help:"GitHub address like http://www.github.com/xiaothemes"
		},
		{
			label:"Pinterest",
			id:"pinterest",
			help:"Pinterest address like http://www.pinterest.com/xiaothemes"
		}
		],
	defaultContent:content,
	shortcode:"member_block"
};