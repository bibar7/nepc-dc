<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage HolyCross
 * @since 1.0
 */
?>

<?php

if ( holycross_check_extension('footers') ) {
	holycross_get_footer_banner();

	if ( is_page( ) ) {

		$footer_options = slz_get_db_post_option( get_the_ID(), 'page-footer-style' );

		$holycross_selected_footer = slz_akg('footer-style', $footer_options, '' );
		if ( $holycross_selected_footer == 'default' )
			unset ( $holycross_selected_footer );

	}

	if ( empty ( $holycross_selected_footer ) && slz_get_db_settings_option('slz-footer-style-group/slz-footer-style', false) ){

		$holycross_selected_footer = slz_get_db_settings_option('slz-footer-style-group/slz-footer-style', '');

	}

	if ( !empty ( $holycross_selected_footer ) ) {

		$holycross_footer = slz_ext('footers')->get_footer( $holycross_selected_footer );

		if ( !empty ( $holycross_footer ) ) {
			$holycross_footer->render();
        }

	}

}
else
	get_template_part('default-templates/footer');
?>

	</div>
</div>
<?php

	if ( defined('SLZ') ) {

		if ( slz_get_db_settings_option('enable-scroll-to', '') == 'yes' ) {
			$holycross_scroll_settings = slz_get_db_settings_option('scroll-to-top-styling', '');

			$holycross_icon = '<i class="fa fa-angle-up"></i>';

			if ( !empty ( $holycross_scroll_settings ) ) {

				if ( $holycross_scroll_settings['icon-type']['icon-box-img'] == 'icon-class' && ! empty( $holycross_scroll_settings['icon-type']['icon-class']['icon_class'] ) ) {

					$holycross_icon = '<i class="' . esc_attr( $holycross_scroll_settings['icon-type']['icon-class']['icon_class'] ) . '"></i>';

				} elseif ( $holycross_scroll_settings['icon-type']['icon-box-img'] == 'upload-icon' && ! empty( $holycross_scroll_settings['icon-type']['upload-icon']['upload-custom-img'] ) ) {

					$holycross_icon = '<img src="' . esc_url ( $holycross_scroll_settings['icon-type']['upload-icon']['upload-custom-img']['url'] ) . '"/>';
				}

			}

			echo '<div class="btn-wrapper back-to-top"><a href="#top" class="btn btn-transparent">' . wp_kses_post( $holycross_icon ) . '</a></div>';
			
		}
		if( function_exists('slz_get_live_setting') ) {
			slz_get_live_setting();
		}
	}
?>
<?php wp_footer(); ?>

</body>
</html>
