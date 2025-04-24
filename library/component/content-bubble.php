<?php

$title = get_sub_field( 'title' );
$stars = get_sub_field( 'stars' );
$content = get_sub_field( 'content' );
$image = get_sub_field( 'image' );
$shape = get_sub_field( 'shape' );
$direction = get_sub_field( 'bubble-direction' );
$color = get_sub_field( 'color' );

if ( !empty( $image['sizes']['bubble'] ) && !empty( $content ) ) :
?><div class="bubble-content-container <?php print $color ?>">
    <div class="bubble-content <?php print $direction ?>">
        <div class="bubble <?php print $shape ?> <?php print $direction ?>" style="background-image: url(<?php print $image['sizes']['bubble']; ?>);" /></div>
        <div class="content">
            <?php if ( !empty( $title ) ) print '<h2>' . $title . '</h2>'; ?>
            <?php if ( $stars ) : ?><div class="stars"></div><?php endif; ?>
            <?php print $content; ?>
        </div>
    </div>
</div><?php
endif;
