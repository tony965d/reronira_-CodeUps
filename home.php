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
  ?>

<main>
  <section class="mv-sub">
    <div class="mv-sub__inner">
    <div class="mv-sub__wrapper">
      <picture class="mv-sub__image">
        <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>./dist/assets/images/common/campaign_mv-pc.png">
        <img src="<?php echo get_template_directory_uri(); ?>./dist/assets/images/common/campaign_mv.png" alt="">
      </picture>
      <div class="mv-sub__body">
        <h2 class="mv-sub__title">Campaign</h2>
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
  

  <section class="campaign-sub top-campaign-sub">
    <div class="campaign-sub__inner inner">


      <div class="campaign-sub__categories categories">
        <div class="categories__all">
          <a href="<?php echo $campaign ?>" class="<?php if(!is_front_page() && is_home()) echo 'categories__all-bg is-active'; ?>">ALL</a>
        </div>
        <?php
          $args = [
            'taxonomy' => 'category',
            'hide_empty' => 0, 
          ];
            $terms = get_terms($args);
            foreach ( $terms as $term ) {
              echo '<div class="categories__category"><a class="categories__category-bg is-active" href="'.get_term_link($term).'">'.$term->name.'</a></div>';
            }
        ?>
      </div>  


      
    </div>
    <div class="campaign-sub__wrapper inner">
      <div class="campaign-sub__contents">

        <?php if (have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>
  
        <!-- <a href="<?php the_permalink(); ?>" class="campaign-sub__feature feature"> -->
        <div class="campaign-sub__feature feature">
  
          <div class="feature__image">
            <?php if (has_post_thumbnail()) { ?>
            <?php the_post_thumbnail('campaign'); ?>
            <?php } else { ?>
            <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/noimage.png" alt="画像がありません">
            <?php } ?> 
          </div>
  
  
          <div class="feature__header">
            <a href="<?php the_permalink(); ?>" class="feature__category">
            <?php 
                $terms = get_the_terms($post->ID,'category');
                  foreach ( $terms as $term ) {
                    echo $term->name ;
                  }
                ?>
            </a>
            <div class="feature__title"><?php the_title(); ?></div>
          </div>
  
            <?php
              $campaign_card = SCF::get('campaign_card');
              foreach ($campaign_card as $fields ) { ?>
  
              <div class="feature__content feature__content--campaign">
                <p class="feature__about"><?php echo $fields['card_sub-text']; ?></p>
                <div class="feature__unit feature__unit--campaign">
                  <p class="feature__text"><?php echo $fields['original_price']; ?></p>
                  <div class="feature__pickup"><?php echo $fields['campaign_price']; ?></div>
                </div>
                  
              </div>
              <div class="feature__body u-desktop">
                <p class="feature__body-text">
                  <?php
                    if ( mb_strlen( $post->post_content, 'UTF-8' ) > 200 ) {
                      $content = mb_substr( strip_tags( $post->post_content ), 0, 200, 'UTF-8' );
                      echo $content . '…';
                    } else {
                      echo strip_tags ( $post->post_content );
                    }
                  ?>
                </p>
              </div>

              <div class="feature__contact u-desktop">
                <p class="feature__period"><?php echo $fields['campaign_period']; ?></p>
                <p class="feature__contact-text"><?php echo $fields['campaign_contact']; ?></p>
                <div class="feature__button">
                  <a href="#" class="button">Contact us<span class="button__arrow"></span></a>
                </div>
              </div>  
            <?php }; ?>
              


        </div>

        <?php endwhile; ?>
        <?php else: ?>
        <!-- 投稿が無い場合の処理 -->
        投稿がありません
        <?php endif; ?>

        
      </div>
      
      
    </div>
    
    <div class="page-nav page-nav--campaign inner">
      <?php if(function_exists("wp_pagenavi")) wp_pagenavi(); ?>
    </div>

  </section>



<?php get_footer(); ?>