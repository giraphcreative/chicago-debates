<?php
/*
Home/catch-all template
*/

get_header(); 

if ( is_search() ) {
	$title = "<span>Results:</span> '" . get_search_query() . "'</h1>";
} else {
	$title = "<h1 class='post-title'>News</h1>";
}

if ( have_posts() ) : ?>

<div class="title navy">
	<div class="title-column">
		<h1><?php print $title ?></h1>
		<div class="stars"></div>
	</div>
</div>

<div class="posts-container <?php print $theme; ?>">
	<div class="posts-list">
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="entry">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		</div><?php
		endwhile; ?>
	</div>
</div>
	
<?php
pagination();
else : ?>
	<p>There are currently no posts to list here.</p>
	<?php 
endif;


get_footer();
