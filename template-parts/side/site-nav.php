<nav id="site-nav" class="site-nav">
	<div class="inner">
        <?php if (is_single() ) : ?>
	    <?php get_template_part('template-parts/side/auto-menu'); ?>
	    <?php get_template_part('template-parts/side/tldr'); ?>
	    <?php endif; ?>
		<?php get_template_part('template-parts/side/main','menu'); ?>
		<?php get_template_part('template-parts/side/author','box'); ?>
	</div>
</nav>
