<?php
/**
 * Tutor Course Layout Options
 *
 * @package Base
 */

namespace Base;

use Base\Theme_Customizer;
use function Base\webapp;

$settings = array(
	'courses_layout_tabs' => array(
		'control_type' => 'base_tab_control',
		'section'      => 'courses_layout',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'jmsiteam' ),
				'target' => 'courses_layout',
			),
			'design' => array(
				'label'  => __( 'Design', 'jmsiteam' ),
				'target' => 'courses_layout_design',
			),
			'active' => 'general',
		),
	),
	'courses_layout_tabs_design' => array(
		'control_type' => 'base_tab_control',
		'section'      => 'courses_layout_design',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'jmsiteam' ),
				'target' => 'courses_layout',
			),
			'design' => array(
				'label'  => __( 'Design', 'jmsiteam' ),
				'target' => 'courses_layout_design',
			),
			'active' => 'design',
		),
	),
	'info_course_title' => array(
		'control_type' => 'base_title_control',
		'section'      => 'courses_layout',
		'priority'     => 2,
		'label'        => esc_html__( 'Course Title', 'jmsiteam' ),
		'settings'     => false,
	),
	'info_course_title_design' => array(
		'control_type' => 'base_title_control',
		'section'      => 'courses_layout_design',
		'priority'     => 2,
		'label'        => esc_html__( 'Course Title', 'jmsiteam' ),
		'settings'     => false,
	),
	'courses_title_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'courses_layout',
		'label'        => esc_html__( 'Course Title Layout', 'jmsiteam' ),
		'transport'    => 'refresh',
		'priority'     => 4,
		'default'      => webapp()->default( 'courses_title_layout' ),
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
	'courses_title_inner_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'courses_layout',
		'priority'     => 4,
		'default'      => webapp()->default( 'courses_title_inner_layout' ),
		'label'        => esc_html__( 'Title Container Width', 'jmsiteam' ),
		'context'      => array(
			array(
				'setting'    => 'courses_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.courses-hero-section',
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
	// 'courses_title_align' => array(
	// 	'control_type' => 'base_radio_icon_control',
	// 	'section'      => 'courses_layout',
	// 	'label'        => esc_html__( 'Course Title Align', 'jmsiteam' ),
	// 	'priority'     => 4,
	// 	'default'      => webapp()->default( 'courses_title_align' ),
	// 	'context'      => array(
	// 		array(
	// 			'setting'    => 'courses_title_layout',
	// 			'operator'   => '=',
	// 			'value'      => 'above',
	// 		),
	// 	),
	// 	'live_method'     => array(
	// 		array(
	// 			'type'     => 'class',
	// 			'selector' => '.courses-title',
	// 			'pattern'  => array(
	// 				'desktop' => 'title-align-$',
	// 				'tablet'  => 'title-tablet-align-$',
	// 				'mobile'  => 'title-mobile-align-$',
	// 			),
	// 			'key'      => '',
	// 		),
	// 	),
	// 	'input_attrs'  => array(
	// 		'layout' => array(
	// 			'left' => array(
	// 				'tooltip'  => __( 'Left Align Title', 'jmsiteam' ),
	// 				'dashicon' => 'editor-alignleft',
	// 			),
	// 			'center' => array(
	// 				'tooltip'  => __( 'Center Align Title', 'jmsiteam' ),
	// 				'dashicon' => 'editor-aligncenter',
	// 			),
	// 			'right' => array(
	// 				'tooltip'  => __( 'Right Align Title', 'jmsiteam' ),
	// 				'dashicon' => 'editor-alignright',
	// 			),
	// 		),
	// 		'responsive' => true,
	// 	),
	// ),
	'courses_title_height' => array(
		'control_type' => 'base_range_control',
		'section'      => 'courses_layout',
		'priority'     => 5,
		'label'        => esc_html__( 'Title Container Min Height', 'jmsiteam' ),
		'context'      => array(
			array(
				'setting'    => 'courses_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#inner-wrap .courses-hero-section .entry-header',
				'property' => 'min-height',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => webapp()->default( 'courses_title_height' ),
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
	'courses_enroll_overlay' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'courses_layout',
		'default'      => webapp()->default( 'courses_enroll_overlay' ),
		'label'        => esc_html__( 'Move sidebar up into header?', 'jmsiteam' ),
		'context'      => array(
			array(
				'setting'    => 'courses_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single-courses',
				'pattern'  => 'courses-sidebar-overlay-$',
				'key'      => '',
			),
		),
	),
	// 'courses_title_elements' => array(
	// 	'control_type' => 'base_sorter_control',
	// 	'section'      => 'courses_layout',
	// 	'priority'     => 6,
	// 	'default'      => webapp()->default( 'courses_title_elements' ),
	// 	'label'        => esc_html__( 'Title Elements', 'jmsiteam' ),
	// 	'transport'    => 'refresh',
	// 	'context'      => array(
	// 		array(
	// 			'setting'    => 'courses_title_layout',
	// 			'operator'   => '=',
	// 			'value'      => 'above',
	// 		),
	// 	),
	// 	'settings'     => array(
	// 		'elements'   => 'courses_title_elements',
	// 		'title'      => 'courses_title_element_title',
	// 		'breadcrumb' => 'courses_title_element_breadcrumb',
	// 	),
	// 	'input_attrs'  => array(
	// 		'group' => 'courses_title_element',
	// 	),
	// ),
	'courses_title_font' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'courses_layout_design',
		'label'        => esc_html__( 'Course Title Font', 'jmsiteam' ),
		'default'      => webapp()->default( 'course_title_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.tutor-single-course-lead-info h1.tutor-course-header-h1, .tutor-course-details-title .tutor-fs-4',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'input_attrs'  => array(
			'id'             => 'courses_title_font',
			'headingInherit' => true,
		),
	),
	// 'courses_title_breadcrumb_color' => array(
	// 	'control_type' => 'base_color_control',
	// 	'section'      => 'courses_layout_design',
	// 	'label'        => esc_html__( 'Breadcrumb Colors', 'jmsiteam' ),
	// 	'default'      => webapp()->default( 'courses_title_breadcrumb_color' ),
	// 	'live_method'     => array(
	// 		array(
	// 			'type'     => 'css',
	// 			'selector' => '.course-title .base-breadcrumbs',
	// 			'property' => 'color',
	// 			'pattern'  => '$',
	// 			'key'      => 'color',
	// 		),
	// 		array(
	// 			'type'     => 'css',
	// 			'selector' => '.course-title .base-breadcrumbs a:hover',
	// 			'property' => 'color',
	// 			'pattern'  => '$',
	// 			'key'      => 'hover',
	// 		),
	// 	),
	// 	'input_attrs'  => array(
	// 		'colors' => array(
	// 			'color' => array(
	// 				'tooltip' => __( 'Initial Color', 'jmsiteam' ),
	// 				'palette' => true,
	// 			),
	// 			'hover' => array(
	// 				'tooltip' => __( 'Link Hover Color', 'jmsiteam' ),
	// 				'palette' => true,
	// 			),
	// 		),
	// 	),
	// ),
	// 'courses_title_breadcrumb_font' => array(
	// 	'control_type' => 'base_typography_control',
	// 	'section'      => 'courses_layout_design',
	// 	'label'        => esc_html__( 'Breadcrumb Font', 'jmsiteam' ),
	// 	'default'      => webapp()->default( 'course_title_breadcrumb_font' ),
	// 	'live_method'     => array(
	// 		array(
	// 			'type'     => 'css_typography',
	// 			'selector' => '.courses-title .base-breadcrumbs',
	// 			'property' => 'font',
	// 			'key'      => 'typography',
	// 		),
	// 	),
	// 	'input_attrs'  => array(
	// 		'id'      => 'course_title_breadcrumb_font',
	// 		'options' => 'no-color',
	// 	),
	// ),
	'courses_title_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'courses_layout_design',
		'label'        => esc_html__( 'Course Above Area Background', 'jmsiteam' ),
		'default'      => webapp()->default( 'courses_title_background' ),
		'context'      => array(
			array(
				'setting'    => 'courses_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => '#inner-wrap .courses-hero-section .entry-hero-container-inner',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip'  => __( 'Course Title Background', 'jmsiteam' ),
		),
	),
	'courses_title_featured_image' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'courses_layout_design',
		'default'      => webapp()->default( 'courses_title_featured_image' ),
		'label'        => esc_html__( 'Use Featured Image for Background?', 'jmsiteam' ),
		'transport'    => 'refresh',
		'context'      => array(
			array(
				'setting'    => 'courses_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
	),
	'courses_title_overlay_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'courses_layout_design',
		'label'        => esc_html__( 'Background Overlay Color', 'jmsiteam' ),
		'default'      => webapp()->default( 'courses_title_overlay_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.courses-hero-section .hero-section-overlay',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'color',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'courses_title_layout',
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
	'courses_title_border' => array(
		'control_type' => 'base_borders_control',
		'section'      => 'courses_layout_design',
		'label'        => esc_html__( 'Border', 'jmsiteam' ),
		'default'      => webapp()->default( 'courses_title_border' ),
		'context'      => array(
			array(
				'setting'    => 'courses_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'settings'     => array(
			'border_top'    => 'course_title_top_border',
			'border_bottom' => 'course_title_bottom_border',
		),
		'live_method'     => array(
			'course_title_top_border' => array(
				array(
					'type'     => 'css_border',
					'selector' => '.courses-hero-section .entry-hero-container-inner',
					'pattern'  => '$',
					'property' => 'border-top',
					'key'      => 'border',
				),
			),
			'course_title_bottom_border' => array( 
				array(
					'type'     => 'css_border',
					'selector' => '.courses-hero-section .entry-hero-container-inner',
					'property' => 'border-bottom',
					'pattern'  => '$',
					'key'      => 'border',
				),
			),
		),
	),
	'info_courses_layout' => array(
		'control_type' => 'base_title_control',
		'section'      => 'courses_layout',
		'priority'     => 10,
		'label'        => esc_html__( 'Course Layout', 'jmsiteam' ),
		'settings'     => false,
	),
	'info_courses_layout_design' => array(
		'control_type' => 'base_title_control',
		'section'      => 'courses_layout_design',
		'priority'     => 10,
		'label'        => esc_html__( 'Course Layout', 'jmsiteam' ),
		'settings'     => false,
	),
	'courses_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'courses_layout',
		'label'        => esc_html__( 'Course Layout', 'jmsiteam' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => webapp()->default( 'courses_layout' ),
		'input_attrs'  => array(
			'layout' => array(
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
			'class'      => 'base-two-col',
		),
	),
	'courses_content_style' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'courses_layout',
		'label'        => esc_html__( 'Content Style', 'jmsiteam' ),
		'priority'     => 10,
		'default'      => webapp()->default( 'course_content_style' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single-courses',
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
	'courses_vertical_padding' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'courses_layout',
		'label'        => esc_html__( 'Content Vertical Padding', 'jmsiteam' ),
		'priority'     => 10,
		'default'      => webapp()->default( 'courses_vertical_padding' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single-courses',
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
	// 'course_feature' => array(
	// 	'control_type' => 'base_switch_control',
	// 	'section'      => 'courses_layout',
	// 	'priority'     => 20,
	// 	'default'      => webapp()->default( 'course_feature' ),
	// 	'label'        => esc_html__( 'Show Featured Image?', 'jmsiteam' ),
	// 	'transport'    => 'refresh',
	// ),
	// 'course_feature_position' => array(
	// 	'control_type' => 'base_radio_icon_control',
	// 	'section'      => 'courses_layout',
	// 	'label'        => esc_html__( 'Featured Image Position', 'jmsiteam' ),
	// 	'priority'     => 20,
	// 	'transport'    => 'refresh',
	// 	'default'      => webapp()->default( 'course_feature_position' ),
	// 	'context'      => array(
	// 		array(
	// 			'setting'    => 'course_feature',
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
	// 'course_feature_ratio' => array(
	// 	'control_type' => 'base_radio_icon_control',
	// 	'section'      => 'courses_layout',
	// 	'label'        => esc_html__( 'Featured Image Ratio', 'jmsiteam' ),
	// 	'priority'     => 20,
	// 	'default'      => webapp()->default( 'course_feature_ratio' ),
	// 	'context'      => array(
	// 		array(
	// 			'setting'    => 'course_feature',
	// 			'operator'   => '=',
	// 			'value'      => true,
	// 		),
	// 	),
	// 	'live_method'     => array(
	// 		array(
	// 			'type'     => 'class',
	// 			'selector' => 'body.single-course .article-post-thumbnail',
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
	// 				'name' => __( '3:4', 'jmsiteam' ),
	// 			),
	// 			'2-3' => array(
	// 				'name' => __( '2:3', 'jmsiteam' ),
	// 			),
	// 			'9-16' => array(
	// 				'name' => __( '9:16', 'jmsiteam' ),
	// 			),
	// 			'1-2' => array(
	// 				'name' => __( '1:2', 'jmsiteam' ),
	// 			),
	// 		),
	// 		'responsive' => false,
	// 		'class' => 'base-three-col-short',
	// 	),
	// ),
	// 'info_course_syllabus_layout' => array(
	// 	'control_type' => 'base_title_control',
	// 	'section'      => 'courses_layout',
	// 	'priority'     => 20,
	// 	'label'        => esc_html__( 'Course Syllabus Layout', 'jmsiteam' ),
	// 	'settings'     => false,
	// ),
	// 'course_syllabus_columns' => array(
	// 	'control_type' => 'base_radio_icon_control',
	// 	'section'      => 'courses_layout',
	// 	'priority'     => 20,
	// 	'label'        => esc_html__( 'Course Syllabus Columns', 'jmsiteam' ),
	// 	'transport'    => 'refresh',
	// 	'default'      => webapp()->default( 'course_syllabus_columns' ),
	// 	'input_attrs'  => array(
	// 		'layout' => array(
	// 			'1' => array(
	// 				'name' => __( '1', 'jmsiteam' ),
	// 			),
	// 			'2' => array(
	// 				'name' => __( '2', 'jmsiteam' ),
	// 			),
	// 			'3' => array(
	// 				'name' => __( '3', 'jmsiteam' ),
	// 			),
	// 		),
	// 		'responsive' => false,
	// 	),
	// ),
	// 'course_syllabus_lesson_style' => array(
	// 	'control_type' => 'base_radio_icon_control',
	// 	'section'      => 'courses_layout',
	// 	'label'        => esc_html__( 'Course Lesson Style', 'jmsiteam' ),
	// 	'priority'     => 20,
	// 	'transport'    => 'refresh',
	// 	'default'      => webapp()->default( 'course_syllabus_lesson_style' ),
	// 	'context'      => array(
	// 		array(
	// 			'setting'    => 'course_syllabus_columns',
	// 			'operator'   => '=',
	// 			'value'      => '1',
	// 		),
	// 	),
	// 	'input_attrs'  => array(
	// 		'layout' => array(
	// 			'standard' => array(
	// 				'name' => __( 'Standard', 'jmsiteam' ),
	// 			),
	// 			'tiles' => array(
	// 				'name' => __( 'Two Column Tiles', 'jmsiteam' ),
	// 			),
	// 			'center' => array(
	// 				'name' => __( 'One Column Center', 'jmsiteam' ),
	// 			),
	// 		),
	// 		'responsive' => false,
	// 		'class'      => 'base-tiny-text',
	// 	),
	// ),
	// 'course_syllabus_thumbs' => array(
	// 	'control_type' => 'base_switch_control',
	// 	'section'      => 'courses_layout',
	// 	'priority'     => 20,
	// 	'default'      => webapp()->default( 'course_syllabus_thumbs' ),
	// 	'label'        => esc_html__( 'Show Lesson Thumbnail in Syllabus?', 'jmsiteam' ),
	// 	'transport'    => 'refresh',
	// ),
	// 'course_syllabus_thumbs_ratio' => array(
	// 	'control_type' => 'base_radio_icon_control',
	// 	'section'      => 'courses_layout',
	// 	'label'        => esc_html__( 'Lesson Thumbnail Ratio', 'jmsiteam' ),
	// 	'priority'     => 20,
	// 	'default'      => webapp()->default( 'course_syllabus_thumbs_ratio' ),
	// 	'context'      => array(
	// 		array(
	// 			'setting'    => 'course_syllabus_thumbs',
	// 			'operator'   => '=',
	// 			'value'      => true,
	// 		),
	// 	),
	// 	'live_method'     => array(
	// 		array(
	// 			'type'     => 'class',
	// 			'selector' => 'body.single-courses .llms-lesson-thumbnail',
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
	// 				'name' => __( '3:4', 'jmsiteam' ),
	// 			),
	// 			'2-3' => array(
	// 				'name' => __( '2:3', 'jmsiteam' ),
	// 			),
	// 			'9-16' => array(
	// 				'name' => __( '9:16', 'jmsiteam' ),
	// 			),
	// 			'1-2' => array(
	// 				'name' => __( '1:2', 'jmsiteam' ),
	// 			),
	// 		),
	// 		'responsive' => false,
	// 		'class' => 'base-three-col-short',
	// 	),
	// ),
	'course_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'courses_layout_design',
		'priority'     => 20,
		'label'        => esc_html__( 'Site Background', 'jmsiteam' ),
		'default'      => webapp()->default( 'course_background' ),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.single-courses',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Course Background', 'jmsiteam' ),
		),
	),
	'course_content_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'courses_layout_design',
		'priority'     => 20,
		'label'        => esc_html__( 'Content Background', 'jmsiteam' ),
		'default'      => webapp()->default( 'course_content_background' ),
		'live_method'  => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.single-courses .content-bg, body.single-courses:not(.content-style-unboxed) .tutor-price-preview-box, body.single-courses.content-style-unboxed .site',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Course Content Background', 'jmsiteam' ),
		),
	),
);

Theme_Customizer::add_settings( $settings );

