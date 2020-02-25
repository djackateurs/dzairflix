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
$se		= dt_get_meta("temporada");
$ep		= dt_get_meta("episodio");
$name	= dt_get_meta("episode_name");
$serie	= dt_get_meta("serie");
$dates	= dt_get_meta("air_date");
$dt_player	= get_post_meta($post->ID, 'repeatable_fields', true);
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id,'dt_episode_a', true);
// End PHP
?>
<article class="item se <?php echo get_post_type(); ?>" id="post-<?php the_id(); ?>">
	<div class="poster">
		<img src="<?php if($thumb_id) { echo $thumb_url[0]; } else { dt_image('dt_backdrop', $post->ID, 'w300'); } ?>" alt="<?php the_title(); ?>">
		<div class="season_m animation-1">
			<a href="<?php the_permalink() ?>">
				<span class="b"><?php echo $se; ?>x<?php echo $ep; ?></span>
				<span class="a"><?php _d('season x episode'); ?></span>
				<span class="c"><?php echo $serie; ?></span>
			</a>
		</div>
		<?php wp_delete_post_link('<span class="icon-times-circle"></span>', '<i class="delete">', '</i>'); ?>
		<?php if($mostrar = $terms = strip_tags( $terms = get_the_term_list( $post->ID, 'dtquality'))) {  ?><span class="quality"><?php echo $mostrar; ?></span><?php } ?>
		<span class="serie"><?php echo $serie; ?>  ( <?php echo $se; ?> x <?php echo $ep; ?> )</span>
	</div>
	<div class="data">
		<h3>
		<?php $i=0; if ( $dt_player ) : foreach ( $dt_player as $field ) { if($i==2) break; ?>
		<div class="flag" style="background-image: url(<?php echo DT_DIR_URI, '/assets/img/flags/',$field['idioma'],'.png'; ?>)"></div>
		<?php $i++; } endif; ?>
		<?php echo $name; ?>
		</h3>
		<span><?php $date = new DateTime($dates); echo $date->format(DT_TIME); ?></span>
	</div>
</article>
