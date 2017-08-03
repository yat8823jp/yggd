<article class="lout-main-contents">
	<section class="lout-main-contents-postdata">
<?php if( is_404() ) { ?>
	<p>お探しのページは見つかりませんでした。</p>
	<p>お手数ですが下記をお試しください。</p>
	<ul>
		<li>上記検索ボックスより検索を試みる</li>
		<li>右のナビゲーションよりカテゴリから探す</li>
	</ul>
<?php } else if( is_search() ) { ?>
	<p>お探しのキーワードでは記事が見つかりませんでした。</p>
	<p>お手数ですが、改めて検索をしなおすが、右側のナビゲーションより記事を探してみてください。</p>
	<div class="lout-main-contents-postdata-sub lout-content-share mod-content-share"></div>
<?php } else { ?>
<?php get_template_part( 'parts/eyecatch' ); ?>
<?php } ?>
	</section><!--/.lout-main-contents-postdata-->
</article><!--/.lout-main-contents-->
