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
	'llms_membership_archive_tabs' => array(
		'control_type' => 'base_tab_control',
		'section'      => 'llms_membership_archive',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'jmsiteam' ),
				'target' => 'llms_membership_archive',
			),
			'design' => array(
				'label'  => __( 'Design', 'jmsiteam' ),
				'target' => 'llms_membership_archive_design',
			),
			'active' => 'general',
		),
	),
	'llms_membership_archive_tabs_design' => array(
		'control_type' => 'base_tab_control',
		'section'      => 'llms_membership_archive_design',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'jmsiteam' ),
				'target' => 'llms_membership_archive',
			),
			'design' => array(
				'label'  => __( 'Design', 'jmsiteam' ),
				'target' => 'llms_membership_archive_design',
			),
			'active' => 'design',
		),
	),
	'info_llms_membership_archive_title' => array(
		'control_type' => 'base_title_control',
		'section'      => 'llms_membership_archive',
		'priority'     => 2,
		'label'        => esc_html__( 'Archive Title', 'jmsiteam' ),
		'settings'     => false,
	),
	'info_llms_membership_archive_title_design' => array(
		'control_type' => 'base_title_control',
		'section'      => 'llms_membership_archive_design',
		'priority'     => 2,
		'label'        => esc_html__( 'Archive Title', 'jmsiteam' ),
		'settings'     => false,
	),
	'llms_membership_archive_title' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'llms_membership_archive',
		'priority'     => 3,
		'default'      => webapp()->default( 'llms_membership_archive_title' ),
		'label'        => esc_html__( 'Show Archive Title?', 'jmsiteam' ),
		'transport'    => 'refresh',
	),
	'llms_membership_archive_title_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'llms_membership_archive',
		'label'        => esc_html__( 'Archive Title Layout', 'jmsiteam' ),
		'transport'    => 'refresh',
		'priority'     => 4,
		'default'      => webapp()->default( 'llms_membership_archive_title_layout' ),
		'context'      => array(
			array(
				'setting'    => 'llms_membership_archive_title',
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
	'llms_membership_archive_title_inner_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'llms_membership_archive',
		'priority'     => 4,
		'default'      => webapp()->default( 'llms_membership_archive_title_inner_layout' ),
		'label'        => esc_html__( 'Container Width', 'jmsiteam' ),
		'context'      => array(
			array(
				'setting'    => 'llms_membership_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'llms_membership_archive_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.llms_membership-archive-hero-section',
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
	'llms_membership_archive_title_align' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'llms_membership_archive',
		'label'        => esc_html__( 'Membership Archive Title Align', 'jmsiteam' ),
		'priority'     => 4,
		'default'      => webapp()->default( 'llms_membership_archive_title_align' ),
		'context'      => array(
			array(
				'setting'    => 'llms_membership_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.llms_membership-archive-title',
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
	'llms_membership_archive_title_height' => array(
		'control_type' => 'base_range_control',
		'section'      => 'llms_membership_archive',
		'priority'     => 5,
		'label'        => esc_html__( 'Container Min Height', 'jmsiteam' ),
		'context'      => array(
			array(
				'setting'    => 'llms_membership_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'llms_membership_archive_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#inner-wrap .llms_membership-archive-hero-section .entry-header',
				'property' => 'min-height',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => webapp()->default( 'llms_membership_archive_title_height' ),
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
	'llms_membership_archive_title_elements' => array(
		'control_type' => 'base_sorter_control',
		'section'      => 'llms_membership_archive',
		'priority'     => 6,
		'default'      => webapp()->default( 'llms_membership_archive_title_elements' ),
		'label'        => esc_html__( 'Title Elements', 'jmsiteam' ),
		'transport'    => 'refresh',
		'settings'     => array(
			'elements'    => 'llms_membership_archive_title_elements',
			'title'       => 'llms_membership_archive_title_element_title',
			'breadcrumb'  => 'llms_membership_archive_title_element_breadcrumb',
			'description' => 'llms_membership_archive_title_element_description',
		),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
	),
	'llms_membership_archive_title_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'llms_membership_archive_design',
		'label'        => esc_html__( 'Title Color', 'jmsiteam' ),
		'default'      => webapp()->default( 'llms_membership_archive_title_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.llms_membership-archive-title h1',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
		),
		'input_attrs'  => array(
			'colors' => array(
				'color' => array(
					'tooltip' => __( 'Color', 'jmsiteam' ),
					'palette' => true,
				),
			),
		),
	),
	'llms_membership_archive_title_description_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'llms_membership_archive_design',
		'label'        => esc_html__( 'Description Colors', 'jmsiteam' ),
		'default'      => webapp()->default( 'llms_membership_archive_title_description_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.llms_membership-archive-title .archive-description',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.llms_membership-archive-title .archive-description a:hover',
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
	'llms_membership_archive_title_breadcrumb_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'llms_membership_archive_design',
		'label'        => esc_html__( 'Breadcrumb Colors', 'jmsiteam' ),
		'default'      => webapp()->default( 'llms_membership_archive_title_breadcrumb_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.llms_membership-archive-title .base-breadcrumbs',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.llms_membership-archive-title .base-breadcrumbs a:hover',
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
	'llms_membership_archive_title_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'llms_membership_archive_design',
		'label'        => esc_html__( 'Archive Title Background', 'jmsiteam' ),
		'default'      => webapp()->default( 'llms_membership_archive_title_background' ),
		'context'      => array(
			array(
				'setting'    => 'llms_membership_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'llms_membership_archive_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => '#inner-wrap .llms_membership-archive-hero-section .entry-hero-container-inner',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip'  => __( 'Membership Archive Title Background', 'jmsiteam' ),
		),
	),
	'llms_membership_archive_title_overlay_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'llms_membership_archive_design',
		'label'        => esc_html__( 'Background Overlay Color', 'jmsiteam' ),
		'default'      => webapp()->default( 'llms_membership_archive_title_overlay_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.llms_membership-archive-hero-section .hero-section-overlay',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'color',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'llms_membership_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'llms_membership_archive_title_layout',
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
	'llms_membership_archive_title_border' => array(
		'control_type' => 'base_borders_control',
		'section'      => 'llms_membership_archive_design',
		'label'        => esc_html__( 'Border', 'jmsiteam' ),
		'default'      => webapp()->default( 'llms_membership_archive_title_border' ),
		'context'      => array(
			array(
				'setting'    => 'llms_membership_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'llms_membership_archive_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'settings'     => array(
			'border_top'    => 'llms_membership_archive_title_top_border',
			'border_bottom' => 'llms_membership_archive_title_bottom_border',
		),
		'live_method'     => array(
			'llms_membership_archive_title_top_border' => array(
				array(
					'type'     => 'css_border',
					'selector' => '.llms_membership-archive-hero-section .entry-hero-container-inner',
					'pattern'  => '$',
					'property' => 'border-top',
					'key'      => 'border',
				),
			),
			'llms_membership_archive_title_bottom_border' => array( 
				array(
					'type'     => 'css_border',
					'selector' => '.llms_membership-archive-hero-section .entry-hero-container-inner',
					'property' => 'border-bottom',
					'pattern'  => '$',
					'key'      => 'border',
				),
			),
		),
	),
	'info_llms_membership_archive_layout' => array(
		'control_type' => 'base_title_control',
		'section'      => 'llms_membership_archive',
		'priority'     => 10,
		'label'        => esc_html__( 'Archive Layout', 'jmsiteam' ),
		'settings'     => false,
	),
	'info_llms_membership_archive_layout_design' => array(
		'control_type' => 'base_title_control',
		'section'      => 'llms_membership_archive_design',
		'priority'     => 10,
		'label'        => esc_html__( 'Archive Layout', 'jmsiteam' ),
		'settings'     => false,
	),
	'llms_membership_archive_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'llms_membership_archive',
		'label'        => esc_html__( 'Archive Layout', 'jmsiteam' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => webapp()->default( 'llms_membership_archive_layout' ),
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
	'llms_membership_archive_content_style' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'llms_membership_archive',
		'label'        => esc_html__( 'Content Style', 'jmsiteam' ),
		'priority'     => 10,
		'default'      => webapp()->default( 'llms_membership_archive_content_style' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.post-type-archive-llms_membership',
				'pattern'  => 'content-style-$',
				'key'      => '',
			),
			array(
				'type'     => 'class',
				'selector' => 'body.tax-membership_cat',
				'pattern'  => 'content-style-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'boxed' => array(
					'tooltip' => __( 'Boxed', 'jmsiteam' ),
					'icon' => 'gridBoxed',
				),
				'unboxed' => array(
					'tooltip' => __( 'Unboxed', 'jmsiteam' ),
					'icon' => 'gridUnboxed',
				),
			),
			'responsive' => false,
			'class'      => 'base-two-col',
		),
	),
	'llms_membership_archive_columns' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'llms_membership_archive',
		'priority'     => 20,
		'label'        => esc_html__( 'Membership Archive Columns', 'jmsiteam' ),
		'transport'    => 'refresh',
		'default'      => webapp()->default( 'llms_membership_archive_columns' ),
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
	'llms_membership_archive_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'llms_membership_archive_design',
		'label'        => esc_html__( 'Site Background', 'jmsiteam' ),
		'default'      => webapp()->default( 'llms_membership_archive_background' ),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.post-type-archive-llms_membership, body.tax-membership_cat',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Membership Archive Background', 'jmsiteam' ),
		),
	),
	'llms_membership_archive_content_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'llms_membership_archive_design',
		'label'        => esc_html__( 'Content Background', 'jmsiteam' ),
		'default'      => webapp()->default( 'llms_membership_archive_content_background' ),
		'live_method'  => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.post-type-archive-llms_membership .content-bg, body.tax-membership_cat .content-bg, body.tax-membership_cat.content-style-unboxed .site, body.post-type-archive-llms_membership.content-style-unboxed .site',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Archive Content Background', 'jmsiteam' ),
		),
	),
);

Theme_Customizer::add_settings( $settings );

