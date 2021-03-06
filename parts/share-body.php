<?php if( ! is_404() ) : ?>
	<?php
		$title = preg_replace( "/(['#'].*)/", '', esc_html( get_the_title() ) );
		preg_match_all( "/(['#'].*)/", esc_html( get_the_title() ), $hash_title );
		if ( $hash_title[0] ) {
			$hashs = explode( " ", $hash_title[0][0] );
			foreach( $hashs as $hash ) {
				if ( $hash === reset( $hashs ) ) {
					$hash_word = preg_replace( "/(['#'])/", '', $hash  );
				}
			}
		}
	?>
<ul class="metasns">
	<li class="hateb metasns-item">
		<a href="//b.hatena.ne.jp/entry/<?php the_permalink(); ?>" target="_blank">
			<dl class="metasns-item-set">
				<dt><img src="<?php echo COMMON_PFIX . '/img/share/hateb_bt.png' ?>" alt="このエントリーをはてなブックマークに追加" class="metasns-hateb"></dt>
				<dd><?php if(! function_exists('scc_get_share_hatebu()')) echo scc_get_share_hatebu(); ?></dd>
			</dl>
		</a>
	</li>
	<li class="twitter metasns-item">
		<a href="//twitter.com/share/?text=<?php echo $title; ?>｜<?php bloginfo( 'name' ); ?>&amp;url=<?php the_permalink(); ?>&amp;hashtags=<?php if( isset( $hash_word ) ) { echo $hash_word; } ?>"  onClick="window.open(encodeURI(decodeURI(this.href)), 'tweetwindow', 'width=650, height=470, personalbar=0, toolbar=0, scrollbars=1, sizable=1'); return false;" rel="nofollow">
			<dl class="metasns-item-set">
				<dt><img src="<?php echo COMMON_PFIX . '/img/share/twitter_bt.png' ?>" alt="ツイッターでつぶやく" class="metasns-tw"></dt>
				<dd><?php if(! function_exists('scc_get_share_twitter()')) echo scc_get_share_twitter(); ?></dd>
			</dl>
		</a>
	</li>
	<li class="facebook metasns-item">
		<a href="//www.facebook.com/share.php?u=<?php the_permalink(); ?>" onclick="window.open(encodeURI(decodeURI(this.href)), 'FBwindow', 'width=554, height=470, menubar=no, toolbar=no, scrollbars=yes'); return false;" rel="nofollow">
			<dl class="metasns-item-set">
				<dt><img src="<?php echo COMMON_PFIX . '/img/share/facebook_bt.png' ?>" alt="シェアする" class="metasns-fb"></dt>
				<dd><?php if(! function_exists('scc_get_share_facebook()')) echo scc_get_share_facebook(); ?></dd>
			</dl>
		</a>
	</li>
	<li class="pocket metasns-item">
		<a href="//www.getpocket.com/edit?u=<?php the_permalink(); ?>" rel="nofollow">
			<dl class="metasns-item-set">
				<dt><img src="<?php echo COMMON_PFIX . '/img/share/pocket_bt.png' ?>" alt="シェアする" class="metasns-pocket"></dt>
				<dd><?php if(! function_exists( 'scc_get_share_pocket()' ) ) echo scc_get_share_pocket(); ?></dd>
			</dl>
		</a>
	</li>
</ul>
<?php endif;//is_404 ?>
