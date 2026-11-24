<?php

$quote = get_sub_field( 'quote' );
$attribution = get_sub_field( 'attribution' );
if ( stristr( $attribution, '|' ) ) {
    $attribution_parts = explode( '|', $attribution );
    $attribution = $attribution_parts[0] . "<span>" . $attribution_parts[1] . "</span>";
}
$photo = get_sub_field( 'photo' );


if ( !empty( $quote ) && !empty( $attribution ) && !empty( $photo ) ) : ?>
<div class="quote-container">
    <div class="photo"><img src="<?php print $photo ?>"></div>
    <div class="quote">
        <?php print $quote ?>
        <p class="attribution"><?php print $attribution ?></p>
        <div class="line coral"></div>
    </div>
</div><?php
endif;
