<div class="mod-title-line">
	<div class="mod-container">
		<time class="mod-title-line-time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年 m月 d日'); ?></time>
		<h2 class="mod-title-line-title">
			<?php if( is_404() ) { ?>
				404 Page not found.
			<?php
				} else {
					the_title();
				}
			?>
		</h2>
<?php if(! is_page() && ! is_404() && ! is_search() ) { ?>
		<ul class="mod-title-line-meta">
			<li>
				<dl>
					<dt>カテゴリ：</dt>
					<dd><?php the_category(); ?></dd>
				</dl>
			</li>
			<li>
				<dl>
					<?php the_tags('<dt>タグ：</dt><dd class="post-tags">', '</dd><dd class="post-tags">', '</dd>'); ?>
				</dl>
			</li>
		</ul>
<?php }//if ?>
	</div><!--/.mod-container-->
</div><!--/.mod-title-line-->
<div class="mod-content-share">
	<?php get_template_part( 'parts/share', 'data' ); ?>
</div><!--mod-content-share-->
