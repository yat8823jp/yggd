<section class="mod-archive-postdata">
<div class="mod-archive-postdata-box">
	<?php get_template_part( 'parts/eyecatch' ); ?>
	<div class="mod-container">
		<time class="mod-title-line-time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年 m月 d日'); ?></time>
		<ul class="mod-title-line-meta">
			<li>
				<dl>
					<dt>カテゴリ：</dt>
					<dd><?php the_category(); ?></dd>
				</dl>
			</li>
			<li>
				<dl>
					<?php the_tags('<dt>タグ：</dt><dd>', '</dd><dd>', '</dd>'); ?>
				</dl>
			</li>
		</ul>
		<h2 class="mod-title-line-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</div><!--/.mod-container-->
</div><!--/.lout-archive-contents-postdata-box-->
<div class="mod-archive-postdata-morebox">
	<?php get_template_part( 'parts/share', 'end' ); ?>
	<?php
		$more = "";
		// $content = '<div class="mod-archive-text">' . apply_filters( 'the_content', get_the_content( $more ) . '</div>');
	?>
</div><!--/.lout-archive-contents-postdata-morebox-->
</section><!--/.mod-archive-postdata-->
