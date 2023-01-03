<?php
/**
 * Topic Layout Options
 *
 * @package Base
 */

namespace Base;

use Base\Theme_Customizer;
use function Base\webapp;

$settings = array(
	'sfwd-topic_layout_tabs' => array(
		'control_type' => 'base_tab_control',
		'section'      => 'sfwd_topic_layout',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'jmsiteam' ),
				'target' => 'sfwd_topic_layout',
			),
			'design' => array(
				'label'  => __( 'Design', 'jmsiteam' ),
				'target' => 'sfwd_topic_layout_design',
			),
			'active' => 'general',
		),
	),
	'sfwd-topic_layout_tabs_design' => array(
		'control_type' => 'base_tab_control',
		'section'      => 'sfwd_topic_layout_design',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'jmsiteam' ),
				'target' => 'sfwd_topic_layout',
			),
			'design' => array(
				'label'  => __( 'Design', 'jmsiteam' ),
				'target' => 'sfwd_topic_layout_design',
			),
			'active' => 'design',
		),
	),
	'info_sfwd-topic_title' => array(
		'control_type' => 'base_title_control',
		'section'      => 'sfwd_topic_layout',
		'priority'     => 2,
		'label'        => esc_html__( 'Topic Title', 'jmsiteam' ),
		'settings'     => false,
	),
	'info_sfwd-topic_title_design' => array(
		'control_type' => 'base_title_control',
		'section'      => 'sfwd_topic_layout_design',
		'priority'     => 2,
		'label'        => esc_html__( 'Topic Title', 'jmsiteam' ),
		'settings'     => false,
	),
	'sfwd-topic_title' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'sfwd_topic_layout',
		'priority'     => 3,
		'default'      => webapp()->default( 'sfwd-topic_title' ),
		'label'        => esc_html__( 'Show Topic Title?', 'jmsiteam' ),
		'transport'    => 'refresh',
	),
	'sfwd-topic_title_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'sfwd_topic_layout',
		'label'        => esc_html__( 'Topic Title Layout', 'jmsiteam' ),
		'transport'    => 'refresh',
		'priority'     => 4,
		'default'      => webapp()->default( 'sfwd-topic_title_layout' ),
		'context'      => array(
			array(
				'setting'    => 'sfwd-topic_title',
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
	'sfwd-topic_title_inner_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'sfwd_topic_layout',
		'priority'     => 4,
		'default'      => webapp()->default( 'sfwd-topic_title_inner_layout' ),
		'label'        => esc_html__( 'Title Container Width', 'jmsiteam' ),
		'context'      => array(
			array(
				'setting'    => 'sfwd-topic_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'sfwd-topic_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.sfwd-topic-hero-section',
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
	'sfwd-topic_title_align' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'sfwd_topic_layout',
		'label'        => esc_html__( 'Topic Title Align', 'jmsiteam' ),
		'priority'     => 4,
		'default'      => webapp()->default( 'sfwd-topic_title_align' ),
		'context'      => array(
			array(
				'setting'    => 'sfwd-topic_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.sfwd-topic-title',
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
	'sfwd-topic_title_height' => array(
		'control_type' => 'base_range_control',
		'section'      => 'sfwd_topic_layout',
		'priority'     => 5,
		'label'        => esc_html__( 'Title Container Min Height', 'jmsiteam' ),
		'context'      => array(
			array(
				'setting'    => 'sfwd-topic_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'sfwd-topic_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#inner-wrap .sfwd-topic-hero-section .entry-header',
				'property' => 'min-height',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => webapp()->default( 'sfwd-topic_title_height' ),
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
	'sfwd-topic_title_elements' => array(
		'control_type' => 'base_sorter_control',
		'section'      => 'sfwd_topic_layout',
		'priority'     => 6,
		'default'      => webapp()->default( 'sfwd-topic_title_elements' ),
		'label'        => esc_html__( 'Title Elements', 'jmsiteam' ),
		'transport'    => 'refresh',
		'settings'     => array(
			'elements'    => 'sfwd-topic_title_elements',
			'title' => 'sfwd-topic_title_element_title',
			'breadcrumb'  => 'sfwd-topic_title_element_breadcrumb',
		),
		'context'      => array(
			array(
				'setting'    => 'sfwd-topic_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'input_attrs'  => array(
			'group' => 'sfwd-topic_title_element',
		),
	),
	'sfwd-topic_title_font' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'sfwd_topic_layout_design',
		'label'        => esc_html__( 'Topic Title Font', 'jmsiteam' ),
		'default'      => webapp()->default( 'sfwd-topic_title_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.sfwd-topic-title h1',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'sfwd-topic_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'input_attrs'  => array(
			'id'             => 'sfwd-topic_title_font',
			'headingInherit' => true,
		),
	),
	'sfwd-topic_title_breadcrumb_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'sfwd_topic_layout_design',
		'label'        => esc_html__( 'Breadcrumb Colors', 'jmsiteam' ),
		'default'      => webapp()->default( 'sfwd-topic_title_breadcrumb_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.sfwd-topic-title .base-breadcrumbs',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.sfwd-topic-title .base-breadcrumbs a:hover',
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
	'sfwd-topic_title_breadcrumb_font' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'sfwd_topic_layout_design',
		'label'        => esc_html__( 'Breadcrumb Font', 'jmsiteam' ),
		'default'      => webapp()->default( 'sfwd-topic_title_breadcrumb_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.sfwd-topic-title .base-breadcrumbs',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'input_attrs'  => array(
			'id'      => 'sfwd-topic_title_breadcrumb_font',
			'options' => 'no-color',
		),
	),
	'sfwd-topic_title_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'sfwd_topic_layout_design',
		'label'        => esc_html__( 'Topic Above Area Background', 'jmsiteam' ),
		'default'      => webapp()->default( 'sfwd-topic_title_background' ),
		'context'      => array(
			array(
				'setting'    => 'sfwd-topic_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'sfwd-topic_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => '#inner-wrap .sfwd-topic-hero-section .entry-hero-container-inner',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip'  => __( 'Topic Title Background', 'jmsiteam' ),
		),
	),
	'sfwd-topic_title_featured_image' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'sfwd_topic_layout_design',
		'default'      => webapp()->default( 'sfwd-topic_title_featured_image' ),
		'label'        => esc_html__( 'Use Featured Image for Background?', 'jmsiteam' ),
		'transport'    => 'refresh',
		'context'      => array(
			array(
				'setting'    => 'sfwd-topic_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'sfwd-topic_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
	),
	'sfwd-topic_title_overlay_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'sfwd_topic_layout_design',
		'label'        => esc_html__( 'Background Overlay Color', 'jmsiteam' ),
		'default'      => webapp()->default( 'sfwd-topic_title_overlay_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.sfwd-topic-hero-section .hero-section-overlay',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'color',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'sfwd-topic_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'sfwd-topic_title_layout',
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
	'sfwd-topic_title_border' => array(
		'control_type' => 'base_borders_control',
		'section'      => 'sfwd_topic_layout_design',
		'label'        => esc_html__( 'Border', 'jmsiteam' ),
		'default'      => webapp()->default( 'sfwd-topic_title_border' ),
		'context'      => array(
			array(
				'setting'    => 'sfwd-topic_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'sfwd-topic_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'settings'     => array(
			'border_top'    => 'sfwd-topic_title_top_border',
			'border_bottom' => 'sfwd-topic_title_bottom_border',
		),
		'live_method'     => array(
			'sfwd-topic_title_top_border' => array(
				array(
					'type'     => 'css_border',
					'selector' => '.sfwd-topic-hero-section .entry-hero-container-inner',
					'pattern'  => '$',
					'property' => 'border-top',
					'key'      => 'border',
				),
			),
			'sfwd-topic_title_bottom_border' => array( 
				array(
					'type'     => 'css_border',
					'selector' => '.sfwd-topic-hero-section .entry-hero-container-inner',
					'property' => 'border-bottom',
					'pattern'  => '$',
					'key'      => 'border',
				),
			),
		),
	),
	'info_sfwd-topic_layout' => array(
		'control_type' => 'base_title_control',
		'section'      => 'sfwd_topic_layout',
		'priority'     => 10,
		'label'        => esc_html__( 'Topic Layout', 'jmsiteam' ),
		'settings'     => false,
	),
	'info_sfwd-topic_layout_design' => array(
		'control_type' => 'base_title_control',
		'section'      => 'sfwd_topic_layout_design',
		'priority'     => 10,
		'label'        => esc_html__( 'Topic Layout', 'jmsiteam' ),
		'settings'     => false,
	),
	'sfwd-topic_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'sfwd_topic_layout',
		'label'        => esc_html__( 'Topic Layout', 'jmsiteam' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => webapp()->default( 'sfwd-topic_layout' ),
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
	'sfwd-topic_sidebar_id' => array(
		'control_type' => 'base_select_control',
		'section'      => 'sfwd_topic_layout',
		'label'        => esc_html__( 'Topic Default Sidebar', 'jmsiteam' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => webapp()->default( 'sfwd-topic_sidebar_id' ),
		'input_attrs'  => array(
			'options' => webapp()->sidebar_options(),
		),
	),
	'sfwd-topic_content_style' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'sfwd_topic_layout',
		'label'        => esc_html__( 'Content Style', 'jmsiteam' ),
		'priority'     => 10,
		'default'      => webapp()->default( 'sfwd-topic_content_style' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single-sfwd-topic',
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
	'sfwd-topic_vertical_padding' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'sfwd_topic_layout',
		'label'        => esc_html__( 'Content Vertical Padding', 'jmsiteam' ),
		'priority'     => 10,
		'default'      => webapp()->default( 'sfwd-topic_vertical_padding' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single-sfwd-topic',
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
	'sfwd-topic_feature' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'sfwd_topic_layout',
		'priority'     => 20,
		'default'      => webapp()->default( 'sfwd-topic_feature' ),
		'label'        => esc_html__( 'Show Featured Image?', 'jmsiteam' ),
		'transport'    => 'refresh',
	),
	'sfwd-topic_feature_position' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'sfwd_topic_layout',
		'label'        => esc_html__( 'Featured Image Position', 'jmsiteam' ),
		'priority'     => 20,
		'transport'    => 'refresh',
		'default'      => webapp()->default( 'sfwd-topic_feature_position' ),
		'context'      => array(
			array(
				'setting'    => 'sfwd-topic_feature',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'above' => array(
					'name' => __( 'Above', 'jmsiteam' ),
				),
				'behind' => array(
					'name' => __( 'Behind', 'jmsiteam' ),
				),
				'below' => array(
					'name' => __( 'Below', 'jmsiteam' ),
				),
			),
			'responsive' => false,
		),
	),
	'sfwd-topic_feature_ratio' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'sfwd_topic_layout',
		'label'        => esc_html__( 'Featured Image Ratio', 'jmsiteam' ),
		'priority'     => 20,
		'default'      => webapp()->default( 'sfwd-topic_feature_ratio' ),
		'context'      => array(
			array(
				'setting'    => 'sfwd-topic_feature',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single-sfwd-topic .article-post-thumbnail',
				'pattern'  => 'base-thumbnail-ratio-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'inherit' => array(
					'name' => __( 'Inherit', 'jmsiteam' ),
				),
				'1-1' => array(
					'name' => __( '1:1', 'jmsiteam' ),
				),
				'3-4' => array(
					'name' => __( '4:3', 'jmsiteam' ),
				),
				'2-3' => array(
					'name' => __( '3:2', 'jmsiteam' ),
				),
				'9-16' => array(
					'name' => __( '16:9', 'jmsiteam' ),
				),
				'1-2' => array(
					'name' => __( '2:1', 'jmsiteam' ),
				),
			),
			'responsive' => false,
			'class' => 'base-three-col-short',
		),
	),
	'sfwd-topic_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'sfwd_topic_layout_design',
		'label'        => esc_html__( 'Site Background', 'jmsiteam' ),
		'default'      => webapp()->default( 'sfwd-topic_background' ),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.single-sfwd-topic',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Topic Background', 'jmsiteam' ),
		),
	),
	'sfwd-topic_content_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'sfwd_topic_layout_design',
		'label'        => esc_html__( 'Content Background', 'jmsiteam' ),
		'default'      => webapp()->default( 'sfwd-topic_content_background' ),
		'live_method'  => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.single-sfwd-topic .content-bg, body.single-sfwd-topic.content-style-unboxed .site',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Topic Content Background', 'jmsiteam' ),
		),
	),
);

Theme_Customizer::add_settings( $settings );

