<?php while ( have_rows( 'accordions' ) ) : the_row(); 
    $cutout = get_sub_field( 'cutout' ); ?>
<div class="accordion<?php print ( get_sub_field('open') ? ' open' : '' ); ?>">
    <div class="accordion-handle <?php the_sub_field( 'color' ); ?>">
        <h3><?php the_sub_field( 'title' ); ?></h3>
    </div>
    <div class="accordion-content<?php if ( !empty( $cutout ) ) { print " has-cutout"; } ?>">
        <div class="accordion-content-inner">
            <?php the_sub_field( 'content' ); ?>
        </div>
        <?php if ( !empty( $cutout ) ) : ?>
        <div class="accordion-cutout" style="background-image: url(<?php print $cutout ?>);"></div>
        <?php endif; ?>
    </div>
</div>
<?php endwhile; ?>