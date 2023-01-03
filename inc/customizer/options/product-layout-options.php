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
	'product_layout_tabs' => array(
		'control_type' => 'base_tab_control',
		'section'      => 'product_layout',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'jmsiteam' ),
				'target' => 'product_layout',
			),
			'design' => array(
				'label'  => __( 'Design', 'jmsiteam' ),
				'target' => 'product_layout_design',
			),
			'active' => 'general',
		),
	),
	'product_layout_tabs_design' => array(
		'control_type' => 'base_tab_control',
		'section'      => 'product_layout_design',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'jmsiteam' ),
				'target' => 'product_layout',
			),
			'design' => array(
				'label'  => __( 'Design', 'jmsiteam' ),
				'target' => 'product_layout_design',
			),
			'active' => 'design',
		),
	),
	'info_product_title' => array(
		'control_type' => 'base_title_control',
		'section'      => 'product_layout',
		'priority'     => 2,
		'label'        => esc_html__( 'Product Above Content', 'jmsiteam' ),
		'settings'     => false,
	),
	'info_product_title_design' => array(
		'control_type' => 'base_title_control',
		'section'      => 'product_layout_design',
		'priority'     => 2,
		'label'        => esc_html__( 'Product Above Content', 'jmsiteam' ),
		'settings'     => false,
	),
	'product_above_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'product_layout',
		'priority'     => 4,
		'default'      => webapp()->default( 'product_above_layout' ),
		'label'        => esc_html__( 'Above Content Layout', 'jmsiteam' ),
		'transport'    => 'refresh',
		'input_attrs'  => array(
			'layout' => array(
				'title' => array(
					'tooltip' => __( 'Enables an Extra above content title area', 'jmsiteam' ),
					'name'    => __( 'Extra Title Area', 'jmsiteam' ),
					'icon'    => '',
				),
				'breadcrumbs' => array(
					'tooltip' => __( 'Enables Breadcrumbs', 'jmsiteam' ),
					'name'    => __( 'Breadcrumbs', 'jmsiteam' ),
					'icon'    => '',
				),
				'none' => array(
					'tooltip' => __( 'Hides this area', 'jmsiteam' ),
					'name'    => __( 'Nothing', 'jmsiteam' ),
					'icon'    => '',
				),
			),
			'responsive' => false,
			'class'      => 'base-tiny-text',
		),
	),
	'product_title_inner_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'product_layout',
		'priority'     => 4,
		'default'      => webapp()->default( 'product_title_inner_layout' ),
		'label'        => esc_html__( 'Title Container Width', 'jmsiteam' ),
		'context'      => array(
			array(
				'setting'    => 'product_above_layout',
				'operator'   => '=',
				'value'      => 'title',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.product-hero-section',
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
	'product_title_align' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'product_layout',
		'label'        => esc_html__( 'Product Above Align', 'jmsiteam' ),
		'priority'     => 4,
		'default'      => webapp()->default( 'product_title_align' ),
		'context'      => array(
			array(
				'setting'    => 'product_above_layout',
				'operator'   => '=',
				'value'      => 'title',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.product-title',
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
	'product_title_height' => array(
		'control_type' => 'base_range_control',
		'section'      => 'product_layout',
		'priority'     => 5,
		'label'        => esc_html__( 'Above Container Min Height', 'jmsiteam' ),
		'context'      => array(
			array(
				'setting'    => 'product_above_layout',
				'operator'   => '=',
				'value'      => 'title',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#inner-wrap .product-hero-section .entry-header',
				'property' => 'min-height',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => webapp()->default( 'product_title_height' ),
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
	'product_title_elements' => array(
		'control_type' => 'base_sorter_control',
		'section'      => 'product_layout',
		'priority'     => 6,
		'default'      => webapp()->default( 'product_title_elements' ),
		'label'        => esc_html__( 'Above Elements', 'jmsiteam' ),
		'transport'    => 'refresh',
		'settings'     => array(
			'elements'    => 'product_title_elements',
			'above_title' => 'product_title_element_above_title',
			'breadcrumb'  => 'product_title_element_breadcrumb',
			'category'    => 'product_title_element_category',
		),
		'context'      => array(
			array(
				'setting'    => 'product_above_layout',
				'operator'   => '=',
				'value'      => 'title',
			),
		),
		'input_attrs'  => array(
			'group' => 'product_title_element',
		),
	),
	'product_above_title_font' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'product_layout_design',
		'label'        => esc_html__( 'Product Above Title Font', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_above_title_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.product-hero-section .extra-title',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'product_above_layout',
				'operator'   => '=',
				'value'      => 'title',
			),
		),
		'input_attrs'  => array(
			'id'             => 'product_above_title_font',
			'headingInherit' => true,
		),
	),
	'product_above_category_font' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'product_layout_design',
		'label'        => esc_html__( 'Product Above Category Font', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_above_category_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.product-hero-section .single-category',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'product_above_layout',
				'operator'   => '=',
				'value'      => 'title',
			),
		),
		'input_attrs'  => array(
			'id'             => 'product_above_category_font',
			'headingInherit' => true,
		),
	),
	'product_title_breadcrumb_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'product_layout_design',
		'label'        => esc_html__( 'Breadcrumb Colors', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_title_breadcrumb_color' ),
		'context'      => array(
			array(
				'setting'    => 'product_above_layout',
				'operator'   => '!=',
				'value'      => 'none',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.product-title .base-breadcrumbs',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.product-title .base-breadcrumbs a:hover',
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
	'product_title_breadcrumb_font' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'product_layout_design',
		'label'        => esc_html__( 'Breadcrumb Font', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_title_breadcrumb_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.product-title .base-breadcrumbs',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'product_above_layout',
				'operator'   => '!=',
				'value'      => 'none',
			),
		),
		'input_attrs'  => array(
			'id'      => 'product_title_breadcrumb_font',
			'options' => 'no-color',
		),
	),
	'product_title_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'product_layout_design',
		'label'        => esc_html__( 'Product Above Area Background', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_title_background' ),
		'context'      => array(
			array(
				'setting'    => 'product_above_layout',
				'operator'   => '=',
				'value'      => 'title',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => '#inner-wrap .product-hero-section .entry-hero-container-inner',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip'  => __( 'Product Above Title Background', 'jmsiteam' ),
		),
	),
	'product_title_featured_image' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'product_layout_design',
		'default'      => webapp()->default( 'product_title_featured_image' ),
		'label'        => esc_html__( 'Use Featured Image for Background?', 'jmsiteam' ),
		'transport'    => 'refresh',
		'context'      => array(
			array(
				'setting'    => 'product_above_layout',
				'operator'   => '=',
				'value'      => 'title',
			),
		),
	),
	'product_title_overlay_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'product_layout_design',
		'label'        => esc_html__( 'Background Overlay Color', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_title_overlay_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.product-hero-section .hero-section-overlay',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'color',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'product_above_layout',
				'operator'   => '=',
				'value'      => 'title',
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
	'product_title_border' => array(
		'control_type' => 'base_borders_control',
		'section'      => 'product_layout_design',
		'label'        => esc_html__( 'Border', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_title_border' ),
		'context'      => array(
			array(
				'setting'    => 'product_above_layout',
				'operator'   => '=',
				'value'      => 'title',
			),
		),
		'settings'     => array(
			'border_top'    => 'product_title_top_border',
			'border_bottom' => 'product_title_bottom_border',
		),
		'live_method'     => array(
			'product_title_top_border' => array(
				array(
					'type'     => 'css_border',
					'selector' => '.product-hero-section .entry-hero-container-inner',
					'pattern'  => '$',
					'property' => 'border-top',
					'key'      => 'border',
				),
			),
			'product_title_bottom_border' => array( 
				array(
					'type'     => 'css_border',
					'selector' => '.product-hero-section .entry-hero-container-inner',
					'property' => 'border-bottom',
					'pattern'  => '$',
					'key'      => 'border',
				),
			),
		),
	),
	'info_product_layout' => array(
		'control_type' => 'base_title_control',
		'section'      => 'product_layout',
		'priority'     => 10,
		'label'        => esc_html__( 'Product Layout', 'jmsiteam' ),
		'settings'     => false,
	),
	'info_product_layout_design' => array(
		'control_type' => 'base_title_control',
		'section'      => 'product_layout_design',
		'priority'     => 10,
		'label'        => esc_html__( 'Product Layout', 'jmsiteam' ),
		'settings'     => false,
	),
	'product_single_category_font' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'product_layout_design',
		'label'        => esc_html__( 'Product In Content Category Font', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_single_category_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.woocommerce div.product .product-single-category',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'input_attrs'  => array(
			'id'             => 'product_single_category_font',
		),
	),
	'product_title_font' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'product_layout_design',
		'label'        => esc_html__( 'Product Title Font', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_title_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.woocommerce div.product .product_title',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'input_attrs'  => array(
			'id'             => 'product_title_font',
			'headingInherit' => true,
		),
	),
	'product_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'product_layout',
		'label'        => esc_html__( 'Product Layout', 'jmsiteam' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => webapp()->default( 'product_layout' ),
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
	'product_sidebar_id' => array(
		'control_type' => 'base_select_control',
		'section'      => 'product_layout',
		'label'        => esc_html__( 'Product Default Sidebar', 'jmsiteam' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => webapp()->default( 'product_sidebar_id' ),
		'input_attrs'  => array(
			'options' => webapp()->sidebar_options(),
		),
	),
	'product_content_style' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'product_layout',
		'label'        => esc_html__( 'Content Style', 'jmsiteam' ),
		'priority'     => 10,
		'default'      => webapp()->default( 'product_content_style' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single-product',
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
	'product_vertical_padding' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'product_layout',
		'label'        => esc_html__( 'Content Vertical Padding', 'jmsiteam' ),
		'priority'     => 10,
		'default'      => webapp()->default( 'product_vertical_padding' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single-product',
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
	'product_content_elements' => array(
		'control_type' => 'base_sorter_control',
		'section'      => 'product_layout',
		'priority'     => 10,
		'default'      => webapp()->default( 'product_content_elements' ),
		'label'        => esc_html__( 'Product Elements', 'jmsiteam' ),
		'transport'    => 'refresh',
		'settings'     => array(
			'elements'     => 'product_content_elements',
			'category'     => 'product_content_element_category',
			'title'        => 'product_content_element_title',
			'rating'       => 'product_content_element_rating',
			'price'        => 'product_content_element_price',
			'excerpt'      => 'product_content_element_excerpt',
			'add_to_cart'  => 'product_content_element_add_to_cart',
			'extras'       => 'product_content_element_extras',
			'payments'     => 'product_content_element_payments',
			'product_meta' => 'product_content_element_product_meta',
			'share'        => 'product_content_element_share',
		),
		'input_attrs'  => array(
			'group' => 'product_content_element',
			'sortable' => false,
		),
	),
	'custom_quantity' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'product_layout',
		'priority'     => 10,
		'default'      => webapp()->default( 'custom_quantity' ),
		'label'        => esc_html__( 'Use Custom Quantity Plus and Minus', 'jmsiteam' ),
		'transport'    => 'refresh',
	),
	'variation_direction' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'product_layout',
		'priority'     => 10,
		'default'      => webapp()->default( 'variation_direction' ),
		'label'        => esc_html__( 'Product Variation Display', 'jmsiteam' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single-product',
				'pattern'  => 'product-variation-style-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'horizontal' => array(
					'name' => __( 'Horizontal', 'jmsiteam' ),
				),
				'vertical' => array(
					'name' => __( 'Vertical', 'jmsiteam' ),
				),
			),
			'responsive' => false,
		),
	),
	'product_tab_style' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'product_layout',
		'label'        => esc_html__( 'Tab Style', 'jmsiteam' ),
		'priority'     => 10,
		'default'      => webapp()->default( 'product_tab_style' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single-product',
				'pattern'  => 'product-tab-style-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'normal' => array(
					'name' => __( 'Normal', 'jmsiteam' ),
				),
				'center' => array(
					'name' => __( 'Center', 'jmsiteam' ),
				),
			),
			'responsive' => false,
		),
	),
	'product_tab_title' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'product_layout',
		'priority'     => 10,
		'default'      => webapp()->default( 'product_tab_title' ),
		'label'        => esc_html__( 'Show default headings in tab content', 'jmsiteam' ),
		'transport'    => 'refresh',
	),
	'product_additional_weight_dimensions' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'product_layout',
		'priority'     => 10,
		'default'      => webapp()->default( 'product_additional_weight_dimensions' ),
		'label'        => esc_html__( 'Show Weight and Dimensions in Additional Information tab?', 'jmsiteam' ),
		'transport'    => 'refresh',
	),
	'product_related' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'product_layout',
		'priority'     => 10,
		'default'      => webapp()->default( 'product_related' ),
		'label'        => esc_html__( 'Show Related Products?', 'jmsiteam' ),
		'transport'    => 'refresh',
	),
	'product_related_columns' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'product_layout',
		'priority'     => 10,
		'label'        => esc_html__( 'Related Products Columns', 'jmsiteam' ),
		'transport'    => 'refresh',
		'default'      => webapp()->default( 'product_related_columns' ),
		'context'      => array(
			array(
				'setting'    => 'product_related',
				'operator'   => '=',
				'value'      => true,
			),
		),
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
	'product_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'product_layout_design',
		'label'        => esc_html__( 'Site Background', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_background' ),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.single-product',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Product Background', 'jmsiteam' ),
		),
	),
	'product_content_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'product_layout_design',
		'label'        => esc_html__( 'Content Background', 'jmsiteam' ),
		'default'      => webapp()->default( 'product_content_background' ),
		'live_method'  => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.single-product .content-bg, body.single-product.content-style-unboxed .site',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Product Content Background', 'jmsiteam' ),
		),
	),
);

Theme_Customizer::add_settings( $settings );

