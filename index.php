<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">

<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- ↓file combine config-->
<!-- build:css css/common.css -->
<link rel="stylesheet" href="../bower_components/reset-css/reset.css">
<link rel="stylesheet" href="css/common.css">
<!-- endbuild -->


<link rel="icon" href="favicon.ico" type="image/gif">

<!--[if lt IE 9]>
	<!-- build:js js/html5shiv.js-->
	<script src="../js/html5shiv.js"></script>
	<!-- endbuild -->
<![endif]-->

</head>
<body class="top">
<!--↓read-temlatefile-->
<header class="lout-header">
	<div class="lout-main">
		<div class="mod-container">
			<nav class="lout-main-navi">
				<ul>
					<li class="mod-main-navi-1"><a href="#">About</a></li>
					<li class="mod-main-navi-2"><a href="#">Twitter</a></li>
					<li class="mod-main-navi-3"><a href="#">Facebook</a></li>
					<li class="mod-main-navi-4"><a href="#">Rss</a></li>
				</ul>
			</nav>
			<h1 class="mod-sitelogo"><a href="/"><img src="../img/common/head_logo.png" alt="YATのBlog"></a></h1>
			<form class="mod-site-search" action="">
				<label for="mod-site-search-inputarea">Search</label>
				<input type="text" name="search-box" id="mod-site-search-inputarea" class="mod-site-search-inputarea">
				<input id="mod-site-search-inputbt" type="submit" value="送 信" class="mod-site-search-inputbt">
			</form>
		</div><!--/.mod-container-->
		<p class="mod-headside-text"><img src="img/common/head_side_text.png" alt="Web制作を行う全ての方へ"></p>
	</div>
</header><!--/.lout-header-->
<div class="mod-content-share">
		<ul class="mod-container metasns">
		<li class="hateb"><a href="http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-layout="standard" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only.gif" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script></li>
	<li class="twtterb"><a class="twbt" target="_blank" href="http://twitter.com/?status=RT: <?php echo urlencode( the_title( "" , "" , 0 ) ); ?> :YATのBLOG <?php the_permalink() ?>"></a><a target="_blank" href="http://twitter.com/?status=RT: <?php echo urlencode( the_title( "" , "" , 0 ) ); ?> :YATのBLOG <?php the_permalink() ?>" class="attr"><span>
<!-- 	<?php
		$pmlink = get_permalink();
		tweet_count( $pmlink );
	?>
 --></span></a><img src="<?php bloginfo('template_directory'); ?>/img/share/meta_tw_03.png" width="10" height="20" alt="" class="btend"></li>
