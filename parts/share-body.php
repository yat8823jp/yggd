<?php if( ! is_404() ) { ?>
<ul class="metasns">
	<li class="hateb metasns-item">
		<a href="//b.hatena.ne.jp/entry/<?php the_permalink(); ?>" target="_blank">
			<dl class="metasns-item-set">
				<dt><img src="<?php echo COMMON_PFIX . '/img/share/hateb_bt.png' ?>" alt="このエントリーをはてなブックマークに追加" class="metasns-hateb"></dt>
				<dd><?php if(! function_exists('scc_get_share_hatebu()')) echo scc_get_share_hatebu(); ?></dd>
			</dl>
		</a>
	</li>
	<li class="hateb metasns-item">
		<a href="//twitter.com/share/?text=<?php the_title(); ?>:YATのBlog&amp;url=<?php the_permalink(); ?>"  onClick="window.open(encodeURI(decodeURI(this.href)), 'tweetwindow', 'width=650, height=470, personalbar=0, toolbar=0, scrollbars=1, sizable=1'); return false;" rel="nofollow">
			<dl class="metasns-item-set">
				<dt><img src="<?php echo COMMON_PFIX . '/img/share/twitter_bt.png' ?>" alt="ツイッターでつぶやく" class="metasns-tw"></dt>
				<dd><?php if(! function_exists('scc_get_share_twitter()')) echo scc_get_share_twitter(); ?></dd>
			</dl>
		</a>
	</li>
	<li class="hateb metasns-item">
		<a href="//www.facebook.com/share.php?u=<?php the_permalink(); ?>" onclick="window.open(encodeURI(decodeURI(this.href)), 'FBwindow', 'width=554, height=470, menubar=no, toolbar=no, scrollbars=yes'); return false;" rel="nofollow">
			<dl class="metasns-item-set">
				<dt><img src="<?php echo COMMON_PFIX . '/img/share/facebook_bt.png' ?>" alt="シェアする" class="metasns-fb"></dt>
				<dd><?php if(! function_exists('scc_get_share_facebook()')) echo scc_get_share_facebook(); ?></dd>
			</dl>
		</a>
	</li>
</ul>
<?php }//is_404 ?>
