<?php

$content = get_sub_field( 'content' );
$cutout = get_sub_field( 'cutout' );
$title = get_sub_field( 'title' );
$background = get_sub_field( 'background' );
$accent = get_sub_field( 'accent' );
$stars = get_sub_field( 'stars' );

?>
<div class="content-cutout-container <?php print $background . ' ' . $accent; ?>">
    <div class="content-cutout">
        <?php if ( !empty( $title ) ) : ?><h2><?php print $title ?></h2><?php endif; ?>
        <?php if ( $stars ) : ?><div class="stars"></div><?php endif; ?>
        <?php print $content; ?>
    </div>
    <div class="cutout" style="background-image: url(<?php print $cutout ?>);"></div>
</div>