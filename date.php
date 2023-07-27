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
  ?>

<main>
  <section class="mv-sub">
    <div class="mv-sub__inner">
    <div class="mv-sub__wrapper">
      <div class="mv-sub__image">
      <picture class="mv-sub__image">
        <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>./dist/assets/images/common/blog_mv-pc.png">
        <img src="<?php echo get_template_directory_uri(); ?>./dist/assets/images/common/blog_mv.png" alt="">
      </picture>
      <div class="mv-sub__body">
        <h2 class="mv-sub__title">Blog</h2>
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

  <section class="blog-sub top-blog-sub">
    <div class="blog-sub__inner inner">
      <div class="blog-sub__container">
        <div class="blog-sub__cards blog-cards">

          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
        
          <a href="<?php the_permalink(); ?>" class="blog-cards__card card card--blog">
            <div class="card__image card__image--blog">
              <?php if (has_post_thumbnail()) { ?>
              <?php the_post_thumbnail('full'); ?>
              <?php } else { ?>
              <img src="<?php echo get_template_directory_uri(); ?>../images/common/noimage.jpg" alt="画像がありません">
              <?php } ?> 
            </div>
            <div class="card__body card__body--blog">
              <div class="card__header">
                <time datetime="<?php the_time('Y.m.d'); ?>" class="card__date"><?php the_time('Y.m.d'); ?></time>
                <p class="card__title"><?php the_title(); ?></p>
              </div>
              <p class="card__text">
                <?php
                  if ( mb_strlen( $post->post_content, 'UTF-8' ) > 26 ) {
                    $content = mb_substr( strip_tags( $post->post_content ), 0, 26, 'UTF-8' );
                    echo $content . '…';
                  } else {
                    echo strip_tags ( $post->post_content );
                  }
                ?>
              </p>
            </div>
          </a>

          <?php endwhile; ?>
          <?php endif; ?>

          <div class="page-nav page-nav--blog inner">
            <?php if(function_exists("wp_pagenavi")) wp_pagenavi(); ?>
          </div>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>    
  </section>

<?php get_footer(); ?>