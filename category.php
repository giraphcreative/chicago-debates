<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();

if ( have_posts() ) : ?>
	<div class="title navy">
		<div class="title-column">
			<h1><?php printf( single_cat_title( '', false ) ) ?></h1>
			<div class="stars"></div>
		</div>
	</div>

	<div class="posts-container <?php print $theme; ?>">
		<?php if ( have_posts() ) : ?>
			<div class="posts-list">
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="entry">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				</div><?php
				endwhile; ?>
			</div>
		<?php else : ?>
			<p>There are currently no posts to list here.</p>
		<?php endif; ?>
	</div>
	<?php 
endif;

paginate(); 

get_footer();

