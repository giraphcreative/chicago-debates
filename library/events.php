<?php

function event_adjust_queries($query){
    if ( ! is_admin() && is_post_type_archive( 'event' ) && $query->is_main_query() ) {
        $query->set( 'meta_key', 'start');
        $query->set( 'orderby', 'meta_value' );
        $query->set( 'order', 'ASC' );
    }
}
add_action( 'pre_get_posts', 'event_adjust_queries' );
