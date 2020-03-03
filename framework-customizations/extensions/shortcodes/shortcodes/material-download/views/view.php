<?php if ( ! defined( 'SLZ' ) ) { die( 'Forbidden' ); }

// Generate css class for block
$block_cls = 'material_download-'.SLZ_Com::make_id().' '.$data['extra_class'];
// Declare custom_css for custom css inline
$custom_css = '';
// List format
$list_format = '<ul class="tool-list">%1$s</ul>';
// Item format
$item_format = '<li><a href="%1$s" class="link %2$s" title="%4$s" download><i class="fa fa-%3$s"></i></a></li>';

// Check js_composer is active
if ( is_plugin_active( 'js_composer/js_composer.php' ) ):
?>
<div class="slz-shortcode sc_material_download <?php echo esc_attr($block_cls); ?>">
	<?php if( ! empty( $data['title'] ) ): ?>
		<h2 class="slz-title-shortcode"><?php echo esc_html( $data['title'] ); ?></h2>
	<?php endif; ?>
	<?php if( ! empty( $data['files'] ) ) {
        $files = array();
        if( preg_match( '/`{`(.*?)`}`/' , $data['files'], $matches ) )
        {
            if( ! empty( $matches[1] ) ) {
                $files = explode(',', $matches[1] );
            }
        }
        $out = '';
        foreach ($files as $id) {
            // Get file url
            $file_url = wp_get_attachment_url( $id );
            // Check file exist
            if( empty( $file_url ) ) continue;
            // Get file_type
            $file_type = wp_check_filetype( $file_url );
            $file_title = get_the_title( $id );
            switch ( $file_type['ext'] ) {
                // Video
                case 'avi' :
                case 'flv' :
                case 'm4v' :
                case 'mov' :
                case 'mp4' :
                case 'mpg' :
                case 'rm' :
                case 'swf' :
                case 'wmv' :
                    $item_class     = 'video';
                    $item_icon      = 'video-camera';
                    break;
                // Documents
                case 'pdf' :
                case 'doc' :
                case 'odt' :
                case 'msg' :
                case 'docx' :
                case 'rtf' :
                case 'wps' :
                case 'wpd' :
                case 'pages' :
                case 'csv' :
                case 'xlsx' :
                case 'xls' :
                case 'xml' :
                case 'xlr' :
                case 'ppt' :
                case 'pptx' :
                case 'pptm' :
                    $item_class = 'doc';
                    $item_icon  = 'file-pdf-o';
                    break;
                // Audio
                case 'mp3' :
                case 'wav' :
                case 'm4a' :
                case 'aif' :
                case 'wma' :
                case 'ra' :
                case 'mpa' :
                case 'iff' :
                case 'm3u' :
                    $item_class = 'mp3';
                    $item_icon  = 'headphones';
                    break;
                // Images
                case 'jpg' :
                case 'jpeg' :
                case 'png' :
                case 'gif' :
                case 'tiff' :
                case 'bmp' :
                    $item_class = 'image';
                    $item_icon  = 'file-image-o';
                    break;
                // Zip
                case 'zip' :
                    $item_class = 'doc';
                    $item_icon  = 'download';
                    break;
                // Other
                default :
                    $item_class = 'other';
                    $item_icon  = 'file-o';
                    break;
            }
            $out .= sprintf( $item_format, esc_attr( $file_url ), esc_attr( $item_class ), esc_attr( $item_icon ), esc_attr( $file_title ) );
        }
        if( $out != '' ) {
            printf( $list_format, $out );
        }
    }

    // Set color for title
    $css_format = '.%1$s .tool-list { padding: 0; margin-top: 20px; margin-bottom: 0; }
                   .%1$s .tool-list li { list-style: none; display: inline-block; width: 48px; height: 48px; text-align: center; background-color: #f5f4f4; line-height: 48px; border-radius: 100%%; transition: all 0.6s ease; -webkit-transition: all 0.6s ease; margin-bottom: 10px; margin-left: 10px; }
                   .%1$s .tool-list li:hover { background-color: #CF4A46; color: #FFFFFF; }
                   .%1$s .tool-list li i { color: #cf4a46; font-size: 14px; width: 48px; height: 48px; line-height: 48px; }';
    $custom_css .= sprintf( $css_format, esc_attr( $block_cls ) );
    if ( ! empty( $data['title_color'] ) ) {
        $css_format = '.%1$s .slz-title-shortcode { color: %2$s; }';
        $custom_css .= sprintf( $css_format, esc_attr( $block_cls ), esc_attr( $data['title_color'] ) );
    }
    if ( ! empty( $data['title_color_hv'] ) ) {
        $css_format = '.%1$s .slz-title-shortcode:hover { color: %2$s; }';
        $custom_css .= sprintf( $css_format, esc_attr( $block_cls ), esc_attr( $data['title_color_hv'] ) );
    }
    if ( ! empty( $data['icon_color'] ) ) {
        $css_format = '.%1$s .tool-list li i { color: %2$s; }';
        $custom_css .= sprintf( $css_format, esc_attr( $block_cls ), esc_attr( $data['icon_color'] ) );
    }
    if ( ! empty( $data['icon_color_hv'] ) ) {
        $css_format = '.%1$s .tool-list li i:hover { color: %2$s; }';
        $custom_css .= sprintf( $css_format, esc_attr( $block_cls ), esc_attr( $data['icon_color_hv'] ) );
    }
    if ( ! empty( $data['bg_color'] ) ) {
        $css_format = '.%1$s .tool-list li { background-color: %2$s; }';
        $custom_css .= sprintf( $css_format, esc_attr( $block_cls ), esc_attr( $data['bg_color'] ) );
    }
    if ( ! empty( $data['bg_color_hv'] ) ) {
        $css_format = '.%1$s .tool-list li:hover { background-color: %2$s; }';
        $custom_css .= sprintf( $css_format, esc_attr( $block_cls ), esc_attr( $data['bg_color_hv'] ) );
    }
    // Do action to add inline css
	if ( !empty( $custom_css ) )
		do_action('slz_add_inline_style', $custom_css);
	?>
</div>
<?php
else:
    echo esc_html__('Please Active Visual Composer', 'holycross');
endif;