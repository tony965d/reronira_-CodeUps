<?php get_header(); ?>

  <?php 
    $home = esc_url(home_url('/'));
    $campaign = esc_url(home_url( '/campaign' ));
    $about = esc_url(home_url( '/about' ));
    $information = esc_url(home_url( '/information' ));
    $blog = esc_url(home_url( '/blog' ));
    $voice = esc_url(home_url( '/voice' ));
    $price = esc_url(home_url( '/price' ));
    $faq = esc_url(home_url( '/faq' ));
    $contact = esc_url(home_url( '/contact' ));
    $privacy = esc_url(home_url( '/privacy' ));
    $terms = esc_url(home_url( '/terms' ));
    $SiteMap = esc_url(home_url( '/SiteMap' ));
  ?>

<main>
  <section class="mv-sub">
    <div class="mv-sub__inner">
    <div class="mv-sub__wrapper">
      <picture class="mv-sub__image">
        <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/about_mv-pc.png">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/about_mv.png" alt="">
      </picture>
      <div class="mv-sub__body">
        <h2 class="mv-sub__title">About us</h2>
      </div>
    </div>
    </div>
  </section>

  <div class="wp-breadcrumb wp-breadcrumb--about inner">
    <?php if(function_exists('bcn_display'))
      {
          bcn_display();
      }?>
  </div>

  <section class="about-sub top-about-sub">
    <div class="about-sub__inner inner">
      <div class="about-sub__container">
        <div class="about-sub__wrapper">
          <div class="about-sub__back-image">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/about_2.png" alt="">
          </div>
          <div class="about-sub__image">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/about_1.png" alt="">
          </div>
        </div>
        <h3 class="about-sub__title">Dive into<br>the Ocean</h3>
        <div class="about-sub__body">
          <p class="about-sub__text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</span>
          </p>
        </div>
      </div>
      <div class="about-sub__header section-header section-header--about-sub">
        <h2 class="section-header__title"> Gallery</h2>
        <p class="section-header__sub-title">フォト</p>
      </div>


      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
      
      <div class="about-sub__galleries">

        <?php
          $galleries = SCF::get('galleries');
          foreach ($galleries as $fields ) { 
            $gallery_url = wp_get_attachment_image_src($fields['gallery'] , 'full');   
          ?>
          <div class="about-sub__gallery js-gallery">
            <img src="<?php echo $gallery_url[0]; ?>" alt="">
          </div>
        <?php }; ?>

      </div>

      <?php endwhile; ?>
      <?php endif; ?>
      
    </div>
    <div class="about-sub__gallery-expansion js-gallery-expansion">
    </div>
  </section>

<?php get_footer(); ?>