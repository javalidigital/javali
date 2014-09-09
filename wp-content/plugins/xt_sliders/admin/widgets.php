<?php

class XTSliderWidget extends WP_Widget {

	function XTSliderWidget() {
		$widget_ops = array( 'classname' => 'dc-slider-widget', 'description' => __('Display a slider inside this widget.', '') );
		
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'dc-slider-widget' );
		
		$this->WP_Widget( 'dc-slider-widget', __('XT Slider Widget', ''), $widget_ops, $control_ops );
	}
	
	function widget( $args, $instance ) {
		extract( $args );
		
		$title = apply_filters('widget_title', $instance['title'] );	
		$_id = $instance['slider-id'];
		
		echo $before_widget;
		
		if ( $title )
			echo $before_title . $title . $after_title;
		
		echo do_shortcode('[xt_slider id="'.$_id.'"]');
		
		echo $after_widget;
	}

	//Update the widget 
	 
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		//Strip tags from title and name to remove HTML 
		$instance['slider-id'] = $new_instance['slider-id'];
		$instance['title'] = $new_instance['title'];

		return $instance;
	}

	
	function form( $instance ) {

		//Set up some default widget settings.
		$defaults = array( 'title' => 'XT Custom Slider', 'slider-id' => null );
		$instance = wp_parse_args( (array) $instance, $defaults ); 

		?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>

		<p>
			<label style="display: block; margin-bottom: 5px;" for="<?php echo $this->get_field_id( 'slider-id' ); ?>">Select your Slider:</label>
			<select style="" id="<?php echo $this->get_field_id( 'slider-id' ); ?>" name="<?php echo $this->get_field_name( 'slider-id' ); ?>">
				
				<?php
					$query = new WP_Query( array('name' => $id, 'post_type' => 'xt_sliders') );

					if($query->have_posts()) { 
						while($query->have_posts()) : $query->the_post();
				?>
						<option <?php if( $instance["slider-id"] == xt_the_slug(get_the_ID()) ) echo 'selected="selected" '; ?>value="<?php echo xt_the_slug(get_the_ID()); ?>"><?php the_title(); ?></option>
				<?php
						endwhile;
					}
				?>
			</select>
		</p>

	<?php
	}
}

?>