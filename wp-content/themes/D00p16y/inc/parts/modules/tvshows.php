<?php
/* 
* -------------------------------------------------------------------------------------
* @author: Doothemes
* @author URI: https://doothemes.com/
* @aopyright: (c) 2017 Doothemes. All rights reserved
* -------------------------------------------------------------------------------------
*
* @since 2.1.4
*
*/

if(get_option('dt_mt_random_order') == 'true') {
	$rand = 'rand';
} else {
	$rand = '';	
} ?>
<header>
<h2><?php echo get_option('dt_mt_title','TV Shows'); ?></h2>
<?php if(get_option('dt_mt_activate_slider') == 'true') { if(get_option('dt_mt_autoplay_slider') == 'true') { } else { ?>
<div class="nav_items_module">
  <a class="btn prev4"><i class="icon-caret-left"></i></a>
  <a class="btn next4"><i class="icon-caret-right"></i></a>
</div>
<?php } } ?>
<span><?php echo total_series(); ?> <?php if($url = get_option('dt_tvshows_slug','tvshows')) { ?><a href="<?php echo esc_url( home_url() ) .'/'. $url .'/'; ?>" class="see-all"><?php _d('See all'); ?></a><?php } ?></span>
</header>
<div id="tvload" class="load_modules"><?php _d('Loading..');?></div>
<div <?php if(get_option('dt_mt_activate_slider') == 'true') { echo 'id="dt-tvshows"'; } ?> class="items">
	<?php query_posts( array('post_type' => array('tvshows'), 'showposts' => get_option('dt_mt_number_items','10'), 'orderby' => $rand, 'order' => 'desc')); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<?php get_template_part('inc/parts/item'); ?>
	<?php endwhile; wp_reset_query(); ?>
</div>