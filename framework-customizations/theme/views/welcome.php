<?php if ( ! defined( 'SLZ' ) ) {
	exit;
}
$model = new Holycross_Welcome();
$model->get_theme_header();

$required_plugin  = array( 'solazu-unyson', 'js_composer', 'revslider');
$recommend_plugin = array( 'newsletter', 'contact-form-7',
	'woocommerce', 'yith-woocommerce-zoom-magnifier', 'yith-woocommerce-wishlist');
$plugins = TGM_Plugin_Activation::$instance->plugins;
$installed_plugins = get_plugins();
?>
<div class="wrap about-wrap slz-wrap">
	<div class="slz-important-notice">
		<p class="about-description"><?php echo esc_html__('These are the plugins we include with HolyCross.  Currently Solazu Unyson is the only required plugin that is needed to use HolyCross. You can activate, deactivate or update the plugins from this tab.','holycross');?></p>
	</div>
	<div class="slz-notice">
		<p><?php echo esc_html__('Please kindly DO NOT update Unyson Plugin separately!', 'holycross');?></p>
		<p><?php echo esc_html__('We had customized its coding structure and create it a our own unique technique, if you update it, it will turn your site into "Forbidden" state and let your site DOWN.', 'holycross');?></p>
	</div>
	<div class="slz-demo-themes slz-install-plugins">
		<div class="feature-section theme-browser rendered">
			<?php
			foreach( $required_plugin as $plg_name ):
				$plugin = $plugins[$plg_name];
				$class = '';
				$plugin_status = '';
				$file_path = $plugin['file_path'];
				$plugin_action = $model->plugin_link( $plugin );

				if( is_plugin_active( $file_path ) ) {
					$plugin_status = 'active';
					$class = 'active';
				}
			?>
			<div class="theme <?php echo esc_attr( $class ); ?>">
				<div class="theme-screenshot">
					<img src="<?php echo esc_url($plugin['image_url']); ?>" alt="" />
				</div>
				<h3 class="theme-name">
					<?php
					if( $plugin_status == 'active' ) {
						echo sprintf( '<span>%s</span> ', esc_html__( 'Active:', 'holycross' ) );
					}
					echo esc_html($plugin['name']);
					?>
				</h3>
				<div class="theme-actions">
					<?php
					foreach( $plugin_action as $action ) {
						echo wp_kses_post($action);
					}
					?>
				</div>
				<?php if( isset( $plugin_action['update'] ) && $plugin_action['update'] ): ?>
				<div class="theme-update"><?php echo esc_html__( 'Update Available: Version', 'holycross' ) . esc_html($plugin['version']); ?></div>
				<?php endif; ?>

				<?php if( isset( $installed_plugins[$plugin['file_path']] ) ): ?> 
				<div class="plugin-info">
					<?php echo sprintf(esc_html__( 'Version %s | %s', 'holycross'), $installed_plugins[$plugin['file_path']]['Version'], $installed_plugins[$plugin['file_path']]['Author'] ); ?>
				</div>
				<?php endif; ?>
				<?php if( isset($plugin['required']) && $plugin['required'] ): ?>
				<div class="plugin-required">
					<?php esc_html_e( 'Required', 'holycross' ); ?>
				</div>
				<?php endif; ?>
			</div>
			<?php endforeach; ?>
		</div>
		<h2><?php esc_html_e('Recommend Plugins', 'holycross');?></h2>
		<p><?php esc_html_e('These are the plugins we tested with HolyCross and they are compatible with together. If you want to use these plugins, you can activate, deactivate or update them in this tab.', 'holycross' );?></p>
		<div class="tested-plugin feature-section theme-browser rendered">
			<?php
			foreach( $recommend_plugin as $plg_name ):
				$plugin = $plugins[$plg_name];
				$class = '';
				$plugin_status = '';
				$file_path = $plugin['file_path'];
				$plugin_action = $model->plugin_link( $plugin );

				if( is_plugin_active( $file_path ) ) {
					$plugin_status = 'active';
					$class = 'active';
				}
			?>
			<div class="theme <?php echo esc_attr( $class ); ?>">
				<div class="theme-screenshot">
					<img src="<?php echo esc_url($plugin['image_url']); ?>" alt="" />
				</div>
				<h3 class="theme-name">
					<?php
					if( $plugin_status == 'active' ) {
						echo sprintf( '<span>%s</span> ', esc_html__( 'Active:', 'holycross' ) );
					}
					echo esc_html($plugin['name']);
					?>
				</h3>
				<div class="theme-actions">
					<?php
					foreach( $plugin_action as $action ) {
						echo wp_kses_post($action);
					}
					?>
				</div>
				<?php if( isset( $plugin_action['update'] ) && $plugin_action['update'] ): ?>
				<div class="theme-update"><?php printf( esc_html__( 'Update Available: Version %s', 'holycross' ), esc_html($plugin['version']) ); ?></div>
				<?php endif; ?>

				<?php if( isset( $installed_plugins[$plugin['file_path']] ) ): ?> 
				<div class="plugin-info">
					<?php echo sprintf(esc_html__( 'Version %s | %s', 'holycross' ), $installed_plugins[$plugin['file_path']]['Version'], $installed_plugins[$plugin['file_path']]['Author'] ); ?>
				</div>
				<?php endif; ?>
				<div class="plugin-recommend">
					<?php esc_html_e( 'Recommend', 'holycross' ); ?>
				</div>
			</div>
			<?php endforeach;?>
		</div>
	</div>
</div>