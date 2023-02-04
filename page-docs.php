<?php
/*
Template Name: Docs Page
*/

get_header();

$docs = new \Composite\Docs;
$docs->parse_terms();
$docs->get_child_pages();

/*
echo '<pre>';
var_dump( $docs );
echo '</pre>';
die();
*/

if ( count( $docs->doc_pages ) > 0 ) :
?>

<div class="container max-w-5xl mx-auto">
  <div class="flex">
    <div class="w-1/4 bg-gray-300 shrink-0 grow-0 p-4">
      <div class="docs-menu">
        <ul>
          <?php
	          foreach ( $docs->term_tree as $term ) {
	            echo '<li><a href="#' . $term['id'] . '" class="block py-2 text-gray-800 hover:text-indigo-600 transition-colors duration-200">' . $term['name'] . '</a></li>';
							if( $term['children'] ) {
								foreach ( $term['children'] as $term ) {
									echo '<ul class="ml-4">';
									echo '<li class="text-sm"><a href="#' . $term['id'] . '" class="block py-2 text-gray-800 hover:text-indigo-600 transition-colors duration-200">' . $term['name'] . '</a></li>';
									echo '</ul>';
								}
							}
						}
          ?>
        </ul>
      </div>
    </div>
    <div class="w-3/4 p-4 shrink-0 grow-0">
      <div class="docs-content prose">
        <?php foreach ( $docs->doc_pages as $page ) { ?>
          <div id="<?php echo esc_attr( $page['id'] ); ?>" class="docs-section">
            <h2 class="text-2xl font-medium mb-4"><?php echo $page['title']; ?></h2>
            <?php echo get_the_content( null, false, $page['id'] ); ?>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>

<?php
endif;
wp_reset_postdata();

get_footer();
