<?php get_header(); ?>

<?php if( have_posts() ): ?>

  <?php while ( have_posts() ) : the_post(); ?>

    <div class="" id="<?php echo basename( get_permalink() ); ?>">

      <?php if( is_page( 'websites-overzicht' ) ) { ?>

        <?php get_template_part( 'template-parts/content', 'websites' ); ?>

      <?php } elseif( is_page( 'arts-comics' ) ) {

        get_template_part( 'template-parts/content', 'artscom' );

      } else {

        echo "This is the page.php file";

      } ?>

    </div>

  <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
