<?php

$content = get_sub_field( 'content' );
$cutout = get_sub_field( 'cutout' );
$title = get_sub_field( 'title' );
$background = get_sub_field( 'background' );

?>
<div class="content-cutout-container <?php print $background; ?>">
    <div class="content-cutout">
        <?php if ( !empty( $title ) ) : ?><h2><?php print $title ?></h2><?php endif; ?>
        <div class="stars"></div>
        <?php print $content; ?>
    </div>
    <div class="cutout" style="background-image: url(<?php print $cutout ?>);"></div>
</div>