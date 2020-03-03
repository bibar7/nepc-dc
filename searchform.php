<?php
	
	$holycross_search_icon = 'fa fa-search';

	$holycross_search_placeholder = esc_html__('Search', 'holycross');

	if ( defined ( 'SLZ' ) ){

		if ( is_page( ) ) {

			$holycross_selected_header = slz_get_db_post_option( get_the_ID(), 'page-header-style' );

			if ( $holycross_selected_header == 'default' )
				unset ( $holycross_selected_header );

		}

		if ( empty ( $holycross_selected_header ) && slz_get_db_settings_option('slz-header-style-group/slz-header-style', false) ){

			$holycross_selected_header = slz_get_db_settings_option('slz-header-style-group/slz-header-style', '');

		}

		if ( !empty ( $holycross_selected_header ) ) {

			$holycross_key = 'slz-header-style-group/' . $holycross_selected_header . '/search-group-styling';

			$holycross_search_options = slz_get_db_settings_option( $holycross_key, '');

			if ( !empty ( $holycross_search_options ) ){

				
				if ( !empty ( $holycross_search_options['icon-class'] ) ) {

				    $holycross_search_icon = $holycross_search_options['icon-class'];

				}

				if ( !empty ( $holycross_search_options['placeholder'] ) ) {

				    $holycross_search_placeholder = $holycross_search_options['placeholder'];

				}


			}

		}

	}

?>

<form action="<?php echo esc_url( home_url( '/' ) ) ?>" method="get" accept-charset="utf-8" class="search-form">

	<input type="search" placeholder="<?php echo esc_attr($holycross_search_placeholder); ?>" class="search-field" name="s" value="<?php echo get_search_query(); ?>" />

	<button type="submit" class="search-submit">
		<span class="search-icon">
			<?php esc_html_e('Search', 'holycross')?>
		</span>
	</button>
</form>
