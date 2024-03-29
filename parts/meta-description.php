<?php
global $page, $paged;
$obj = get_queried_object();
$canonical_url = '';
$description = '';

// var_dump( $obj );
//title
	if ( is_home() ) {
		$title = home_url( 'name' );
	} else {
		$title = wp_title( '', false, 'right' ) . '｜' . home_url( 'name' );
	}
	if ( $paged >= 2 || $page >= 2 ) {
		if( is_home() ) {
			$title = $title . '-記事一覧-' . max( $paged, $page ) . 'ページ目 ｜ ';
		} else {
			$title = str_replace( '｜', '-' . max( $paged, $page ) . 'ページ目 ｜ ', $title );
		}
	}//if
//og:type
	if( is_home() ){
		$og_type="website";
	} else {
		$og_type="article";
	}
//discription
	if ( is_home() ) {
		$description = home_url( 'description' );
	} else if ( is_category() ){
		$description = str_replace( "\n", "", category_description() );
	}
	else if ( is_singular() ){
		$description = get_the_custom_excerpt( $obj -> post_content );
	}
	if ( $paged >= 2 || $page >= 2 ) {
		$description="";
	}
	if( isset( $description ) ) {
		$description = str_replace( "<p>", "", $description );
		$description = str_replace( "</p>", "", $description );
	}
//url
	if ( is_home() ) {
		$canonical_url = home_url() . "/";
	} else if ( is_category() ) {
		$canonical_url = get_category_link( get_query_var( 'cat' ) );
	} else if ( is_page() || is_single() ) {
		$canonical_url = get_permalink();
	}
	if ( $paged >= 2 || $page >= 2) {
		$canonical_url = $canonical_url . 'page/' . max( $paged, $page ) . '/';
	}
//image
	if( ! isset( $post ) ) {
		$post = '';
		$str = '';
	} else {
		if ( $post -> post_content != '' ) {
			$str = $post -> post_content;
		}
	}
	$searchPattern = '/<img.*?src=(["\'])(.+?)\1.*?>/i';//投稿にイメージがあるか調べる
	if ( has_post_thumbnail() && ! is_archive() && ! is_front_page() && ! is_home() ){//投稿にサムネイルがある場合の処理
		$image_id = get_post_thumbnail_id( $post -> ID );
		$image = wp_get_attachment_image_src( $image_id, 'full' );
		$ogimage = $image[0];
	}else if ( preg_match( $searchPattern, $str, $imgurl ) && is_single() ) {//投稿にサムネイルは無いが画像がある場合の処理
		$ogimage = $imgurl[2];
	} else {//投稿にサムネイルも画像も無い場合、もしくはアーカイブページの処理
		$ogimage = COMMON_PFIX . "/img/ogp_image.jpg";
	}
?>
<!-- ogp -->
<meta property="og:locale" content="ja_JP">
<meta property="og:type" content="<?php echo $og_type ?>">
<meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>">
<meta property="og:title" content="<?php echo $title; ?>">
<meta property="og:url" content="<?php echo $canonical_url; ?>">
<meta property="og:description" content="<?php echo $description; ?>">
<meta property="og:image" content="<?php echo $ogimage; ?>">
<!-- facebook ogp -->
<meta property="fb:admins" content="yat8823jp">
<meta property="fb:app_id" content="215473061825970">
<!-- twitter card ogp -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="blog">
<meta name="twitter:title" content="<?php echo $title; ?>">
<meta name="twitter:description" content="<?php echo $description; ?>">
<meta name="twitter:image" content="<?php echo $ogimage; ?>">
<meta name="twitter:url" content="//twitter.com/yat8823jp">
