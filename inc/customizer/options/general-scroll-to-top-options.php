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
		'scroll_up_tabs' => array(
			'control_type' => 'base_tab_control',
			'section'      => 'scroll_up',
			'settings'     => false,
			'priority'     => 1,
			'input_attrs'  => array(
				'general' => array(
					'label'  => __( 'General', 'jmsiteam' ),
					'target' => 'scroll_up',
				),
				'design' => array(
					'label'  => __( 'Design', 'jmsiteam' ),
					'target' => 'scroll_up_design',
				),
				'active' => 'general',
			),
		),
		'scroll_up_tabs_design' => array(
			'control_type' => 'base_tab_control',
			'section'      => 'scroll_up_design',
			'settings'     => false,
			'priority'     => 1,
			'input_attrs'  => array(
				'general' => array(
					'label'  => __( 'General', 'jmsiteam' ),
					'target' => 'scroll_up',
				),
				'design' => array(
					'label'  => __( 'Design', 'jmsiteam' ),
					'target' => 'scroll_up_design',
				),
				'active' => 'design',
			),
		),
		'scroll_up' => array(
			'control_type' => 'base_switch_control',
			'sanitize'     => 'base_sanitize_toggle',
			'section'      => 'scroll_up',
			'default'      => webapp()->default( 'scroll_up' ),
			'label'        => esc_html__( 'Enable Scroll To Top', 'jmsiteam' ),
			'transport'    => 'refresh',
		),
		'scroll_up_icon' => array(
			'control_type' => 'base_radio_icon_control',
			'section'      => 'scroll_up',
			'priority'     => 10,
			'default'      => webapp()->default( 'scroll_up_icon' ),
			'label'        => esc_html__( 'Scroll Up Icon', 'jmsiteam' ),
			'partial'      => array(
				'selector'            => '.scroll-up-wrap',
				'container_inclusive' => true,
				'render_callback'     => 'Base\scroll_up',
			),
			'context'      => array(
				array(
					'setting'  => 'scroll_up',
					'operator' => '==',
					'value'    => true,
				),
			),
			'input_attrs'  => array(
				'layout' => array(
					'arrow-up' => array(
						'icon' => 'arrowUp',
					),
					'arrow-up2' => array(
						'icon' => 'arrowUp2',
					),
					'chevron-up' => array(
						'icon' => 'chevronUp',
					),
					'chevron-up2' => array(
						'icon' => 'chevronUp2',
					),
				),
				'responsive' => false,
			),
		),
		'scroll_up_icon_size' => array(
			'control_type' => 'base_range_control',
			'section'      => 'scroll_up',
			'label'        => esc_html__( 'Icon Size', 'jmsiteam' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '#bst-scroll-up-reader, #bst-scroll-up',
					'property' => 'font-size',
					'pattern'  => '$',
					'key'      => 'size',
				),
			),
			'default'      => webapp()->default( 'scroll_up_icon_size' ),
			'input_attrs'  => array(
				'min'        => array(
					'px'  => 0,
					'em'  => 0,
					'rem' => 0,
				),
				'max'        => array(
					'px'  => 100,
					'em'  => 12,
					'rem' => 12,
				),
				'step'       => array(
					'px'  => 1,
					'em'  => 0.01,
					'rem' => 0.01,
				),
				'units'      => array( 'px', 'em', 'rem' ),
				'responsive' => true,
			),
		),
		'scroll_up_side' => array(
			'control_type' => 'base_radio_icon_control',
			'section'      => 'scroll_up',
			'default'      => webapp()->default( 'scroll_up_side' ),
			'label'        => esc_html__( 'Align', 'jmsiteam' ),
			'context'      => array(
				array(
					'setting'  => 'scroll_up',
					'operator' => '==',
					'value'    => true,
				),
			),
			'live_method'     => array(
				array(
					'type'     => 'class',
					'selector' => '.scroll-up-wrap',
					'pattern'  => 'scroll-up-side-$',
					'key'      => '',
				),
			),
			'input_attrs'  => array(
				'layout' => array(
					'left' => array(
						'name'    => __( 'Left', 'jmsiteam' ),
						'icon'    => '',
					),
					'right' => array(
						'name'    => __( 'Right', 'jmsiteam' ),
						'icon'    => '',
					),
				),
				'responsive' => false,
			),
		),
		'scroll_up_side_offset' => array(
			'control_type' => 'base_range_control',
			'section'      => 'scroll_up',
			'label'        => esc_html__( 'Side Offset', 'jmsiteam' ),
			'default'      => webapp()->default( 'scroll_up_side_offset' ),
			'context'      => array(
				array(
					'setting'  => 'scroll_up',
					'operator' => '==',
					'value'    => true,
				),
			),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '#bst-scroll-up-reader.scroll-up-side-right, #bst-scroll-up.scroll-up-side-right',
					'pattern'  => '$',
					'property' => 'right',
					'key'      => 'size',
				),
				array(
					'type'     => 'css',
					'selector' => '#bst-scroll-up-reader.scroll-up-side-left, #bst-scroll-up.scroll-up-side-left',
					'pattern'  => '$',
					'property' => 'left',
					'key'      => 'size',
				),
			),
			'input_attrs'  => array(
				'min'        => array(
					'px'  => 0,
					'em'  => 0,
					'rem' => 0,
					'vw'  => 0,
				),
				'max'        => array(
					'px'  => 600,
					'em'  => 20,
					'rem' => 20,
					'vw'  => 100,
				),
				'step'       => array(
					'px'  => 1,
					'em'  => 0.01,
					'rem' => 0.01,
					'vw' => 1,
				),
				'units'      => array( 'px', 'em', 'rem', 'vw' ),
				'responsive' => true,
			),
		),
		'scroll_up_bottom_offset' => array(
			'control_type' => 'base_range_control',
			'section'      => 'scroll_up',
			'label'        => esc_html__( 'Bottom Offset', 'jmsiteam' ),
			'default'      => webapp()->default( 'scroll_up_bottom_offset' ),
			'context'      => array(
				array(
					'setting'  => 'scroll_up',
					'operator' => '==',
					'value'    => true,
				),
			),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '#bst-scroll-up-reader, #bst-scroll-up',
					'pattern'  => '$',
					'property' => 'bottom',
					'key'      => 'size',
				),
			),
			'input_attrs'  => array(
				'min'        => array(
					'px'  => 0,
					'em'  => 0,
					'rem' => 0,
					'vh'  => 0,
				),
				'max'        => array(
					'px'  => 600,
					'em'  => 20,
					'rem' => 20,
					'vh'  => 100,
				),
				'step'       => array(
					'px'  => 1,
					'em'  => 0.01,
					'rem' => 0.01,
					'vh' => 1,
				),
				'units'      => array( 'px', 'em', 'rem', 'vh' ),
				'responsive' => true,
			),
		),
		'scroll_up_visiblity' => array(
			'control_type' => 'base_check_icon_control',
			'section'      => 'scroll_up',
			'default'      => webapp()->default( 'scroll_up_visiblity' ),
			'label'        => esc_html__( 'Visibility', 'jmsiteam' ),
			'context'      => array(
				array(
					'setting'  => 'scroll_up',
					'operator' => '==',
					'value'    => true,
				),
			),
			'partial'      => array(
				'selector'            => '.scroll-up-wrap',
				'container_inclusive' => true,
				'render_callback'     => 'Base\scroll_up',
			),
			'input_attrs'  => array(
				'options' => array(
					'desktop' => array(
						'name' => __( 'Desktop', 'jmsiteam' ),
						'icon' => 'desktop',
					),
					'tablet' => array(
						'name' => __( 'Tablet', 'jmsiteam' ),
						'icon' => 'tablet',
					),
					'mobile' => array(
						'name' => __( 'Mobile', 'jmsiteam' ),
						'icon' => 'smartphone',
					),
				),
			),
		),
		'scroll_up_style' => array(
			'control_type' => 'base_radio_icon_control',
			'section'      => 'scroll_up_design',
			'default'      => webapp()->default( 'scroll_up_style' ),
			'label'        => esc_html__( 'Scroll Button Style', 'jmsiteam' ),
			'live_method'     => array(
				array(
					'type'     => 'class',
					'selector' => '#bst-scroll-up-reader, #bst-scroll-up',
					'pattern'  => 'scroll-up-style-$',
					'key'      => '',
				),
			),
			'context'      => array(
				array(
					'setting'  => 'scroll_up',
					'operator' => '==',
					'value'    => true,
				),
			),
			'input_attrs'  => array(
				'layout' => array(
					'filled' => array(
						'name'    => __( 'Filled', 'jmsiteam' ),
					),
					'outline' => array(
						'name'    => __( 'Outline', 'jmsiteam' ),
						'icon'    => '',
					),
				),
				'responsive' => false,
			),
		),
		'scroll_up_color' => array(
			'control_type' => 'base_color_control',
			'section'      => 'scroll_up_design',
			'label'        => esc_html__( 'Colors', 'jmsiteam' ),
			'default'      => webapp()->default( 'scroll_up_color' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '#bst-scroll-up-reader, #bst-scroll-up',
					'property' => 'color',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '#bst-scroll-up-reader:hover, #bst-scroll-up:hover',
					'property' => 'color',
					'pattern'  => '$',
					'key'      => 'hover',
				),
			),
			'context'      => array(
				array(
					'setting'  => 'scroll_up',
					'operator' => '==',
					'value'    => true,
				),
			),
			'input_attrs'  => array(
				'colors' => array(
					'color' => array(
						'tooltip' => __( 'Initial Color', 'jmsiteam' ),
						'palette' => true,
					),
					'hover' => array(
						'tooltip' => __( 'Hover Color', 'jmsiteam' ),
						'palette' => true,
					),
				),
			),
		),
		'scroll_up_background' => array(
			'control_type' => 'base_color_control',
			'section'      => 'scroll_up_design',
			'label'        => esc_html__( 'Background Colors', 'jmsiteam' ),
			'default'      => webapp()->default( 'scroll_up_background' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '#bst-scroll-up-reader, #bst-scroll-up',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '#bst-scroll-up-reader:hover, #bst-scroll-up:hover',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'hover',
				),
			),
			'context'      => array(
				array(
					'setting'  => 'scroll_up',
					'operator' => '==',
					'value'    => true,
				),
				array(
					'setting'    => 'scroll_up_style',
					'operator'   => '=',
					'value'      => 'filled',
				),
			),
			'input_attrs'  => array(
				'colors' => array(
					'color' => array(
						'tooltip' => __( 'Initial Color', 'jmsiteam' ),
						'palette' => true,
					),
					'hover' => array(
						'tooltip' => __( 'Hover Color', 'jmsiteam' ),
						'palette' => true,
					),
				),
			),
		),
		'scroll_up_border_colors' => array(
			'control_type' => 'base_color_control',
			'section'      => 'scroll_up_design',
			'label'        => esc_html__( 'Border Colors', 'jmsiteam' ),
			'default'      => webapp()->default( 'scroll_up_border' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '#bst-scroll-up-reader, #bst-scroll-up',
					'property' => 'border-color',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '#bst-scroll-up-reader:hover, #bst-scroll-up:hover',
					'property' => 'border-color',
					'pattern'  => '$',
					'key'      => 'hover',
				),
			),
			'context'      => array(
				array(
					'setting'  => 'scroll_up',
					'operator' => '==',
					'value'    => true,
				),
			),
			'input_attrs'  => array(
				'colors' => array(
					'color' => array(
						'tooltip' => __( 'Initial Color', 'jmsiteam' ),
						'palette' => true,
					),
					'hover' => array(
						'tooltip' => __( 'Hover Color', 'jmsiteam' ),
						'palette' => true,
					),
				),
			),
		),
		'scroll_up_border' => array(
			'control_type' => 'base_border_control',
			'section'      => 'scroll_up_design',
			'label'        => esc_html__( 'Border', 'jmsiteam' ),
			'default'      => webapp()->default( 'scroll_up_border' ),
			'live_method'     => array(
				array(
					'type'     => 'css_border',
					'selector' => '#bst-scroll-up-reader, #bst-scroll-up',
					'property' => 'border',
					'pattern'  => '$',
					'key'      => 'border',
				),
			),
			'context'      => array(
				array(
					'setting'  => 'scroll_up',
					'operator' => '==',
					'value'    => true,
				),
			),
			'input_attrs'  => array(
				'responsive' => false,
				'color'      => false,
			),
		),
		'scroll_up_radius' => array(
			'control_type' => 'base_measure_control',
			'section'      => 'scroll_up_design',
			'priority'     => 10,
			'default'      => webapp()->default( 'scroll_up_radius' ),
			'label'        => esc_html__( 'Border Radius', 'jmsiteam' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '#bst-scroll-up-reader, #bst-scroll-up',
					'property' => 'border-radius',
					'pattern'  => '$',
					'key'      => 'measure',
				),
			),
			'context'      => array(
				array(
					'setting'  => 'scroll_up',
					'operator' => '==',
					'value'    => true,
				),
			),
			'input_attrs'  => array(
				'responsive' => false,
			),
		),
		'scroll_up_padding' => array(
			'control_type' => 'base_measure_control',
			'section'      => 'scroll_up_design',
			'priority'     => 10,
			'default'      => webapp()->default( 'scroll_up_padding' ),
			'label'        => esc_html__( 'Scroll Button Padding', 'jmsiteam' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '#bst-scroll-up-reader, #bst-scroll-up',
					'property' => 'padding',
					'pattern'  => '$',
					'key'      => 'measure',
				),
			),
			'context'      => array(
				array(
					'setting'  => 'scroll_up',
					'operator' => '==',
					'value'    => true,
				),
			),
			'input_attrs'  => array(
				'responsive' => true,
			),
		),
	)
);
