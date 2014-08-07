<?php get_header();?>
<section class="eleven columns row">
	<?php get_template_part('slider', 'index'); ?>
</section>
<section class="internal-x five columns row">
	Advertisement
</section>
	<section class="eleven columns row main-list">
		<h1>NEW GAMES</h1>
		<ul class="row">
		<?php
			$args = array('posts_per_page' => 6, 'post_type' => 'awfulmedia_games' );
			$query = new WP_Query( $args );
			while ($query->have_posts()) : $query->the_post();
		?>
				<li class="game-thumb">
					<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('post-thumb'); ?>
						<?php the_title();?>
						<p><?php the_field('description'); ?></p>
					</a>
				</li>
		<?php
		    endwhile;
		?>
		</ul>
		<h1>POPULAR GAMES</h1>
		<ul class="row">
		<?php
			$args = array(
					'posts_per_page' => 6, 
					'post_type' => 'awfulmedia_games', 
					'orderby' => 'meta_value_num',
					'meta_key' => 'post_views_count'
				);

			$query = new WP_Query( $args );
			while ($query->have_posts()) : $query->the_post();
		?>
				<li class="game-thumb">
					<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('post-thumb'); ?>
						<?php the_title();?>
						<p><?php the_field('description'); ?></p>
						<?php
          					echo getPostViews(get_the_ID());
						?>
					</a>
				</li>
		<?php
		    endwhile;
		?>
		</ul>
	</section>
	<section class="sidebar-list five columns row">
		<h1>RANDOM</h1>
		<ul>
		<?php
			$args = array('posts_per_page' => 3, 'post_type' => 'awfulmedia_games', 'orderby' => 'rand' );
			$query = new WP_Query( $args );
			while ($query->have_posts()) : $query->the_post();
		?>
				<li class="game-thumb">
					<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
						<?php the_title();?>
						<p><?php the_field('description'); ?></p>
					</a>
				</li>
		<?php
		    endwhile;
		?>
		</ul>
	</section>

<?php get_footer();?>
