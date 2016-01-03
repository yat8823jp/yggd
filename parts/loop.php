<?php if (! have_posts() ){ ?>
	<section class="mod-archive-postdata">
		<div class="mod-archive-postdata-box">
			<?php get_template_part( 'parts/error' ); ?>
		</div>
	</section>
<?php
		}else{
			while ( have_posts() ) {
				the_post();
				if( is_singular() ){
					get_template_part( 'parts/loop', 'single' );
				} else {
					get_template_part( 'parts/loop', 'archive' );
				}//else
			}//while
		}//if
?>