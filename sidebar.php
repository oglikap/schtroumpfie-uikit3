<div class="uk-section">
  <div id="sidebar" class="bs-bg-fiber uk-padding">
    <div class="uk-grid-divider uk-child-width-1-1 uk-child-width-1-3@s" uk-grid>
        <?php if( is_active_sidebar( 'sidebar-1' ) ): ?>
          <div>
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
          </div>
        <?php endif; ?>

        <?php if( is_active_sidebar( 'sidebar-2' ) ): ?>
          <div>
            <?php dynamic_sidebar( 'sidebar-2' ); ?>
          </div>
        <?php endif; ?>

        <?php if( is_active_sidebar( 'sidebar-3' ) ): ?>
          <div>
            <?php dynamic_sidebar( 'sidebar-3' ); ?>
          </div>
        <?php endif; ?>
    </div>
  </div>
</div>
