<?php

$quote = get_sub_field( 'quote' );
$attribution = get_sub_field( 'attribution' );
$photo = get_sub_field( 'photo' );


if ( !empty( $quote ) && !empty( $attribution ) && !empty( $photo ) ) : ?>
<div class="quote-container">
    <div class="quote">
        <?php print $quote ?>
        <p class="attribution"><?php print $attribution ?></p>
    </div>
    <img src="<?php print $photo ?>" class="photo">
</div><?php
endif;
