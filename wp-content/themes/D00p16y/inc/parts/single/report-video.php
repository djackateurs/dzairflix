<div id="report-video" class="report-video-form animation-3">
	<div class="fixform">
		<div class="title"><?php _d('what going on?'); ?></div>
		<div id="msg"></div>
		<form id="post_report" class="reportar_form">
			<fieldset>
				<textarea name="mensaje" rows="4" placeholder="<?php _d('What is the problem? Please explain..'); ?>" required></textarea>
			</fieldset>
			<fieldset>
				<input type="email" name="reportmail" placeholder="<?php _d('Email address'); ?>" required />
				<label><?php _d('Your email is only visible to moderators'); ?></label>
			</fieldset>
			<fieldset>
				<div class="g-recaptcha" data-sitekey="<?php global $doo_gorc_public; echo $doo_gorc_public; ?>"></div>
				<label><?php _d('Verification code'); ?></label>
			</fieldset>
			<fieldset>
				<input type="submit" value="<?php _d('Send report'); ?>">
			</fieldset>
			<input type="hidden" name="idpost" value="<?php the_id(); ?>">
			<input type="hidden" name="permalink" value="<?php the_permalink() ?>">
			<input type="hidden" name="title" value="<?php the_title(); ?>">
			<input type="hidden" name="ip" value="<?php echo get_client_ip(); ?>">
			<input type="hidden" name="send_report" value="true">
			<?php wp_nonce_field('send-report','send-report-nonce') ?>
		</form>
	</div>
	<a class="report-video mtoc"><i class="icon-close"></i></a>
</div>
<div class="control">
	<nav class="player">
		<ul class="options">
			<li>
			<?php if ( $dt_player ) : ?>
				<ul class="idTabs sourceslist">
				<?php $numerado = 1; { foreach ( $dt_player as $field ) { ?>
					<li><a class="options" href="#option-<?php echo $numerado; ?>">
					<!--<b class="icon-play_arrow"></b>--><?php echo $field['name']; ?>
					<?php if($field['idioma']) { ?><span class="dt_flag"><img src="<?php echo DT_DIR_URI, '/assets/img/flags/',$field['idioma'],'.png'; ?>"></span><?php } ?>
					</a></li>
				<?php $numerado++; } } ?> 
				</ul>
				<?php endif; ?>
			</li>
		</ul>
	</nav>
</div>
