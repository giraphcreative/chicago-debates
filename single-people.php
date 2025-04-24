<?php
/**
 * The Template for displaying all single posts
 */

get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); 
        $phone = get_field( "_p_person_phone" );
        $email = get_field( "_p_person_email" );
    ?>
<div class="title <?php print $color ?>">
    <div class="title-column">
        <h1><?php the_title(); ?></h1>
    </div>
</div>
<div class="content-two-container">
    <div class="content-two right">
        <div class="column one">
            <div class="person-entry visible">
                <div class="person-photo">
                    <?php print '<img src="' . get_the_post_thumbnail_url() . '">'; ?>
                </div>
                <div class="person-info">
                    <h4><a href="<?php the_permalink() ?>"><?php the_field( '_p_person_fname'); ?> <?php the_field( '_p_person_lname' ); ?></a></h4>
                    <p class="person-title"><?php the_field( "_p_person_title" ); ?></p>
                    <?php if ( !empty( $email ) ) : ?><p class="person-email">Email:<br><a href="mailto:<?php print $email; ?>"><?php print $email; ?></a></p><?php endif; ?>
                    <?php if ( !empty( $phone ) ) : ?><p class="person-phone">Phone:<br><a href="tel:<?php print preg_replace( "/[^0-9+]/", "", $phone ); ?>"><?php print $phone; ?></a></p><?php endif; ?>
                </div>
            </div>
        </div>
        <div class="column two">
            <?php the_field( 'bio' ); ?>
        </div>
    </div>
</div>
        <?php
    endwhile;
endif;

get_footer();

?>