<?php
function is_plugin_active( $file ) {
	$is_active = false;
	foreach( ( array ) get_option( 'active_plugins' ) as $val ) :
		if( preg_match( '/' . preg_quote( $file, "/" ) . '/i', $val ) ) :
			$is_active = true;
			break;
		endif;
	endforeach;
	return $is_active;
}
function scc_check( $sns ) {
	$num;
	$is_active = false;
	$plugin = 'sns-count-cache/sns-count-cache.php';
	if( is_plugin_active( $plugin ) ) {
		$num = esc_html( scc_get_share_twitter( array( 'post_id' => 'home' ) ) );
	} else {
		$num = 0;
	}
	echo $num;
}
?>
