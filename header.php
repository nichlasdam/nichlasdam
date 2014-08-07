<!DOCTYPE html>
<htmL>
	<head>
		<title>
			<?php 
				wp_title('|'. true, 'right'); 
				bloginfo( 'name' );
			?>
		</title>
		<?php wp_enqueue_script ("jquery"); ?>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/flexslider.css"/>
		<?php wp_head();?>
	</head>
	<body>
		<div class="container">
			<header>
				<div class="five columns clearfix">
					<a href="<?php echo get_option ('home');?>"><img src="<?php bloginfo('template_url');?>/img/logo.png" title="bloginfo('title')"</a>		
				</div>
				<div class="main-nav sixteen columns" id="show-nav">
						<a href="#">Toggle Navigation</a>
				</div>
				<div class="main-nav sixteen columns" id="close-nav">
						<a href="#">Close X</a>
				</div>
				<div class="sixteen columns nav-bar">
					<?php wp_nav_menu( array( 'container_class' => 'main-nav', 'container' => 'nav' )); ?>
				</div>
			</header>
            
	</body>
</html>