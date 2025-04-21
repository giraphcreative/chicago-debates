<?php

$title = get_sub_field( 'title' );
$intro = get_sub_field( 'intro' );
$category = get_sub_field( 'category' );
$more_link = get_sub_field( 'more_link' );


if ( !empty( $category ) && !empty( $title ) && !empty( $intro ) ) : ?>
<div class="events-container">
    <div class="intro">
        <h2><?php print $title ?></h2>
        <?php 
        print $intro;
        if ( !empty( $more_link ) ) {
            ?><p class="more-events"><a href="<?php print $more_link ?>" class="btn">View Events</a></p><?php
        }
        ?>
    </div>
    <div class="events-list">
        <?php
        
        $event_query = new WP_Query( array(
            'post_type' => 'event',
            'tax_query' => array(
                array (
                    'taxonomy' => 'event-cat',
                    'field' => 'id',
                    'terms' => $category,
                )
            ),
            'meta_key'          => 'start',
            'orderby'           => 'meta_value',
            'order'             => 'ASC',
            'posts_per_page' => 4
        ) );

        if ( $event_query->have_posts() ) :
            while ( $event_query->have_posts() ) : $event_query->the_post();
                $start = get_field( 'start' );
                $start_ts = strtotime( $start );
                ?>
        <div class="event">
            <div class="date">
                <div class="month"><?php print date( 'M', $start_ts ); ?></div>
                <div class="day"><?php print date( 'j', $start_ts ); ?></div>
            </div>
            <div class="event-name">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
        </div>
                <?php
            endwhile;
        endif;


        ?>
    </div>
</div>
    <?php
endif;

wp_reset_postdata();
