<?php
/**
 * Product Layout Options
 *
 * @package Base
 */

namespace Base;

use Base\Theme_Customizer;
use function Base\webapp;

$settings = array(
	'info_woo_account_title' => array(
		'control_type' => 'base_title_control',
		'section'      => 'account_layout',
		'priority'     => 2,
		'label'        => esc_html__( 'My Account Navigation', 'jmsiteam' ),
		'settings'     => false,
	),
	'woo_account_navigation_avatar' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'account_layout',
		'priority'     => 3,
		'default'      => webapp()->default( 'woo_account_navigation_avatar' ),
		'label'        => esc_html__( 'Show User Name and Avatar?', 'jmsiteam' ),
		'transport'    => 'refresh',
	),
	'woo_account_navigation_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'account_layout',
		'label'        => esc_html__( 'Navigation Layout', 'jmsiteam' ),
		'transport'    => 'refresh',
		'priority'     => 4,
		'default'      => webapp()->default( 'woo_account_navigation_layout' ),
		'input_attrs'  => array(
			'layout' => array(
				'left' => array(
					'tooltip' => __( 'Positioned on Left Content', 'jmsiteam' ),
					'name'    => __( 'Left', 'jmsiteam' ),
					'icon'    => '',
				),
				'above' => array(
					'tooltip' => __( 'Positioned on Top Content', 'jmsiteam' ),
					'name'    => __( 'Above', 'jmsiteam' ),
					'icon'    => '',
				),
				'right' => array(
					'tooltip' => __( 'Positioned on Right Content', 'jmsiteam' ),
					'name'    => __( 'Right', 'jmsiteam' ),
					'icon'    => '',
				),
			),
			'responsive' => false,
		),
	),
);

Theme_Customizer::add_settings( $settings );

