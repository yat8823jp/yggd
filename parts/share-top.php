<?php
// 非SSL版の自身のURLを取得 $httpurlに格納
$httpurl = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; // SSL版の自身のURLを取得 $httpsurlに格納
$httpsurl = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>

<ul class="metasns">
	<li class="hateb metasns-item">
		<a href="//b.hatena.ne.jp/entry/<?php bloginfo('url'); ?>" target="_blank">
			<dl class="metasns-item-set">
				<dt><img src="<?php echo COMMON_PFIX . '/img/share/hateb_bt.png' ?>" alt="このエントリーをはてなブックマークに追加" class="metasns-hateb"></dt>
				<dd>
					<?php
						// if( is_plugin_active ( plugins_url() . '/sns-count-cache/sns-count-cache.php' ) ) :
							echo scc_check( 'scc_get_share_hatebu' );
						// endif;
					?>
				</dd>
			</dl>
		</a>
	</li>
	<li class="twitter metasns-item">
		<a href="//twitter.com/share/?text=<?php bloginfo('name'); ?>&amp;url=<?php bloginfo('url'); ?>"  onClick="window.open(encodeURI(decodeURI(this.href)), 'tweetwindow', 'width=650, height=470, personalbar=0, toolbar=0, scrollbars=1, sizable=1'); return false;" rel="nofollow">
			<dl class="metasns-item-set">
				<dt><img src="<?php echo COMMON_PFIX . '/img/share/twitter_bt.png' ?>" alt="ツイッターでつぶやく" class="metasns-tw"></dt>
				<dd><?php echo scc_check( 'scc_get_share_twitter' ); ?></dd>
			</dl>
		</a><script>window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));</script>
	</li>
	<li class="facebook metasns-item">
		<a href="//www.facebook.com/share.php?u=<?php bloginfo('url'); ?>" onclick="window.open(encodeURI(decodeURI(this.href)), 'FBwindow', 'width=554, height=470, menubar=no, toolbar=no, scrollbars=yes'); return false;" rel="nofollow">
			<dl class="metasns-item-set">
				<dt><img src="<?php echo COMMON_PFIX . '/img/share/facebook_bt.png' ?>" alt="シェアする" class="metasns-fb"></dt>
				<dd><?php echo scc_check( 'scc_get_share_facebook' ); ?></dd>
			</dl>
		</a>
	</li>
</ul>

<?php
	function is_plugin_active( $file ) {
		$is_active = false;
		foreach( ( array ) get_option( 'active_plugins' ) as $val ) :
			if( preg_match( '/' . preg_quote( $file, "/" ) . '/i', $val ) ) :
				$is_active = true;
				break;
			endif;
		endforeach;
		return $is_active;
	}
	function scc_check( $sns ) {
		$num = null;
		$is_active = false;
		$plugin = plugins_url() . '/sns-count-cache/sns-count-cache.php';
		if( is_plugin_active( $plugin ) ) {
			if(! function_exists( $sns( array( 'post_id' => 'home' ) ) ) ) :
				echo esc_html( $sns( array( 'post_id' => 'home' ) ) );
			endif;
		}
		echo $num;
		return $num;
	}
?>
