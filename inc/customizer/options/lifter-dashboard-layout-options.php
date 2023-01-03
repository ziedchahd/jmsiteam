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
	'info_llms_dashboard_title' => array(
		'control_type' => 'base_title_control',
		'section'      => 'llms_dashboard_layout',
		'priority'     => 2,
		'label'        => esc_html__( 'Dashboard Navigation', 'jmsiteam' ),
		'settings'     => false,
	),
	'llms_dashboard_navigation_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'llms_dashboard_layout',
		'label'        => esc_html__( 'Navigation Layout', 'jmsiteam' ),
		'transport'    => 'refresh',
		'priority'     => 4,
		'default'      => webapp()->default( 'llms_dashboard_navigation_layout' ),
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
	'llms_dashboard_archive_columns' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'llms_dashboard_layout',
		'priority'     => 20,
		'label'        => esc_html__( 'Course and Membership Items Columns', 'jmsiteam' ),
		'transport'    => 'refresh',
		'default'      => webapp()->default( 'llms_dashboard_archive_columns' ),
		'input_attrs'  => array(
			'layout' => array(
				'2' => array(
					'name' => __( '2', 'jmsiteam' ),
				),
				'3' => array(
					'name' => __( '3', 'jmsiteam' ),
				),
				'4' => array(
					'name' => __( '4', 'jmsiteam' ),
				),
			),
			'responsive' => false,
		),
	),
);

Theme_Customizer::add_settings( $settings );

