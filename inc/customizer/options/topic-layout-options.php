<?php
/**
 * Product Layout Options
 *
 * @package Base
 */

namespace Base;

use Base\Theme_Customizer;
use function Base\webapp;

Theme_Customizer::add_settings(
	array(
		'topic_layout_tabs' => array(
			'control_type' => 'base_tab_control',
			'section'      => 'topic_layout',
			'settings'     => false,
			'priority'     => 1,
			'input_attrs'  => array(
				'general' => array(
					'label'  => __( 'General', 'jmsiteam' ),
					'target' => 'topic_layout',
				),
				'design' => array(
					'label'  => __( 'Design', 'jmsiteam' ),
					'target' => 'topic_layout_design',
				),
				'active' => 'general',
			),
		),
		'topic_layout_tabs_design' => array(
			'control_type' => 'base_tab_control',
			'section'      => 'topic_layout_design',
			'settings'     => false,
			'priority'     => 1,
			'input_attrs'  => array(
				'general' => array(
					'label'  => __( 'General', 'jmsiteam' ),
					'target' => 'topic_layout',
				),
				'design' => array(
					'label'  => __( 'Design', 'jmsiteam' ),
					'target' => 'topic_layout_design',
				),
				'active' => 'design',
			),
		),
		'info_topic_title' => array(
			'control_type' => 'base_title_control',
			'section'      => 'topic_layout',
			'priority'     => 2,
			'label'        => esc_html__( 'Topic Title', 'jmsiteam' ),
			'settings'     => false,
		),
		'info_topic_title_design' => array(
			'control_type' => 'base_title_control',
			'section'      => 'topic_layout_design',
			'priority'     => 2,
			'label'        => esc_html__( 'Topic Title', 'jmsiteam' ),
			'settings'     => false,
		),
		'topic_title' => array(
			'control_type' => 'base_switch_control',
			'sanitize'     => 'base_sanitize_toggle',
			'section'      => 'topic_layout',
			'priority'     => 3,
			'default'      => webapp()->default( 'topic_title' ),
			'label'        => esc_html__( 'Show Topic Title?', 'jmsiteam' ),
			'transport'    => 'refresh',
		),
		'topic_title_layout' => array(
			'control_type' => 'base_radio_icon_control',
			'section'      => 'topic_layout',
			'label'        => esc_html__( 'Topic Title Layout', 'jmsiteam' ),
			'transport'    => 'refresh',
			'priority'     => 4,
			'default'      => webapp()->default( 'topic_title_layout' ),
			'context'      => array(
				array(
					'setting'    => 'topic_title',
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
		'topic_title_inner_layout' => array(
			'control_type' => 'base_radio_icon_control',
			'section'      => 'topic_layout',
			'priority'     => 4,
			'default'      => webapp()->default( 'topic_title_inner_layout' ),
			'label'        => esc_html__( 'Title Container Width', 'jmsiteam' ),
			'context'      => array(
				array(
					'setting'    => 'topic_title',
					'operator'   => '=',
					'value'      => true,
				),
				array(
					'setting'    => 'topic_title_layout',
					'operator'   => '=',
					'value'      => 'above',
				),
			),
			'live_method'     => array(
				array(
					'type'     => 'class',
					'selector' => '.topic-hero-section',
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
		'topic_title_align' => array(
			'control_type' => 'base_radio_icon_control',
			'section'      => 'topic_layout',
			'label'        => esc_html__( 'Topic Title Align', 'jmsiteam' ),
			'priority'     => 4,
			'default'      => webapp()->default( 'topic_title_align' ),
			'context'      => array(
				array(
					'setting'    => 'topic_title',
					'operator'   => '=',
					'value'      => true,
				),
			),
			'live_method'     => array(
				array(
					'type'     => 'class',
					'selector' => '.topic-title',
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
		'topic_title_height' => array(
			'control_type' => 'base_range_control',
			'section'      => 'topic_layout',
			'priority'     => 5,
			'label'        => esc_html__( 'Title Container Min Height', 'jmsiteam' ),
			'context'      => array(
				array(
					'setting'    => 'topic_title',
					'operator'   => '=',
					'value'      => true,
				),
				array(
					'setting'    => 'topic_title_layout',
					'operator'   => '=',
					'value'      => 'above',
				),
			),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '#inner-wrap .topic-hero-section .entry-header',
					'property' => 'min-height',
					'pattern'  => '$',
					'key'      => 'size',
				),
			),
			'default'      => webapp()->default( 'topic_title_height' ),
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
		'topic_title_elements' => array(
			'control_type' => 'base_sorter_control',
			'section'      => 'topic_layout',
			'priority'     => 6,
			'default'      => webapp()->default( 'topic_title_elements' ),
			'label'        => esc_html__( 'Title Elements', 'jmsiteam' ),
			'transport'    => 'refresh',
			'settings'     => array(
				'elements'    => 'topic_title_elements',
				'title'       => 'topic_title_element_title',
				'breadcrumb'  => 'topic_title_element_breadcrumb',
				'search'      => 'topic_title_element_search',
				'info'        => 'topic_title_element_info',
			),
			'context'      => array(
				array(
					'setting'    => 'topic_title',
					'operator'   => '=',
					'value'      => true,
				),
			),
			'input_attrs'  => array(
				'group' => 'topic_title_element',
			),
		),
		'topic_title_font' => array(
			'control_type' => 'base_typography_control',
			'section'      => 'topic_layout_design',
			'label'        => esc_html__( 'Topic Title Font', 'jmsiteam' ),
			'default'      => webapp()->default( 'topic_title_font' ),
			'live_method'     => array(
				array(
					'type'     => 'css_typography',
					'selector' => '.topic-title h1',
					'property' => 'font',
					'key'      => 'typography',
				),
			),
			'context'      => array(
				array(
					'setting'    => 'topic_title',
					'operator'   => '=',
					'value'      => true,
				),
			),
			'input_attrs'  => array(
				'id'             => 'topic_title_font',
				'headingInherit' => true,
			),
		),
		'topic_title_search_width' => array(
			'control_type' => 'base_range_control',
			'section'      => 'topic_layout_design',
			'label'        => esc_html__( 'Search Bar Width', 'jmsiteam' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.topic-title .bbp-search-form',
					'property' => 'width',
					'pattern'  => '$',
					'key'      => 'size',
				),
			),
			'default'      => webapp()->default( 'topic_title_search_width' ),
			'input_attrs'  => array(
				'min'        => array(
					'px'  => 100,
					'em'  => 4,
					'rem' => 4,
				),
				'max'        => array(
					'px'  => 600,
					'em'  => 12,
					'rem' => 12,
				),
				'step'       => array(
					'px'  => 1,
					'em'  => 0.01,
					'rem' => 0.01,
				),
				'units'      => array( 'px', 'em', 'rem' ),
				'responsive' => false,
			),
		),
		'topic_title_search_color' => array(
			'control_type' => 'base_color_control',
			'section'      => 'topic_layout_design',
			'label'        => esc_html__( 'Input Text Colors', 'jmsiteam' ),
			'default'      => webapp()->default( 'topic_title_search_color' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.topic-title .bbp-search-form input.search-field, .topic-title .bbp-search-form .base-search-icon-wrap',
					'property' => 'color',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '.topic-title .bbp-search-form input.search-field:focus, .topic-title .bbp-search-form input.search-submit:hover ~ .base-search-icon-wrap',
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
						'tooltip' => __( 'Focus Color', 'jmsiteam' ),
						'palette' => true,
					),
				),
			),
		),
		'topic_title_search_background' => array(
			'control_type' => 'base_color_control',
			'section'      => 'topic_layout_design',
			'label'        => esc_html__( 'Input Background', 'jmsiteam' ),
			'default'      => webapp()->default( 'topic_title_search_background' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.topic-title .bbp-search-form input.search-field',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '.topic-title .bbp-search-form input.search-field:focus',
					'property' => 'background',
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
						'tooltip' => __( 'Focus Color', 'jmsiteam' ),
						'palette' => true,
					),
				),
			),
		),
		'topic_title_search_border' => array(
			'control_type' => 'base_border_control',
			'section'      => 'topic_layout_design',
			'label'        => esc_html__( 'Border', 'jmsiteam' ),
			'default'      => webapp()->default( 'topic_title_search_border' ),
			'live_method'     => array(
				array(
					'type'     => 'css_border',
					'selector' => '.topic-title .bbp-search-form input.search-field',
					'pattern'  => '$',
					'property' => 'border',
					'pattern'  => '$',
					'key'      => 'border',
				),
			),
			'input_attrs'  => array(
				'responsive' => false,
				'color'      => false,
			),
		),
		'topic_title_search_border_color' => array(
			'control_type' => 'base_color_control',
			'section'      => 'topic_layout_design',
			'label'        => esc_html__( 'Input Border Color', 'jmsiteam' ),
			'default'      => webapp()->default( 'topic_title_search_border_color' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.topic-title .bbp-search-form input.search-field',
					'property' => 'border-color',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '.topic-title .bbp-search-form input.search-field:focus',
					'property' => 'border-color',
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
						'tooltip' => __( 'Focus Color', 'jmsiteam' ),
						'palette' => true,
					),
				),
			),
		),
		'topic_title_search_typography' => array(
			'control_type' => 'base_typography_control',
			'section'      => 'topic_layout_design',
			'label'        => esc_html__( 'Font', 'jmsiteam' ),
			'default'      => webapp()->default( 'topic_title_search_typography' ),
			'live_method'     => array(
				array(
					'type'     => 'css_typography',
					'selector' => '.topic-title .bbp-search-form input.search-field',
					'pattern'  => array(
						'desktop' => '$',
						'tablet'  => '$',
						'mobile'  => '$',
					),
					'property' => 'font',
					'key'      => 'typography',
				),
			),
			'input_attrs'  => array(
				'id' => 'topic_title_search_typography',
				'options' => 'no-color',
			),
		),
		'topic_title_search_margin' => array(
			'control_type' => 'base_measure_control',
			'section'      => 'topic_layout_design',
			'default'      => webapp()->default( 'topic_title_search_margin' ),
			'label'        => esc_html__( 'Margin', 'jmsiteam' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.topic-title .bbp-search-form form',
					'property' => 'margin',
					'pattern'  => '$',
					'key'      => 'measure',
				),
			),
			'input_attrs'  => array(
				'responsive' => false,
			),
		),
		'topic_title_breadcrumb_color' => array(
			'control_type' => 'base_color_control',
			'section'      => 'topic_layout_design',
			'label'        => esc_html__( 'Breadcrumb Colors', 'jmsiteam' ),
			'default'      => webapp()->default( 'topic_title_breadcrumb_color' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.topic-title .base-breadcrumbs',
					'property' => 'color',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '.topic-title .base-breadcrumbs a:hover',
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
		'topic_title_breadcrumb_font' => array(
			'control_type' => 'base_typography_control',
			'section'      => 'topic_layout_design',
			'label'        => esc_html__( 'Breadcrumb Font', 'jmsiteam' ),
			'default'      => webapp()->default( 'topic_title_breadcrumb_font' ),
			'live_method'     => array(
				array(
					'type'     => 'css_typography',
					'selector' => '.topic-title .base-breadcrumbs',
					'property' => 'font',
					'key'      => 'typography',
				),
			),
			'input_attrs'  => array(
				'id'      => 'topic_title_breadcrumb_font',
				'options' => 'no-color',
			),
		),
		'topic_title_info_color' => array(
			'control_type' => 'base_color_control',
			'section'      => 'topic_layout_design',
			'label'        => esc_html__( 'Info Colors', 'jmsiteam' ),
			'default'      => webapp()->default( 'topic_title_info_color' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.wp-site-blocks .topic-title .bbpress-topic-meta',
					'property' => 'color',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '.wp-site-blocks .topic-title .bbpress-topic-meta a:hover',
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
		'topic_title_info_font' => array(
			'control_type' => 'base_typography_control',
			'section'      => 'topic_layout_design',
			'label'        => esc_html__( 'Meta Font', 'jmsiteam' ),
			'default'      => webapp()->default( 'topic_title_info_font' ),
			'live_method'     => array(
				array(
					'type'     => 'css_typography',
					'selector' => '.topic-title .bbpress-topic-meta',
					'property' => 'font',
					'key'      => 'typography',
				),
			),
			'input_attrs'  => array(
				'id'      => 'topic_title_info_font',
				'options' => 'no-color',
			),
		),
		'topic_title_background' => array(
			'control_type' => 'base_background_control',
			'section'      => 'topic_layout_design',
			'label'        => esc_html__( 'Forum Above Area Background', 'jmsiteam' ),
			'default'      => webapp()->default( 'topic_title_background' ),
			'context'      => array(
				array(
					'setting'    => 'topic_title',
					'operator'   => '=',
					'value'      => true,
				),
				array(
					'setting'    => 'topic_title_layout',
					'operator'   => '=',
					'value'      => 'above',
				),
			),
			'live_method'     => array(
				array(
					'type'     => 'css_background',
					'selector' => '#inner-wrap .topic-hero-section .entry-hero-container-inner',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'base',
				),
			),
			'input_attrs'  => array(
				'tooltip'  => __( 'Topic Title Background', 'jmsiteam' ),
			),
		),
		'topic_title_overlay_color' => array(
			'control_type' => 'base_color_control',
			'section'      => 'topic_layout_design',
			'label'        => esc_html__( 'Background Overlay Color', 'jmsiteam' ),
			'default'      => webapp()->default( 'topic_title_overlay_color' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.topic-hero-section .hero-section-overlay',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'color',
				),
			),
			'context'      => array(
				array(
					'setting'    => 'topic_title',
					'operator'   => '=',
					'value'      => true,
				),
				array(
					'setting'    => 'topic_title_layout',
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
		'topic_title_border' => array(
			'control_type' => 'base_borders_control',
			'section'      => 'topic_layout_design',
			'label'        => esc_html__( 'Border', 'jmsiteam' ),
			'default'      => webapp()->default( 'topic_title_border' ),
			'context'      => array(
				array(
					'setting'    => 'topic_title',
					'operator'   => '=',
					'value'      => true,
				),
				array(
					'setting'    => 'topic_title_layout',
					'operator'   => '=',
					'value'      => 'above',
				),
			),
			'settings'     => array(
				'border_top'    => 'topic_title_top_border',
				'border_bottom' => 'topic_title_bottom_border',
			),
			'live_method'     => array(
				'topic_title_top_border' => array(
					array(
						'type'     => 'css_border',
						'selector' => '.topic-hero-section .entry-hero-container-inner',
						'pattern'  => '$',
						'property' => 'border-top',
						'key'      => 'border',
					),
				),
				'topic_title_bottom_border' => array( 
					array(
						'type'     => 'css_border',
						'selector' => '.topic-hero-section .entry-hero-container-inner',
						'property' => 'border-bottom',
						'pattern'  => '$',
						'key'      => 'border',
					),
				),
			),
		),
		'info_topic_layout' => array(
			'control_type' => 'base_title_control',
			'section'      => 'topic_layout',
			'priority'     => 10,
			'label'        => esc_html__( 'Topic Layout', 'jmsiteam' ),
			'settings'     => false,
		),
		'info_topic_layout_design' => array(
			'control_type' => 'base_title_control',
			'section'      => 'topic_layout_design',
			'priority'     => 10,
			'label'        => esc_html__( 'Topic Layout', 'jmsiteam' ),
			'settings'     => false,
		),
		'topic_layout' => array(
			'control_type' => 'base_radio_icon_control',
			'section'      => 'topic_layout',
			'label'        => esc_html__( 'Topic Layout', 'jmsiteam' ),
			'transport'    => 'refresh',
			'priority'     => 10,
			'default'      => webapp()->default( 'topic_layout' ),
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
		'topic_sidebar_id' => array(
			'control_type' => 'base_select_control',
			'section'      => 'topic_layout',
			'label'        => esc_html__( 'Topic Default Sidebar', 'jmsiteam' ),
			'transport'    => 'refresh',
			'priority'     => 10,
			'default'      => webapp()->default( 'topic_sidebar_id' ),
			'input_attrs'  => array(
				'options' => webapp()->sidebar_options(),
			),
		),
		'topic_content_style' => array(
			'control_type' => 'base_radio_icon_control',
			'section'      => 'topic_layout',
			'label'        => esc_html__( 'Content Style', 'jmsiteam' ),
			'priority'     => 10,
			'default'      => webapp()->default( 'topic_content_style' ),
			'live_method'     => array(
				array(
					'type'     => 'class',
					'selector' => 'body.single-topic',
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
		'topic_vertical_padding' => array(
			'control_type' => 'base_radio_icon_control',
			'section'      => 'topic_layout',
			'label'        => esc_html__( 'Content Vertical Padding', 'jmsiteam' ),
			'priority'     => 10,
			'default'      => webapp()->default( 'topic_vertical_padding' ),
			'live_method'     => array(
				array(
					'type'     => 'class',
					'selector' => 'body.single-forum',
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
		'topic_background' => array(
			'control_type' => 'base_background_control',
			'section'      => 'topic_layout_design',
			'priority'     => 20,
			'label'        => esc_html__( 'Site Background', 'jmsiteam' ),
			'default'      => webapp()->default( 'topic_background' ),
			'live_method'     => array(
				array(
					'type'     => 'css_background',
					'selector' => 'body.single-topic',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'base',
				),
			),
			'input_attrs'  => array(
				'tooltip' => __( 'Topic Background', 'jmsiteam' ),
			),
		),
		'topic_content_background' => array(
			'control_type' => 'base_background_control',
			'section'      => 'topic_layout_design',
			'priority'     => 20,
			'label'        => esc_html__( 'Content Background', 'jmsiteam' ),
			'default'      => webapp()->default( 'topic_content_background' ),
			'live_method'  => array(
				array(
					'type'     => 'css_background',
					'selector' => 'body.single-topic .content-bg, body.single-topic.content-style-unboxed .site',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'base',
				),
			),
			'input_attrs'  => array(
				'tooltip' => __( 'Topic Content Background', 'jmsiteam' ),
			),
		),
	)
);

