<?php
/**
 * The template for displaying Archive pages
 */

get_header(); 

?>
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

paginate();

get_footer();

?>