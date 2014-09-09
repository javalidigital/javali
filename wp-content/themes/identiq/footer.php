		<!-- Start Sidebar -->
		<section id="footer">
			<div class="container">
				<div class="row">
					<div class="span4">
						<div id="footer-col-1">
							<ul>
							<?php dynamic_sidebar("footer-area-1"); ?>
							</ul>
						</div>
					</div>

					<div class="span4">
						<div id="footer-col-2">
							<ul>
								<?php dynamic_sidebar("footer-area-2"); ?>
							</ul>
						</div>
					</div>
					
					<div class="span4">
						<div id="footer-col-3">
							<ul>
								<?php dynamic_sidebar("footer-area-3"); ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Sidebar -->
		
		<section id="copyright">
			<?php if( of_get_option('down_footer_text') != '') : ?>
				<?php echo of_get_option('down_footer_text'); ?>
			<?php endif; ?>
			<?php if( of_get_option('wpml_footer') ) { echo '<span id="lang-logo-selector-inner">'; xt_language_selector_flags(); echo '</span>'; } ?></span>
		</section>

	<?php if( of_get_option('gcode') != '' ) : ?>

	<!-- Optional Analytics
	================================================== -->
	
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', '<?php echo of_get_option('gcode'); ?>']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
	<?php endif; ?>

	<?php wp_footer(); ?>
		
</body>
</html>