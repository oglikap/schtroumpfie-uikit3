<!DOCTYPE HTML>

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header>

			<?php if( is_front_page() ) {?>

				<div id="hero" class="bs-hero">

				<?php get_template_part( 'template-parts/content', 'nav' ); ?>

				<div class="uk-child-width-1-1 uk-text-center bs-schtroumpfie" uk-grid uk-scrollspy="uk-animation-fade; delay: 700;">
					<?php the_custom_logo(); ?>
				</div>

				</div>

			<?php } elseif ( is_page( 'websites-overzicht' ) ) { ?>

				<div id="hero-websites" class="bs-hero" style="background-image:url('<?php if( get_field( 'bg' ) ): the_field( 'bg' ); endif ?>');">

					<?php get_template_part( 'template-parts/content', 'nav' ); ?>

					<h1 class="uk-heading-line uk-light uk-text-right"><span>Websites</span></h1>

					<div class="uk-text-center" uk-grid>

					  <div class="uk-width-1-4 uk-visible@s" style="opacity: .6;">
					    <img src="<?php echo get_template_directory_uri() . '/img/yellowsub3.png'; ?>" alt="We all live in a yellow submarine">
					  </div>
					  <div class="uk-width-expand bs-websmurf-bg">
							<img src="<?php echo get_template_directory_uri() . '/img/websmurf.png'; ?>" alt="">

							<p class="font-red uk-padding-large uk-padding-remove-top">As mentioned, Bad Schtroumpfies can build your website. They can design and build attractive, light-weight sites which scale nicely from mobile phone to wide-screen. Just contact us and we'll find out what suits you best!</p>

							<span class="font-red"><?php get_template_part( 'template-parts/content', 'icons' ); ?></span>
					  </div>
					  <div class="uk-width-1-4 uk-visible@s" style="opacity: .6;">
					    <img src="<?php echo get_template_directory_uri() . '/img/yellowsub4.png'; ?>" alt="Sea species">
					  </div>

					</div>

				</div>

			<?php } elseif( is_page( 'arts-comics' ) ) { ?>

				<div id="hero-artscom" class="uk-height-medium uk-background-secondary">

					<?php get_template_part( 'template-parts/content', 'nav' ); ?>

					<div class="uk-padding-large" uk-grid>
						<div class="uk-width-1-1 uk-width-2-3@s">
							<h1 class="uk-light"><span><?php the_title(); ?></span></h1>
						</div>
						<div class="uk-width-1-1 uk-width-1-3@s">
							<img class="bs-page-logo" src="<?php echo get_template_directory_uri() . '/img/logo-los.svg' ?>" alt="logo" width="75" height="75">
						</div>
					</div>
				</div>

			<?php } else {

				get_template_part( 'template-parts/content', 'nav');

			} ?>

		</header>
