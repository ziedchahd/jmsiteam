<?php
/**
 * Template part for displaying a pagination
 *
 * @package Base
 */

namespace Base;

the_posts_pagination(
	apply_filters(
		'base_pagination_args',
		array(
			'mid_size'           => 2,
			'prev_text'          => '<span class="screen-reader-text">' . __( 'Previous Page', 'jmsiteam' ) . '</span>' . webapp()->get_icon( 'arrow-left', _x( 'Previous', 'previous set of archive results', 'jmsiteam' ) ),
			'next_text'          => '<span class="screen-reader-text">' . __( 'Next Page', 'jmsiteam' ) . '</span>' . webapp()->get_icon( 'arrow-right', _x( 'Next', 'next set of archive results', 'jmsiteam' ) ),
			'screen_reader_text' => __( 'Page navigation', 'jmsiteam' ),
		)
	)
);
