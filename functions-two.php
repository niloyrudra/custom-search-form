function search_filter_get_posts($query) {
	
    if ( !$query->is_search || is_admin() || !is_main_query() ) return $query;

    $terms = explode(",", $query->query['s']);

    $taxquery = array(
        'post_type' => array( 'page', 'ajde_events' ),
        'tax_query' => array(
            'relation' => 'OR',
            array(
                'taxonomy' => 'event_type ',
                'field'    => 'slug',
                'terms'    => $terms,
            ),
            array(
                'taxonomy' => 'course',
                'field'    => 'slug',
                'terms'    => $terms,
            ),
        ),
    );

 	$query = new WP_Query( $taxquery );
	return $query;
// 	$query->set( 'tax_query', $taxquery );
	
}

add_action( 'pre_get_posts', 'search_filter_get_posts' );
