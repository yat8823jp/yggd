<!DOCTYPE html>
<html lang="ja" prefix="og: //ogp.me/ns# fb: //www.facebook.com/2008/fbml">
<head prefix="og: //ogp.me/ns# fb: //ogp.me/ns/fb# article: //ogp.me/ns/article#">
<meta charset="UTF-8">
<meta name="description" content="<?php bloginfo( 'description' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<?php get_template_part('parts/meta', 'description'); ?>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo COMMON_PFIX; ?>/css/reset-css/reset.css">
<link rel="stylesheet" href="<?php echo COMMON_PFIX; ?>/css/common.css">
<link rel="shortcut icon" href="<?php echo COMMON_PFIX; ?>/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" type="image/png" href="<?php echo COMMON_PFIX; ?>/img/app/app_icon.png" sizes="152x152">
<link rel="alternate" type="application/?feed=atom" title="<?php echo bloginfo('name'); ?> atomフィード" href="<?php bloginfo('atom_url'); ?>">
<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
<?php wp_head(); ?>
</head>
<body>
<?php get_template_part( 'parts/adsense' ); ?>
<?php get_template_part( 'parts/analysis', 'google' ); ?>
<header class="lout-header">
	<div class="lout-main">
		<div class="mod-container">
			<nav class="lout-main-navi">
				<ul>
					<li class="mod-main-navi-1"><a href="/?page_id=5">About</a></li>
					<li class="mod-main-navi-2"><a href="//twitter.com/yat8823jp">Twitter</a></li>
					<li class="mod-main-navi-3"><a href="//www.facebook.com/yatblog/">Facebook</a></li>
					<li class="mod-main-navi-4"><a href="<?php bloginfo('atom_url'); ?>">Rss</a></li>
				</ul>
			</nav>
			<h1 class="mod-sitelogo"><a href="/"><img src="<?php echo COMMON_PFIX; ?>/img/common/head_logo.png" alt="YATのBlog"></a></h1>
			<form class="mod-site-search" action="<?php bloginfo('url'); ?>">
				<label for="mod-site-search-inputarea">Search</label>
				<input type="text" name="s" id="mod-site-search-inputarea" class="mod-site-search-inputarea" placeholder="サイト内検索">
				<input id="mod-site-search-inputbt" type="submit" value="送 信" class="mod-site-search-inputbt">
			</form>
		</div><!--/.mod-container-->
		<p class="mod-headside-text"><img src="<?php echo COMMON_PFIX; ?>/img/common/head_side_text.png" alt="Web制作を行う全ての方へ"></p>
	</div>
</header><!--/.lout-header-->
