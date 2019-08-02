<?php

	if ( ! isset( $content_width ) ) { $content_width = 1120; }
	define( 'COMMON_PFIX', get_template_directory_uri() );

	add_theme_support( 'title-tag' );//タイトルタグ有効
	// add_theme_support( 'automatic-feed-links' );//feed有効
	add_theme_support( 'post-thumbnails' );//アイキャッチ有効
	remove_action('wp_head', 'feed_links_extra', 3);

	function yggdrasill_theme_add_editor_styles() {
		add_editor_style( get_template_directory_uri() . "/css/editor-style.css" );
	}
	add_action( 'admin_init', 'yggdrasill_theme_add_editor_styles' );

	//テーマ用スタイルシートとJavaScriptの読み込み
	function yggdrasill_register_styles() {
		//スタイルシート読み込み設定
		wp_register_style( 'reset' ,  get_template_directory_uri() . '/css/reset-css/reset.css' );
		wp_register_style( 'style' ,  get_template_directory_uri() . '/style.css' );
		wp_register_style( 'poiret', '//fonts.googleapis.com/css?family =Poiret+One' );
		wp_register_style( 'main'  ,  get_template_directory_uri() . '/css/main.css' );
	}
	function yggdrasill_regist_jquery() {
		wp_deregister_script('jquery');
		wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.4.1.slim.min.js', '', '3.4.1', true );
		wp_enqueue_script( 'jquery-easing', '//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.compatibility.js', 'jquery', '1.4.1', true );
	}
	add_action( 'wp_print_scripts', 'yggdrasill_regist_jquery' );

	function yggdrasill_read_order_styles_scripts(){
		yggdrasill_register_styles();
		wp_enqueue_style(  'style'      , array(), $theme_version );
		wp_enqueue_script( 'heightLine' , get_template_directory_uri() . '/js/heightLine/jquery.heightLine.js', false, true );
		// wp_dequeue_style(  'jetpack_css' );
		wp_dequeue_style(  'yarppWidgetCss' );
		wp_dequeue_style(  'wp-block-library' );
		wp_dequeue_style(  'wp-pagenavi' );
		wp_dequeue_script( 'crayon_js' );
		wp_dequeue_script( 'devicepx' );
		wp_dequeue_script( 'heightLine' );
		wp_dequeue_script( 'milestone' );
		if( ! ( is_front_page() || is_page() ) ) {
			wp_enqueue_script( 'fontplus' , '//webfont.fontplus.jp/accessor/script/fontplus.js?b1QRw-8tAx4%3D&box=UDQBWShX47k%3D&aa=1&ab=2', false, true );
			wp_enqueue_script( 'adobefont', get_template_directory_uri() . '/js/adobefont.js', false, true );
		}
		if( is_front_page() || is_page() ) {
			wp_dequeue_style(  'crayon' );
			wp_dequeue_style(  'crayon-theme-classic' );
			wp_dequeue_style(  'crayon-font-monaco' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'yggdrasill_read_order_styles_scripts' );

	function yggdrasill_footer_read_styles() {
		//cssをフッターで読み込み
		$theme         = wp_get_theme();
		$theme_version = $theme -> get( 'Version' );
		wp_enqueue_style(  'reset'            , array(), null, 'all' );
		wp_enqueue_style(  'poiret'           , array(), null, $theme_version );
		wp_enqueue_style(  'yarppWidgetCss'   , array(), null, $theme_version );
		wp_enqueue_style(  'wp-block-library' , array(), null, $theme_version );
		wp_enqueue_style(  'wp-pagenavi'      , array(), null, $theme_version );
		wp_enqueue_style(  'main'             , array(), null, $theme_version );
		wp_style_add_data( 'reset', 'alt', 'preload' );
		wp_style_add_data( 'main', 'alt', 'preload' );
		wp_style_add_data( 'poiret', 'alt', 'preload' );
		wp_style_add_data( 'yarppWidgetCss', 'alt', 'preload' );
		wp_style_add_data( 'wp-block-library', 'alt', 'preload' );
		wp_style_add_data( 'wp-pagenavi', 'alt', 'preload' );
		wp_enqueue_script( 'devicepx' );
		wp_enqueue_script( 'heightLine' );
		// wp_enqueue_script( 'milestone' );
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'jquery-easing' );
	}
	add_action( 'wp_footer', 'yggdrasill_footer_read_styles' );
	function add_alt_change_preload ( $tag ) {
		$tag = preg_replace( '/(alternate)/', 'preload', $tag );
		return $tag;
	}
	function add_defer_to_scripts( $tag, $handle ) {
		if( ! preg_match( '/\b(async|defer)\b/', $tag ) ) {
			return str_replace( ' src', ' defer src', $tag );
		}
		return $tag;
	}
	if( ! is_admin() ) {
		add_filter( 'jetpack_implode_frontend_css', '__return_false', 99 );
		add_filter( 'style_loader_tag', 'add_alt_change_preload' );
		add_filter( 'script_loader_tag', 'add_defer_to_scripts', 10 ,2 );
	}

// ---------------------------------------------------------------------------
// WordpressのJavascriptやCSSのハンドル名をHTMLソースに表示する
// ---------------------------------------------------------------------------
// function my_get_dependency( $dependency ) {
//     $dep = "";
//     if ( is_a( $dependency, "_WP_Dependency" ) ) {
//         $dep .= "$dependency->handle";
//         $dep .= " [" . implode( " ", $dependency->deps ) . "]";
//         $dep .= " '$dependency->src'";
//         $dep .= " '$dependency->ver'";
//         $dep .= " '$dependency->args'";
//         $dep .= " (" . implode( " ", $dependency->extra ) . ")";
//     }
//     return "$dep\n";
// }
// function my_style_queues() {
//     global $wp_styles;
//     echo "<!-- WP_Dependencies for styles\n";
//     foreach ( $wp_styles->queue as $val ) {
//         echo my_get_dependency( $wp_styles->registered[ $val ] );
//     }
//     echo "-->\n";
// }
// add_action( 'wp_print_styles', 'my_style_queues', 9999 );
// function my_script_queues() {
//     global $wp_scripts;
//     echo "<!-- WP_Dependencies for scripts\n";
//     foreach ( $wp_scripts->queue as $val ) {
//         echo my_get_dependency( $wp_scripts->registered[ $val ] );
//     }
//     echo "-->\n";
// }
// add_action( 'wp_print_scripts', 'my_script_queues', 9999 );

	//アイキャッチのサイズ削除
	add_filter( 'post_thumbnail_html', 'custom_attribute' );
	function custom_attribute( $html ){
		// width height を削除する
		$html = preg_replace( '/(width|height)="\d*"\s/', '', $html );
		return $html;
	}

	add_image_size( 'default', 900, false );


	//カスタムメニュー追加
	register_nav_menu('mainmenu', 'メインメニュー');
	add_filter( 'walker_nav_menu_start_el', 'description_in_nav_menu', 10, 4 );
	function description_in_nav_menu($item_output, $item){
		return preg_replace('/(<a.*?>[^>]*>)/', '$1' . '<img src="' . $item->description . '">', $item_output);
	}

	//ウィジェット追加
	include 'widget/class.php';
	add_action( 'widgets_init', 'theme_slug_widgets_init' );
	function theme_slug_widgets_init() {
		//広告用
		if ( function_exists( 'register_sidebar' ) ) {
			$before = '<dl class="mod-widget">';
			$after = '</dd></dl><!--/mod-widge-->';
			$eyecatch = the_post_thumbnail();

			register_sidebar( array(
				'name' => 'サイド広告用',
				'id' => 'sidebar_ad',
				'before_widget' => $before,
				'after_widget' => $after,
				'before_title' => '<dt class="mod-widget-title">',
				'after_title' => '</dt><dd class="mod-widget-body">' . $eyecatch
			));
		}//if
		//サイドナビ
		if ( function_exists( 'register_sidebar' ) ) {
			$before = '<dl class="mod-widget">';
			$after = '</dd></dl><!--/mod-widge-->';
			register_sidebar( array(
				'name' => 'サイドウィジェット',
				'id' => 'sidebar',
				'class' => 'sidebar',
				'before_widget' => $before,
				'after_widget' => $after,
				'before_title' => '<dt class="mod-widget-title">',
				'after_title' => '</dt><dd class="mod-widget-body">'
			));
		}//if
		//タグクラウド
		if ( function_exists( 'register_sidebar' ) ) {
			$before = '<section class="lout-footer-tagcloud">';
			$after = '</section><!--/lout-footer-tagcloud-->';
			register_sidebar( array(
				'name' => 'タグクラウド',
				'id' => 'tagcloud',
				'class' => 'lout-footer-tagcloud',
				'before_widget' => $before,
				'after_widget' => $after,
				'before_title' => '<h2 class="lout-footer-tagcloud-h">',
				'after_title' => '</h2>'
			));
		}//if
	}//theme_slug_widgets_init

	//カスタムフィールド
	function ad_meta_box() {
		//見出し部分
		//add_meta_box('my_box', 'タイトル', 'add_my_box', '投稿タイプ', 'normal', 'high');
		add_meta_box( 'link_url', 'リンク先URL', 'link_meta_box', 'advertisement', 'normal', 'high' );
	}
	add_action('add_meta_boxes', 'ad_meta_box');
	function link_meta_box(){
		//本体
		global $post;
		wp_nonce_field(wp_create_nonce(__FILE__), 'my_nonce');//CSRF対策の設定（フォームにhiddenフィールドとして追加するためのnonceを「'my_nonce」として設定）
		echo 'URL:　<label><input type="text" name="link_url" value="' . esc_html( get_post_meta( $post->ID, 'link_url', true ) ) .'" size="100%"></label><br />';
	}//link_meta_box
	function link_meta_box_save( $post_id ) {
		//保存
		global $post;  //編集中の記事に関するデータを保存
		$my_nonce = isset( $_POST['my_nonce'] ) ? $_POST['my_nonce'] : null;  //設定したnonce を取得（CSRF対策）
		if( !wp_verify_nonce( $my_nonce, wp_create_nonce(__FILE__) ) ) {
			//nonce を確認し、値が書き換えられていれば、何もしない（CSRF対策）
			return $post_id;
		}
		if( defined('DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) { return $post_id; }
		//自動保存ルーチンかどうかチェック。そうだった場合は何もしない（記事の自動保存処理として呼び出された場合の対策）
		if( !current_user_can( 'edit_post', $post->ID ) ) { return $post_id; }
		//ユーザーが編集権限を持っていない場合は何もしない。
		if( $_POST['post_type'] == 'advertisement' ){  //'advertisement' 投稿タイプの場合のみ実行
			//「link_url」の入力フィールドに入力された情報を保存＆更新するように指定
			update_post_meta($post->ID, 'link_url', $_POST['link_url']);
		}//if
	}
	add_action('save_post', 'link_meta_box_save');


	//comment
	function theme_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		extract( $args, EXTR_SKIP );

		if ( 'div' == $args['style'] ) {
			$tag = 'div';
			$add_below = 'comment';
		} else {
			$tag = 'li';
			$add_below = 'div-comment';
		}
	?>
		<<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? 'mod-comment' : 'mod-comment is-reply' ) ?> id="comment-<?php comment_ID() ?>">
		<?php if ( 'div' != $args['style'] ) { ?>
			<div id="div-comment-<?php comment_ID() ?>" class="mod-comment">
		<?php } //if ?>

		<dl class="mod-comment-auth comment-author vcard">
			<dt><?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?></dt>
			<?php printf( __( '<dd class="mod-comment-auth-data fn"><h3>%s</h3>' ), get_comment_author_link() ); ?>
			<time><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
				<?php
					/* translators: 1: date, 2: time */
					printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
				?>
			</time>
			</dd>
		</dl>

		<?php if ( $comment->comment_approved == '0' ) : ?>
			<p class="mod-comment-awaiting"><?php _e( 'Your comment is awaiting moderation.' ); ?></p>
			<br />
		<?php endif; ?>

		<?php echo '<p class="mod-comment-text">' . esc_html (get_comment_text() ) . '</p>'; ?>

		<div class="mod-comment-reply">
		<?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div>

		<?php if ( 'div' != $args['style'] ) : ?>
		</div>
		<?php endif; ?>
	<?php
	}//theme_comment

	// カテゴリの投稿数をaタグの中に
	add_filter( 'wp_list_categories', 'my_list_categories', 10, 2 );
	function my_list_categories( $output, $args ) {
	  $output = preg_replace( '/<\/a>\s*\((\d+)\)/',' ($1)</a>', $output );
	  return $output;
	}

	//メディアの画質向上
	add_filter( 'jpeg_quality',function( $arg ) { return 100; } );

	//抜粋記事の取得
	function get_the_custom_excerpt( $content, $length = 70 ) {
		$del = array( "&nbsp;", "\r\n" );
		$content =  preg_replace( '/<!--more-->.+/is', "", $content ); //moreタグ以降削除
		$content =  strip_shortcodes( $content );//ショートコード削除
		$content =  strip_tags( $content );//タグの除去
		$content =  str_replace( $del, "", $content );//特殊文字の削除
		$content =  mb_substr( $content, 0, $length );//文字列を指定した長さで切り取る
		return $content;
	}
