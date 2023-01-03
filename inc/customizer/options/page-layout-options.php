<?php
/**
 * Header Main Row Options
 *
 * @package Base
 */

namespace Base;

use Base\Theme_Customizer;
use function Base\webapp;

ob_start(); ?>
<div class="base-compontent-tabs nav-tab-wrapper wp-clearfix">
	<a href="#" class="nav-tab base-general-tab base-compontent-tabs-button nav-tab-active" data-tab="general">
		<span><?php esc_html_e( 'General', 'jmsiteam' ); ?></span>
	</a>
	<a href="#" class="nav-tab base-design-tab base-compontent-tabs-button" data-tab="design">
		<span><?php esc_html_e( 'Design', 'jmsiteam' ); ?></span>
	</a>
</div>
<?php
$compontent_tabs = ob_get_clean();
$settings = array(
	'page_layout_tabs' => array(
		'control_type' => 'base_blank_control',
		'section'      => 'page_layout',
		'settings'     => false,
		'priority'     => 1,
		'description'  => $compontent_tabs,
	),
	'info_page_title' => array(
		'control_type' => 'base_title_control',
		'section'      => 'page_layout',
		'priority'     => 2,
		'label'        => esc_html__( 'Page Title', 'jmsiteam' ),
		'settings'     => false,
	),
	'page_title' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'page_layout',
		'priority'     => 3,
		'default'      => webapp()->default( 'page_title' ),
		'label'        => esc_html__( 'Show Page Title?', 'jmsiteam' ),
		'transport'    => 'refresh',
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
	),
	'page_title_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'page_layout',
		'label'        => esc_html__( 'Page Title Layout', 'jmsiteam' ),
		'transport'    => 'refresh',
		'priority'     => 4,
		'default'      => webapp()->default( 'page_title_layout' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
			array(
				'setting'    => 'page_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'normal' => array(
					'name' => __( 'In Content', 'jmsiteam' ),
					'icon'    => 'incontent',
				),
				'above' => array(
					'name' => __( 'Above Content', 'jmsiteam' ),
					'icon'    => 'abovecontent',
				),
			),
			'responsive' => false,
			'class'      => 'base-two-col',
		),
	),
	'page_title_inner_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'page_layout',
		'priority'     => 4,
		'default'      => webapp()->default( 'page_title_inner_layout' ),
		'label'        => esc_html__( 'Title Container Width', 'jmsiteam' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
			array(
				'setting'    => 'page_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'page_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.page-hero-section',
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
	'page_title_align' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'page_layout',
		'label'        => esc_html__( 'Page Title Align', 'jmsiteam' ),
		'priority'     => 4,
		'default'      => webapp()->default( 'page_title_align' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
			array(
				'setting'    => 'page_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.page-title',
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
	'page_title_height' => array(
		'control_type' => 'base_range_control',
		'section'      => 'page_layout',
		'priority'     => 5,
		'label'        => esc_html__( 'Title Container Min Height', 'jmsiteam' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
			array(
				'setting'    => 'page_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'page_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#inner-wrap .page-hero-section .entry-header',
				'property' => 'min-height',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => webapp()->default( 'page_title_height' ),
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
	'page_title_elements' => array(
		'control_type' => 'base_sorter_control',
		'section'      => 'page_layout',
		'priority'     => 6,
		'default'      => webapp()->default( 'page_title_elements' ),
		'label'        => esc_html__( 'Title Elements', 'jmsiteam' ),
		'transport'    => 'refresh',
		'settings'     => array(
			'elements'   => 'page_title_elements',
			'title'      => 'page_title_element_title',
			'breadcrumb' => 'page_title_element_breadcrumb',
			'meta'       => 'page_title_element_meta',
		),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
			array(
				'setting'    => 'page_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'input_attrs'  => array(
			'defaults' => array(
				'title'      => webapp()->default( 'page_title_element_title' ),
				'meta'       => webapp()->default( 'page_title_element_meta' ),
				'breadcrumb' => webapp()->default( 'page_title_element_breadcrumb' ),
			),
			'group' => 'page_title_element',
		),
		// 'partial'      => array(
		// 	'selector'            => '.page-title',
		// 	'container_inclusive' => false,
		// 	'render_callback'     => 'Base\base_entry_header',
		// ),
	),
	'page_title_font' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'page_layout',
		'label'        => esc_html__( 'Page Title Font', 'jmsiteam' ),
		'default'      => webapp()->default( 'page_title_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.wp-site-blocks .page-title h1',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
			array(
				'setting'    => 'page_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'input_attrs'  => array(
			'id'             => 'page_title_font',
			'headingInherit' => true,
		),
	),
	'page_title_breadcrumb_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'page_layout',
		'label'        => esc_html__( 'Breadcrumb Colors', 'jmsiteam' ),
		'default'      => webapp()->default( 'page_title_breadcrumb_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.page-title .base-breadcrumbs',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.page-title .base-breadcrumbs a:hover',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'hover',
			),
		),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
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
	'page_title_breadcrumb_font' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'page_layout',
		'label'        => esc_html__( 'Breadcrumb Font', 'jmsiteam' ),
		'default'      => webapp()->default( 'page_title_breadcrumb_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.page-title .base-breadcrumbs',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
		),
		'input_attrs'  => array(
			'id'      => 'page_title_breadcrumb_font',
			'options' => 'no-color',
		),
	),
	'page_title_meta_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'page_layout',
		'label'        => esc_html__( 'Meta Colors', 'jmsiteam' ),
		'default'      => webapp()->default( 'page_title_meta_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.page-title .entry-meta',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.page-title .entry-meta a:hover',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'hover',
			),
		),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
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
	'page_title_meta_font' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'page_layout',
		'label'        => esc_html__( 'Meta Font', 'jmsiteam' ),
		'default'      => webapp()->default( 'page_title_meta_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.page-title .entry-meta',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
		),
		'input_attrs'  => array(
			'id'      => 'page_title_breadcrumb_font',
			'options' => 'no-color',
		),
	),
	'page_title_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'page_layout',
		'label'        => esc_html__( 'Page Title Background', 'jmsiteam' ),
		'default'      => webapp()->default( 'page_title_background' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
			array(
				'setting'    => 'page_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'page_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => '#inner-wrap .page-hero-section .entry-hero-container-inner',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip'  => __( 'Page Title Background', 'jmsiteam' ),
		),
	),
	'page_title_featured_image' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'page_layout',
		'default'      => webapp()->default( 'page_title_featured_image' ),
		'label'        => esc_html__( 'Use Featured Image for Background?', 'jmsiteam' ),
		'transport'    => 'refresh',
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
			array(
				'setting'    => 'page_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'page_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
	),
	'page_title_overlay_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'page_layout',
		'label'        => esc_html__( 'Background Overlay Color', 'jmsiteam' ),
		'default'      => webapp()->default( 'page_title_overlay_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.page-hero-section .hero-section-overlay',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'color',
			),
		),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
			array(
				'setting'    => 'page_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'page_title_layout',
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
	'page_title_border' => array(
		'control_type' => 'base_borders_control',
		'section'      => 'page_layout',
		'label'        => esc_html__( 'Border', 'jmsiteam' ),
		'default'      => webapp()->default( 'page_title_border' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
			array(
				'setting'    => 'page_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'page_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'settings'     => array(
			'border_top'    => 'page_title_top_border',
			'border_bottom' => 'page_title_bottom_border',
		),
		'live_method'     => array(
			'page_title_top_border' => array(
				array(
					'type'     => 'css_border',
					'selector' => '.page-hero-section .entry-hero-container-inner',
					'pattern'  => '$',
					'property' => 'border-top',
					'key'      => 'border',
				),
			),
			'page_title_bottom_border' => array( 
				array(
					'type'     => 'css_border',
					'selector' => '.page-hero-section .entry-hero-container-inner',
					'property' => 'border-bottom',
					'pattern'  => '$',
					'key'      => 'border',
				),
			),
		),
	),
	'info_page_layout' => array(
		'control_type' => 'base_title_control',
		'section'      => 'page_layout',
		'priority'     => 10,
		'label'        => esc_html__( 'Default Page Layout', 'jmsiteam' ),
		'settings'     => false,
	),
	'page_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'page_layout',
		'label'        => esc_html__( 'Default Page Layout', 'jmsiteam' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => webapp()->default( 'page_layout' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'normal' => array(
					'name' => __( 'Normal', 'jmsiteam' ),
					'icon' => 'normal',
				),
				'narrow' => array(
					'name' => __( 'Narrow', 'jmsiteam' ),
					'icon' => 'narrow',
				),
				'fullwidth' => array(
					'name' => __( 'Fullwidth', 'jmsiteam' ),
					'icon' => 'fullwidth',
				),
				'left' => array(
					'name' => __( 'Left Sidebar', 'jmsiteam' ),
					'icon' => 'leftsidebar',
				),
				'right' => array(
					'name' => __( 'Right Sidebar', 'jmsiteam' ),
					'icon' => 'rightsidebar',
				),
			),
			'responsive' => false,
			'class'      => 'base-three-col',
		),
	),
	'page_sidebar_id' => array(
		'control_type' => 'base_select_control',
		'section'      => 'page_layout',
		'label'        => esc_html__( 'Page Default Sidebar', 'jmsiteam' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => webapp()->default( 'page_sidebar_id' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'input_attrs'  => array(
			'options' => webapp()->sidebar_options(),
		),
	),
	'page_content_style' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'page_layout',
		'label'        => esc_html__( 'Content Style', 'jmsiteam' ),
		'priority'     => 10,
		'default'      => webapp()->default( 'page_content_style' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.page',
				'pattern'  => 'content-style-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'boxed' => array(
					'name' => __( 'Boxed', 'jmsiteam' ),
					'icon' => 'boxed',
				),
				'unboxed' => array(
					'name' => __( 'Unboxed', 'jmsiteam' ),
					'icon' => 'narrow',
				),
			),
			'responsive' => false,
			'class'      => 'base-two-col',
		),
	),
	'page_vertical_padding' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'page_layout',
		'label'        => esc_html__( 'Content Vertical Padding', 'jmsiteam' ),
		'priority'     => 10,
		'default'      => webapp()->default( 'page_vertical_padding' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.page',
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
	'page_feature' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'page_layout',
		'priority'     => 20,
		'default'      => webapp()->default( 'page_feature' ),
		'label'        => esc_html__( 'Show Featured Image?', 'jmsiteam' ),
		'transport'    => 'refresh',
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
	),
	'page_feature_position' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'page_layout',
		'label'        => esc_html__( 'Featured Image Position', 'jmsiteam' ),
		'priority'     => 20,
		'transport'    => 'refresh',
		'default'      => webapp()->default( 'page_feature_position' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
			array(
				'setting'    => 'page_feature',
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
	'page_feature_ratio' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'page_layout',
		'label'        => esc_html__( 'Featured Image Ratio', 'jmsiteam' ),
		'priority'     => 20,
		'default'      => webapp()->default( 'page_feature_ratio' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
			array(
				'setting'    => 'page_feature',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.page .article-post-thumbnail',
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
	'page_comments' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'page_layout',
		'priority'     => 20,
		'default'      => webapp()->default( 'page_comments' ),
		'label'        => esc_html__( 'Show Comments?', 'jmsiteam' ),
		'transport'    => 'refresh',
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
	),
	'page_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'page_layout',
		'label'        => esc_html__( 'Site Background', 'jmsiteam' ),
		'default'      => webapp()->default( 'page_background' ),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.page',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Page Background', 'jmsiteam' ),
		),
	),
	'page_content_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'page_layout',
		'label'        => esc_html__( 'Content Background', 'jmsiteam' ),
		'default'      => webapp()->default( 'page_content_background' ),
		'live_method'  => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.page .content-bg, body.page.content-style-unboxed .site',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Page Content Background', 'jmsiteam' ),
		),
	),
);

Theme_Customizer::add_settings( $settings );

