<?php

$supertitle = get_sub_field( 'supertitle' );
$title = get_sub_field( 'title' );
$content = get_sub_field( 'content' );
$theme = get_sub_field( 'theme' );
$cutout = get_sub_field( 'cutout' );

global $has_h1;
$has_h1 = true;
?>
<div class="hero-container<?php print ( empty( $content ) ? ' no-content' : '' ); ?>">
    <div class="hero-header <?php print $theme ?>">
        <?php if ( !empty( $supertitle ) ) : ?><h2><?php print $supertitle ?></h2><?php endif; ?>
        <h1><?php print str_replace( '|', '<br>', $title ) ?></h1>
        <div class="line white"></div>
    </div>
    <?php if ( !empty( $content ) ) : ?>
    <div class="hero-content">
        <?php print $content; ?>
    </div>
    <?php endif; ?>
    <div class="hero-cutout" style="background-image: url(<?php print $cutout ?>);"></div>
</div>
