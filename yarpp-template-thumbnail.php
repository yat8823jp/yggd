<section class="lout-related mod-main-content-sub">
	<h2 class="mod-main-content-sub-h">Related</h2>
	<ul class="mod-related">
	<?php
		if( have_posts() ){
			while( have_posts() ) {
				the_post();
		?>

		<li class="mod-related-item">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
		<dl>
		<?php
				if( has_post_thumbnail() ) {
					echo '<dt>';
					the_post_thumbnail( array( 400, 188 ) );
					echo '</dt>';
				} else {
					echo '<dt><img src="' . COMMON_PFIX . '/img/related_nobanner.jpg" alt="NoImage"></dt>';
				}//else
		?>
			<dd><?php the_title(); ?></dd>
		</dl>
		</a>
		</li>
			<?php } //while ?>
		<?php } //if ?>
	</ul>
</section>