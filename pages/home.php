<section class="section-prime">
	<div class="inner read-width">
		<?php while (have_posts()) : the_post(); ?>
		<a href="<?php the_permalink(); ?>">
			<article <?php post_class('post-preview'); ?>>
				<header class="post-header">
					<?php the_title('<h3 class="post-title">','</h3>'); ?>
				</header>
				<?php the_excerpt(); ?>
			</article>
		</a>
		<?php endwhile; ?>
	</div>
</section>
