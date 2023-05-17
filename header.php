<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" prefix="og: //ogp.me/ns# fb: //www.facebook.com/2008/fbml">
<head prefix="og: //ogp.me/ns# fb: //ogp.me/ns/fb# article: //ogp.me/ns/article#">
<meta charset="UTF-8">
<meta name="description" content="<?php bloginfo( 'description' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<?php get_template_part('parts/meta', 'description'); ?>
<link rel="shortcut icon" href="<?php echo COMMON_PFIX; ?>/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" type="image/png" href="<?php echo COMMON_PFIX; ?>/img/app/app_icon.png" sizes="152x152">
<link rel="alternate" type="application/?feed=atom" title="<?php echo bloginfo('name'); ?> atomフィード" href="<?php bloginfo('atom_url'); ?>">
<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
<style>html,body,div,h1,a,img,ul,li,header,nav{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}header,nav{display:block}body{line-height:1}ul{list-style:none}body{background-image:url(<?php echo COMMON_PFIX; ?>/img/common/bg.jpg);overflow-x:hidden}body{background-image:url(<?php echo COMMON_PFIX; ?>/img/common/bg.jpg);overflow-x:hidden}h1{margin:40px auto 30px;font-size:3rem;font-weight:700}div{margin:0 0 40px 0}img{max-width:100%;height:100%}@media screen and (max-width:916px){img{max-width:320px}}ul{margin:0 40px 15px 60px;padding:0 0 15px 20px;font-size:1.5rem;line-height:1.6}ul:last-child{padding-bottom:0}ul li{padding-top:7px}@media screen and (max-width:916px){}@media screen and (max-width:736px){ul{margin:0 20px 20px 20px}}ul{list-style-type:disc}html{font-size:62.5%}body{font-family:"ヒラギノ明朝 Pro W3","Hiragino Mincho Pro","Yu Mincho","YuMincho","ＭＳ Ｐ明朝","MS PMincho","メイリオ",Meiryo,sans-serif;color:#333}.lout-main{width:1140px;padding-left:220px;margin:auto;z-index:1}@media screen and (max-width:1374px){.lout-main{width:900px;padding-left:0}}@media screen and (max-width:916px){.lout-main{width:100%;padding-left:0}}@media screen and (max-width:736px){.lout-main{width:100%;padding-left:0;overflow:hidden}}.lout-header{margin:0 auto;text-align:center;position:relative;overflow:hidden}.lout-header .mod-container{margin:0;padding:30px 0;background:#fff;background-color:rgba(255,255,255,.5)}@media screen and (max-width:1374px){.lout-header .mod-container{width:900px;margin:auto}}@media screen and (max-width:916px){.lout-header .mod-container{width:100%;margin:0}}@media screen and (max-width:736px){.lout-header .mod-container{width:100%;margin:0}}.lout-header::before,.lout-header::after{width:541px;height:299px;position:absolute;content:"";display:block}.lout-header::before img,.lout-header::after img{overflow:hidden}.lout-header::before{top:0;left:0;background:url(<?php echo COMMON_PFIX; ?>/img/common/head_deco_left.png) no-repeat;overflow:hidden}@media screen and (max-width:1374px){.lout-header::before{left:-300px}}@media screen and (max-width:916px){.lout-header::before{left:-400px}}@media screen and (max-width:736px){.lout-header::before{left:-480px}}.lout-header::after{top:0;right:0;background:url(<?php echo COMMON_PFIX; ?>/img/common/head_deco_right.png) no-repeat;overflow:hidden}@media screen and (max-width:1374px){.lout-header::after{right:-300px}}@media screen and (max-width:916px){.lout-header::after{right:-400px}}@media screen and (max-width:736px){.lout-header::after{right:-480px}}.lout-header .mod-sitelogo{margin:40px auto 30px}.lout-header .mod-sitelogo a img{margin:-2px auto auto auto;opacity:1}.lout-main-navi ul{font-family:"Poiret One",cursive;color:#595959}.lout-main-navi ul li{display:inline;font-size:2rem;line-height:1.4}.lout-main-navi ul li::before{content:"| ";display:inline}.lout-main-navi ul li:last-child::after{content:" |";display:inline}.lout-main-navi ul li a{margin:auto;color:#595959;text-decoration:none}@media screen and (max-width:1374px){.lout-main-navi{margin:auto}}@media screen and (max-width:736px){.lout-main-navi ul li{line-height:1.6}}.mod-container{width:900px;margin:auto}@media screen and (max-width:1374px){.mod-container{width:900px}}@media screen and (max-width:916px){.mod-container{width:100%}}@media screen and (max-width:736px){.mod-container{width:100%}}a:link{color:#595959}img{margin:10px auto auto auto;display:block}@media screen and (max-width:736px){img{width:100%;margin:auto;display:block}}</style>
<?php wp_head(); ?>
</head>
<body class="is-fadeload">
<?php get_template_part( 'parts/adsense' ); ?>
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
			<?php get_search_form(); ?>
		</div><!--/.mod-container-->
		<p class="mod-headside-text"><img src="<?php echo COMMON_PFIX; ?>/img/common/head_side_text.png" alt="Web制作を行う全ての方へ"></p>
	</div>
</header><!--/.lout-header-->
