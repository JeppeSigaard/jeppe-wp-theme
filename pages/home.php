<section class="feature">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('template-parts/common/featured','article'); ?>
    <?php endwhile;  ?>
</section>