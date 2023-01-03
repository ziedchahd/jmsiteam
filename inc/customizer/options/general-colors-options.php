<?php
/**
 * Header Builder Options
 *
 * @package Base
 */

namespace Base;

use Base\Theme_Customizer;
use function Base\webapp;

Theme_Customizer::add_settings(
	array(
		'info_background' => array(
			'control_type' => 'base_title_control',
			'section'      => 'general_colors',
			'label'        => esc_html__( 'Backgrounds', 'jmsiteam' ),
			'settings'     => false,
		),
		'site_background' => array(
			'control_type' => 'base_background_control',
			'section'      => 'general_colors',
			'label'        => esc_html__( 'Site Background', 'jmsiteam' ),
			'default'      => webapp()->default( 'site_background' ),
			'live_method'     => array(
				array(
					'type'     => 'css_background',
					'selector' => 'body',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'base',
				),
			),
			'input_attrs'  => array(
				'tooltip'  => __( 'Site Background', 'jmsiteam' ),
			),
		),
		'content_background' => array(
			'control_type' => 'base_background_control',
			'section'      => 'general_colors',
			'label'        => esc_html__( 'Content Background', 'jmsiteam' ),
			'default'      => webapp()->default( 'content_background' ),
			'live_method'     => array(
				array(
					'type'     => 'css_background',
					'selector' => '.content-bg, body.content-style-unboxed .site',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'base',
				),
			),
			'input_attrs'  => array(
				'tooltip'  => __( 'Content Background', 'jmsiteam' ),
			),
		),
		'above_title_background' => array(
			'control_type' => 'base_background_control',
			'section'      => 'general_colors',
			'label'        => esc_html__( 'Title Above Content Background', 'jmsiteam' ),
			'default'      => webapp()->default( 'above_title_background' ),
			'live_method'     => array(
				array(
					'type'     => 'css_background',
					'selector' => '.wp-site-blocks .entry-hero-container-inner',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'base',
				),
			),
			'input_attrs'  => array(
				'tooltip'  => __( 'Title Above Content Background', 'jmsiteam' ),
			),
		),
		'above_title_overlay_color' => array(
			'control_type' => 'base_color_control',
			'section'      => 'general_colors',
			'label'        => esc_html__( 'Title Above Content Overlay Color', 'jmsiteam' ),
			'default'      => webapp()->default( 'above_title_overlay_color' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.entry-hero-container-inner .hero-section-overlay',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'color',
				),
			),
			'input_attrs'  => array(
				'colors' => array(
					'color' => array(
						'tooltip' => __( 'Overlay Color', 'jmsiteam' ),
						'palette' => true,
					),
				),
				'allowGradient' => true,
			),
		),
		'info_links' => array(
			'control_type' => 'base_title_control',
			'section'      => 'general_colors',
			'label'        => esc_html__( 'Content Links', 'jmsiteam' ),
			'settings'     => false,
		),
		'link_color' => array(
			'control_type' => 'base_color_link_control',
			'section'      => 'general_colors',
			'transport'    => 'refresh',
			'label'        => esc_html__( 'Links Color', 'jmsiteam' ),
			'default'      => webapp()->default( 'link_color' ),
			'live_method'     => array(
				array(
					'type'     => 'css_link',
					'selector' => 'a',
					'property' => 'color',
					'pattern'  => 'link-style-$',
					'key'      => 'base',
				),
			),
		),
	)
);

