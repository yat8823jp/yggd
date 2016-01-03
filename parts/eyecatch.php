<?php
	if(! has_post_thumbnail() ) {
		echo '<img src="' . COMMON_PFIX . '/img/eyecatch.jpg" alt="" class="no-eyecatch">';
	} else {
		the_post_thumbnail( 'thumbnail' );
}
?>