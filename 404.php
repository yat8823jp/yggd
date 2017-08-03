<!-- 404.php -->
<?php get_header(); ?>
<?php
  get_template_part( 'parts/title', 'single' );
}//is_single() ?>
<main class="lout-main">
<article class="lout-main-contents">
	<?php get_template_part( 'parts/loop' ); ?>
</article>
	<?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
