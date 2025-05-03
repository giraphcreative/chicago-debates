<?php
/**
 * The Template for displaying all single posts
 */

get_header();

if ( have_posts() ) :
?>

<div class="title <?php print $color ?>">
    <div class="title-column">
        <h1><?php the_title(); ?></h1>
        <div class="return-link"></div>
    </div>
</div>
<div class="content-one">
    <div class="content-one-inner">
		<?php 
		while ( have_posts() ) : the_post(); 
			the_content();
			?><p class="quiet">Posted by <?php print get_the_author_link() ?> in <?php print get_the_category_list( ', ' ) ?>.</p><?php
		endwhile;
		?>
	</div>

<?php
endif;

get_footer();

?>