<?php get_header(); ?>

  <?php while ( have_posts() ) : the_post(); ?>
    <header>
      <h2><?php the_title(); ?></h2>
    </header>
    <?php get_template_part( 'template-parts/content' ); ?>
  <?php endwhile; ?>
This is the index file
<?php get_footer(); ?>
