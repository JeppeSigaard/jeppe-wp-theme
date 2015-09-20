<?php while (have_posts()) : the_post(); ?>
<article <?php post_class('post-preview'); ?>>
	<?php $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'widescreen'); ?>
	<header class="post-header" style="background-image:url(<?php echo $image_url[0] ?>);">
		<?php the_title('<div class="post-title"><h1>','</h1></div>'); ?>
		<div class="post-meta">
			<span><?php the_modified_date('d. M Y'); ?></span>
			<ul class="post-meta-share">
				<li>
					<a href="#" class="fb-share">
						<?php include get_template_directory().'/statics/icons/facebook.svg'; ?>
					</a>
				</li>
				<li><a href="#" class="tw-share">
					<?php include get_template_directory().'/statics/icons/twitter.svg'; ?>
				</a></li>
				<li><a href="#" class="gp-share">
					<?php include get_template_directory().'/statics/icons/gplus.svg'; ?>
				</a></li>
				<li><a href="#" class="link-share">
					<?php include get_template_directory().'/statics/icons/link.svg'; ?>
				</a></li>
			</ul>
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
