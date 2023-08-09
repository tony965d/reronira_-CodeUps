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
        <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/voice_mv-pc.png">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/voice_mv.png" alt="">
      </picture>
      <div class="mv-sub__body">
        <h2 class="mv-sub__title">Voice</h2>
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

  <section class="voice-sub top-voice-sub">
    <div class="voice-sub__inner inner">
      <div class="voice-sub__categories categories">
        <div class="categories__all">
          <a href="<?php echo $voice ?>" class="<?php if(!is_front_page() && is_post_type_archive('voice')) echo 'categories__all-bg is-active'; ?>">ALL</a>
        </div>
        <?php
          $args = [
            'taxonomy' => 'voice_category',
            'hide_empty' => 0, 
          ];
            $terms = get_terms($args);
            foreach ( $terms as $term ) {
              echo '<div class="categories__category"><a class="categories__category-bg is-active" href="'.get_term_link($term).'">'.$term->name.'</a></div>';
            }
        ?>
      </div>  
      <div class="voice-sub__container voice-items">

        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
      
        <div class="voice-items__voice-item voice-items__voice-item--sub voice-item">
          <div class="voice-item__box">
            <div class="voice-item__header">
              <div class="voice-item__sub-title">
                <p class="voice-item__profile"><?php echo SCF::get('voice_age'); ?></p>
                <div class="voice-item__category">
                  <p class="voice-item__category-text">
                  <?php 
                    $terms = get_the_terms($post->ID, 'voice_category');
                    foreach ($terms as $term) {
                      echo $term->name ;
                    }
                    ?>
                  </p>
                </div>
              </div>
              <div class="voice-item__title voice-item__title--voice"><?php the_title(); ?></div>
            </div>
            <div class="voice-item__image js-voice-item-image">
              <?php if (has_post_thumbnail()) { ?>
              <?php the_post_thumbnail('full'); ?>
              <?php } else { ?>
              <?php } ?>
            </div>
          </div>
          <div class="voice-item__text">
            <?php the_content(); ?>
          </div>
        </div>
          
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="page-nav page-nav--voice">
        <?php if(function_exists("wp_pagenavi")) wp_pagenavi(); ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>

