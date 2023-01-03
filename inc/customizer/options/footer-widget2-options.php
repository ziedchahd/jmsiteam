<?php
/**
 * Header Main Row Options
 *
 * @package Base
 */

namespace Base;

use Base\Theme_Customizer;
use function Base\webapp;

ob_start(); ?>
<div class="base-compontent-tabs nav-tab-wrapper wp-clearfix">
	<a href="#" class="nav-tab base-general-tab base-compontent-tabs-button nav-tab-active" data-tab="general">
		<span><?php esc_html_e( 'General', 'jmsiteam' ); ?></span>
	</a>
</div>
<?php
$compontent_tabs = ob_get_clean();
$settings        = array(
	'footer_widget2_breaker' => array(
		'control_type' => 'base_blank_control',
		'section'      => 'sidebar-widgets-footer2',
		'settings'     => false,
		'priority'     => 5,
		'description'  => $compontent_tabs,
	),
	'footer_widget2_align' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'sidebar-widgets-footer2',
		'label'        => esc_html__( 'Content Align', 'jmsiteam' ),
		'priority'     => 5,
		'default'      => webapp()->default( 'footer_widget2_align' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.footer-widget2',
				'pattern'  => array(
					'desktop' => 'content-align-$',
					'tablet'  => 'content-tablet-align-$',
					'mobile'  => 'content-mobile-align-$',
				),
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'left'   => array(
					'tooltip'  => __( 'Left Align', 'jmsiteam' ),
					'dashicon' => 'editor-alignleft',
				),
				'center' => array(
					'tooltip'  => __( 'Center Align', 'jmsiteam' ),
					'dashicon' => 'editor-aligncenter',
				),
				'right'  => array(
					'tooltip'  => __( 'Right Align', 'jmsiteam' ),
					'dashicon' => 'editor-alignright',
				),
			),
			'responsive' => true,
		),
	),
	'footer_widget2_vertical_align' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'sidebar-widgets-footer2',
		'label'        => esc_html__( 'Content Vertical Align', 'jmsiteam' ),
		'priority'     => 5,
		'default'      => webapp()->default( 'footer_widget2_vertical_align' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'live_method'  => array(
			array(
				'type'     => 'class',
				'selector' => '.footer-widget2',
				'pattern'  => array(
					'desktop' => 'content-valign-$',
					'tablet'  => 'content-tablet-valign-$',
					'mobile'  => 'content-mobile-valign-$',
				),
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'top' => array(
					'tooltip' => __( 'Top Align', 'jmsiteam' ),
					'icon'    => 'aligntop',
				),
				'middle' => array(
					'tooltip' => __( 'Middle Align', 'jmsiteam' ),
					'icon'    => 'alignmiddle',
				),
				'bottom' => array(
					'tooltip' => __( 'Bottom Align', 'jmsiteam' ),
					'icon'    => 'alignbottom',
				),
			),
			'responsive' => true,
		),
	),
);

Theme_Customizer::add_settings( $settings );

