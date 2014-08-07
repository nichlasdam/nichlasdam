		<footer class="sixteen columns row">
			<div class="container">
				<?php dynamic_sidebar('footer-widgets');?>
			</div>
		</footer>
		</div>
		<script type="text/javascript" src="<?php bloginfo( 'template_url' );?>/js/jquery.flexslider.js" ></script>
		<script type="text/javascript">
			// Can also be used with $(document).ready()
			jQuery(window).load(function() {
			  jQuery('.flexslider').flexslider({
				animation: "slide"
			  });
			});
		</script>
		<script>
			jQuery("#show-nav").click(function () {
				jQuery(".main-nav").toggle("slow");
				jQuery("#close-nav").show("slow");
			});
			jQuery("#close-nav").click(function () {
				jQuery(".main-nav").toggle("slow");
				jQuery("#close-nav").hide("slow");
			});
			</script>
	</body>
</html>