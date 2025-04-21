<?php

$group = get_sub_field( 'group' );
$color = get_sub_field( 'color' );

// if the people category
if ( !empty( $group ) ) :

    // set some query vars
    $vars = array( 
        "posts_per_page" => 200,
        "post_type" => 'people',
        "orderby" => 'meta_value',
        "meta_key" => '_p_person_lname',
        "order" => 'ASC',
        "tax_query" => array(
            array (
                'taxonomy' => 'group',
                'field' => 'id',
                'terms' => $group,
            )
        )
    );

    // run the query
    $p = new WP_Query( $vars );
    ?>

<section class="people-container <?php print $color ?>">

    <?php if ( $p->have_posts() ) : ?>
    <div class="people-listing">

    <?php while ( $p->have_posts() ) : $p->the_post(); ?>
        <div class="person-entry visible">
            <div class="person-photo">
                <?php 
                print '<img src="' . get_the_post_thumbnail_url() . '">'; 
                ?>
            </div>
            <div class="person-info">
                <h4><a href="<?php the_permalink() ?>"><?php the_field( '_p_person_fname'); ?> <?php the_field( '_p_person_lname' ); ?></a></h4>
                <p class="person-title"><?php the_field( "_p_person_title" ); ?></p>
                <p class="bio"><?php print wp_trim_words( get_field( 'bio' ), 30 ); ?></p>
                <p class="person-link"><a href="<?php the_permalink() ?>" class="btn yellow">View Full Bio</a></p>
            </div>
        </div>
    <?php endwhile; ?>

    </div>
    
    <?php else: ?>
    <p>No people found in database.</p>
    <?php endif; ?>

</section>

<?php 

// reset the post data
wp_reset_postdata();

endif;
