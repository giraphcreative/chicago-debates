<?php

$title = get_sub_field( 'title' );
$content = get_sub_field( 'content' );
$image = get_sub_field( 'image' );
$link = get_sub_field( 'link' );

?>
<div class="report">
    <div class="intro">
        <h2><?php print $title ?></h2>
        <div class="stars"></div>
        <?php print $content; ?>
    </div>
    <div class="image">
        <?php if ( !empty( $link ) ) : ?><a href="<?php print $link ?>"><?php endif; ?>
        <img src="<?php print $image ?>" />
        <?php if ( !empty( $link ) ) : ?></a><?php endif; ?>     
    </div>
</div>