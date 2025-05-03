<?php

$title = get_sub_field( 'title' );
$color = get_sub_field( 'color' );
$content = get_sub_field( 'intro' );
$stars = get_sub_field( 'stars' );

global $has_h1;

?>
<div class="title <?php print $color ?>">
    <div class="title-column">
        <?php if ( !$has_h1 ) { 
            $has_h1 = true; ?>
            <h1><?php print $title ?></h1>
        <?php } else { ?>
            <h2><?php print $title ?></h2>
        <?php } ?>
        <?php if ( $stars ) : ?><div class="stars"></div><?php endif; ?>
    </div>
    <?php if ( !empty( $content ) ) : ?>
    <div class="title-column">
        <?php print $content ?>
    </div>
    <?php endif; ?>
</div>