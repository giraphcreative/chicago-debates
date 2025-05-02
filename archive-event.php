<?php
/**
 * The template for displaying Archive pages
 */

get_header(); 

?>
<div class="title navy">
	<div class="title-column">
		<h1>Upcoming Events</h1>
		<div class="stars"></div>
	</div>
</div>

<div class="events-list-container <?php print $theme; ?>">
	<?php if ( have_posts() ) : ?>
	<div class="events-list">
		<?php while ( have_posts() ) : the_post();
			$start = get_field( 'start' );
			$start_ts = strtotime( $start ); ?>
		<div class="entry">
			<div class="photo">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			</div>
			<div class="overview">
				<div class="info">
					<div class="date">
						<div class="month"><?php print date( 'M', $start_ts ); ?></div>
						<div class="day"><?php print date( 'j', $start_ts ); ?></div>
						<div class="year"><?php print date( 'Y', $start_ts ); ?></div>
					</div>
					<div class="name">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</div>
				</div>
				<div class="description">
					<?php the_excerpt(); ?>
				</div>
			</div>
		</div><?php
		endwhile; ?>
	</div>
	<?php else : ?>
	<p>There are currently no events to list here.</p>
	<?php endif; ?>
</div>
<?php 

paginate();

get_footer();

?>