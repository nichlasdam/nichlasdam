		</div>
        <script type="text/javascript" src="<?php bloginfo( 'template_url' );?>/js/jquery.flexslider.js" ></script>
        <script type="text/javascript">
	   jQuery(window).load(function() {
        jQuery('.flexslider').flexslider({
		animation: "slide"
	       });
	       });

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