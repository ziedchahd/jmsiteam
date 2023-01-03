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
	'product_archive_tabs' => array(
		'control_type' => 'base_tab_control',
		'section'      => 'woocommerce_product_catalog',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'jmsiteam' ),
				'target' => 'woocommerce_product_catalog',
			),
			'design' => array(
				'label'  => __( 'Design', 'jmsiteam' ),
				'target' => 'woocommerce_product_catalog_design',
			),
			'active' => 'general',
		),
	),
	'product_archive_tabs_design' => array(
		'control_type' => 'base_tab_control',
		'section'      => 'woocommerce_product_catalog_design',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'jmsiteam' ),
				'target' => 'woocommerce_product_catalog',
			),
			'design' => array(
				'label'  => __( 'Design', 'jmsiteam' ),
				'target' => 'woocommerce_product_catalog_design',
			),
			'active' => 'design',
		),
	),
	'info_product_archive_title' => array(
		'control_type' => 'base_title_control',
		'section'      => 'woocommerce_product_catalog',
		'priority'     => 2,
		'label'        => esc_html__( 'Archive Title', 'jmsiteam' ),
		'settings'     => false,
	),
	'info_product_archive_title_design' => array(
		'control_type' => 'base_title_control',
		'section'      => 'woocommerce_product_catalog_design',
		'priority'     => 2,
		'label'        => esc_html__( 'Archive Title', 'jmsiteam' ),
		'settings'     => false,
	),
	'product_archive_title' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'woocommerce_product_catalog',
		'priority'     => 3,
		'default'      => webapp()->default( 'product_archive_title' ),
		'label'        => esc_html__( 'Show Archive Title?', 'jmsiteam' ),
		'transport'    => 'refresh',
	),
	'product_archive_title_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'woocommerce_product_catalog',
		'label'        => esc_html__( 'Archive Title Layout', 'jmsiteam' ),
		'transport'    => 'refresh',
		'priority'     => 4,
		'default'      => webapp()->default( 'product_archive_title_layout' ),
		'context'      => array(
			array(
				'setting'    => 'product_archive_title',
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
	'product_archive_title_inner_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'woocommerce_product_catalog',
		'priority'     => 4,
		'default'      => webapp()->default( 'product_archive_title_inner_layout' ),
		'label'        => esc_html__( 'Container Width', 'jmsiteam' ),
		'context'      => array(
			array(
				'setting'    => 'product_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'product_archive_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.product-archive-hero-section',
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
	'product_archive_title_align' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'woocommerce_product_catalog',
		'label'        => esc_html__( 'Product Archive Title Align', 'jmsiteam' ),
		'priority'     => 4,
		'default'      => webapp()->default( 'product_archive_title_align' ),
		'context'      => array(
			array(
				'setting'    => 'product_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.product-archive-title',
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
	'product_archive_title_height' => array(
		'control_type' => 'base_range_control',
		'section'      => 'woocommerce_product_catalog',
		'priority'     => 5,
		'label'        => esc_html__( 'Container Min Height', 'jmsiteam' ),
		'context'      => array(
			array(
				'setting'    => 'product_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'product_archive_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#inner-wrap .product-archive-hero-section .entry-header',
				'property' => 'min-height',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => webapp()->default( 'product_archive_title_height' ),
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
	'product_archive_title_elements' => array(
		'control_type' => 'base_sorter_control',
		'section'      => 'woocommerce_product_catalog',
		'priority'     => 6,
		'default'      => webapp()->default( 'product_archive_title_elements' ),
		'label'        => esc_html__( 'Title Elements', 'jmsiteam' ),
		'transport'    => 'refresh',
		'settings'     => array(
			'elements'    => 'product_archive_title_elements',
			'title'       => 'product_archive_title_element_title',
			'breadcrumb'  => 'product_archive_title_element_breadcrumb',
			'description' => 'product_archive_title_element_description',
		),
	),
	'product_archive_title_heading_font' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'woocommerce_product_catalog_design',
		'label'        => esc_html__( 'Title Font', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_archive_title_heading_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.product-archive-title h1',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'input_attrs'  => array(
			'id'      => 'product_archive_title_heading_font',
			'options' => 'no-color',
		),
	),
	'product_archive_title_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'woocommerce_product_catalog_design',
		'label'        => esc_html__( 'Title Color', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_archive_title_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.product-archive-title h1',
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
	'product_archive_title_description_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'woocommerce_product_catalog_design',
		'label'        => esc_html__( 'Description Colors', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_archive_title_description_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.product-archive-title .archive-description',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.product-archive-title .archive-description a:hover',
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
	'product_archive_title_breadcrumb_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'woocommerce_product_catalog_design',
		'label'        => esc_html__( 'Breadcrumb Colors', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_archive_title_breadcrumb_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.product-archive-title .base-breadcrumbs',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.product-archive-title .base-breadcrumbs a:hover',
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
	'product_archive_title_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'woocommerce_product_catalog_design',
		'label'        => esc_html__( 'Archive Title Background', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_archive_title_background' ),
		'context'      => array(
			array(
				'setting'    => 'product_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'product_archive_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => '#inner-wrap .product-archive-hero-section .entry-hero-container-inner',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip'  => __( 'Product Archive Title Background', 'jmsiteam' ),
		),
	),
	'product_archive_title_overlay_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'woocommerce_product_catalog_design',
		'label'        => esc_html__( 'Background Overlay Color', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_archive_title_overlay_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.product-archive-hero-section .hero-section-overlay',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'color',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'product_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'product_archive_title_layout',
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
	'product_archive_title_border' => array(
		'control_type' => 'base_borders_control',
		'section'      => 'woocommerce_product_catalog_design',
		'label'        => esc_html__( 'Border', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_archive_title_border' ),
		'context'      => array(
			array(
				'setting'    => 'product_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'product_archive_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'settings'     => array(
			'border_top'    => 'product_archive_title_top_border',
			'border_bottom' => 'product_archive_title_bottom_border',
		),
		'live_method'     => array(
			'product_archive_title_top_border' => array(
				array(
					'type'     => 'css_border',
					'selector' => '.product-archive-hero-section .entry-hero-container-inner',
					'pattern'  => '$',
					'property' => 'border-top',
					'key'      => 'border',
				),
			),
			'product_archive_title_bottom_border' => array( 
				array(
					'type'     => 'css_border',
					'selector' => '.product-archive-hero-section .entry-hero-container-inner',
					'property' => 'border-bottom',
					'pattern'  => '$',
					'key'      => 'border',
				),
			),
		),
	),
	'info_product_archive_layout' => array(
		'control_type' => 'base_title_control',
		'section'      => 'woocommerce_product_catalog',
		'priority'     => 7,
		'label'        => esc_html__( 'Archive Layout', 'jmsiteam' ),
		'settings'     => false,
	),
	'info_product_archive_layout_design' => array(
		'control_type' => 'base_title_control',
		'section'      => 'woocommerce_product_catalog_design',
		'priority'     => 10,
		'label'        => esc_html__( 'Archive Layout', 'jmsiteam' ),
		'settings'     => false,
	),
	'product_archive_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'woocommerce_product_catalog',
		'label'        => esc_html__( 'Archive Layout', 'jmsiteam' ),
		'transport'    => 'refresh',
		'priority'     => 7,
		'default'      => webapp()->default( 'product_archive_layout' ),
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
	'product_archive_sidebar_id' => array(
		'control_type' => 'base_select_control',
		'section'      => 'woocommerce_product_catalog',
		'label'        => esc_html__( 'Product Archive Default Sidebar', 'jmsiteam' ),
		'transport'    => 'refresh',
		'priority'     => 7,
		'default'      => webapp()->default( 'product_archive_sidebar_id' ),
		'input_attrs'  => array(
			'options' => webapp()->sidebar_options(),
		),
	),
	'product_archive_content_style' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'woocommerce_product_catalog',
		'priority'     => 7,
		'label'        => esc_html__( 'Content Style', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_archive_content_style' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.post-type-archive-product',
				'pattern'  => 'content-style-$',
				'key'      => '',
			),
			array(
				'type'     => 'class',
				'selector' => 'body.tax-product_cat',
				'pattern'  => 'content-style-$',
				'key'      => '',
			),
			array(
				'type'     => 'class',
				'selector' => 'body.tax-product_tag',
				'pattern'  => 'content-style-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'boxed' => array(
					'tooltip' => __( 'Boxed', 'jmsiteam' ),
					'icon'    => 'gridBoxed',
				),
				'unboxed' => array(
					'tooltip' => __( 'Unboxed', 'jmsiteam' ),
					'icon'    => 'gridUnboxed',
				),
			),
			'responsive' => false,
			'class'      => 'base-two-col',
		),
	),
	'product_archive_show_results_count' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'woocommerce_product_catalog',
		'priority'     => 7,
		'default'      => webapp()->default( 'product_archive_show_results_count' ),
		'label'        => esc_html__( 'Show Archive Results Count?', 'jmsiteam' ),
		'transport'    => 'refresh',
	),
	'product_archive_show_order' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'woocommerce_product_catalog',
		'priority'     => 7,
		'default'      => webapp()->default( 'product_archive_show_order' ),
		'label'        => esc_html__( 'Show Archive Sorting Dropdown?', 'jmsiteam' ),
		'transport'    => 'refresh',
	),
	'product_archive_toggle' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'woocommerce_product_catalog',
		'priority'     => 7,
		'default'      => webapp()->default( 'product_archive_toggle' ),
		'label'        => esc_html__( 'Show Archive Grid/List Toggle?', 'jmsiteam' ),
		'transport'    => 'refresh',
	),
	'product_archive_image_hover_switch' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'woocommerce_product_catalog',
		'priority'     => 7,
		'transport'    => 'refresh',
		'label'        => esc_html__( 'Product Image Hover Switch', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_archive_image_hover_switch' ),
		'input_attrs'  => array(
			'layout' => array(
				'none' => array(
					'tooltip' => __( 'None', 'jmsiteam' ),
					'name' => __( 'None', 'jmsiteam' ),
				),
				'fade' => array(
					'tooltip' => __( 'Fade to second image', 'jmsiteam' ),
					'name' => __( 'Fade', 'jmsiteam' ),
				),
				'slide' => array(
					'tooltip' => __( 'Slide to second image', 'jmsiteam' ),
					'name' => __( 'Slide', 'jmsiteam' ),
				),
				'zoom' => array(
					'tooltip' => __( 'Zoom into second image', 'jmsiteam' ),
					'name' => __( 'Zoom', 'jmsiteam' ),
				),
				'flip' => array(
					'tooltip' => __( 'Flip to second image', 'jmsiteam' ),
					'name' => __( 'Flip', 'jmsiteam' ),
				),
			),
			'responsive' => false,
			'class'      => 'base-three-col base-auto-height',
		),
	),
	'product_archive_style' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'woocommerce_product_catalog',
		'priority'     => 7,
		'transport'    => 'refresh',
		'label'        => esc_html__( 'Button Action Style', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_archive_style' ),
		'input_attrs'  => array(
			'layout' => array(
				'action-on-hover' => array(
					'tooltip' => __( 'Slide up on hover', 'jmsiteam' ),
					'name' => __( 'Bottom Slide Up', 'jmsiteam' ),
				),
				'action-visible' => array(
					'tooltip' => __( 'On the Bottom Always Visible', 'jmsiteam' ),
					'name' => __( 'Always Visible', 'jmsiteam' ),
				),
			),
			'responsive' => false,
			'class'      => 'base-tiny-text',
		),
	),
	'product_archive_button_style' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'woocommerce_product_catalog',
		'priority'     => 7,
		'transport'    => 'refresh',
		'label'        => esc_html__( 'Button Style', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_archive_button_style' ),
		'input_attrs'  => array(
			'layout' => array(
				'text' => array(
					'tooltip' => __( 'Bold text with arrow icon.', 'jmsiteam' ),
					'name' => __( 'Text with Arrow', 'jmsiteam' ),
				),
				'button' => array(
					'tooltip' => __( 'Show as standard button', 'jmsiteam' ),
					'name' => __( 'Button', 'jmsiteam' ),
				),
			),
			'responsive' => false,
			'class'      => 'base-tiny-text',
		),
	),
	'product_archive_button_align' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'woocommerce_product_catalog',
		'priority'     => 7,
		'default'      => webapp()->default( 'product_archive_button_align' ),
		'label'        => esc_html__( 'Align Button at Bottom?', 'jmsiteam' ),
		'transport'    => 'refresh',
	),
	'product_archive_mobile_columns' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'woocommerce_product_catalog',
		'priority'     => 15,
		'transport'    => 'refresh',
		'label'        => esc_html__( 'Mobile Columns Layout', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_archive_mobile_columns' ),
		'input_attrs'  => array(
			'layout' => array(
				'default' => array(
					'tooltip' => '',
					'name' => __( 'One Column', 'jmsiteam' ),
				),
				'twocolumn' => array(
					'tooltip' => '',
					'name' => __( 'Two Columns', 'jmsiteam' ),
				),
			),
			'responsive' => false,
			'class'      => 'base-tiny-text',
		),
	),
	'product_archive_title_font' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'woocommerce_product_catalog_design',
		'label'        => esc_html__( 'Product Archive Title Font', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_archive_title_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.woocommerce ul.products li.product h3, .woocommerce ul.products li.product .product-details .woocommerce-loop-product__title, .woocommerce ul.products li.product .product-details .woocommerce-loop-category__title, .wc-block-grid__products .wc-block-grid__product .wc-block-grid__product-title',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'input_attrs'  => array(
			'id'             => 'product_archive_title_font',
		),
	),
	'product_archive_price_font' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'woocommerce_product_catalog_design',
		'label'        => esc_html__( 'Product Archive Price Font', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_archive_price_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.woocommerce ul.products li.product .product-details .price',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'input_attrs'  => array(
			'id'             => 'product_archive_price_font',
		),
	),
	'product_archive_button_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'woocommerce_product_catalog_design',
		'label'        => esc_html__( 'Product Archive Button Colors', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_archive_button_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.woocommerce ul.products.woo-archive-btn-button .product-action-wrap .button',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.woocommerce ul.products.woo-archive-btn-button .product-action-wrap .button:hover',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'hover',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'product_archive_button_style',
				'operator'   => '=',
				'value'      => 'button',
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
	'product_archive_button_background' => array(
		'control_type' => 'base_color_control',
		'section'      => 'woocommerce_product_catalog_design',
		'label'        => esc_html__( 'Product Archive Button Background Colors', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_archive_button_background' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.woocommerce ul.products.woo-archive-btn-button .product-action-wrap .button',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.woocommerce ul.products.woo-archive-btn-button .product-action-wrap .button:hover',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'hover',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'product_archive_button_style',
				'operator'   => '=',
				'value'      => 'button',
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
	'product_archive_button_border_colors' => array(
		'control_type' => 'base_color_control',
		'section'      => 'woocommerce_product_catalog_design',
		'label'        => esc_html__( 'Product Archive Button Border Colors', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_archive_button_border' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.woocommerce ul.products.woo-archive-btn-button .product-action-wrap .button',
				'property' => 'border-color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.woocommerce ul.products.woo-archive-btn-button .product-action-wrap .button:hover',
				'property' => 'border-color',
				'pattern'  => '$',
				'key'      => 'hover',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'product_archive_button_style',
				'operator'   => '=',
				'value'      => 'button',
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
	'product_archive_button_border' => array(
		'control_type' => 'base_border_control',
		'section'      => 'woocommerce_product_catalog_design',
		'label'        => esc_html__( 'Product Archive Button Border', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_archive_button_border' ),
		'live_method'     => array(
			array(
				'type'     => 'css_border',
				'selector' => '.woocommerce ul.products.woo-archive-btn-button .product-action-wrap .button',
				'property' => 'border',
				'pattern'  => '$',
				'key'      => 'border',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'product_archive_button_style',
				'operator'   => '=',
				'value'      => 'button',
			),
		),
		'input_attrs'  => array(
			'responsive' => false,
			'color'      => false,
		),
	),
	'product_archive_button_radius' => array(
		'control_type' => 'base_measure_control',
		'section'      => 'woocommerce_product_catalog_design',
		'priority'     => 10,
		'default'      => webapp()->default( 'product_archive_button_radius' ),
		'label'        => esc_html__( 'Product Archive Button Border Radius', 'jmsiteam' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.woocommerce ul.products.woo-archive-btn-button .product-action-wrap .button',
				'property' => 'border-radius',
				'pattern'  => '$',
				'key'      => 'measure',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'product_archive_button_style',
				'operator'   => '=',
				'value'      => 'button',
			),
		),
		'input_attrs'  => array(
			'responsive' => false,
		),
	),
	'product_archive_button_typography' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'woocommerce_product_catalog_design',
		'label'        => esc_html__( 'Product Archive Button Font', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_archive_button_typography' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.woocommerce ul.products.woo-archive-btn-button .product-action-wrap .button',
				'pattern'  => array(
					'desktop' => '$',
					'tablet'  => '$',
					'mobile'  => '$',
				),
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'product_archive_button_style',
				'operator'   => '=',
				'value'      => 'button',
			),
		),
		'input_attrs'  => array(
			'id' => 'header_button_typography',
			'options' => 'no-color',
		),
	),
	'product_archive_button_shadow' => array(
		'control_type' => 'base_shadow_control',
		'section'      => 'woocommerce_product_catalog_design',
		'label'        => esc_html__( 'Product Archive Button Shadow', 'jmsiteam' ),
		'live_method'     => array(
			array(
				'type'     => 'css_boxshadow',
				'selector' => '.woocommerce ul.products.woo-archive-btn-button .product-action-wrap .button',
				'property' => 'box-shadow',
				'pattern'  => '$',
				'key'      => '',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'product_archive_button_style',
				'operator'   => '=',
				'value'      => 'button',
			),
		),
		'default'      => webapp()->default( 'product_archive_button_shadow' ),
	),
	'product_archive_button_shadow_hover' => array(
		'control_type' => 'base_shadow_control',
		'section'      => 'woocommerce_product_catalog_design',
		'label'        => esc_html__( 'Product Archive Button Hover State Shadow', 'jmsiteam' ),
		'live_method'     => array(
			array(
				'type'     => 'css_boxshadow',
				'selector' => '.woocommerce ul.products.woo-archive-btn-button .product-action-wrap .button:hover',
				'property' => 'box-shadow',
				'pattern'  => '$',
				'key'      => '',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'product_archive_button_style',
				'operator'   => '=',
				'value'      => 'button',
			),
		),
		'default'      => webapp()->default( 'product_archive_button_shadow_hover' ),
	),
	'product_archive_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'woocommerce_product_catalog_design',
		'label'        => esc_html__( 'Site Background', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_archive_background' ),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.post-type-archive-product, body.tax-product_cat, body.tax-product_tag',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Product Archive Background', 'jmsiteam' ),
		),
	),
	'product_archive_content_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'woocommerce_product_catalog_design',
		'label'        => esc_html__( 'Content Background', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_archive_content_background' ),
		'live_method'  => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.post-type-archive-product .content-bg, body.tax-product_cat .content-bg, body.tax-product_tag .content-bg, body.tax-product_cat.content-style-unboxed .site, body.tax-product_tag.content-style-unboxed .site, body.post-type-archive-product.content-style-unboxed .site',
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

