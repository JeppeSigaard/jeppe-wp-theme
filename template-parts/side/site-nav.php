<nav id="site-nav" class="site-nav">
	<div class="inner">
		<?php if (is_single()) : get_template_part('template-parts/side/author','box'); endif; ?>
		<div class="site-nav-part main-menu">
			<?php wp_nav_menu(array(
				'theme-location' => 'main-menu',
				'container'       => false,
				'menu_class'      => false,
				'echo'            => true,
				'fallback_cb'     => false,
				'items_wrap'      => '<ul>%3$s</ul>',
			)); ?>
		</div>
	</div>
</nav>
