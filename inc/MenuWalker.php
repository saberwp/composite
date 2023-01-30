<?php

// Custom Menu Walker to Support Tailwind Menu Components.
// Tutorial reference: https://awhitepixel.com/blog/wordpress-menu-walkers-tutorial/.

namespace Composite;

class MenuWalker extends \Walker_Nav_Menu {

	public function start_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '<nav class="hidden space-x-10 md:flex"><div class="relative">';
	}

	public function end_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '</div></nav>';
	}

	public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
		$output .= '<a href="' . $data_object->url . '" class="text-base font-medium text-gray-500 hover:text-gray-900">' . $data_object->title;

		//var_dump( $data_object );

	}

	public function end_el( &$output, $data_object, $depth = 0, $args = null ) {
		$output .= '</a>';
	}

}
