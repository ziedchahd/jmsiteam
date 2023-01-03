<?php
/**
 * Event Layout Options
 *
 * @package Base
 */

namespace Base;

use Base\Theme_Customizer;
use function Base\webapp;

$settings = array(
	'tribe_events_layout_tabs' => array(
		'control_type' => 'base_tab_control',
		'section'      => 'tribe_events_layout',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'jmsiteam' ),
				'target' => 'tribe_events_layout',
			),
			'design' => array(
				'label'  => __( 'Design', 'jmsiteam' ),
				'target' => 'tribe_events_layout_design',
			),
			'active' => 'general',
		),
	),
	'tribe_events_layout_tabs_design' => array(
		'control_type' => 'base_tab_control',
		'section'      => 'tribe_events_layout_design',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'jmsiteam' ),
				'target' => 'tribe_events_layout',
			),
			'design' => array(
				'label'  => __( 'Design', 'jmsiteam' ),
				'target' => 'tribe_events_layout_design',
			),
			'active' => 'design',
		),
	),
	'info_tribe_events_title' => array(
		'control_type' => 'base_title_control',
		'section'      => 'tribe_events_layout',
		'priority'     => 2,
		'label'        => esc_html__( 'Event Title', 'jmsiteam' ),
		'settings'     => false,
	),
	'info_tribe_events_title_design' => array(
		'control_type' => 'base_title_control',
		'section'      => 'tribe_events_layout_design',
		'priority'     => 2,
		'label'        => esc_html__( 'Event Title', 'jmsiteam' ),
		'settings'     => false,
	),
	'tribe_events_title' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'tribe_events_layout',
		'priority'     => 3,
		'default'      => webapp()->default( 'tribe_events_title' ),
		'label'        => esc_html__( 'Show Event Title?', 'jmsiteam' ),
		'transport'    => 'refresh',
	),
	'tribe_events_title_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'tribe_events_layout',
		'label'        => esc_html__( 'Event Title Layout', 'jmsiteam' ),
		'transport'    => 'refresh',
		'priority'     => 4,
		'default'      => webapp()->default( 'tribe_events_title_layout' ),
		'context'      => array(
			array(
				'setting'    => 'tribe_events_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'normal' => array(
					'tooltip' => __( 'In Content', 'jmsiteam' ),
					'icon'    => 'incontent',
				),
				'above' => array(
					'tooltip' => __( 'Above Content', 'jmsiteam' ),
					'icon'    => 'abovecontent',
				),
			),
			'responsive' => false,
			'class'      => 'base-two-col',
		),
	),
	'tribe_events_title_inner_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'tribe_events_layout',
		'priority'     => 4,
		'default'      => webapp()->default( 'tribe_events_title_inner_layout' ),
		'label'        => esc_html__( 'Title Container Width', 'jmsiteam' ),
		'context'      => array(
			array(
				'setting'    => 'tribe_events_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'tribe_events_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.tribe_events-hero-section',
				'pattern'  => 'entry-hero-layout-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'standard' => array(
					'tooltip' => __( 'Background Fullwidth, Content Contained', 'jmsiteam' ),
					'name'    => __( 'Standard', 'jmsiteam' ),
					'icon'    => '',
				),
				'fullwidth' => array(
					'tooltip' => __( 'Background & Content Fullwidth', 'jmsiteam' ),
					'name'    => __( 'Fullwidth', 'jmsiteam' ),
					'icon'    => '',
				),
				'contained' => array(
					'tooltip' => __( 'Background & Content Contained', 'jmsiteam' ),
					'name'    => __( 'Contained', 'jmsiteam' ),
					'icon'    => '',
				),
			),
			'responsive' => false,
		),
	),
	'tribe_events_title_align' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'tribe_events_layout',
		'label'        => esc_html__( 'Event Title Align', 'jmsiteam' ),
		'priority'     => 4,
		'default'      => webapp()->default( 'tribe_events_title_align' ),
		'context'      => array(
			array(
				'setting'    => 'tribe_events_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.tribe_events-title',
				'pattern'  => array(
					'desktop' => 'title-align-$',
					'tablet'  => 'title-tablet-align-$',
					'mobile'  => 'title-mobile-align-$',
				),
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'left' => array(
					'tooltip'  => __( 'Left Align Title', 'jmsiteam' ),
					'dashicon' => 'editor-alignleft',
				),
				'center' => array(
					'tooltip'  => __( 'Center Align Title', 'jmsiteam' ),
					'dashicon' => 'editor-aligncenter',
				),
				'right' => array(
					'tooltip'  => __( 'Right Align Title', 'jmsiteam' ),
					'dashicon' => 'editor-alignright',
				),
			),
			'responsive' => true,
		),
	),
	'tribe_events_title_height' => array(
		'control_type' => 'base_range_control',
		'section'      => 'tribe_events_layout',
		'priority'     => 5,
		'label'        => esc_html__( 'Title Container Min Height', 'jmsiteam' ),
		'context'      => array(
			array(
				'setting'    => 'tribe_events_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'tribe_events_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#inner-wrap .tribe_events-hero-section .entry-header',
				'property' => 'min-height',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => webapp()->default( 'tribe_events_title_height' ),
		'input_attrs'  => array(
			'min'     => array(
				'px'  => 10,
				'em'  => 1,
				'rem' => 1,
				'vh'  => 2,
			),
			'max'     => array(
				'px'  => 800,
				'em'  => 12,
				'rem' => 12,
				'vh'  => 100,
			),
			'step'    => array(
				'px'  => 1,
				'em'  => 0.01,
				'rem' => 0.01,
				'vh'  => 1,
			),
			'units'   => array( 'px', 'em', 'rem', 'vh' ),
		),
	),
	'tribe_events_title_elements' => array(
		'control_type' => 'base_sorter_control',
		'section'      => 'tribe_events_layout',
		'priority'     => 6,
		'default'      => webapp()->default( 'tribe_events_title_elements' ),
		'label'        => esc_html__( 'Title Elements', 'jmsiteam' ),
		'transport'    => 'refresh',
		'settings'     => array(
			'elements'    => 'tribe_events_title_elements',
			'title' => 'tribe_events_title_element_title',
			'back_link'  => 'tribe_events_title_element_back_link',
			'breadcrumb'  => 'tribe_events_title_element_breadcrumb',
		),
		'context'      => array(
			array(
				'setting'    => 'tribe_events_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'input_attrs'  => array(
			'group' => 'tribe_events_title_element',
		),
	),
	'tribe_events_title_font' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'tribe_events_layout_design',
		'label'        => esc_html__( 'Event Title Font', 'jmsiteam' ),
		'default'      => webapp()->default( 'tribe_events_title_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.tribe_events-title h1',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'tribe_events_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'input_attrs'  => array(
			'id'             => 'tribe_events_title_font',
			'headingInherit' => true,
		),
	),
	'tribe_events_title_breadcrumb_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'tribe_events_layout_design',
		'label'        => esc_html__( 'Breadcrumb Colors', 'jmsiteam' ),
		'default'      => webapp()->default( 'tribe_events_title_breadcrumb_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.tribe_events-title .base-breadcrumbs',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.tribe_events-title .base-breadcrumbs a:hover',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'hover',
			),
		),
		'input_attrs'  => array(
			'colors' => array(
				'color' => array(
					'tooltip' => __( 'Initial Color', 'jmsiteam' ),
					'palette' => true,
				),
				'hover' => array(
					'tooltip' => __( 'Link Hover Color', 'jmsiteam' ),
					'palette' => true,
				),
			),
		),
	),
	'tribe_events_title_breadcrumb_font' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'tribe_events_layout_design',
		'label'        => esc_html__( 'Breadcrumb Font', 'jmsiteam' ),
		'default'      => webapp()->default( 'tribe_events_title_breadcrumb_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.tribe_events-title .base-breadcrumbs',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'input_attrs'  => array(
			'id'      => 'tribe_events_title_breadcrumb_font',
			'options' => 'no-color',
		),
	),
	'tribe_events_title_back_link_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'tribe_events_layout_design',
		'label'        => esc_html__( 'Back Link Colors', 'jmsiteam' ),
		'default'      => webapp()->default( 'tribe_events_title_back_link_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.tribe_events-title .tribe-events-back a',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.tribe_events-title .tribe-events-back a:hover',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'hover',
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
	'tribe_events_title_back_link_font' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'tribe_events_layout_design',
		'label'        => esc_html__( 'Back Link Font', 'jmsiteam' ),
		'default'      => webapp()->default( 'tribe_events_title_back_link_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.tribe_events-title .tribe-events-back a',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'input_attrs'  => array(
			'id'      => 'tribe_events_title_back_link_font',
			'options' => 'no-color',
		),
	),
	'tribe_events_title_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'tribe_events_layout_design',
		'label'        => esc_html__( 'Event Above Area Background', 'jmsiteam' ),
		'default'      => webapp()->default( 'tribe_events_title_background' ),
		'context'      => array(
			array(
				'setting'    => 'tribe_events_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'tribe_events_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => '#inner-wrap .tribe_events-hero-section .entry-hero-container-inner',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip'  => __( 'Event Title Background', 'jmsiteam' ),
		),
	),
	'tribe_events_title_featured_image' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'tribe_events_layout_design',
		'default'      => webapp()->default( 'tribe_events_title_featured_image' ),
		'label'        => esc_html__( 'Use Featured Image for Background?', 'jmsiteam' ),
		'transport'    => 'refresh',
		'context'      => array(
			array(
				'setting'    => 'tribe_events_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'tribe_events_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
	),
	'tribe_events_title_overlay_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'tribe_events_layout_design',
		'label'        => esc_html__( 'Background Overlay Color', 'jmsiteam' ),
		'default'      => webapp()->default( 'tribe_events_title_overlay_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.tribe_events-hero-section .hero-section-overlay',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'color',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'tribe_events_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'tribe_events_title_layout',
				'operator'   => '=',
				'value'      => 'above',
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
	'tribe_events_title_border' => array(
		'control_type' => 'base_borders_control',
		'section'      => 'tribe_events_layout_design',
		'label'        => esc_html__( 'Border', 'jmsiteam' ),
		'default'      => webapp()->default( 'tribe_events_title_border' ),
		'context'      => array(
			array(
				'setting'    => 'tribe_events_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'tribe_events_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'settings'     => array(
			'border_top'    => 'tribe_events_title_top_border',
			'border_bottom' => 'tribe_events_title_bottom_border',
		),
		'live_method'     => array(
			'tribe_events_title_top_border' => array(
				array(
					'type'     => 'css_border',
					'selector' => '.tribe_events-hero-section .entry-hero-container-inner',
					'pattern'  => '$',
					'property' => 'border-top',
					'key'      => 'border',
				),
			),
			'tribe_events_title_bottom_border' => array( 
				array(
					'type'     => 'css_border',
					'selector' => '.tribe_events-hero-section .entry-hero-container-inner',
					'property' => 'border-bottom',
					'pattern'  => '$',
					'key'      => 'border',
				),
			),
		),
	),
	'info_tribe_events_layout' => array(
		'control_type' => 'base_title_control',
		'section'      => 'tribe_events_layout',
		'priority'     => 10,
		'label'        => esc_html__( 'Event Layout', 'jmsiteam' ),
		'settings'     => false,
	),
	'info_tribe_events_layout_design' => array(
		'control_type' => 'base_title_control',
		'section'      => 'tribe_events_layout_design',
		'priority'     => 10,
		'label'        => esc_html__( 'Event Layout', 'jmsiteam' ),
		'settings'     => false,
	),
	'tribe_events_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'tribe_events_layout',
		'label'        => esc_html__( 'Event Layout', 'jmsiteam' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => webapp()->default( 'tribe_events_layout' ),
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
			'responsive' => false,
			'class'      => 'base-three-col',
		),
	),
	'tribe_events_sidebar_id' => array(
		'control_type' => 'base_select_control',
		'section'      => 'tribe_events_layout',
		'label'        => esc_html__( 'Event Default Sidebar', 'jmsiteam' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => webapp()->default( 'tribe_events_sidebar_id' ),
		'input_attrs'  => array(
			'options' => webapp()->sidebar_options(),
		),
	),
	'tribe_events_content_style' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'tribe_events_layout',
		'label'        => esc_html__( 'Content Style', 'jmsiteam' ),
		'priority'     => 10,
		'default'      => webapp()->default( 'tribe_events_content_style' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single-tribe_events',
				'pattern'  => 'content-style-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'boxed' => array(
					'tooltip' => __( 'Boxed', 'jmsiteam' ),
					'icon' => 'boxed',
				),
				'unboxed' => array(
					'tooltip' => __( 'Unboxed', 'jmsiteam' ),
					'icon' => 'narrow',
				),
			),
			'responsive' => false,
			'class'      => 'base-two-col',
		),
	),
	'tribe_events_vertical_padding' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'tribe_events_layout',
		'label'        => esc_html__( 'Content Vertical Padding', 'jmsiteam' ),
		'priority'     => 10,
		'default'      => webapp()->default( 'tribe_events_vertical_padding' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single-tribe_events',
				'pattern'  => 'content-vertical-padding-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'show' => array(
					'name' => __( 'Enable', 'jmsiteam' ),
				),
				'hide' => array(
					'name' => __( 'Disable', 'jmsiteam' ),
				),
				'top' => array(
					'name' => __( 'Top Only', 'jmsiteam' ),
				),
				'bottom' => array(
					'name' => __( 'Bottom Only', 'jmsiteam' ),
				),
			),
			'responsive' => false,
			'class'      => 'base-two-grid',
		),
	),
	// 'tribe_events_feature' => array(
	// 	'control_type' => 'base_switch_control',
	// 	'sanitize'     => 'base_sanitize_toggle',
	// 	'section'      => 'tribe_events_layout',
	// 	'priority'     => 20,
	// 	'default'      => webapp()->default( 'tribe_events_feature' ),
	// 	'label'        => esc_html__( 'Show Featured Image?', 'jmsiteam' ),
	// 	'transport'    => 'refresh',
	// ),
	// 'tribe_events_feature_position' => array(
	// 	'control_type' => 'base_radio_icon_control',
	// 	'section'      => 'tribe_events_layout',
	// 	'label'        => esc_html__( 'Featured Image Position', 'jmsiteam' ),
	// 	'priority'     => 20,
	// 	'transport'    => 'refresh',
	// 	'default'      => webapp()->default( 'tribe_events_feature_position' ),
	// 	'context'      => array(
	// 		array(
	// 			'setting'    => 'tribe_events_feature',
	// 			'operator'   => '=',
	// 			'value'      => true,
	// 		),
	// 	),
	// 	'input_attrs'  => array(
	// 		'layout' => array(
	// 			'above' => array(
	// 				'name' => __( 'Above', 'jmsiteam' ),
	// 			),
	// 			'behind' => array(
	// 				'name' => __( 'Behind', 'jmsiteam' ),
	// 			),
	// 			'below' => array(
	// 				'name' => __( 'Below', 'jmsiteam' ),
	// 			),
	// 		),
	// 		'responsive' => false,
	// 	),
	// ),
	// 'tribe_events_feature_ratio' => array(
	// 	'control_type' => 'base_radio_icon_control',
	// 	'section'      => 'tribe_events_layout',
	// 	'label'        => esc_html__( 'Featured Image Ratio', 'jmsiteam' ),
	// 	'priority'     => 20,
	// 	'default'      => webapp()->default( 'tribe_events_feature_ratio' ),
	// 	'context'      => array(
	// 		array(
	// 			'setting'    => 'tribe_events_feature',
	// 			'operator'   => '=',
	// 			'value'      => true,
	// 		),
	// 	),
	// 	'live_method'     => array(
	// 		array(
	// 			'type'     => 'class',
	// 			'selector' => 'body.single-tribe_events .article-post-thumbnail',
	// 			'pattern'  => 'base-thumbnail-ratio-$',
	// 			'key'      => '',
	// 		),
	// 	),
	// 	'input_attrs'  => array(
	// 		'layout' => array(
	// 			'inherit' => array(
	// 				'name' => __( 'Inherit', 'jmsiteam' ),
	// 			),
	// 			'1-1' => array(
	// 				'name' => __( '1:1', 'jmsiteam' ),
	// 			),
	// 			'3-4' => array(
	// 				'name' => __( '4:3', 'jmsiteam' ),
	// 			),
	// 			'2-3' => array(
	// 				'name' => __( '3:2', 'jmsiteam' ),
	// 			),
	// 			'9-16' => array(
	// 				'name' => __( '16:9', 'jmsiteam' ),
	// 			),
	// 			'1-2' => array(
	// 				'name' => __( '2:1', 'jmsiteam' ),
	// 			),
	// 		),
	// 		'responsive' => false,
	// 		'class' => 'base-three-col-short',
	// 	),
	// ),
	'tribe_events_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'tribe_events_layout_design',
		'priority'     => 20,
		'label'        => esc_html__( 'Site Background', 'jmsiteam' ),
		'default'      => webapp()->default( 'tribe_events_background' ),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.single-tribe_events',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Event Background', 'jmsiteam' ),
		),
	),
	'tribe_events_content_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'tribe_events_layout_design',
		'priority'     => 20,
		'label'        => esc_html__( 'Content Background', 'jmsiteam' ),
		'default'      => webapp()->default( 'tribe_events_content_background' ),
		'live_method'  => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.single-tribe_events .content-bg, body.single-tribe_events.content-style-unboxed .site',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Event Content Background', 'jmsiteam' ),
		),
	),
);

Theme_Customizer::add_settings( $settings );

