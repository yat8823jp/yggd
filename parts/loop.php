<?php
	if ( ! have_posts() ) {
		get_template_part( 'parts/error' );
	} else {
?>
	<?php if( is_search() ) { ?>
		<article class="lout-archive-contents">
	<?php
	 	}
		while ( have_posts() ) {
			the_post();
			if( is_singular( 'advertisement' ) ) {

			} else if( is_singular() ){
				get_template_part( 'parts/loop', 'single' );
			} else {
				get_template_part( 'parts/loop', 'archive' );
			}//else
		}//while
	}//if
?>
