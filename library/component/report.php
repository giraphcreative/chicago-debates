<?php

$title = get_sub_field( 'title' );
$content = get_sub_field( 'content' );
$image = get_sub_field( 'image' );

?>
<div class="report">
    <div class="intro">
        <h2><?php print $title ?></h2>
        <div class="stars"></div>
        <?php print $content; ?>
    </div>
    <div class="image">
        <img src="<?php print $image ?>" />
    </div>
</div>