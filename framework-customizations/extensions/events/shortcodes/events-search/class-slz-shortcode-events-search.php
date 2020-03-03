<?php if ( ! defined( 'SLZ' ) ) {
	die( 'Forbidden' );
}

class SLZ_Shortcode_Events_Search extends SLZ_Shortcode
{
	protected function _render($atts, $content = null, $tag = '', $ajax = false)
	{
		
		$view_path = $this->locate_path('/views');

		$defaults = $this->get_config('default_value');

		$data = shortcode_atts( $defaults, $atts );

		$this->enqueue_static();

		return slz_render_view($this->locate_path('/views/view.php'), array( 'data' => $data, 'view_path' => $view_path, 'instance' => $this ));
	}
}
