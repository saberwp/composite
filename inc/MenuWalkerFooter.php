<?php

// Custom Menu Walker to Support Tailwind Menu Components.
// Tutorial reference: https://awhitepixel.com/blog/wordpress-menu-walkers-tutorial/.

namespace Composite;

class MenuWalkerFooter extends \Walker_Nav_Menu {

	public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {

		$defaults = 'text-sm leading-6 text-gray-600 hover:text-gray-900';
		$menu_item_classes = get_field('menu_item_classes', 'options');

		if( $depth === 0 && $args->walker->has_children === false ) {
			$output .= '<li>';
			$output .= '<a href="' . $data_object->url . '" class="' . $menu_item_classes . '">' . $data_object->title;
			$output .= '</a>';
		}

	}

	public function end_el( &$output, $data_object, $depth = 0, $args = null ) {
		$output .= '</li>';
	}

}
