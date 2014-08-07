<?php get_header(); ?>
<section class="eleven columns row">
  <div class="flexslider">
	<ul class="slides">
		
		<?php
		query_posts(array('category_name' => 'Featured', 'posts_per_page' => 3));
		if(have_posts()) : while(have_posts()) : the_post();
		?>
	
		  <li class="featured-game">
			<?php the_post_thumbnail( 'medium'); ?>
			<div class="caption">
				<a href="#" class="game-title"><?php the_title();?></a>
				<?php the_excerpt(); ?>
				<a href="#" class="playnow">Play Now</a>
			</div>
		  </li>
	  
		<?php
		    endwhile;
			endif;
			wp_reset_query();
		?>
	</ul>
  </div>
    </div>
</section>
<?php get_sidebar();?>	
<?php get_footer();?>	