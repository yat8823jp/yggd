<?php
// 非SSL版の自身のURLを取得 $httpurlに格納
$httpurl = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; // SSL版の自身のURLを取得 $httpsurlに格納
$httpsurl = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

include_once( ABSPATH . 'wp-admin/includes/plugin.php');

//init
$sns = array (
	'hateb' =>
		array (
			'a_link_before' => '<a href="//b.hatena.ne.jp/entry/' . get_bloginfo('url') . '" target="_blank">',
			'img' => COMMON_PFIX . '/img/share/hateb_bt.png',
			'alt' => 'このエントリーをはてなブックマークに追加',
			'class' => 'metasns-hateb',
			'share' => scc_get_share_hatebu( array( 'post_id' => 'home' ) )
		),
	'twitter' =>
		array (
			'a_link_before' => '<a href="//twitter.com/share/?text=' . get_bloginfo( 'name' ) . '&amp;url=' . get_bloginfo( 'url' ) . '" onClick="window.open(encodeURI(decodeURI(this.href)), \'tweetwindow\', \'width=650, height=470, personalbar=0, toolbar=0, scrollbars=1, sizable=1\'); return false;" rel="nofollow">',
			'img' => COMMON_PFIX . '/img/share/hateb_bt.png',
			'alt' => 'tiwtter でつぶやく',
			'class' => 'metasns-hateb',
			'share' => scc_get_share_hatebu( array( 'post_id' => 'home' ) )
		),
	'facebook' =>
		array (
			'a_link_before' => '<a href="//www.facebook.com/share.php?u=' . get_bloginfo( 'url' ) . '" onclick="window.open(encodeURI(decodeURI(this.href)), \'FBwindow\', \'width=554, height=470, menubar=no, toolbar=no, scrollbars=yes\'); return false;" rel="nofollow">',
			'img' => COMMON_PFIX . '/img/share/facebook_bt.png',
			'alt' => 'シェアする',
			'class' => 'metasns-fb',
			'share' => scc_get_share_facebook( array( 'post_id' => 'home' ) )
		),
	'pocket' =>
	array (
		'a_link_before' => '<a href="//www.getpocket.com/edit?u=' .  get_bloginfo( 'url' ) . '" rel="nofollow">',
		'img' => COMMON_PFIX . '/img/share/pocket_bt.png',
		'alt' => 'シェアする',
		'class' => 'metasns-pocket',
		'share' => scc_get_share_pocket( array( 'post_id' => 'home' ) )
	),
);
?>
<ul class="metasns">
	<?php foreach( $sns as $key => $name ) : ?>
		<li class="<?php echo $key; ?> metasns-item">
			<?php echo $name['a_link_before']; ?>
				<dl class="metasns-item-set">
					<dt><img src="<?php echo esc_html( $name['img'] ); ?>" alt="<?php echo esc_html( $name['alt'] ); ?>" class="<?php echo esc_html( $name['class'] ); ?>"></dt>
					<dd>
						<?php
							if ( is_plugin_active( 'sns-count-cache/index.php' ) ) {
								echo $name['share'];
							}
						?>
					</dd>
				</dl>
			<?php echo '</a>'; ?>
		</li>
	<?php endforeach; ?>
</ul>

<!--
<ul class="metasns">
	<li class="hateb metasns-item">
		<a href="//b.hatena.ne.jp/entry/<?php bloginfo('url'); ?>" target="_blank">
			<dl class="metasns-item-set">
				<dt><img src="<?php echo COMMON_PFIX . '/img/share/hateb_bt.png' ?>" alt="このエントリーをはてなブックマークに追加" class="metasns-hateb"></dt>
				<dd>
					<?php
						if ( is_plugin_active( 'sns-count-cache/index.php' ) ) {
							if ( ! function_exists( scc_get_share_hatebu( array( 'post_id' => 'home' ) ) ) ) {
								echo scc_get_share_hatebu( array( 'post_id' => 'home' ) );
							}
						}
					?>
				</dd>
			</dl>
		</a>
	</li>
	<li class="twitter metasns-item">
		<a href="//twitter.com/share/?text=<?php bloginfo('name'); ?>&amp;url=<?php bloginfo('url'); ?>" onClick="window.open(encodeURI(decodeURI(this.href)), 'tweetwindow', 'width=650, height=470, personalbar=0, toolbar=0, scrollbars=1, sizable=1'); return false;" rel="nofollow">
			<dl class="metasns-item-set">
				<dt><img src="<?php echo COMMON_PFIX . '/img/share/twitter_bt.png' ?>" alt="ツイッターでつぶやく" class="metasns-tw"></dt>
				<dd>
					<?php
						if ( is_plugin_active( 'sns-count-cache/index.php' ) ) {
							if( ! function_exists( scc_get_share_twitter( array( 'post_id' => 'home' ) ) ) ) {
								 echo scc_get_share_twitter( array( 'post_id' => 'home' ) );
							}
						}
					?>
				</dd>
			</dl>
		</a><script>window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));</script>
	</li>
	<li class="facebook metasns-item">
		<a href="//www.facebook.com/share.php?u=<?php bloginfo('url'); ?>" onclick="window.open(encodeURI(decodeURI(this.href)), 'FBwindow', 'width=554, height=470, menubar=no, toolbar=no, scrollbars=yes'); return false;" rel="nofollow">
			<dl class="metasns-item-set">
				<dt><img src="<?php echo COMMON_PFIX . '/img/share/facebook_bt.png' ?>" alt="シェアする" class="metasns-fb"></dt>
				<dd>
					<?php
						// if(! function_exists( scc_get_share_facebook( array( 'post_id' => 'home' ) ) ) ) echo scc_get_share_facebook( array( 'post_id' => 'home' ) );
						?>
				</dd>
			</dl>
		</a>
	</li>
	<li class="pocket metasns-item">
		<a href="//www.getpocket.com/edit?u=<?php bloginfo('url'); ?>" rel="nofollow">
			<dl class="metasns-item-set">
				<dt><img src="<?php echo COMMON_PFIX . '/img/share/pocket_bt.png' ?>" alt="シェアする" class="metasns-pocket"></dt>
				<dd><?php //if(! function_exists( scc_get_share_pocket( array( 'post_id' => 'home' ) ) ) ) echo scc_get_share_pocket( array( 'post_id' => 'home' ) ); ?></dd>
			</dl>
		</a>
	</li>
</ul> -->
