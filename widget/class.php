<?php
class EyecatchWidgetItem extends WP_Widget {
	function EyecatchWidgetItem() {
		parent::WP_Widget( false, $name = 'アイキャッチ付き投稿一覧' );
	}
	//フロント側の設定
	function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		$body = apply_filters( 'widget_body', $instance['body'] );
		$number 	= apply_filters('widget_number', $instance['number'] );
		$ignore 	= apply_filters('widget_ignore', $instance['ignore_check']['active'] );
		$thumb_query = new WP_Query( array(
								'post_type' => 'advertisement',
								'cat' => $cat,
								'posts_per_page' => $number,
								'ignore_sticky_posts' => 0,
								'orderby' => 'date',
								'order' => 'DESC'
							));
?>
		<dl class="mod-widget">
<?php
		if( $title ) {

			echo $before_title . $title . $after_title . '<ul class="mod-widget-imgbox">';
			if( $thumb_query -> have_posts() ) {
				while ( $thumb_query -> have_posts() ) {
					$thumb_query -> the_post();
?>
					<li><a href="<?php echo esc_html( post_custom( 'link_url' ) ); ?>" title="<?php esc_attr( the_title() ); ?>" >
					<?php if( has_post_thumbnail() ) { ?>
<?php
					$thumb_id = get_post_thumbnail_id();
					$thumb_url = wp_get_attachment_image_src($thumb_id);
					$thumb_url = $thumb_url[0];
?>
					<img src="<?php echo esc_attr( $thumb_url ); ?>" width="<?php echo esc_attr( $width ); ?>" height="<?php echo esc_attr( $height ); ?>" alt="<?php esc_attr( the_title() ); ?>" title="<?php esc_attr( the_title() ); ?>">
					<?php } else { ?>
						<img src="<?php echo esc_attr( no_thumb_image() ); ?>"  width="<?php echo esc_attr( $width ); ?>" height="<?php echo esc_attr( $height ); ?>" alt="<?php esc_attr( the_title() ); ?>" title="<?php esc_attr( the_title() ); ?>" />
					<?php }//else ?>
					<?php the_title(); ?>
					<?php the_content(); ?>
					</a></li>
<?php
				}//while
			}//if
			echo '</ul>' . $body;
		}//if
?>
		</dl>

<?php
		if( !function_exists('no_thumb_image') ){
			function no_thumb_image() {
				ob_start();
				ob_end_clean();
				preg_match_all( '/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', get_the_content(), $matches );

				if( isset($matches[1][0]) && !is_wp_error($matches[1][0]) ){
					$set_img = $matches[1][0];
				} else {
					$set_img = 'widget/img/nobanner.jpg';
				}
				return $set_img;
			}
		}//if
	}//widget
	//バックグラウンドの設定アップデート
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['body'] = trim($new_instance['body']);
		$instance['number'] = is_numeric($new_instance['number']) ? $new_instance['number'] : 5;
		$instance['ignore_check']['active']	= $new_instance['ignore_check']['active'];

		if( preg_match("/^[0-9]|,|-/", $new_instance['cat']) ){
			$instance['cat'] 		= $new_instance['cat'];
		} else {
			$instance['cat'] 		= "";
		}
		return $instance;
	}
	function form($instance) {
		$title = esc_attr($instance['title']);
		$body = esc_attr($instance['body']);
		?>
		<p>投稿のアイキャッチとタイトル、本文が出力されます。</p>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">
			<?php _e('タイトル:'); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
		</p>
		<?php
		}
	}
add_action('widgets_init', create_function('', 'return register_widget("EyecatchWidgetItem");'));