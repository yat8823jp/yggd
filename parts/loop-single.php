<section class="lout-main-contents-postdata">

<?php
	get_template_part( 'parts/eyecatch' );
	if(! is_single() ){
		the_content();
	} else {
		$paragraphAfter= 1; //何番目の段落の下に表示するか
		$content = apply_filters( 'the_content', get_the_content() );
		$content = explode( "</p>", $content );
		for ( $i = 0; $i < count( $content ); $i++ ) {
			if ( $i == $paragraphAfter ) {
				get_template_part( 'parts/more', 'ad' );
			}
			echo $content[$i] . "</p>";
		}
	}//else

	if( is_single() ){
		// get_template_part( 'parts/single', 'ad' );
		get_template_part( 'parts/single', 'ad' );
		get_template_part( 'parts/share', 'end' );
	}
?>

</section><!--/.lout-main-contents-postdata-->

<?php
	if( is_single() ){
		?>
		<div class="yarpp-related">
		<section class="lout-related mod-main-content-sub mod-adsense-relation">
			<h2 class="mod-main-content-sub-h">Related</h2>
			<div class="mod-related mod-adsense-relation__inner">
				<?php
					get_template_part( 'parts/adsense', 'relation' );
				?>
			</div>
		</section>
		<?php
		related_posts();
		if( comments_open() ) {
			echo '<div class="deco"><img src="' . COMMON_PFIX . '/img/flower.png" alt=""></div>';
			comments_template();
		} else {
			echo '<br>';
		}
	}//if
?>
