<?php get_header(); ?>

<div id="content" class="row">

  <div id="main" class="<?php simple_bootstrap_main_classes(); ?>" role="main">

    <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

    <?php simple_bootstrap_display_post(true); ?>

    <?php endwhile; ?>

    <?php simple_bootstrap_page_navi(); ?>

    <?php else : ?>

    <article id="post-not-found" class="block">
        <p><?php _e("No posts found.", "default"); ?></p>
    </article>

    <?php endif; ?>

  </div>

  <?php get_sidebar("left"); ?>
  <?php get_sidebar("right"); ?>

</div>

<?php get_footer(); ?>