<?php get_header(); ?>

<section class="bs-bg-fiber uk-section">
  <div class="uk-container">

    <?php if( have_posts() ): while( have_posts() ): the_post(); ?>

    <div class="uk-child-width-1-1" uk-grid>
      <figure class="uk-text-center">
        <?php the_custom_logo(); ?>
      </figure>
    </div>

    <div class="uk-grid-large uk-child-width-1-1" uk-grid>
      <div class="uk-article">
        <h2 class="uk-article-title uk-heading-line uk-text-center">
          <span><?php the_title(); ?></span>
        </h2>

        <div class="uk-padding" uk-grid>
          <div class="uk-width-2-5@s">
            <figure>
              <?php the_post_thumbnail('square-medium'); the_post_thumbnail_caption(); ?>
            </figure>
          </div>

          <div class="uk-width-3-5@s">
            <p class="uk-article-meta uk-text-center">
              <?php if( get_field('soort') ): the_field('soort'); endif; ?>
            </p>
            <p class="uk-article-lead uk-text-center">
              <?php if( get_field('datum') ): the_field('datum'); endif; ?>
            </p>
            <?php the_content(); ?>
            <hr class="uk-article-divider">
            <p class="uk-text-center">
              <?php
              $link = get_field('link');
              if( $link ): ?>

                <a class="uk-button uk-button-danger" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>

              <?php endif; ?>
            </p>

          </div>
        </div>

      </div>
  </div>

  <?php endwhile; else: ?>

  </div>

    <p><?php e_( 'Sorry, niks gevonden qua content...' ); ?></p>

  <?php endif; ?>

</section>

<?php get_footer(); ?>
