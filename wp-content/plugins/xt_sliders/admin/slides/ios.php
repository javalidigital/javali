<?php

	$slides = isset( $values['xt_slide'] ) ? $values['xt_slide'][0] : '';

    $slides = maybe_unserialize($slides);

    $slides = maybe_unserialize($slides);

    $id = 0;

?>

<div class="dc-slides">

<?php 

if(count($slides) > 0 && $slides != '') :

foreach($slides as $slide) { ?>

	<?php include("_default-top.php"); ?>

		<!-- SLIDES SAVED HERE -->
		<div class="dc-input">
			<label>Header Top</label>
			<input type="text" name="xt_slide[<?php echo $id; ?>][ios-header-big]" value="<?php echo stripslashes($slide["ios-header-big"]); ?>" /> 
			<span class="dc-help">Supports HTML Tags</span>
		</div> <!-- .dc-input -->

		<div class="dc-input">
			<label>Normal Text</label>
			<textarea name="xt_slide[<?php echo $id; ?>][ios-header-bottom]"><?php echo stripslashes($slide["ios-header-bottom"]); ?></textarea>
			<span class="dc-help">Supports HTML Tags</span>
		</div> <!-- .dc-input -->


	<?php include("_default-bottom.php"); ?>

<?php $id++; ?>

<?php } 

endif; ?>

</div> <!-- .dc-slides -->

<script type="text/javascript">
	// <![CDATA[

	var xt_ID = <?php echo $id; ?>;

	// ]]>
</script>

<?php include("_clone-top.php"); ?>

		<!-- CLONES MARKUP HERE -->
		<div class="dc-input">
			<label>Header Top</label>
			<input type="text" name="xt_clone[x][ios-header-big]" /> 
			<span class="dc-help">Supports HTML Tags</span>
		</div> <!-- .dc-input -->

		<div class="dc-input">
			<label>Normal Text</label>
			<textarea name="xt_clone[x][ios-header-bottom]"></textarea>
			<span class="dc-help">Supports HTML Tags</span>
		</div> <!-- .dc-input -->


<?php include("_clone-bottom.php"); ?>