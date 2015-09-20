<section class="section-prime">
	<div class="inner read-width">
		<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class('post-preview'); ?>>
			<header class="post-header">
				<?php the_title('<h1 class="post-title">','</h1>'); ?>
				<div class="post-meta">
					<strong><?php the_author(); ?></strong>
					<span><?php the_modified_date(); ?></span>
				</div>
				<div class="post-lead"><?php the_excerpt(); ?></div>
			</header>
			<?php the_content(); ?>
		</article>
		<?php endwhile; ?>
	</div>
</section>
