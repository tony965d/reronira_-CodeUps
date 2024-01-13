<?php get_header(); ?>

<main>
  <section class="mv-sub">
    <div class="mv-sub__inner">
      <div class="mv-sub__wrapper">
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

  <div class="wp-breadcrumb wp-breadcrumb--sub inner">
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
