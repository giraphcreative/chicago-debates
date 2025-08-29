<?php

function event_adjust_queries($query){
    if ( ! is_admin() && is_post_type_archive( 'event' ) && $query->is_main_query() ) {
        $today = date('Y-m-d');
            
        $query->set( 'meta_key', 'start');
        $query->set( 'orderby', 'meta_value' );
        $query->set( 'order', 'ASC' );
        $query->set( 'meta_query', array(
            array(
                'key' => 'start',
                'value' => $today,
                'compare' => '>'
            ),
        ));
    }
}
add_action( 'pre_get_posts', 'event_adjust_queries' );
