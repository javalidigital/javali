<?php
header("Content-Type:text/javascript");

//Setup URL to WordPres
$absolute_path = __FILE__;
$path_to_wp = explode( 'wp-content', $absolute_path );
$wp_url = $path_to_wp[0];

//Access WordPress
require_once( $wp_url.'/wp-load.php' );

//Path to TinyMCE plugin folder
$path_to_wp = explode( 'wp-content', dirname(__FILE__) );
$plugin_path = trailingslashit( '../wp-content' . substr( $path_to_wp[1], 0, -3 ) );

//URL to TinyMCE plugin folder
$plugin_url = plugins_url() . "/".XT_SCS_DIR."/shortcodes/tinymce/";

$theme_path = get_template_directory_uri();
?>

var framework_url = '<?php echo str_replace('\\', '/', dirname( __FILE__ )); ?>';

var shortcode_generator_path = '<?php echo str_replace('\\', '/', $plugin_path); ?>';
var shortcode_generator_url = '<?php echo str_replace('\\', '/', $plugin_url); ?>';

var shortcode_generator_url_theme = '<?php echo str_replace('\\', '/', $theme_path); ?>';

var tb_dialog_helper = {
	
	// ---------------------------------------------------------
    // TickBox popup controls
    // ---------------------------------------------------------
    
    remove_linebreaks : false,
    needsPreview: false,
    setUpButtons: function () {
        var a = this;
        jQuery("#xt_wp-cancel-button").click(function () {
            a.closeDialog()
        });
        jQuery("#xt_wp-insert-button").click(function () {
            a.insertAction()
        });
    },
    loadShortcodeDetails: function () {
        if (xt_wpSelectedShortcodeType) {
            var a = this;
            jQuery.getScript(shortcode_generator_url + "shortcodes/" + xt_wpSelectedShortcodeType + ".js", function () {
                a.initializeDialog();
                
                // Set the default content to the highlighted text, for certain shortcode types.
                switch ( xt_wpSelectedShortcodeType ) {
					case 'box':
					case 'ilink':
					case 'quote':
					case 'button':
					case 'abbr':
					case 'unordered_list':
					case 'ordered_list':
					case 'typography':
						jQuery('input#xt_wp-value-content').val( selectedText );
					case 'toggle':
						jQuery('textarea#xt_wp-value-content').val( selectedText );
					break;
				
				} // End SWITCH Statement
                
                // Automatic preview generation on load.
                a.previewAction();
            }).fail(function(jqxhr, settings, exception) {
                
                jQuery.getScript(shortcode_generator_url_theme + "/xt_framework/shortcodes/shortcodes/" + xt_wpSelectedShortcodeType + ".js", function () {
                    a.initializeDialog();
                    
                    // Set the default content to the highlighted text, for certain shortcode types.
                    switch ( xt_wpSelectedShortcodeType ) {
                        case 'box':
                        case 'ilink':
                        case 'quote':
                        case 'button':
                        case 'abbr':
                        case 'unordered_list':
                        case 'ordered_list':
                        case 'typography':
                            jQuery('input#xt_wp-value-content').val( selectedText );
                        case 'toggle':
                            jQuery('textarea#xt_wp-value-content').val( selectedText );
                        break;
                    
                    } // End SWITCH Statement
                    
                    // Automatic preview generation on load.
                    a.previewAction();
                });

            }); /* FAILED AND MAIN GETSCRIPT */

        }

    },
    initializeDialog: function () {

        if (typeof xt_wpShortcodeAtts == "undefined") {
            jQuery("#xt_wp-shortcode-options").append("<p>Error loading details for shortcode: " + xt_wpSelectedShortcodeType + "</p>");
        } else {
		
			if(previewSrc != '')
			{
				jQuery("#preview-sc").css('display', 'block');
				jQuery("#preview-sc img").attr('src', shortcode_generator_url + 'preview/' + previewSrc);
			}
			else {
				jQuery("#preview-sc").css('display', 'none');
			}
			
            if(description != '') {
                jQuery("#description-sc").text(description);
            }

			jQuery("#xt_wp-sample-button").click(function() { 
				
			jQuery("#sample-sc-p").css("display", "block");
				
			jQuery("#sample-sc").val(sample);
				return false;
			});
			
			jQuery(".tooltip-link").live('click', function() {
				jQuery(this).siblings(".tooltip").fadeToggle('fast');
			});
			
            var a = xt_wpShortcodeAtts.attributes,
                b = jQuery("#xt_wp-options-table");

            for (var c in a) {
                var f = "xt_wp-value-" + a[c].id,
                    d = a[c].isRequired ? "xt_wp-required" : "",
                    g = jQuery('<th valign="top" scope="row" class="first-col"></th>');

                var requiredSpan = '<span class="optional"></span>';
                if (a[c].isRequired) {
                    requiredSpan = '<span class="required">*</span>';
                } // End IF Statement
                jQuery("<label/>").attr("for", f).attr("class", d).html(a[c].label).append(requiredSpan).appendTo(g);
                f = jQuery("<td/>");
                d = (d = a[c].controlType) ? d : "text-control";
                switch (d) {
	                /*
	                case "tab-control":
	                    this.createTabControl(a[c], f, c == 0);
	                    break;
					*/
	                case "link-control":
	                case "text-control":
	                    this.createTextControl(a[c], f, c == 0);
	                    break;
	                    
	                case "textarea-control":
	                    this.createTextAreaControl(a[c], f, c == 0);
	                    break;

                    case "icon-control":
                        this.createIconControl(a[c], f, c == 0);
                        break;

                    case "help-control":
                        this.createHelpControl(a[c], f, c == 0);
                        break;
	
	                case "select-control":
	                    this.createSelectControl(a[c], f, c == 0);
	                    break;
	                }
	
	                jQuery("<tr/>").append(g).append(f).appendTo(b)
	            }
	            jQuery(".xt_wp-focus-here:first").focus()
	
				// Add additional wrappers, etc, to each select box.
				jQuery('#xt_wp-shortcode-options select').wrap( '<div class="select_wrapper"></div>' ).before('<span></span>');
				jQuery('#xt_wp-shortcode-options select option:selected').each( function () {
				jQuery(this).parents('.select_wrapper').find('span').text( jQuery(this).text() );
			});

        } // End IF Statement
    },
    
     /* Tab Generator Element */

    createTabControl: function (a, b, c) {
        new xt_wpTabMaker(b, 6, c ? "xt_wp-focus-here" : null);
        b.addClass("xt_wp-marker-tab-control")
    },

    // ---------------------------------------------------------
    // Generic Text Element
    // ---------------------------------------------------------

    createTextControl: function (a, b, c) {
		
        var f = a.validateLink ? "xt_wp-validation-marker" : "",
            d = a.isRequired ? "xt_wp-required" : "",
            g = "xt_wp-" + a.id,
			tipid = "tip-" + a.id,
            e = a.value; // Default text input value (Added 10/10/2011)

        jQuery('<input type="text">').attr("id", g).attr("name", g).val(e).addClass(f).addClass(d).addClass('txt input-text').addClass(c ? "xt_wp-focus-here" : "").appendTo(b);
		
        if (a = a.help) {
            if(a != '') {

                var idLink = 'toolimage-' + g;
                var idText = 'tooltext-' + g;

                jQuery("<span/>").addClass("xt_wp-input-help").html('<a href="#" id="'+idLink+'" class="tooltip-link"><img src="<?php echo $plugin_url; ?>/help.png" alt="Help" /></a><span class="tooltip" id="'+idText+'"><span class="tool-text">'+a+'</span></span>').appendTo(b);
            
                b.find('#' + idLink).bind("mouseover", function() {
                    
                    b.find("#" + idText).fadeIn('fast');

                    return false;
                });

                b.find('#' + idLink).bind("mouseout", function() {

                    b.find("#" + idText).fadeOut('fast');

                    return false;
                });

            }
        }

        var h = this;
        b.find("#" + g).bind("keydown focusout", function (e) {
            if (e.type == "keydown" && e.which != 13 && e.which != 9 && !e.shiftKey) h.needsPreview = true;
            else if (h.needsPreview && (e.type == "focusout" || e.which == 13)) {
                h.previewAction(e.target);
                h.needsPreview = false
            }
        })

    },
	
    // ---------------------------------------------------------
    // Generic HELP Element
    // ---------------------------------------------------------

    createHelpControl: function (a, b, c) {
        
        b.append('<div class="help-xt"><a href="http://www.xt.net/wp/docs/" target="_blank">Visit Help / Docs</a></div>');

    },

	// ---------------------------------------------------------
    // Generic TextArea Element
    // ---------------------------------------------------------
	
    createTextAreaControl: function (a, b, c) {

        var f = a.validateLink ? "xt_wp-validation-marker" : "",
            d = a.isRequired ? "xt_wp-required" : "",
            g = "xt_wp-" + a.id;

        jQuery('<textarea>').attr("id", g).attr("name", g).attr("rows", 10).attr("cols", 30).addClass(f).addClass(d).addClass('txt input-textarea').addClass(c ? "xt_wp-focus-here" : "").appendTo(b);
        b.addClass("xt_wp-marker-textarea-control");

        if (a = a.help) {
            if(a != '') {

                var idLink = 'toolimage-' + g;
                var idText = 'tooltext-' + g;

                jQuery("<span/>").addClass("xt_wp-input-help").html('<a href="#" id="'+idLink+'" class="tooltip-link"><img src="<?php echo $plugin_url; ?>/help.png" alt="Help" /></a><span class="tooltip" id="'+idText+'"><span class="tool-text">'+a+'</span></span>').appendTo(b);
            
                b.find('#' + idLink).bind("mouseover", function() {
                    
                    b.find("#" + idText).fadeIn('fast');

                    return false;
                });

                b.find('#' + idLink).bind("mouseout", function() {

                    b.find("#" + idText).fadeOut('fast');

                    return false;
                });

            }
        }

        var h = this;
        b.find("#" + g).bind("keydown focusout", function (e) {
            if (e.type == "keydown" && e.which != 13 && e.which != 9 && !e.shiftKey) h.needsPreview = true;
            else if (h.needsPreview && (e.type == "focusout" || e.which == 13)) {
                h.previewAction(e.target);
                h.needsPreview = false
            }
        })

    },


    // ---------------------------------------------------------
    // Icon
    // ---------------------------------------------------------

    createIconControl: function (a, b, c) {

        var f = a.validateLink ? "xt_wp-validation-marker" : "",
            d = a.isRequired ? "xt_wp-required" : "",
            g = "xt_wp-" + a.id;

        var selectNode = jQuery('<select>').attr("id", g).attr("name", g).addClass(f).addClass(d).addClass('select input-select').addClass(c ? "xt_wp-focus-here" : "");

        b.addClass('xt_wp-marker-select-control');

        var selectBoxValues = a.selectValues;
        
        var labelValues = a.selectValues;

        for (v in selectBoxValues) {

            var value = selectBoxValues[v];
            var label = labelValues[v];
            var selected = '';

            if (value == '') {

                if (a.defaultValue == value) {

                    label = a.defaultText;

                } // End IF Statement
            } else {

                if (value == a.defaultValue) {
                    label = a.defaultText;
                } // End IF Statement
            } // End IF Statement
            if (value == a.defaultValue) {
                selected = ' selected="selected"';
            } // End IF Statement
            
            selectNode.append('<option value="' + value + '"' + selected + '>' + label + '</option>');

        } // End FOREACH Loop
        
        selectNode.appendTo(b);


        /*** ADD ICON SELECTOR ***/

            var selectorID = 'icon-selector-' + g;

            var iconId = a.iconId;

            selectNode.after('<div class="icon-selector '+iconId+'" id="' + selectorID + '"> </div>');

            for (v in selectBoxValues) {
                var value = selectBoxValues[v];
                var label = labelValues[v];

                /*
                b.find('#icon-selector-xt_wp-icon').append('<p>'+value+'</p>');
                */

                b.find('#' + selectorID).append('<a href="#" class="single-icon" rel="'+value+'" title="'+g+'"><span class="span-icon icon-'+value+'"> </span></a>');
            }

            b.find('#' + selectorID + ' a').bind("click", function(e) { 
                
                var newVal = jQuery(this).attr("rel");

                var Target = jQuery(this).attr("title");

                jQuery(this).parents('.icon-selector').siblings('.select_wrapper').find('span').text( newVal );

                jQuery(this).parents('.icon-selector').siblings('.select_wrapper').find('select').val( newVal );

                return false;
            });

        /*** END ICON SELECTOR ***/

        var h = this;

        b.find("#" + g).bind("change", function (e) {

            if ((e.type == "change" || e.type == "focusout") || e.which == 9) {

                h.needsPreview = true;

            }

            if (h.needsPreview) {

                h.previewAction(e.target);

                h.needsPreview = false
            }
            
            // Update the text in the appropriate span tag.
            var newText = jQuery(this).children('option:selected').text();
            
            jQuery(this).parents('.select_wrapper').find('span').text( newText );
        })

    },
	
	
	// ---------------------------------------------------------
    // Select Box Element
    // ---------------------------------------------------------

    createSelectControl: function (a, b, c) {

        var f = a.validateLink ? "xt_wp-validation-marker" : "",
            d = a.isRequired ? "xt_wp-required" : "",
            g = "xt_wp-" + a.id;

        var selectNode = jQuery('<select>').attr("id", g).attr("name", g).addClass(f).addClass(d).addClass('select input-select').addClass(c ? "xt_wp-focus-here" : "");

        b.addClass('xt_wp-marker-select-control');

        var selectBoxValues = a.selectValues;
        
        var labelValues = a.selectValues;

        for (v in selectBoxValues) {

            var value = selectBoxValues[v];
            var label = labelValues[v];
            var selected = '';

            if (value == '') {

                if (a.defaultValue == value) {

                    label = a.defaultText;

                } // End IF Statement
            } else {

                if (value == a.defaultValue) {
                    label = a.defaultText;
                } // End IF Statement
            } // End IF Statement
            if (value == a.defaultValue) {
                selected = ' selected="selected"';
            } // End IF Statement
            
            selectNode.append('<option value="' + value + '"' + selected + '>' + label + '</option>');

        } // End FOREACH Loop
        
        selectNode.appendTo(b);

        if (a = a.help) {
            if(a != '') {

                var idLink = 'toolimage-' + g;
                var idText = 'tooltext-' + g;

                jQuery("<span/>").addClass("xt_wp-input-help").html('<a href="#" id="'+idLink+'" class="tooltip-link"><img src="<?php echo $plugin_url; ?>/help.png" alt="Help" /></a><span class="tooltip" id="'+idText+'"><span class="tool-text">'+a+'</span></span>').appendTo(b);
            
                b.find('#' + idLink).bind("mouseover", function() {
                    
                    b.find("#" + idText).fadeIn('fast');

                    return false;
                });

                b.find('#' + idLink).bind("mouseout", function() {

                    b.find("#" + idText).fadeOut('fast');

                    return false;
                });

            }
        }

        var h = this;

        b.find("#" + g).bind("change", function (e) {

            if ((e.type == "change" || e.type == "focusout") || e.which == 9) {

                h.needsPreview = true;

            }

            if (h.needsPreview) {

                h.previewAction(e.target);

                h.needsPreview = false
            }
            
            // Update the text in the appropriate span tag.
            var newText = jQuery(this).children('option:selected').text();
            
            jQuery(this).parents('.select_wrapper').find('span').text( newText );
        })

    },
    
	getTextKeyValue: function (a) {
        var b = a.find("input");
        if (!b.length) return null;
        a = b.attr("id").substring(6);
        b = b.val();
        return {
            key: a,
            value: b
        }
    },

	getTextAreaKeyValue: function (a) {
        var b = a.find("textarea");
        if (!b.length) return null;
        a = b.attr("id").substring(6);
        b = b.val();
        return {
            key: a,
            value: b
        }
    },

    getColumnKeyValue: function (a) {
        var b = a.find("#xt_wp-column-text").text();
        if (a = Number(a.find("select option:selected").val())) return {
            key: "data",
            value: {
                content: b,
                numColumns: a
            }
        }
    },
    
    getTabKeyValue: function (a) {
        var b = a.find("#xt_wp-tab-text").text();
        if (a = Number(a.find("select option:selected").val())) return {
            key: "data",
            value: {
                content: b,
                numTabs: a
            }
        }
    },

    makeShortcode: function () {

        var a = {},
            b = this;

        jQuery("#xt_wp-options-table td").each(function () {

            var h = jQuery(this),
                e = null;

            if (e = h.hasClass("xt_wp-marker-select-control") ? b.getSelectKeyValue(h) : b.getTextKeyValue(h)) a[e.key] = e.value
            if (e = h.hasClass("xt_wp-marker-tab-control") ? b.getTabKeyValue(h) : b.getTextKeyValue(h)) a[e.key] = e.value
            if (e = h.hasClass("xt_wp-marker-textarea-control") ? b.getTextAreaKeyValue(h) : b.getTextKeyValue(h)) a[e.key] = e.value

        });

        if (xt_wpShortcodeAtts.customMakeShortcode) return xt_wpShortcodeAtts.customMakeShortcode(a);
        var c = a.content ? a.content : xt_wpShortcodeAtts.defaultContent,
            f = "";
        for (var d in a) {
            var g = a[d];
            if (g && d != "content") f += " " + d + '="' + g + '"'
        }
        
        // Customise the shortcode output for various shortcode types.
        
        switch ( xt_wpShortcodeAtts.shortcodeType ) {
        
        	case 'text-replace':
        	
        		var shortcode = "[xt_" + xt_wpShortcodeAtts.shortcode + f + "]" + (c ? c + "[/xt_" + xt_wpShortcodeAtts.shortcode + "]" : " ")
        	
        	break;
        	
        	default:
        	
        		var shortcode = "[xt_" + xt_wpShortcodeAtts.shortcode + f + "]" + (c ? c + "[/xt_" + xt_wpShortcodeAtts.shortcode + "] " : " ")
        	
        	break;
        
        } // End SWITCH Statement
        
        return shortcode;
    },

    getSelectKeyValue: function (a) {
        var b = a.find("select");
        if (!b.length) return null;
        a = b.attr("id").substring(6);
        b = b.val();
        return {
            key: a,
            value: b
        }
    },

    insertAction: function () {
        if (typeof xt_wpShortcodeAtts != "undefined") {
            var a = this.makeShortcode();
            tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
            this.closeDialog()
        }
    },

    closeDialog: function () {
        this.needsPreview = false;
        tb_remove();
        jQuery("#xt_wp-dialog").remove()
    },

    previewAction: function (a) {
    
    	var fontValue = '';
    	
    	jQuery('#xt_wp-options-table').find('select.input-select-font').each ( function () {
    	
    		fontValue = jQuery(this).val();
    	
    	});
    
        jQuery(a).hasClass("xt_wp-validation-marker") && this.validateLinkFor(a);
    },

    validateLinkFor: function (a) {
        var b = jQuery(a);
        b.removeClass("xt_wp-validation-error");
        b.removeClass("xt_wp-validated");
        if (a = b.val()) {
            b.addClass("xt_wp-validating");
            jQuery.ajax({
                url: ajaxurl,
                dataType: "json",
                data: {
                    action: "xt_wp_check_url_action",
                    url: a
                },
                error: function () {
                    b.removeClass("xt_wp-validating")
                },
                success: function (c) {
                    b.removeClass("xt_wp-validating");
                    c.error || b.addClass(c.exists ? "xt_wp-validated" : "xt_wp-validation-error")
                }
            })
        }
    }

};

tb_dialog_helper.setUpButtons();
tb_dialog_helper.loadShortcodeDetails();