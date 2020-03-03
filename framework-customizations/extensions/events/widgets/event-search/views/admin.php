<!-- title -->
<p>
	<label for="<?php echo  esc_attr( $wp_widget->get_field_id('title') ); ?>"><?php esc_html_e( 'Title', 'holycross' );?></label>
	<input class="widefat" type="text" id="<?php echo esc_attr( $wp_widget->get_field_id('title') ); ?>" name="<?php echo esc_attr( $wp_widget->get_field_name('title') ); ?>" value="<?php echo esc_attr( $data['title'] ); ?>" />
</p>
