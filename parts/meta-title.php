<?php
	if( is_single() ) {
		echo bloginfo( 'name' ) . wp_title();
	} else if( is_category() ) {
		echo bloginfo( 'name' ) . " | " . single_cat_title()."カテゴリーの記事一覧ページです。";
	} else if( is_tag() ) {
		echo bloginfo( 'name' ) . " | " . single_tag_title()."タグの記事一覧ページです。";
	} else if( is_month() ) {
		echo bloginfo( 'name' ) . " | " . the_time('Y年M月')."に投稿された記事一覧ページです。";
	} else if( is_home() ) {
		echo bloginfo( 'name' );
	} else if( is_page() ) {
		echo bloginfo( 'name' ) . " | " . wp_title();
	} else {
		bloginfo( 'name' );
}?>