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
if(get_option('dt_activate_post_links') =='true') { ?>
<div class="box_links">
	<?php get_template_part('inc/parts/single/listas/links'); ?>
</div>
<?php } ?>