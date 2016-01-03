<div class="lout-main-contents-postdata-sub lout-content-share mod-content-share">
<?php
	if( is_category() ){
		single_cat_title( 'カテゴリー： ' );
	} elseif( is_tag() ) {
		single_tag_title( 'タグ： ' );
	} elseif( is_search() ){
		echo '検索キーワード： ' . get_search_query();
	} elseif( is_home() ){
		get_template_part( 'parts/share', 'top' );
	}
?>
</div><!--mod-content-share-->
