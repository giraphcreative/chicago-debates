<?php

$cutout = get_sub_field( 'cutout' );
$color = get_sub_field( 'color' );
$title_top = get_sub_field( 'title-top' );
$content_top = get_sub_field( 'content-top' );
$title_bottom = get_sub_field( 'title-bottom' );
$content_bottom = get_sub_field( 'content-bottom' );

?>
<div class="mission-vision">
    <div class="mission-vision-inner">
        <div class="mission <?php print $color ?>">
            <?php if ( !empty( $title_top ) ) : ?><h2><?php print $title_top ?></h2><?php endif; ?>
            <div class="stars"></div>
            <div class="content-top">
                <?php print $content_top ?>
            </div>
        </div>
        <div class="vision">
            <?php if ( !empty( $title_bottom ) ) : ?><h2><?php print $title_bottom ?></h2><?php endif; ?>
            <div class="stars"></div>
            <div class="content-top">
                <?php print $content_bottom ?>
            </div>
        </div>
    </div>
    <div class="cutout" style="background-image: url(<?php print $cutout ?>);"></div>
</div>