<div class="post-meta">
	<span><?php the_modified_date('d. M Y'); ?></span>
	<ul class="post-meta-share">
		<li><a href="#" class="fb-share">
				<?php include get_template_directory().'/statics/icons/facebook.svg'; ?>
		</a></li>
		<li><a href="https://twitter.com/intent/tweet?url=<?php rawurlencode(the_permalink()); ?>" target="_blank" class="tw-share">
			<?php include get_template_directory().'/statics/icons/twitter.svg'; ?>
		</a></li>
		<li><a href="#comments" class="comment-link">
			<?php include get_template_directory().'/statics/icons/insert_comment.svg'; ?>
		</a></li>
	</ul>
</div>
