<!-- NAVIGATION -->

<?php if( is_front_page() || is_page( 'websites-overzicht' ) ) { ?>

<nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

<?php } else { ?>

<nav class="uk-navbar-container bs-dark-nav" uk-navbar uk-sticky>

<?php } ?>

  <div class="uk-navbar-left">

    <div class="bs-logo-area">
      <a href="<?php bloginfo( 'url' ); ?>" class="uk-navbar-item uk-logo">
        <?php bloginfo( 'name' ); ?>
      </a>

      <?php if( is_front_page() || is_page( 'websites-overzicht' ) ): ?>
        <p class="bs-description" uk-scrollspy="cls: uk-animation-fade; delay: 500">
          <?php bloginfo( 'description' ); ?>
        </p>
      <?php endif; ?>
    </div>

  </div>

  <div class="uk-navbar-right">
    <div class="uk-visible@s">
      <?php wp_nav_menu( array(
        'theme_location' => 'schtroumpfie-menu',
        'container' => 'ul',
        'menu_class' => 'uk-navbar-nav'
      ) ); ?>
    </div>


    <!-- FOR SMALL NAVIGATION -->

    <div class="uk-offcanvas-content uk-hidden@s">

      <a class="uk-light uk-padding-small" href="#bs-small-menu" uk-toggle uk-icon="icon:menu; ratio: 2"></a>

      <div id="bs-small-menu" uk-offcanvas>
        <div class="uk-offcanvas-bar">
          <button class="uk-offcanvas-close" type="button" uk-close></button>

          <?php wp_nav_menu( array(
            'theme_location' => 'schtroumpfie-menu',
            'container' => 'ul',
            'menu_class' => 'uk-nav'
          ) ); ?>
        </div>
      </div>

    </div>
  </div>

</nav>
