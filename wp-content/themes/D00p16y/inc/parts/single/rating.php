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
if($d = $dt_rating_imdb) { ?>
<div class="srating">
	<div class="promedio"><?php echo $d; ?></div>
	<div class="rdata">
		<div class="stars <?php echo dt_get_option('imdb_stars','stars10'); ?>">
			<span class="rating-stars-a">
				<i class="icon-star2"></i>
				<i class="icon-star2"></i>
				<i class="icon-star2"></i>
				<i class="icon-star2"></i>
				<i class="icon-star2"></i>
				<i class="icon-star2"></i>
				<i class="icon-star2"></i>
				<i class="icon-star2"></i>
				<i class="icon-star2"></i>
				<i class="icon-star2"></i>
			</span>
			<span class="rating-stars-b" style="width: <?php echo $d*10; ?>%;">
				<i class="icon-star2"></i>
				<i class="icon-star2"></i>
				<i class="icon-star2"></i>
				<i class="icon-star2"></i>
				<i class="icon-star2"></i>
				<i class="icon-star2"></i>
				<i class="icon-star2"></i>
				<i class="icon-star2"></i>
				<i class="icon-star2"></i>
				<i class="icon-star2"></i>
			</span>                        
		</div>
		<div class="votes"><?php echo '<strong>IMDb</strong>', ' ', $dt_votes_imdb,' ', __d('votes'); ?></div>
	</div>
</div>	
<?php } ?>
