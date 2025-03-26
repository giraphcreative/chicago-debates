<?php

$title = get_sub_field( 'title' );
$color = get_sub_field( 'color' );
$content = get_sub_field( 'intro' );

?>
<div class="title <?php print $color ?>">
    <div class="title-column">
        <h2><?php print $title ?></h2>
        <div class="stars"></div>
    </div>
    <?php if ( !empty( $content ) ) : ?>
    <div class="title-column">
        <?php print $content ?>
    </div>
    <?php endif; ?>
</div>