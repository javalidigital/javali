<?php

	$slides = isset( $values['xt_slide'] ) ? $values['xt_slide'][0] : '';

    $slides = maybe_unserialize($slides);

    $id = 0;

?>

<div class="dc-slides">

<?php 

if(count($slides) > 0 && $slides != '') :

foreach($slides as $slide) { ?>

	<?php include("_default-top.php"); ?>

		<!-- SLIDES SAVED HERE -->

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

<?php include("_clone-bottom.php"); ?>