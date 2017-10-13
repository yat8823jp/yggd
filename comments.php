<section class="lout-comment mod-main-content-sub">
	<h2 class="mod-main-content-sub-h">Comments</h2>

	<?php
		if ( have_comments() ) {
			wp_list_comments( array(
				'style'       => 'div',
				'short_ping'  => true,
				'avatar_size' => 78,
				'type' => 'comment',
				'callback' => 'theme_comment'
			) );
		} //if
	?>

	<div class="lout-comment-form">
		<?php comment_form( ); ?>
	</div><!-- //.lout-comment-form -->

</section>
