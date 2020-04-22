<?php
$args = array(
	'post_type' => 'contentend-ad', // 投稿タイプを指定
	'posts_per_page' => 1, // 表示するページ数
);
$wpad_query = new WP_Query( $args );
?>

<?php if ( $wpad_query -> have_posts() ){ ?>
		<div class="api-kyash">
			<p>お役に立てたらお願いします🙇</p>
			<a href="https://kyash.me/payments/wxp2QN9IeC8JXYwVfKFsGc0jIC41" class="api-kyash-link"><img src="<?php echo COMMON_PFIX; ?>/img/kyash.png" alt="Kyashで送金する"></a>
		</div>
		<div class="lout-main-contents-postdata-sub lout-content-ad">
			<h2 class="mod-content-sub-title">Ad</h2>
<?php
		while ( $wpad_query -> have_posts() ) {
			$wpad_query -> the_post();
			the_content();
		}//while
		wp_reset_postdata();
?>
		</div>
<?php }//if ?>
