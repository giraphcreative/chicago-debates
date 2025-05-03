<?php

$content = get_sub_field( 'content' );
$cutout = get_sub_field( 'cutout' );
$title = get_sub_field( 'title' );
$background = get_sub_field( 'background' );
$accent = get_sub_field( 'accent' );
$stars = get_sub_field( 'stars' );

global $has_h1;
?>
<div class="content-cutout-container <?php print $background . ' ' . $accent; ?>">
    <div class="content-cutout">
        <?php if ( !empty( $title ) ) : ?>
            <?php if ( !$has_h1 ) { 
            $has_h1 = true; ?>
                <h1><?php print $title ?></h1>
            <?php } else { ?>
                <h2><?php print $title ?></h2>
            <?php } ?>
        <?php endif; ?>
        <?php if ( $stars ) : ?><div class="stars"></div><?php endif; ?>
        <?php print $content; ?>
    </div>
    <div class="cutout" style="background-image: url(<?php print $cutout ?>);"></div>
</div>