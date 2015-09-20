<?php while (have_posts()) : the_post(); ?>
<article <?php post_class('post-preview'); ?>>
	<header class="post-header">
		<?php the_title('<div class="post-title"><h1>','</h1></div>'); ?>
		<div class="post-meta">
			<span><?php the_modified_date(); ?></span>
		</div>
	</header>
	<section class="post-lead">
		<div class="read-width">
			<?php the_excerpt(); ?>
		</div>
	</section>
	<section class="subsection post-content">
		<div class="read-width">
			<?php the_content(); ?>
		</div>
	</section>

</article>
<?php endwhile; ?>
