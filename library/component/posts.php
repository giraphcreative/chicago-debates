<?php

$title = get_sub_field( 'title' );
$category = get_sub_field( 'category' );

$posts_query = new WP_Query( array(
    'category__in' => $category,
    'posts_per_page' => 3
) );

if ( $posts_query->have_posts() ) : ?>
<div class="posts-container">
    <?php if ( !empty( $title ) ) : ?><h2><?php print $title ?></h2><?php endif; ?>
    <div class="posts-list">
        <?php while ( $posts_query->have_posts() ) : $posts_query->the_post(); ?>
        <div class="entry">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        </div><?php
        endwhile; ?>
    </div>
</div><?php
endif;