<div class="shopbar">
  <div class="container">
    <?php	if ( is_user_logged_in() ) { ?>
      <?php $user_info = wp_get_current_user();
      $userloginname = $user_info->user_login;
      $nicename = $user_info->user_nicename;
      $email = $user_info->user_email;
      ?>

      <div id="logos" class="logos col-xs-6 col-sm-6 col-md-6">
        <a class="navbar-logo" href="<?php bloginfo('url')?>">
          <img class="head" src="<?php bloginfo('template_url');?>/library/images/logo-color-white.png">
        </a>
      </div>
      <div id="shopmenu" class="col-xs-6 col-sm-6 col-md-6">
        <p style="padding-right: 50px;"><a href="<?php bloginfo('url'); ?>/shop">[shop]</a><a href="<?php bloginfo('url'); ?>/wp-admin"> [admin]</a></p>
        <p><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account',''); ?>"><?php //echo $userloginname; ?>Account</a> / <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>customer-logout" title="<?php _e('My Account',''); ?>">log out</a></p>
        <p class="fav"><a href="<?php bloginfo('url'); ?>/basket"><img src="<?php echo get_template_directory_uri(); ?>/library/images/favourites.png" alt=""></a></p>

        <?php $favcow = get_user_favorites_count(); ?>
        <?php if($favcow == 0){ ?>
          <p class="numberwrap hideme"><?php echo do_shortcode('[user_favorite_count]'); ?></p>
        <?php } else { ?>
          <p class="numberwrap"><?php echo do_shortcode('[user_favorite_count]'); ?></p>
        <?php } ?>

        <p class="basket"><a href="<?php bloginfo('url'); ?>/basket"><img src="<?php echo get_template_directory_uri(); ?>/library/images/basket_icon.png" alt=""></a></p>
        <p class="numberwrap"><span class="cartno"></span></p>
      </div>
    <?php }else{ ?>
    <p><a href="<?php bloginfo('url'); ?>/login">login</a></p>
    <p class="fav"><a href="<?php bloginfo('url'); ?>/basket"><img src="<?php echo get_template_directory_uri(); ?>/library/images/favourites.png" alt=""></a></p>

    <?php $favcow = get_user_favorites_count(); ?>
    <?php if($favcow == 0){ ?>
      <p class="numberwrap hideme"><?php echo do_shortcode('[user_favorite_count]'); ?></p>
    <?php } else { ?>
      <p class="numberwrap"><?php echo do_shortcode('[user_favorite_count]'); ?></p>
    <?php } ?>

    <p class="basket"><a href="<?php bloginfo('url'); ?>/basket"><img src="<?php echo get_template_directory_uri(); ?>/library/images/basket_icon.png" alt=""></a></p>
    <p class="numberwrap"><span class="cartno"></span></p>    <? }	?>
  </div>
</div>

<div id="nav-fix" class="container">
  <div class="row">

    <div id="logos" class="col-xs-6 col-sm-6 col-md-4">
      <a class="navbar-logo" href="<?php bloginfo('url')?>">
        <?php if (is_front_page()): ?>
          <img class="head" src="<?php bloginfo('template_url');?>/library/images/logo-white.png">
        <?php else: ?>
          <img class="head" src="<?php bloginfo('template_url');?>/library/images/logo-color-color.png">
        <?php endif; // is page loop ?>
      </a>
    </div>


    <nav class="hidden-xs hidden-sm col-md-8" role="navigation">
      <?php /* Primary navigation */
        wp_nav_menu( array(
          'menu' => 'top navigation',
          'depth' => 2,
          'container' => false,
          'menu_class' => 'nav',
          'theme_location' => 'main-nav',             // where it's located in the theme
          //Process nav menu using our custom nav walker
          'walker' => new wp_bootstrap_navwalker())
        );
      ?>
    </nav><!-- nav desk -->

    <div class="navburger-wrapper col-xs-6 col-sm-6 hidden-md hidden-lg">
      <button type="button" class="navburger">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="sr-only">Toggle navigation</span>
      </button>
    </div>

  </div><!-- /.row -->
</div><!-- /#nav-fix -->


<div class="the-blob">
</div>

<div class="the-blob-nav">
  <div id="nav-fix" class="container">
    <div class="row">
      <div id="logos" class="col-xs-6 col-sm-6 col-md-4">
        <a class="navbar-logo" href="<?php bloginfo('url')?>">
          <img class="head" src="<?php bloginfo('template_url');?>/library/images/logo.png">
        </a>
        <a class="navbar-text hidden-xs" href="<?php bloginfo('url')?>">
          <span>Whitelabel</span>
        </a>
      </div>

      <div class="navburger-wrapper col-xs-6 col-sm-6 hidden-md hidden-lg">
        <button type="button" class="navburger">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="sr-only">Toggle navigation</span>
        </button>
      </div>

    </div><!-- /.row -->
  </div><!-- /#nav-fix -->


		<div class="blob-table">
			<div class="blob-cell">
        <?php /* Primary navigation */
          wp_nav_menu( array(
            'menu' => 'top navigation',
            'depth' => 2,
            'container' => false,
            'menu_class' => 'nav navbar-nav',
            'theme_location' => 'main-nav',             // where it's located in the theme
            //Process nav menu using our custom nav walker
            'walker' => new wp_bootstrap_navwalker())
          );
        ?>
      </div>
		</div>

	</div>
