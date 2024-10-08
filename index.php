<?php get_header(); ?>
<?php
	if ( is_singular() || is_404() ) :
		get_template_part( 'parts/title', 'single' );
	else :
		get_template_part( 'parts/share', 'archive' );
	endif;
?>

<main class="lout-main">
<?php if ( is_singular() ) : ?>
	<article class="lout-main-contents">
<?php elseif ( is_archive() || is_home() ) : ?>
	<article class="lout-archive-contents">
<?php elseif ( is_404() ) : ?>
<?php endif; ?>
<?php get_template_part( 'parts/loop' ); ?>
<?php if ( ! is_singular() ) : ?>
		<?php
			global $wp_query;
			$max_num_pages = $wp_query->max_num_pages; //ページ総数

			if ( function_exists ( 'wp_pagenavi' ) ) :
				if ( $max_num_pages > 1 ) :
					echo '<nav class="lout-pagination">';
					wp_pagenavi();
					echo '</nav>';
				endif;
			endif;
		?>
<?php endif; ?>
</article>
	<?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
