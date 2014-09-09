<?php
	
	?>
	<script>
		var idn = 0;
	</script>
	<?php

	if($elements != "") :
				
		include("admin_widgets.php");
		include("admin_layouts.php");
				
		function readWidget($w) {
			$class = $w[1];
			$content = $w[2];
			$title = $w[3];
			$fn = 'widget_'.$class;

			if(isset($w[4]))
				return $fn($content, $title, $w[4]);

			return $fn($content, $title);

			//return $class.$content;
		}
						
		function readLayout($l) {
			$class = $l[1];
			$widgets = $l[2];
					
			$off = 0;
			$c = 0;
			$length = count($widgets);
			$output = '';
			
			global $idn;
			while($c < $length) {
				$_inc = 4;

				$_tmpArr = array_slice($widgets, $off, $_inc);
				if($_tmpArr[1] == 'section_wrapper' OR $_tmpArr[1] == 'section_wrapper_end')
					$_inc = 5;

				$output .= readWidget(array_slice($widgets, $off, $_inc));
				$c += $_inc;
				$off += $_inc;
				
				/*
				$output .= readWidget(array_slice($widgets, $off, 5));
				$c += 5;
				$off += 5;
				*/
			}
									
			//$fn = 'layout_'.$class;
			//$fn($output);
			layout_columns($output, $class);
			$idn++;
		}

			//var_dump($elements);
						
			layout_b();
			$num = count($elements);
			$i = 0;
	
			//echo '<p>Begin</p>';
		foreach($elements as $element) {
			
			if($element[0] == "layout") {
				$i++;
				readLayout($element);
			}
			else if($element[0] == "wrapper_start") {
				$i++;
				readLayout($element);
			}
			else if($element[0] == "wrapper_end") {
				$i++;
				readLayout($element);
			}

			if(strpos($element[1],"last") > 0 || $element[1] == "full" || $element[1] == "full-noselect")
			{
				
				layout_e();
				//echo '<p>End</p>';
				//echo '<p>Begin</p>'.($i).'-'.$num;
				if(($i) != $num || $i > $num)
					layout_b();
			}
		}
		
		
	endif;
?>