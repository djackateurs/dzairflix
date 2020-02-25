<?php 
$rating = dt_get_meta( DT_MAIN_RATING );
$imdb = ($a = dt_get_meta('imdbRating')) ? $a : '0';

?>

<article class="w_item_b"  id="post-<?php the_id(); ?>">
<?php $dates = dt_get_meta("air_date"); ?>
	<a href="<?php the_permalink() ?>">
		<div class="image">
			<img src="<?php if($thumb_id = get_post_thumbnail_id()) { $thumb_url = wp_get_attachment_image_src($thumb_id,'dt_poster_b', true); echo $thumb_url[0]; } else { dt_image('dt_poster', $post->ID, 'w90'); } ?>" alt="<?php the_title(); ?>" />
		</div>
		<div class="data">
				<h3><?php the_title(); ?></h3>
				<?php if($mostrar = $terms = strip_tags( $terms = get_the_term_list( $post->ID, 'dtyear'))) {  ?>
				<span class="wdate"><?php echo $mostrar; ?></span>
				<?php } ?>
				<span class="wextra">
					<b><i class="icon-star2"></i> <?php echo ($rating) ? $rating : $imdb; ?></b>
				</span>
		</div>
	</a>
</article>