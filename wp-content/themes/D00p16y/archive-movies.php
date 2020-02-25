<?php
/*
* ----------------------------------------------------
* @author: Doothemes
* @author URI: https://doothemes.com/
* @copyright: (c) 2017 Doothemes. All rights reserved
* ----------------------------------------------------
*
* @since 2.1.4
*
*/
get_header();
doo_glossary('movies');
echo '<div class="module"><div class="content">';
get_template_part('inc/parts/modules/featured-post-movies');
echo '<header class="archive_post"><h1>'. __d('Movies').'</h1><span>'.total_peliculas().'</span></header>';
echo '<div id="archive-content" class="animation-2 items">';
if (have_posts()) {
    while (have_posts()) {
        the_post();
		get_template_part('inc/parts/item');
	}
}
echo '</div>';
if ( function_exists("pagination") ) {
	pagination();
}
echo '</div>';
get_template_part('inc/parts/sidebar');
echo '</div>';
get_footer();
