<?php
include_once( ABSPATH . 'wp-admin/includes/plugin.php');
$title = '';
$hash_title = '';
$hash_word = '';

if( ! is_home() || ! is_404() ) {
	$title = preg_replace( "/(['#'].*)/", '', get_the_title() );
	preg_match_all( "/(['#'].*)/", get_the_title(), $hash_title );
	if ( $hash_title[0] ) {
		$hashs = explode( " ", $hash_title[0][0] );
		foreach( $hashs as $hash ) {
			if ( $hash === reset( $hashs ) ) {
				$hash_word = preg_replace( "/(['#'])/", '', $hash  );
			}
		}
	}
}

if ( is_plugin_active( 'sns-count-cache/sns-count-cache.php' ) ) {
	//Init Array
	$sns = array (
		'hateb' =>
			array (
				'a_link_before_home' => '<a href="//b.hatena.ne.jp/entry/' . home_url( '/' ) . '" target="_blank">',
				'a_link_before_contents' => '<a href="//b.hatena.ne.jp/entry/' .  get_the_permalink() . '" target="_blank">',
				'img' => COMMON_PFIX . '/img/share/hateb_bt.png',
				'alt' => 'このエントリーをはてなブックマークに追加',
				'class' => 'metasns-hateb',
				'share' => shareNumber( $args, 'hateb' )
			),
		'twitter' =>
			array (
				'a_link_before_home' => '<a href="//twitter.com/share/?text=' . get_bloginfo( 'name' ) . '&amp;url=' . home_url( '/' ) . '" onClick="window.open(encodeURI(decodeURI(this.href)), \'tweetwindow\', \'width=650, height=470, personalbar=0, toolbar=0, scrollbars=1, sizable=1\'); return false;" rel="nofollow">',
				'a_link_before_contents' => '<a href="//twitter.com/share/?text=' . $title . '｜' .  get_bloginfo( 'name' ) . '&amp;url=' .  get_the_permalink() . '&amp;hashtags=' .  $hash_word . '"  onClick="window.open(encodeURI(decodeURI(this.href)), \'tweetwindow\', \'width=650, height=470, personalbar=0, toolbar=0, scrollbars=1, sizable=1\'); return false;" rel="nofollow">',
				'img' => COMMON_PFIX . '/img/share/twitter_bt.png',
				'alt' => 'tiwtter でつぶやく',
				'class' => 'metasns-hateb',
				'share' => shareNumber( $args, 'twitter' )
			),
		'facebook' =>
			array (
				'a_link_before_home' => '<a href="//www.facebook.com/share.php?u=' . home_url( '/' ) . '" onclick="window.open(encodeURI(decodeURI(this.href)), \'FBwindow\', \'width=554, height=470, menubar=no, toolbar=no, scrollbars=yes\'); return false;" rel="nofollow">',
				'a_link_before_contents' => '<a href="//www.facebook.com/share.php?u=' . get_the_permalink() . '" onclick="window.open(encodeURI(decodeURI(this.href)), \'FBwindow\', \'width=554, height=470, menubar=no, toolbar=no, scrollbars=yes\'); return false;" rel="nofollow">',
				'img' => COMMON_PFIX . '/img/share/facebook_bt.png',
				'alt' => 'シェアする',
				'class' => 'metasns-fb',
				'share' => shareNumber( $args, 'facebook' )
			),
		'pocket' =>
			array (
				'a_link_before_home' => '<a href="//www.getpocket.com/edit?u=' .  home_url( '/' ) . '" rel="nofollow">',
				'a_link_before_contents' => '<a href="//www.getpocket.com/edit?u=' . get_the_permalink() . '" rel="nofollow">',
				'img' => COMMON_PFIX . '/img/share/pocket_bt.png',
				'alt' => 'シェアする',
				'class' => 'metasns-pocket',
				'share' => shareNumber( $args, 'pocket' )
			),
	);
} else {
	$sns = array (
		'hateb' =>
			array (
				'a_link_before_home' => '<a href="#">',
				'a_link_before_contents' => '<a href="#">',
				'img' => COMMON_PFIX . '/img/share/hateb_bt.png',
				'alt' => 'このエントリーをはてなブックマークに追加',
				'class' => 'metasns-hateb',
				'share' => ''
			),
		'twitter' =>
			array (
				'a_link_before_home' => '<a href="#">',
				'a_link_before_contents' => '<a href="#">',
				'img' => COMMON_PFIX . '/img/share/twitter_bt.png',
				'alt' => 'tiwtter でつぶやく',
				'class' => 'metasns-hateb',
				'share' => ''
			),
		'facebook' =>
			array (
				'a_link_before_home' => '<a href="#">',
				'a_link_before_contents' => '<a href="#">',
				'img' => COMMON_PFIX . '/img/share/facebook_bt.png',
				'alt' => 'シェアする',
				'class' => 'metasns-fb',
				'share' => ''
			),
		'pocket' =>
			array (
				'a_link_before_home' => '<a href="#">',
				'a_link_before_contents' => '<a href="#">',
				'img' => COMMON_PFIX . '/img/share/pocket_bt.png',
				'alt' => 'シェアする',
				'class' => 'metasns-pocket',
				'share' => ''
			),
	);
}
?>
<ul class="metasns">
	<?php foreach( $sns as $key => $name ) : ?>
		<li class="<?php echo $key; ?> metasns-item">
			<?php
			if ( $args != 'home'  ) {
				echo $name['a_link_before_contents'];
			} else {
				echo $name['a_link_before_home'];
			}
			?>
				<dl class="metasns-item-set">
					<dt><img src="<?php echo esc_html( $name['img'] ); ?>" alt="<?php echo esc_html( $name['alt'] ); ?>" class="<?php echo esc_html( $name['class'] ); ?>"></dt>
					<dd>
						<?php
							if ( is_plugin_active( 'sns-count-cache/sns-count-cache.php' ) ) {
								echo $name['share'];
							}
						?>
					</dd>
				</dl>
			<?php echo '</a>'; ?>
		</li>
	<?php endforeach; ?>
</ul>