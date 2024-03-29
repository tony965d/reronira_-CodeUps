<?php get_header(); ?>

<main>
  <section class="mv-sub">
    <div class="mv-sub__inner">
      <div class="mv-sub__wrapper">
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

  <div class="wp-breadcrumb wp-breadcrumb--sub inner">
    <?php if(function_exists('bcn_display'))
      {
          bcn_display();
      }?>
  </div>

  <section class="voice-sub top-voice-sub">
    <div class="voice-sub__inner inner">
      <div class="voice-sub__categories categories">
        <div class="categories__all">
          <a href="<?php echo $voice ?>" class="categories__all-btn is-active">ALL</a>
        </div>
        <?php
          $args = [
            'taxonomy' => 'voice_category',
            'hide_empty' => 0, 
          ];
            $terms = get_terms($args);

            if ( count( $terms ) != 0 ) {
              // タームのリスト $terms を $term に格納してループ
              foreach ( $terms as $term ) {
                  // 投稿でタームのスラッグを選択していれば、currentを付与
                  if ( is_object_in_term( $post->ID, 'voice_category', $term->slug ) ) {
                      echo '<div class="__category"><a class="categories__category-bg is-active current" href="'.get_term_link($term).'">'.$term->name.'</a></div>';
                  } else {
                      echo '<div class="categories__category"><a class="categories__category-bg is-active" href="'.get_term_link($term).'">'.$term->name.'</a></div>';
                  }          
              }
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