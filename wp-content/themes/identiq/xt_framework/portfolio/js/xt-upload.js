jQuery(document).ready(function() {

	var file_frame;

	jQuery(document).on("click", '.upload-admin', function(event) {

		var xt_meta_field = jQuery(this).siblings(".upload-admin-input");

		event.preventDefault();

		if( file_frame ) {
			file_frame.open();
			return;
		}

		/* Create the media frame. */
		file_frame = wp.media.frames.file_frame = wp.media({
			title: 'Choose a file',
			button: {
				text: 'Insert File URL',
			},
			multiple: false
		});

		/* When an image is selected, run a callback. */
		file_frame.on( 'select', function() {
			/* We set multiple to false so only get one image from the uploader */
			attachment = file_frame.state().get('selection').first().toJSON();
 
			/* Do something with attachment.id and/or attachment.url here */
			xt_meta_field.val(attachment.url);

			file_frame = null;
	    });

	    file_frame.open();

	});

});
/*	
	jQuery(document).ready(function() {
		
		var wpts_meta_field = null;
		var storeSendToEditor = window.send_to_editor;
				
		jQuery('.upload-admin').live("click", function() {
			wpts_meta_field = jQuery(this).siblings(".upload-admin-input");
			formfield = jQuery(this).siblings(".upload-admin-input").attr('name');
			tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
			
			window.send_to_editor = function(html) {
				imgurl = jQuery('img',html).attr('src');
				wpts_meta_field.val(imgurl);
				tb_remove();
				window.send_to_editor = storeSendToEditor;
			}
			
			return false;
		});
	
	});
*/