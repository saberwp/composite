<div class="docs-menu">
	<ul>

		<?php
			// Top level of term tree.
			foreach ( $this->term_tree as $term ) {
				echo '<li class="font-semibold"><div class="block py-2 text-gray-800">' . $term['name'] . '</div></li>';

				// Pages under top level term tree.
				$pages = $this->get_child_pages( $term['id'] );
				foreach( $pages as $page ) {
					echo '<ul class="ml-4">';
					echo '<li class="text-sm font-medium"><a href="#' . $page['id'] . '" class="block py-2 text-gray-800 hover:text-indigo-600 transition-colors duration-200">' . $page['title'] . '</a></li>';
					echo '</ul>';
				}

			}
		?>

	</ul>
</div>
