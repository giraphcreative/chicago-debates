<div class="bubbles-container">
    <?php if ( have_rows( 'bubble' ) ) :
        while ( have_rows( 'bubble' ) ) : the_row(); ?>
    <div class="bubble">
        <div class="bubble-inner">
            <h3><?php print str_replace( '|', '<br>', get_sub_field( 'title' ) ); ?></h3>
            <p class="bubble-content"><?php print get_sub_field( 'description' ); ?></p>
            <a href="<?php print get_sub_field( 'button_link' ); ?>" class="btn yellow"><?php print get_sub_field( 'button_label' ); ?></a>
        </div>
    </div>
    <?php endwhile;
    endif; ?>
</div>