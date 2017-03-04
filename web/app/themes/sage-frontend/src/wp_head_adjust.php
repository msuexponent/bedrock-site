<?php
 // Remove the link to Really Simple Discovery 
remove_action( 'wp_head', 'rsd_link' );

 // Remove the link to the Windows Live Writer manifest file 
remove_action( 'wp_head', 'wlwmanifest_link' );

 // Remove the WordPress generator tag 
remove_action( 'wp_head', 'wp_generator' );

 // Remove previous link 
remove_action( 'wp_head', 'parent_post_rel_link' );

 // Remove relational link for the first post. 
remove_action( 'wp_head', 'start_post_rel_link' );

 // Deprecated function. Removes rel navigation links. 
remove_action( 'wp_head', 'index_rel_link' );

 // Remove relational links for the posts adjacent to the current post 
remove_action( 'wp_head', 'adjacent_posts_rel_link' );

 // Removes the rel=shortlink of a shortlink 
remove_action( 'wp_head', 'wp_shortlink_wp_head' );

 // Remove the links to the general feeds. 
remove_action( 'wp_head', 'feed_links', 2);

 // Remove the links to the extra feeds such as category feeds. 
remove_action( 'wp_head', 'feed_links_extra', 3);
?>