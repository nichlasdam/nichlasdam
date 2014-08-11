<div class="flexslider">
	<ul class="slides">
		
		<?php
			$args = array( 'category_name' => 'Featured', 'posts_per_page' => 3 );
			$query = new WP_Query( $args );
			while ($query->have_posts()) : $query->the_post();
		?>	
		  <li class="featured-game">
			<?php the_post_thumbnail('featured'); ?>
			<div class="caption">
				<a href="#" class="game-title"><?php the_title();?></a>
				<?php the_excerpt(); ?>
				<a href="#" class="playnow">Play Now</a>
			</div>
		  </li>
	  
		<?php
		    endwhile;
		?>
	</ul>
  </div>