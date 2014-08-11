<?php get_header(); ?>
<section class="eleven columns row">
    <?php get_template_part ('slider', 'index'); ?>
</section>
<section class="internal-x five columns row">
    Ad
</section>
<section class="eleven columns row">
    <h1>NYE SPIL</h1>
    <ul>
    <?php
        $args = array('posts_per_page' => 6, 'post_type' => 'nichlasdam_spil', 'orderby' => 'meta_value', 'meta_key' => 'post_views_count' );
        $query = new WP_Query( $args );
        while ($query->have_posts()) : $query->the_post();
    ?>
        <li class="game-thumb">
            <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('post-thumb'); ?>
                <?php the_title();?>
                <p><?php the_field('beskrivelse');?></p>
                <?php
                    echo getPostViews(get_the_ID());
                ?>
        </li>
    </ul>
    </a>
    <?php
        endwhile;
    ?>
    <h1>HOTTE SPIL</h1>
    <ul>
    <?php
        $args = array('posts_per_page' => 6, 'post_type' => 'nichlasdam_spil' );
        $query = new WP_Query( $args );
        while ($query->have_posts()) : $query->the_post();
    ?>
        <li class="game-thumb">
            <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('post-thumb'); ?>
                <?php the_title();?>
                <p><?php the_field('beskrivelse');?></p>
        </li>
    </ul>
    </a>
    <?php
        endwhile;
    ?>
</section>
<section class="sidebar-list five columns row">
    <h1>Tilfældige spil</h1>
    <ul>
    <?php
        $args = array('posts_per_page' => 3, 'post_type' => 'nichlasdam_spil',  'orderby' => 'rand' );
        $query = new WP_Query( $args );
        while ($query->have_posts()) : $query->the_post();
    ?>
        <li class="game-thumb">
            <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(''); ?>
                <?php the_title();?>
                <p><?php the_field('beskrivelse');?></p>
        </li>
    </ul>
    </a>
    <?php
        endwhile;
    ?>
</section>
<?php get_sidebar();?>	
<?php get_footer();?>	