<?php

if ( ! function_exists( 'pagination' ) ) :

    function pagination( $paged = '', $max_page = '' ) {
        $big = 999999999; // need an unlikely integer
        if( ! $paged ) {
            $paged = get_query_var('paged');
        }

        if( ! $max_page ) {
            global $wp_query;
            $max_page = isset( $wp_query->max_num_pages ) ? $wp_query->max_num_pages : 1;
        }
        echo '<div class="pagination">';
        echo paginate_links( array(
            'base'       => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format'     => '?paged=%#%',
            'current'    => max( 1, $paged ),
            'total'      => $max_page,
            'mid_size'   => 1,
            'prev_text'  => __( '«' ),
            'next_text'  => __( '»' ),
            'type'       => 'list'
        ) );
        echo '</div>';
    }
	
endif;
