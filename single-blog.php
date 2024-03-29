<?php get_header(); ?>

<main>
  <section class="mv-sub">
    <div class="mv-sub__inner">
      <div class="mv-sub__wrapper">
        <picture class="mv-sub__image">
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/blog_mv-pc.png">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/blog_mv.png" alt="">
        </picture>
        <div class="mv-sub__body">
          <h2 class="mv-sub__title">Blog</h2>
        </div>
      </div>
    </div>
  </section>

  <div class="wp-breadcrumb inner">
    <?php if(function_exists('bcn_display'))
      {
          bcn_display();
      }?>
  </div>


  <section class="two-columns top-two-columns">
    <div class="two-columns__inner inner">
      <div class="two-columns__container">
        <div class="two-columns__left single">
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
          
            <time datetime="<?php the_time('c'); ?>" class="single__datetime"><?php the_time('Y.m.d'); ?></time>
            <h3 class="single__title"><?php the_title(); ?></h3>
            <div class="single__thumbnail">
              <?php if (has_post_thumbnail()) { ?>
              <?php the_post_thumbnail('full'); ?>
              <?php } ?>
            </div>
            <div class="single__block">
              <?php the_content(); ?>
            </div>
            <div class="page-nav page-nav--single">
              <div class="page-nav__left">
                <?php next_post_link('%link',''); ?>
              </div>
              <div class="page-nav__right">
                <?php previous_post_link('%link',''); ?>
              </div>
            </div>
          
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
        
        <?php get_sidebar(); ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>