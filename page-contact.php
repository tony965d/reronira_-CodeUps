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

  ?>

<main>
  <section class="mv-sub">
    <div class="mv-sub__inner">
      <div class="mv-sub__wrapper">
        <div class="mv-sub__image">
        <picture class="mv-sub__image">
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>./dist/assets/images/common/contact_mv-pc.png">
          <img src="<?php echo get_template_directory_uri(); ?>./dist/assets/images/common/contact_mv.png" alt="">
        </picture>
        <div class="mv-sub__body">
          <h2 class="mv-sub__title">Contact</h2>
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


  <section class="contact-sub top-contact-sub">
    <div class="contact-sub__inner inner">
      <div class="contact-sub__container">
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php echo do_shortcode('[contact-form-7 id="944" title="お問い合わせ"]'); ?>
        
      <?php endwhile; ?>
      <?php endif;  ?>

      </div>
    </div>
  </section>

<?php get_footer(); ?>