<!--	<li class="twtterb"><a class="twbt" href="><?php the_permalink() ?>"></a></li>-->
	<li class="googleplusb"><g:plusone size="medium" href="<?php the_permalink() ?>"></g:plusone><script type="text/javascript">window.___gcfg = {lang: 'ja'};(function() {var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;po.src = 'https://apis.google.com/js/plusone.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);})();</script></li>
	<li class="likeb"><iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=52&amp;action=like&amp;font&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none;overflow:hidden;height:20px;" allowTransparency="true"></iframe></li>
	</ul>

</div><!--mod-content-share-->


<main class="lout-main">
	<article class="lout-archive-contents">

	<section class="mod-archive-postdata">
		<div class="mod-archive-postdata-box">
			<img src="img/eyecatch_old.jpg" alt="" class="eyecatch">
			<div class="mod-container">
				<time class="mod-title-line-time" datetime="2015-11-29">Mar 19, 2015</time>
				<h2 class="mod-title-line-title">タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。</h2>
				<ul class="mod-title-line-meta">
					<li>
						<dl>
							<dt>カテゴリ：</dt>
							<dd><a href="#">design</a></dd>
						</dl>
					</li>
					<li>
						<dl>
							<dt>タグ：</dt>
							<dd><a href="#">design</a></dd>
							<dd><a href="#">design</a></dd>
							<dd><a href="#">design</a></dd>
						</dl>
					</li>
				</ul>
			</div><!--/.mod-container-->
		</div><!--/.lout-archive-contents-postdata-box-->
		<div class="mod-archive-postdata-morebox">
			<div class="lout-main-contents-postdata-sub lout-content-share mod-content-share">
	<h2 class="mod-content-sub-title">Share</h2>
		<ul class="mod-container metasns">
		<li class="hateb"><a href="http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-layout="standard" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only.gif" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script></li>
	<li class="twtterb"><a class="twbt" target="_blank" href="http://twitter.com/?status=RT: <?php echo urlencode( the_title( "" , "" , 0 ) ); ?> :YATのBLOG <?php the_permalink() ?>"></a><a target="_blank" href="http://twitter.com/?status=RT: <?php echo urlencode( the_title( "" , "" , 0 ) ); ?> :YATのBLOG <?php the_permalink() ?>" class="attr"><span>
<!-- 	<?php
		$pmlink = get_permalink();
		tweet_count( $pmlink );
	?>
 --></span></a><img src="<?php bloginfo('template_directory'); ?>/img/share/meta_tw_03.png" width="10" height="20" alt="" class="btend"></li>
<!--	<li class="twtterb"><a class="twbt" href="><?php the_permalink() ?>"></a></li>-->
	<li class="googleplusb"><g:plusone size="medium" href="<?php the_permalink() ?>"></g:plusone><script type="text/javascript">window.___gcfg = {lang: 'ja'};(function() {var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;po.src = 'https://apis.google.com/js/plusone.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);})();</script></li>
	<li class="likeb"><iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=52&amp;action=like&amp;font&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none;overflow:hidden;height:20px;" allowTransparency="true"></iframe></li>
	</ul>

</div><!--mod-content-share-->

			<p class="mod-archive-text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
			<div class="mod-next-bt"><a href="single.html">続きを読む →</a></div>
		</div><!--/.lout-archive-contents-postdata-morebox-->
	</section><!--/.mod-archive-postdata-->

	<section class="mod-archive-postdata">
		<div class="mod-archive-postdata-box">
			<img src="img/eyecatch_sample.jpg" alt="" class="eyecatch">
			<div class="mod-container">
				<time class="mod-title-line-time" datetime="2015-11-29">Mar 19, 2015</time>
				<h2 class="mod-title-line-title">タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。</h2>
				<ul class="mod-title-line-meta">
					<li>
						<dl>
							<dt>カテゴリ：</dt>
							<dd><a href="#">design</a></dd>
						</dl>
					</li>
					<li>
						<dl>
							<dt>タグ：</dt>
							<dd><a href="#">design</a></dd>
							<dd><a href="#">design</a></dd>
							<dd><a href="#">design</a></dd>
						</dl>
					</li>
				</ul>
			</div><!--/.mod-container-->
		</div><!--/.lout-archive-contents-postdata-box-->
		<div class="mod-archive-postdata-morebox">
			<div class="lout-main-contents-postdata-sub lout-content-share mod-content-share">
	<h2 class="mod-content-sub-title">Share</h2>
		<ul class="mod-container metasns">
		<li class="hateb"><a href="http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-layout="standard" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only.gif" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script></li>
	<li class="twtterb"><a class="twbt" target="_blank" href="http://twitter.com/?status=RT: <?php echo urlencode( the_title( "" , "" , 0 ) ); ?> :YATのBLOG <?php the_permalink() ?>"></a><a target="_blank" href="http://twitter.com/?status=RT: <?php echo urlencode( the_title( "" , "" , 0 ) ); ?> :YATのBLOG <?php the_permalink() ?>" class="attr"><span>
<!-- 	<?php
		$pmlink = get_permalink();
		tweet_count( $pmlink );
	?>
 --></span></a><img src="<?php bloginfo('template_directory'); ?>/img/share/meta_tw_03.png" width="10" height="20" alt="" class="btend"></li>
<!--	<li class="twtterb"><a class="twbt" href="><?php the_permalink() ?>"></a></li>-->
	<li class="googleplusb"><g:plusone size="medium" href="<?php the_permalink() ?>"></g:plusone><script type="text/javascript">window.___gcfg = {lang: 'ja'};(function() {var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;po.src = 'https://apis.google.com/js/plusone.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);})();</script></li>
	<li class="likeb"><iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=52&amp;action=like&amp;font&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none;overflow:hidden;height:20px;" allowTransparency="true"></iframe></li>
	</ul>

</div><!--mod-content-share-->

			<p class="mod-archive-text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
			<div class="mod-next-bt"><a href="single.html">続きを読む →</a></div>
		</div><!--/.lout-archive-contents-postdata-morebox-->
	</section><!--/.mod-archive-postdata-->
	<nav class="lout-pagination">
		<div class='wp-pagenavi'>
			<span class='pages'>Page : 1 / 17</span>
			<span class='current'>1</span>
			<a class="page larger" href="singe.html">2</a>
			<a class="page larger" href="singe.html">3</a>
			<a class="page larger" href="singe.html">4</a>
			<a class="page larger" href="singe.html">5</a>
			<a class="page larger" href="singe.html">6</a>
			<a class="page larger" href="singe.html">7</a>
			<a class="page larger" href="singe.html">8</a>
			<a class="nextpostslink" rel="next" href="singe.html">
			<span>Next</span> »</a>
		</div>
	</nav>
</article><!--/.lout-main-contents-->
	<div class="lout-sidebar">
	<dl class="mod-widget">
		<dt class="mod-widget-title">Advertisement</dt>
		<dd class="mod-widget-body">
			<a href="http://rish-design.com" target="_blank">
				<img src="../img/rish-design_banner.jpg" alt="">
				<p>フリーランスとして独立しました。Webサイトの構築から、運用のご相談まで承っております。</p>
			</a>
		</dd>
	</dl>
	<dl class="mod-widget">
		<dt class="mod-widget-title">RecentPosts</dt>
		<dd class="mod-widget-body">
			<p><a href="http://rish-design.com" target="_blank">リアルな表現が素敵なスキュアモーフィックデザインに関する考察</a> <time class="mod-widget-posttime" datetime="2015-02-10">2015年2月10日</time></a></p>
			<p><a href="http://rish-design.com" target="_blank">リアルな表現が素敵なスキュアモーフィックデザインに関する考察</a> <time class="mod-widget-posttime" datetime="2015-02-10">2015年2月10日</time></a></p>
			<p><a href="http://rish-design.com" target="_blank">リアルな表現が素敵なスキュアモーフィックデザインに関する考察</a> <time class="mod-widget-posttime" datetime="2015-02-10">2015年2月10日</time></a></p>
		</dd>
	</dl>
	<dl class="mod-widget">
		<dt class="mod-widget-title">RecentPosts</dt>
		<dd class="mod-widget-body">
			<p><a href="http://rish-design.com" target="_blank">リアルな表現が素敵なスキュアモーフィックデザインに関する考察</a> <time class="mod-widget-posttime" datetime="2015-02-10">2015年2月10日</time></a></p>
			<p><a href="http://rish-design.com" target="_blank">リアルな表現が素敵なスキュアモーフィックデザインに関する考察</a> <time class="mod-widget-posttime" datetime="2015-02-10">2015年2月10日</time></a></p>
			<p><a href="http://rish-design.com" target="_blank">リアルな表現が素敵なスキュアモーフィックデザインに関する考察</a> <time class="mod-widget-posttime" datetime="2015-02-10">2015年2月10日</time></a></p>
		</dd>
	</dl>
</div>
</main>

<!--↓read-temlatefile-->
	<footer class="lout-footer">
	<div class="lout-main">
		<section class="lout-footer-tagcloud">
		<h2 class="lout-footer-tagcloud-h">TagCloud</h2>
			<ul>
				<li><a href="#">Android</a></li>
				<li><a href="#">Android</a></li>
				<li><a href="#">Android</a></li>
				<li><a href="#">Android</a></li>
				<li><a href="#">Android</a></li>
				<li><a href="#">Android</a></li>
				<li><a href="#">Android</a></li>
				<li><a href="#">Android</a></li>
				<li><a href="#">Android</a></li>
				<li><a href="#">Android</a></li>
				<li><a href="#">Android</a></li>
				<li><a href="#">Android</a></li>
				<li><a href="#">Android</a></li>
				<li><a href="#">Android</a></li>
				<li><a href="#">Android</a></li>
				<li><a href="#">Android</a></li>
				<li><a href="#">Android</a></li>
				<li><a href="#">Android</a></li>
				<li><a href="#">Android</a></li>
				<li><a href="#">Android</a></li>
			</ul>
		</section>
		<section class="lout-footer-auth">
			<h2 class="lout-footer-auth-h">Author</h2>
			<dl>
				<dt><img src="img/aki_yat2_white.jpg" alt=""></dt>
				<dd>WebデザイナーのYATです。Webデザイン、コーディング、プログラミング、プランニング、ディレクションと幅広く行なっています。当ブログに関しては<a href="#">YATのBLOGに関して</a>を御覧ください</dd>
			</dl>
		</section><!--/.mod-auth-->
	</div><!--/.lout-main-->
	<div class="lout-copyright">
		<div class="mod-container">
			<address class="lout-copyright-body">Copyright 2009 Yat</address>
		</div>
	</div><!--/.lout-copyright-->
</footer>

<!-- ↓file combine config-->
<!-- build:js js/lib.js -->
<script src="../bower_components/jQuery/dist/jquery.min.js"></script>
<script src="../bower_components/slick-carousel/slick/slick.min.js"></script>
<!-- endbuild -->
<!-- build:js js/config.js -->
<script src="js/config.js"></script>
<!-- endbuild -->


</body>
</html>
