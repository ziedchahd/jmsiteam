<?php
/**
 * The Radio Icon customize control extends the WP_Customize_Control class.
 *
 * @package customizer-controls
 */

if ( ! class_exists( 'WP_Customize_Control' ) ) {
	return;
}


/**
 * Class Base_Control_Import_Export
 *
 * @access public
 */
class Base_Control_Import_Export extends WP_Customize_Control {
	/**
	 * Control type
	 *
	 * @var string
	 */
	public $type = 'base_import_export_control';
	/**
	 * Empty Render Function to prevent errors.
	 */
	public function render_content() {
		?>
			<span class="customize-control-title">
				<?php esc_html_e( 'Export', 'jmsiteam' ); ?>
			</span>
			<span class="description customize-control-description">
				<?php esc_html_e( 'Click the button below to export the customization settings for this theme.', 'jmsiteam' ); ?>
			</span>
			<input type="button" class="button base-theme-export base-theme-button" name="base-theme-export-button" value="<?php esc_attr_e( 'Export', 'jmsiteam' ); ?>" />

			<hr class="bst-theme-hr" />

			<span class="customize-control-title">
				<?php esc_html_e( 'Import', 'jmsiteam' ); ?>
			</span>
			<span class="description customize-control-description">
				<?php esc_html_e( 'Upload a file to import customization settings for this theme.', 'jmsiteam' ); ?>
			</span>
			<div class="base-theme-import-controls">
				<input type="file" name="base-theme-import-file" class="base-theme-import-file" />
				<?php wp_nonce_field( 'base-theme-importing', 'base-theme-import' ); ?>
			</div>
			<div class="base-theme-uploading"><?php esc_html_e( 'Uploading...', 'jmsiteam' ); ?></div>
			<input type="button" class="button base-theme-import base-theme-button" name="base-theme-import-button" value="<?php esc_attr_e( 'Import', 'jmsiteam' ); ?>" />

			<hr class="bst-theme-hr" />
			<span class="customize-control-title">
				<?php esc_html_e( 'Reset', 'jmsiteam' ); ?>
			</span>
			<span class="description customize-control-description">
				<?php esc_html_e( 'Click the button to reset all theme settings.', 'jmsiteam' ); ?>
			</span>
			<input type="button" class="components-button is-destructive base-theme-reset base-theme-button" name="base-theme-reset-button" value="<?php esc_attr_e( 'Reset', 'jmsiteam' ); ?>" />
			<?php
	}
}