<?php $tldr = get_post_meta(get_the_ID(),'tldr',true); if ($tldr && !empty($tldr)) : ?>
<div class="single-tldr">
    <h3>tl:dr;</h3>
    <div class="tldr-content">
        <?php echo apply_filters('the_content', $tldr); ?>
    </div>
</div>
<?php endif; ?>