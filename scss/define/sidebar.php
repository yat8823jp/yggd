<aside id="sidebar" class="l-sidebar">
	<h2>Menu</h2>
	<button id="sidebar-bt--close" class="l-sidebar-bt--close"><img src="<?php echo COMMON_PFIX; ?>/images/common/ico_close.svg" alt="閉じるボタン"></button>
	<nav class="p-gmenu">
		<?php wp_nav_menu( array( "menu" => "categorymenu" ) ); ?>
	</nav>
</aside>
