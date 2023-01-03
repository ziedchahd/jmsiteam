<?php
/**
 * Header Main Row Options
 *
 * @package Base
 */

namespace Base;

use Base\Theme_Customizer;
use function Base\webapp;

$settings = array(
	'info_tribe_events_archive_layout' => array(
		'control_type' => 'base_title_control',
		'section'      => 'tribe_events_archive',
		'priority'     => 10,
		'label'        => esc_html__( 'Events Layout', 'jmsiteam' ),
		'settings'     => false,
	),
	'tribe_events_archive_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'tribe_events_archive',
		'label'        => esc_html__( 'Events Layout', 'jmsiteam' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => webapp()->default( 'tribe_events_archive_layout' ),
		'input_attrs'  => array(
			'layout' => array(
				'normal' => array(
					'tooltip' => __( 'Normal', 'jmsiteam' ),
					'icon' => 'normal',
				),
				'narrow' => array(
					'tooltip' => __( 'Narrow', 'jmsiteam' ),
					'icon' => 'narrow',
				),
				'fullwidth' => array(
					'tooltip' => __( 'Fullwidth', 'jmsiteam' ),
					'icon' => 'fullwidth',
				),
				'left' => array(
					'tooltip' => __( 'Left Sidebar', 'jmsiteam' ),
					'icon' => 'leftsidebar',
				),
				'right' => array(
					'tooltip' => __( 'Right Sidebar', 'jmsiteam' ),
					'icon' => 'rightsidebar',
				),
			),
			'class'      => 'base-three-col',
			'responsive' => false,
		),
	),
	'tribe_events_archive_sidebar_id' => array(
		'control_type' => 'base_select_control',
		'section'      => 'tribe_events_archive',
		'label'        => esc_html__( 'Events Sidebar', 'jmsiteam' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => webapp()->default( 'tribe_events_archive_sidebar_id' ),
		'input_attrs'  => array(
			'options' => webapp()->sidebar_options(),
		),
	),
	'tribe_events_archive_content_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'tribe_events_archive',
		'label'        => esc_html__( 'Events Background', 'jmsiteam' ),
		'default'      => webapp()->default( 'tribe_events_archive_content_background' ),
		'live_method'  => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.post-type-archive-tribe_events .site, body.post-type-archive-tribe_events.content-style-unboxed .site',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Events Background', 'jmsiteam' ),
		),
	),
);

Theme_Customizer::add_settings( $settings );

