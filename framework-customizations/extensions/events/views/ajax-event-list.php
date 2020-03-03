<?php if (!defined('SLZ')) die('Forbidden');

$start_date    = ! empty( $params['start_date'] ) ? $params['start_date'] : '';
$location      = ! empty( $params['location'] ) ? $params['location'] : '';
$keyword       = ! empty( $params['keyword'] ) ? $params['keyword'] : '';
$page          = ! empty( $params['page'] ) ? intval( $params['page'] ) : 1;
$limit         = slz_get_db_settings_option( 'event-ac-limit-post', 10 );
$column        = slz_get_db_settings_option( 'event-ac-column', 1 );

$html_options = array(
    'event_date'       => '<span class="link date-event"><span class="date">%4$s</span><span class="month">%2$s, %3$s</span></span>',
    'title_format'     => '<a href="%2$s" class="block-title">%1$s</a>',
    'image_format'     => '<div class="block-image"><a href="%2$s" class="link">%1$s</a></div>',
    'thumb_class'      => 'img-responsive img-full',
    'event_time'       => '<li><span class="link time">%2$s %1$s - %4$s %3$s</span></li>',
    'event_location'   => '<li><span class="link place">%1$s</span></li>',
    'event_address'    => '<li><span class="link address">%1$s</span></li>',
);



$html_options['html_format'] = '
	<div class="item slz-event">
		<div class="slz-block-item-05 has-image style-1">
			<div class="slz-block-item-wrapper">
			    <div class="block-date">%1$s</div>
			    %2$s
			    <div class="block-content">
			        %3$s
			        <div class="block-content-wrapper">
			            %4$s
			            %5$s
			            %6$s
			        </div>
			    </div>
			</div>
		    <div class="clearfix"></div>
		</div>
	</div>
';

$meta_query = array();

if( ! empty( $start_date ) ) {
    $meta_query[] = array(
        'key'     => 'slz_option:from_date',
        'value'   => date( "Y/m/d" , strtotime( $start_date ) ),
        'compare' => '>=',
    );
}

if( ! empty( $location ) ) {
    $meta_query[] = array(
        'key'     => 'slz_option:event_location',
        'value'   => $location,
        'compare' => 'LIKE',
    );
}


$atts = array(
    'pagination'              => 'ajax',
    'limit_post'              => $limit,
    'paged'                   => $page,
    'image_size'              => array (
        'is_ajax'        => 'true',
    	'large'          => '800x500'
    ),
    'show_thumbnail'          => 'yes',
    'description_display'     => 'show',
    'event_time_display'      => 'show',
    'event_location_display'  => 'show',
);

$args = array(
	's'          => $keyword,
	'meta_query' => $meta_query,
);

$order_by   = slz_get_db_settings_option( 'event-ac-order-by', 'event_from_date' );
$order_side = slz_get_db_settings_option( 'event-ac-order', 'desc' );
switch ( $order_by ) {
	case 'event_from_date':
		$order_args = array(
			'meta_key' => 'slz_option:from_date',
			'orderby'  => 'meta_value',
			'order'    => $order_side,
		);
		break;
	case 'event_to_date':
		$order_args = array(
			'meta_key' => 'slz_option:to_date',
			'orderby'  => 'meta_value',
			'order'    => $order_side,
		);
		break;
	default:
		$order_args = array(
			'orderby' => $order_by,
			'order'   => $order_side,
		);
		break;
}
$args = array_merge( $args, $order_args );

$model = new SLZ_Event();
$model->init( $atts, $args );
if( !empty($column) && absint($column) > 1 ) {
	$model->attributes['image_size']['large'] = '800x500';
} else if( !empty($model->attributes['image_size']['default'])) {
	$model->attributes['image_size']['large'] = '341x257';
}

$model->attributes['thumb-size'] = SLZ_Util::get_thumb_size( $model->attributes['image_size'], $model->attributes );

if( $model->query->have_posts() ) {
    echo '<div class="slz-shortcode sc_event_block"><div class="slz-list-block slz-column-'. esc_attr( $column ) .' layout-1">';
    while ( $model->query->have_posts() ) {
        $model->query->the_post();
        $model->loop_index();

        printf( $html_options['html_format'],
            $model->get_event_date( $html_options ),
            $model->get_featured_image( $html_options ),
            $model->get_title( $html_options ),
            $model->get_event_block_info( $html_options ),
            $model->get_event_description( $html_options  ),
            $model->get_event_address( $html_options )
        );

    }
    $model->reset();
    echo SLZ_Pagination::paging_ajax( $model->query->max_num_pages, 2, $model->query );
    echo '</div></div>';
} else {
    esc_html_e( 'Sorry, nothing matched your search criteria. Please try again with other criteria.', 'holycross' );
}
