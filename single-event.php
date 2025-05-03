<?php
/**
 * The Template for displaying all single posts
 */

get_header();

if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
<div class="title <?php print $color ?>">
    <div class="title-column">
        <h1><?php the_title(); ?></h1>
        <div class="return-link"></div>
    </div>
</div>
<div class="content-two-container">
    <div class="content-two left">
        <div class="column one">
			<?php the_content(); ?>
		</div>
        <div class="column two">
			<p class="event-date">
				<strong>Date:</strong><br>
				<?php print date( "F jS, Y \a\\t g:ia", strtotime( get_field( 'start' ) ) ); ?>
			</p>
			<p class="event-location">
				<strong>Location:</strong><br>
				<?php print get_field( 'location' ) ?>
			</p>
			<p><?php the_post_thumbnail(); ?></p>
        </div>
    </div>
</div>
		<?php
	endwhile;
endif;

get_components();

get_footer();

?>