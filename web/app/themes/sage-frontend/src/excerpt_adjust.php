<?php
/* Custom excerpt length */
function wpdocs_custom_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


/* Remove continued link in custom excerpt */
function remove_continued() {
   	return '...';
}
add_filter('excerpt_more', 'remove_continued');

?>