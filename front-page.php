<?php get_header(); ?>

<?php if( have_posts() ): ?>

  <p class="bs-slogan uk-text-center" style="line-height:1;">
    Holy Smokes: "<em><span class="font-red">Behave</span></em> like an adult is something different than <em><span class="font-red">being</span></em> an adult."
  </p>

  <div class="uk-section uk-padding-remove-top">

    <div class="uk-container">

    <div class="uk-child-width-1-2@s uk-grid-collapse uk-text-center uk-margin-top bs-tiles uk-box-shadow-medium" uk-grid uk-height-match="target: > div > .uk-tile">

      <?php while( have_posts() ): the_post(); ?>

        <div>
          <div class="uk-tile">
            <?php if( have_rows( 'home' ) ): while( have_rows( 'home' ) ): the_row(); ?>
              <span class="uk-text-center uk-light" uk-icon="icon: world; ratio:2;"></span>
              <?php the_content();
              get_template_part( 'template-parts/content', 'icons' );
              ?>
          </div>
        </div>
        <div class="uk-flex-first@s">
          <div class="uk-tile bs-bg-fiber uk-flex uk-flex-center uk-flex-middle">
            <?php $image = get_sub_field( 'image' );
            $size = 'square';
            if( $image ) {

              echo wp_get_attachment_image( $image, $size );

            } ?>
          </div>
        </div>
        <div>
          <div class="uk-tile" style="line-height:1;">
            <p class="text-center" style="line-height:1;">
              Etymology<br />
              by Wikipedia:<br />
              "Borrowed from Dutch<br />  <span class="font-24px">smurf (“smurf”)</span>, <span class="font-16px">(via <br /> the Belgian comic</span> <span class="font-22px">De Smurfen<br />  (“The Smurfs”),</span><span class="font-16px">a translation of<br /> </span> French <span class="font-22px">Les Schtroumpfs),</span> <span class="font-16px">from<br /> </span> French
              <span class="font-22px"> Schtroumpf</span> <span class="font-16px"> (“smurf”),<br />  probably from the</span> military slang <span class="font-24px">stroumpf</span> (“idiot”), <span class="font-16px">from German</span> <span class="font-22px">Strumpf</span> <span class="font-19px">(“one<br />  who is overweight <br /> and lazy”).</span>"
            </p>
          </div>
        </div>
        <div>
          <div class="uk-tile bs-bg-fiber uk-flex uk-flex-middle">
            <?php $image_2 = get_sub_field( 'image_2' );
            if( !empty( $image_2 ) ) : ?>
              <img src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['alt']; ?>">
            <?php endif; ?>
          </div>
        </div>

        <?php endwhile; endif; ?>

      <?php endwhile; ?>

    </div>

  </div>

  </div>


<?php get_sidebar(); ?>

<?php endif; ?>


<?php get_footer(); ?>
