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
				<dd><?php if(! function_exists( scc_get_share_hatebu( array( 'post_id' => 'home' ) ) ) ) echo scc_get_share_hatebu( array( 'post_id' => 'home' ) ); ?></dd>
			</dl>
		</a>
	</li>
	<li class="twitter metasns-item">
		<a href="//twitter.com/share/?text=<?php bloginfo('name'); ?>&amp;url=<?php bloginfo('url'); ?>"  onClick="window.open(encodeURI(decodeURI(this.href)), 'tweetwindow', 'width=650, height=470, personalbar=0, toolbar=0, scrollbars=1, sizable=1'); return false;" rel="nofollow">
			<dl class="metasns-item-set">
				<dt><img src="<?php echo COMMON_PFIX . '/img/share/twitter_bt.png' ?>" alt="ツイッターでつぶやく" class="metasns-tw"></dt>
				<dd><?php if(! function_exists( scc_get_share_twitter( array( 'post_id' => 'home' ) ) ) ) echo scc_get_share_twitter( array( 'post_id' => 'home' ) ); ?></dd>
			</dl>
		</a><script>window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));</script>
	</li>
	<li class="facebook metasns-item">
		<a href="//www.facebook.com/share.php?u=<?php bloginfo('url'); ?>" onclick="window.open(encodeURI(decodeURI(this.href)), 'FBwindow', 'width=554, height=470, menubar=no, toolbar=no, scrollbars=yes'); return false;" rel="nofollow">
			<dl class="metasns-item-set">
				<dt><img src="<?php echo COMMON_PFIX . '/img/share/facebook_bt.png' ?>" alt="シェアする" class="metasns-fb"></dt>
				<dd><?php if(! function_exists( scc_get_share_facebook( array( 'post_id' => 'home' ) ) ) ) echo scc_get_share_facebook( array( 'post_id' => 'home' ) ); ?></dd>
			</dl>
		</a>
	</li>
</ul>
