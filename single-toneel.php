<?php get_header(); ?>

  <?php while ( have_posts() ) : the_post(); ?>

    <div class="bs-toneel-panel">
      <div>
        <div class="uk-background-cover uk-background-fixed uk-flex uk-flex-center uk-flex-middle uk-padding-large" style="background-image:url('<?php if( get_field( 'bg' ) ): the_field( 'bg' ); endif; ?>');">
          <?php previous_post_link( '%link', '<span class="uk-position-center-left" uk-icon="icon: chevron-left; ratio:3"></span>' ) ?>
          <div class="uk-display-block uk-light uk-text-left uk-padding bs-bg-toneel" uk-scrollspy="uk-animation-fade">
            <h2 class="bs-header-special"><?php the_title(); ?></h2>
            <p class="bs-subheader"><?php echo(get_the_excerpt()); ?></p>
          </div>
          <?php next_post_link( '%link', '<span class="uk-position-center-right" uk-icon="icon: chevron-right; ratio:3"></span>' ) ?>
          <!-- <a class="uk-position-bottom-center" href="#main" uk-scroll><span uk-icon="icon: chevron-down; ratio:3"></span></a> -->
        </div>
      </div>
    </div>

    <div class="uk-section" id="main">
      <div class="uk-container">
        <?php get_template_part( 'template-parts/content', 'toneel' ); ?>
      </div>
    </div>

  <?php endwhile; ?>

<?php get_footer(); ?>
