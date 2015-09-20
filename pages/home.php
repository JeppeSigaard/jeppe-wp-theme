<section class="blogroll">
	<ul>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part('template-parts/common/list','item'); ?>
		<?php endwhile;  ?>
	</ul>
</section>
