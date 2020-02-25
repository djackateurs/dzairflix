<div class="pag_episodes">
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

$ids = get_post_meta($post->ID, "ids", $single = true);
$season = get_post_meta($post->ID, "temporada", $single = true);
$episode = get_post_meta($post->ID, "episodio", $single = true) - 1;
$datafull = season_of($ids);
query_posts(
	array(
		'meta_key' => 'ids',
		'post_type' => 'episodes',
		'showposts' => '1',
		'order' => 'DESC',
		'meta_query' => array(
		'relation' => 'AND',
			array('key' => 'episodio', 'value' => $episode, 'compare' => '=',),
			array('key' => 'temporada','value' => $season,'compare' => '=',),
			array('key' => 'ids','value' => array( $ids ),'compare' => 'IN'),
		),
	)
);
$count = 0;
if (have_posts()): while ( have_posts() ) : the_post(); ?>
<div class="item">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
<i class="icon-chevron-left"></i> <span><?php _d('previous episode'); ?></span>
</a>
</div>
<?php $count++; endwhile; else: ?>
<div class="item"><a class="nonex"><i class="icon-chevron-left"></i> <span><?php _d('previous episode'); ?></span></a></div>
<?php endif; wp_reset_query(); ?>


<div class="item">
<a href="<?php get_tv_permalink($ids); ?>">
<i class="icon-bars"></i> <span><?php _d('episodes list'); ?></span>
</a>
</div>

<?php
$ids = get_post_meta($post->ID, "ids", $single = true);
$season = get_post_meta($post->ID, "temporada", $single = true);
$episode = get_post_meta($post->ID, "episodio", $single = true) + 1;
$datafull = season_of($ids);
query_posts(
	array(
		'meta_key' => 'ids',
		'post_type' => 'episodes',
		'showposts' => '1',
		'order' => 'DESC',
		'meta_query' => array(
		'relation' => 'AND',
			array('key' => 'episodio', 'value' => $episode, 'compare' => '=',),
			array('key' => 'temporada','value' => $season,'compare' => '=',),
			array('key' => 'ids','value' => array( $ids ),'compare' => 'IN'),
		),
	)
);
$count = 0;
if (have_posts()): while ( have_posts() ) : the_post(); ?>
<div class="item">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
<span><?php _d('next episode'); ?></span> <i class="icon-chevron-right"></i>
</a>
</div>
<?php $count++; endwhile; else: ?>
<div class="item"><a class="nonex"><span><?php _d('next episode'); ?></span> <i class="icon-chevron-right"></i></a></div>
<?php endif; wp_reset_query(); ?>
</div>