<?php //* The Query
$exec_query = new WP_Query( array(

  'post_type' => 'websites',
  'posts_per_page' => -1

) );

//* The Loop
if( $exec_query->have_posts() ) { ?>

<div class="uk-section">
  <div class="uk-grid-small uk-child-width-1-2 uk-child-width-1-4@m" uk-grid="masonry: true; parallax: 150">

    <?php while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>

      <div class="hvrbox">
          <a href="<?php the_permalink(); ?>">
            <span class="hvrbox-layer_bottom"><?php the_post_thumbnail(); ?></span>
          </a>
          <div class="hvrbox-layer_top hvrbox-layer_scale">
            <div class="hvrbox-text">
              <h3>
                <a href="<?php the_permalink();?>">
                  <?php the_title(); ?>
                </a>
              </h3>
              <p>
              <a href="<?php the_permalink(); ?>">
                <?php the_field( 'soort' ) ?>
              </a>
            </p>
            </div>
          </div>
        </div>

    <?php endwhile;
    //* Restore original Post Data
    wp_reset_postdata(); ?>

  </div>
</div>

<?php } ?>
