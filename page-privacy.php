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
        <div class="mv-sub__image">
        <picture class="mv-sub__image">
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/privacy_mv-pc.png">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/privacy_mv.png" alt="">
        </picture>
        <div class="mv-sub__body">
          <h2 class="mv-sub__title">Privacy Policy</h2>
        </div>
      </div>
    </div>
  </section>

  <div class="wp-breadcrumb wp-breadcrumb--faq inner">
    <?php if(function_exists('bcn_display'))
      {
          bcn_display();
      }?>
  </div>

  <section class="privacy top-privacy">
    <div class="privacy__inner inner">
      <div class="privacy__container">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <h3 class="privacy__title">
          <?php the_title(); ?>
        </h3>
        <div class="privacy__contents">
          <?php the_content(); ?>
        </div>

        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
