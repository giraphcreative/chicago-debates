<?php
/**
 * The Template for displaying all single posts
 */

get_header();

if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
	<div class="content-wide" role="main">
		<h1><?php the_title(); ?></h1>
		<div class="event-columns">
			<div class="event-description">
				<?php the_content(); ?>
			</div>
			<div class="event-information">
				<p class="event-date">
					<span>Date:</span>
					<?php print date( "F jS, Y \a\\t g:ia", strtotime( get_field( 'start' ) ) ); ?>
				</p>
				<p class="event-location">
					<span>Location:</span>
					<?php print get_field( 'location' ) ?>
				</p>
			</div>
		</div>
	</div>
		<?php
	endwhile;
endif;

get_components();

get_footer();

?>