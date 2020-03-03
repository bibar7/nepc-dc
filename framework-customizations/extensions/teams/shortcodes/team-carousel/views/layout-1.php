<?php
$btn_content = '';
if( ! empty( $data['btn_content'] ) ) {
	$btn_content = '<a class="read-more link" href="%9$s">'. esc_attr( $data['btn_content'] ) .'</a>';
}
$html_render = array();
$html_format = '
		<div class="item team-%7$s">
			<div class="slz-block-team-01">
				<div class="team-img">
					%1$s
				</div>
				<div class="team-body">
					<div class="main-info">
						%2$s
						%3$s
					</div>
					%4$s
					<div class="description-wrapper">
						%5$s
						'. $btn_content .'
					</div>
					%6$s
				</div>
			</div>
		</div>
	';
$html_render['html_format'] = $html_format;
?>

<div class="layout-1 slz-shortcode sc_team_carousel <?php echo esc_attr( $data['block_cls'] ); ?>" data-item="<?php echo esc_attr($data['uniq_id']); ?>">
	<?php
		echo ($data['classRowBegin']);
		$data['model']->render_team_list_sc( $html_render );
		echo ($data['classRowEnd']);
	?>
</div>