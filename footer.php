<footer class="lout-footer">
	<div class="lout-main">
		<?php if ( is_active_sidebar( 'tagcloud' ) ) dynamic_sidebar( 'tagcloud' ); ?>
		<section class="lout-footer-auth">
			<h2 class="lout-footer-auth-h">Author</h2>
			<dl>
				<dt><img src="<?php echo COMMON_PFIX; ?>/img/auth/aki_yat2_white.jpg" alt=""></dt>
				<dd>WebデザイナーのYATです。Webデザイン、コーディング、プログラミング、プランニング、ディレクションと幅広く行なっています。当ブログに関しては<a href="/?page_id=5">YATのBLOGに関して</a>を御覧ください</dd>
				<dd><a href="/">YATのBLOGトップページはこちら</a></dd>
			</dl>
		</section><!--/.mod-auth-->
	</div><!--/.lout-main-->
	<div class="lout-copyright">
		<div class="mod-container">
			<address class="lout-copyright-body">Copyright 2009 YAT</address>
		</div>
	</div><!--/.lout-copyright-->
</footer>
<?php wp_footer(); ?>
</body>
</html>
