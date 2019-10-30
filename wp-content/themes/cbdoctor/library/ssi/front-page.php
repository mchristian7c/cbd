<section class="container-fluid best-sellers">
  <div class="container">
    <header>
      <h2>our best sellers</h2>
      <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet lorem.</p>
    </header>
<?php

    $args = array(
      'post_type' => 'product',
      'posts_per_page' => 2, // -1 for all posts
      // 'offset' => 2
      'meta_key' => 'make_best_seller',
      'meta_value' => '1',
    );

$loop = new WP_Query( $args );

if ( $loop->have_posts() ): $count = 0; ?>
    <div class="row">

  <?php while ( $loop->have_posts() ): $count++; $loop->the_post(); ?>

    <div class="col-sm-6 single-product">
      <div class="product-img-wrap">
        <div class="overlay"></div>
        <?php the_post_thumbnail('full'); ?>
        <?php echo do_shortcode('[favorite_button]'); ?>
      </div>
      <div class="product-deets-wrap">
        <h4><?php the_title(); ?></h4>
        <?php if(have_rows('attributes')): ?>
          <ul>
          <?php while(have_rows('attributes')): the_row(); ?>
            <li><?php the_sub_field('attribute'); ?></li>
          <?php endwhile; ?>
          </ul>
        <?php endif; ?>
        <?php $price = get_post_meta( get_the_ID(), '_price', true ); echo wc_price( $price ); ?>
      </div>
    </div>

  <?php endwhile; ?>
    </div>
<?php endif; ?>

<?php

    $args = array(
      'post_type' => 'product',
      'posts_per_page' => 3, // -1 for all posts
      'offset' => 2,
      'meta_key' => 'make_best_seller',
      'meta_value' => '1',
    );

$twop = new WP_Query( $args );

if ( $twop->have_posts() ): ?>
    <div class="row">

  <?php while ( $twop->have_posts() ): $twop->the_post(); ?>

    <div class="col-sm-4 single-product three-up">
      <div class="product-img-wrap">
        <div class="overlay"></div>
        <?php the_post_thumbnail('full'); ?>
        <?php echo do_shortcode('[favorite_button]'); ?>

        <?php $favcow = get_user_favorites_count(); ?>
        <?php //if($favcow < 2){ ?>
          <!-- <p>clear favs</p> -->
        <?php //} else { ?>
          <?php //echo do_shortcode('[favorite_button]'); ?>
        <?php //} ?>

        <span id="usercount-span" style="display:none;"><?php echo $favcow; ?></span>
        <script type="text/javascript">


          jQuery(document).ready(function($) {

            var usrc = document.getElementById("usercount-span").value;
            var bla = $('#usercount-span').val();

            console.log(bla, '- usercount')
            console.log(usrc, '- usercount')


          		$(document).on('favorites-updated-single', function(event, favorites, post_id, site_id, status){
          		  $('.numberwrap').removeClass('hideme');
          		});

            }); // JQ

        </script>

      </div>
      <div class="product-deets-wrap">
        <h4><?php the_title(); ?></h4>
        <?php if(have_rows('attributes')): ?>
          <ul>
          <?php while(have_rows('attributes')): the_row(); ?>
            <li><?php the_sub_field('attribute'); ?></li>
          <?php endwhile; ?>
          </ul>
        <?php endif; ?>
        <?php $price = get_post_meta( get_the_ID(), '_price', true ); echo wc_price( $price ); ?>
      </div>
    </div>

  <?php endwhile; ?>
    </div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
    <div class="link teal center">
      <a href="<?php bloginfo('url'); ?>/shop">view all products</a>
    </div>
    </div>
  </section>

<div class="container-fluid icons-row">
<div class="container">
  <div class="col-sm-2">
    <img src="<?php echo get_template_directory_uri(); ?>/library/images/thc-free.png" alt="thc free">
    <h3>THC FREE</h3>
  </div>
  <div class="col-sm-2">
    <img src="<?php echo get_template_directory_uri(); ?>/library/images/shipping.png" alt="free shipping">
    <h3>FREE SHIPPING</h3>
  </div>
  <div class="col-sm-2">
    <img src="<?php echo get_template_directory_uri(); ?>/library/images/vegan.png" alt="100 percent vegan">
    <h3>100% VEGAN</h3>
  </div>
  <div class="col-sm-2">
    <img src="<?php echo get_template_directory_uri(); ?>/library/images/lab-tested.png" alt="lab tested">
    <h3>LAB TESTED</h3>
  </div>
  <div class="col-sm-2">
    <img src="<?php echo get_template_directory_uri(); ?>/library/images/natural.png" alt="100 percent natural">
    <h3>100% NATURAL</h3>
  </div>
  <div class="col-sm-2">
    <img src="<?php echo get_template_directory_uri(); ?>/library/images/secure.png" alt="secure payment">
    <h3>SECURE PAYMENT</h3>
  </div>
</div>
</div>



<div id="ken-hom" class="testimonials container_fluid carousel kb_elastic animate_text kb_wrapper lazyload" data-expand="-110" data-ride="carousel" data-interval="6000" data-pause="hover">
  <div class="container">
    <div class="carousel-inner">

      <?php

          $args = array(
            'post_type' => 'testimonials',
            'posts_per_page' => 5,
          );

      $loop = new WP_Query( $args );

      if ( $loop->have_posts() ): $count = 0; ?>
        <?php while ( $loop->have_posts() ): $count++; $loop->the_post(); ?>


      <div class="item">
        <div class="table">
          <!-- <div class="cell"> -->

            <div class="text-img cell">
              <div class="img-wrap">
                <?php the_post_thumbnail('full'); ?>
              </div>
            </div>

            <div class="test-txt cell">
              <div class="cell">
                <img src="<?php echo get_template_directory_uri(); ?>/library/images/quotes.png" alt="">
                <?php the_content(); ?>
                <h4><?php the_title(); ?></h4>
                <h4><?php the_field('job_title'); ?></h4>
              </div>
            </div>

          <!-- </div> -->
        </div>

      </div>
      <?php endwhile; endif; ?><!-- / slides -->
      <?php wp_reset_query(); ?>
    </div>

    <ol class="carousel-indicators">
      <?php
        $args = array(
          'post_type' => 'testimonials',
          'posts_per_page' => -1,
        );
      $loop = new WP_Query( $args );
      if ( $loop->have_posts() ): ?>
      <? $counter = 0; ?>
      <?php while ( $loop->have_posts() ): $loop->the_post(); ?>

        <li data-target="#ken-hom" data-slide-to="<?php echo $counter; ?>" class="button"></li>

      <? $counter++; ?>
      <?php endwhile; ?>
      <?php endif; ?><!-- / slides -->
      <?php wp_reset_query(); ?>
    </ol>

  </div>
</div>

<div class="container-fluid">
<div class="container">
  <?php
    $terms = get_terms( 'product_cat' );
      if ( $terms ) {
      echo '<ul class="product-cats">';
      foreach ( $terms as $term ) {
        echo '<li class="category col-sm-6">';
          woocommerce_subcategory_thumbnail( $term );
          echo '<h2><a href="' .  esc_url( get_term_link( $term ) ) . '" class="' . $term->slug . '">'. $term->name . '</a></h2>';
          $count = $term->count;
          echo '<h2>';
            echo $count . " product",($count !=1 ? 's' : '');
          echo '</h2>';
        echo '</li>';
      }
      echo '</ul>';
    }
   ?>
</div>
</div>
