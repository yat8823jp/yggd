<?php get_header(); ?>
<?php
	if( is_singular() ){
		get_template_part( 'parts/title', 'single' );
	}//is_single()
	else {
		get_template_part( 'parts/share', 'archive' );
	}
?>

<main class="lout-main">
<?php if( is_singular() ) { ?>
	<article class="lout-main-contents">
<?php } else { ?>
	<article class="lout-archive-contents">
<?php } ?>
<?php get_template_part( 'parts/loop' ); ?>
<?php if(! is_singular() ) { ?>
	<nav class="lout-pagination">
		<?php
			if( function_exists ( 'wp_pagenavi' ) ) {
				wp_pagenavi();
			}
		?>
	</nav>
<?php } ?>
</article><!--/.lout-main-contents-->

	<?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>