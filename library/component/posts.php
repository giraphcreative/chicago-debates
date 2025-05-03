<?php

$title = get_sub_field( 'title' );
$category = get_sub_field( 'category' );
$theme = get_sub_field( 'theme' );
$more_label = get_sub_field( 'more-label' );
$more_link = get_sub_field( 'more-link' );

$posts_query = new WP_Query( array(
    'category__in' => $category,
    'posts_per_page' => 3
) );

if ( $posts_query->have_posts() ) : ?>
<div class="posts-container <?php print $theme; ?>">
    <?php if ( !empty( $title ) ) : ?><h2><?php print $title ?></h2><?php endif; ?>
    <div class="posts-list">
        <?php while ( $posts_query->have_posts() ) : $posts_query->the_post(); ?>
        <div class="entry">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        </div><?php
        endwhile; ?>
    </div>
    <?php if ( !empty( $more_label ) && !empty( $more_link ) ) : ?>
    <p><a href="<?php print $more_link ?>" class="btn yellow"><?php print $more_label; ?></a></p>
    <?php endif; ?>
</div><?php
endif;