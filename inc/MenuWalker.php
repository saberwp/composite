<?php

// Custom Menu Walker to Support Tailwind Menu Components.
// Tutorial reference: https://awhitepixel.com/blog/wordpress-menu-walkers-tutorial/.

namespace Composite;

class MenuWalker extends \Walker_Nav_Menu {

	public function start_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '<div class="composite-flyout-nav hidden absolute z-10 -ml-4 mt-3 w-screen max-w-md transform px-2 sm:px-0 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2">';
		$output .= '<div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">';
		$output .= '<div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">';
	}

	public function end_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '</div>';
		$output .= '</div>';
		$output .= '</div>';
	}

	public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {

		if( $depth === 0 && $args->walker->has_children === false ) {
			$output .= '<div>';
			$output .= '<a href="' . $data_object->url . '" class="text-base font-medium text-gray-500 hover:text-gray-900">' . $data_object->title;
			$output .= '</a>';
		}

		if( $depth === 0 && $args->walker->has_children === true ) {
			$output .= '<div class="composite-flyout relative">';
			$output .= '<button type="button" class="text-gray-500 group inline-flex items-center rounded-md bg-white text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" aria-expanded="false">
            <span>' . $data_object->title . '</span>
            <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </button>';
		}

		if( $depth > 0 ) {
			$output .= '<div>';
			$icon = get_field('icon', $data_object->ID);
			$iconExists = false;
			$iconSvg    = false;
			$iconUrl    = false;
			if( is_array( $icon ) ) {
				$iconExists = true;
				$iconUrl = $icon['url'];
			}
			if( is_array( $icon ) && $icon['mime_type'] === 'image/svg+xml' ) {
				$filepath = get_attached_file( $icon['id'] );
				ob_start();
				require( $filepath );
				$iconSvg = ob_get_contents();
				ob_end_clean();
			}
			$output .= '<a href="' . $data_object->url . '" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">';
			if( $iconExists ) {
				if( $iconSvg ) {
					$output .= $iconSvg;
				} else {
					$output .= '<img class="w-10 h-10" src="' . $iconUrl . '" />';
				}
			}
      $output .= '<div class="ml-4">
          <p class="text-base font-medium text-gray-900">' . $data_object->title . '</p>
          <p class="mt-1 text-sm text-gray-500">' . $data_object->description . '</p>
        </div>
      ';
			$output .= '</a>';
		}

	}

	public function end_el( &$output, $data_object, $depth = 0, $args = null ) {
		$output .= '</div>';
	}

}
