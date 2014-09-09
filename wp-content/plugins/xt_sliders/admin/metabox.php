<?php

	add_action("admin_init", "xt_sliders_meta_box");

	function xt_sliders_meta_box() {

		add_meta_box("slider-type", "Slider Type", "xt_sliders_type_meta", "xt_sliders", "normal", "high");

		add_meta_box("slider-configuration", "Slider Configuration", "xt_sliders_configuration", "xt_sliders", "normal", "core");

		add_meta_box("slider-slides", "Slides Manager", "xt_sliders_slides", "xt_sliders", "normal", "core");

		add_meta_box("slider-import", "Import/Export", "xt_sliders_import_export", "xt_sliders", "normal", "default");

		add_meta_box("slider-aliases", "Use this Slider", "xt_sliders_use_slider", "xt_sliders", "side", "default");

	}

	/****** 
	SLIDER TYPE 
	******/

	function xt_sliders_type_meta() {
		global $post;  
        if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;  

        $values = get_post_custom($post->ID);  

        //var_dump($values);

        $slider_type = isset( $values['slider-type'] ) ? esc_attr( $values['slider-type'][0] ) : '';
        ?>
        	<strong>Select the Slider Type:</strong>
        	<select name="slider-type">
        		<option value="nivo"<?php if($slider_type == 'nivo') echo ' selected="selected"'; ?>>Nivo Slider</option>
        		<option value="camera"<?php if($slider_type == 'camera') echo ' selected="selected"'; ?>>Camera Slider</option>
        		<option value="kenburnpanel"<?php if($slider_type == 'kenburnpanel') echo ' selected="selected"'; ?>>KenBurn Panel Slider</option>
                <!--
        		<option value="ios"<?php if($slider_type == 'ios') echo ' selected="selected"'; ?>>iOS Slider</option>
                -->
                <option value="flexslider"<?php if($slider_type == 'flexslider') echo ' selected="selected"'; ?>>Flex Slider</option>
        		<option value="revolution"<?php if($slider_type == 'revolution') echo ' selected="selected"'; ?>>Revolution Slider</option>
                <option value="elastislide"<?php if($slider_type == 'elastislide') echo ' selected="selected"'; ?>>Elastislide Slider</option>
        	</select>

        <?php
	}

	/*******
	SLIDER CONFIGURATION
	********/

	function xt_sliders_configuration() {
		global $post;  
        if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;  

        $values = get_post_custom($post->ID);  

        //var_dump($values);

        $slider_type = isset( $values['slider-type'] ) ? esc_attr( $values['slider-type'][0] ) : '';

        if($slider_type != '')
        	include("configs/".$slider_type.".php");
        else
        	echo '<p>First, select one slider and click in Publish!</p>';
        ?>
        	

        <?php
	}

	/*******
	SLIDES MANAGER
	********/

	function xt_sliders_slides() {
		global $post;  
        if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;  

        $values = get_post_custom($post->ID);  

        $slider_type = isset( $values['slider-type'] ) ? esc_attr( $values['slider-type'][0] ) : '';

        if($slider_type != '') {
        	include("slides/".$slider_type.".php");
        ?>

        <div class="dc-new-slider">
        	<a href="#" class="dc-add"><img src="<?php echo plugins_url().'/xt_sliders/admin/assets/images/ic_plus.png'; ?>" alt="New Slide" /> New Slide</a>
        </div>

        <?php
    	}  else
        	echo '<p>First, select one slider and click in Publish!</p>';
        ?>

        <?php
	}

	/*******
	IMPORT / EXPORT
	********/

	function xt_sliders_import_export() {
		global $post;  
        if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;  

        $values = get_post_custom($post->ID);  

        $xt_import = isset( $values['dc-import'] ) ? $values['dc-import'][0] : '';

        //var_dump($xt_import);

        $xt_import = maybe_unserialize($xt_import);

        //var_dump($xt_import);

        $xt_import = maybe_unserialize($xt_import);

        //var_dump($xt_import);

        ?>

        <div class="dc-input" id="dc-import">
            <label>Import</label>
            <textarea name="dc-import"></textarea> 
            <span class="dc-help">Paste the code here and click in Publish.</span>
        </div> <!-- .dc-input -->

        <div class="dc-input" id="dc-export">
            <label>Export</label>
            <textarea name="dc-export"><?php echo base64_encode(serialize($values)); ?></textarea>  
            <span class="dc-help">Copy this code and paste in a Import are of another slider.</span>
        </div> <!-- .dc-input --> 	

        <?php
	}

	/*******
	SLIDER ALIASES
	********/

	function xt_sliders_use_slider() {
		global $post;  
        if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;  

        $values = get_post_custom($post->ID);  

        ?>

        <p>How to use this slider:</p>

        <p><strong>Shortcode:</strong></p>        	

        <div class="dc-code">
        <?php echo '[xt_slider id="'.xt_the_slug($post->ID).'"]'; ?>
    	</div>

        <p><strong>Function:</strong></p>     
        
        <div class="dc-code">
        <?php echo 'if(function_exists("xt_slider")) xt_slider(array( "id" => "'.xt_the_slug($post->ID).'" ) );'; ?>
    	</div>

        <?php
	}

	/***************************************
	SAVING CONFIGURATIONS!!!
	****************************************/

	add_action('save_post', 'xt_sliders_save_type_meta');   
      
    function xt_sliders_save_type_meta(){  
        global $post;    
      
		if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return; 

		/** SLIDER TYPE **/

		if( isset( $_POST['slider-type'] ) ) {
			update_post_meta( $post->ID, 'slider-type', $_POST['slider-type'] );

			$slider_type = $_POST['slider-type'];

        	if($slider_type != '') {
        		include("save/".$slider_type.".php");
        	}
        }

    }  