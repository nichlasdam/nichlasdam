<?php get_header();?>

	<section class="sixteen columns row game-container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php echo setPostViews(get_the_ID()); ?>
		<?php endwhile; endif; ?>
	</section>
	<div class="row">
		<div class="ten columns post-meta">
			<h1><?php the_title(); ?></h1>
			<?php echo get_the_tag_list('<div class="tags">',' ','</div>'); ?>

			<div class="meta-info">Published by <strong><?php the_field('publisher'); ?></strong> on <strong><?php echo get_the_date(); ?></strong></div>
			<div class="meta-info">Played <?php echo getPostViews(get_the_ID()); ?> times</div>

			<p class="game-description"><?php the_field('description'); ?></p>

			<?php comments_template(); ?>
		</div>
		<aside class="six columns main-sidebar">
			<div class="x-container">?</div>
			<?php dynamic_sidebar('sidebar-widgets');?>
		</aside>
	</div>

<?php get_footer();?>
