<li class="mod-related-item">
	<a href="{url}">
		<dl>
			<dt>{php: if(! has_post_thumbnail() ) {echo '<img src="' . COMMON_PFIX . '/img/related_nobanner.jpg" alt="">'; } else { echo get_the_post_thumbnail( {postid}, array(‘title’ => ‘ {title}’ )); }</dt>
			<dd>{snippet:60}…</dd>
		</dl>
	</a>
</li>