<aside class="blog-sub__side-bar side-bar">
          <div class="side-bar__inner inner">

            <nav class="side-bar__article">
              <h3 class="side-bar__title">人気記事</h3>
    
              <div class="side-bar__cards cards">
    
                <?php
                $blog_query = new WP_Query(
                  array(
                    'post_type'      => 'blog',
                    'posts_per_page' => 3,
                  )
                );
              ?>
  
              <?php if ( $blog_query->have_posts() ) : ?>
              <?php while ( $blog_query->have_posts() ) : ?>
              <?php $blog_query->the_post(); ?>
              
                <a href="<?php the_permalink(); ?>" class="cards__card card card--side-bar">
                  <div class="card__image card__image--side-bar">
                    <?php if (has_post_thumbnail()) { ?>
                    <?php the_post_thumbnail('full'); ?>
                    <?php } else { ?>
                    <img src="<?php echo get_template_directory_uri(); ?>../images/common/noimage.jpg" alt="画像がありません">
                    <?php } ?> 
                  </div>
                  <div class="card__body card__body--side-bar">
                    <div class="card__header card__header--side-bar">
                      <time datetime="<?php the_time('Y.m.d'); ?>" class="card__date"><?php the_time('Y.m.d'); ?></time>
                      <p class="card__title"><?php the_title(); ?></p>
                    </div>
                  </div>
                </a>
                
              <?php wp_reset_postdata(); ?>
              <?php endwhile; ?>
              <?php endif; ?>
              </div>
            </nav>
  
            <nav class="side-bar__voice">
              <h3 class="side-bar__title">口コミ</h3>
  

              <?php
                $voice_query = new WP_Query(
                  array(
                    'post_type'      => 'voice',
                    'posts_per_page' => 1,
                  )
                );
              ?>

              <?php if ( $voice_query->have_posts() ) : ?>
              <?php while ( $voice_query->have_posts() ) : ?>
              <?php $voice_query->the_post(); ?>

              <a href="<?php the_permalink(); ?>" class="side-bar__voice-item voice-item voice-item--side-bar">
                <div class="voice-item__box voice-item__box--side-bar">
                  <div class="voice-item__header voice-item__header--side-bar">
                    <div class="voice-item__sub-title">
                      <p class="voice-item__profile"><?php echo SCF::get('voice_age'); ?></p>
                    </div>
                    <div class="voice-item__title voice-item__title--side-bar"><?php the_title(); ?></div>
                  </div>
                  <div class="voice-item__image voice-item__image--side-bar js-voice-item-image">

                    <?php if (has_post_thumbnail()) { ?>
                    <?php the_post_thumbnail('full'); ?>
                    <?php } else { ?>
                    <img src="<?php echo get_template_directory_uri(); ?>../images/common/noimage.jpg" alt="画像がありません">
                    <?php } ?> 
                    
                  </div>
                </div>
              </a>
              <?php wp_reset_postdata(); ?>
              <?php endwhile; ?>
              <?php endif; ?>


              <div class="side-bar__voice-button">
                <a href="<?php echo $voice ?>" class="button">View more<span class="button__arrow"></span></a>
              </div>
            </nav>
  
            <nav class="side-bar__campaign">
              <h3 class="side-bar__title">キャンペーン</h3>
  
              <?php
                $campaign_query = new WP_Query(
                  array(
                    'post_type'      => 'post',
                    'posts_per_page' => 2,
                  )
                );
              ?>
  
              <?php if ( $campaign_query->have_posts() ) : ?>
              <?php while ( $campaign_query->have_posts() ) : ?>
              <?php $campaign_query->the_post(); ?>
  
                <a href="<?php the_permalink(); ?>" class="side-bar__feature feature">
                  <div class="feature__image feature__image--side-bar">
                    
                    <?php if (has_post_thumbnail()) { ?>
                    <?php the_post_thumbnail('full'); ?>
                    <?php } else { ?>
                    <img src="<?php echo get_template_directory_uri(); ?>../images/common/noimage.jpg" alt="画像がありません">
                    <?php } ?> 
  
                  </div>
  
                  <div class="feature__header feature__header--side-bar">
                    <!-- <div class="feature__category">ライセンス講習</div> -->
                    <div class="feature__title feature__title--side-bar"><?php the_title(); ?></div>
                  </div>  
  
                  <?php
                    $campaign_card = SCF::get('campaign_card');
                    foreach ($campaign_card as $fields ) { ?>
  
                    <div class="feature__content feature__content--side-bar">
                      <p class="feature__about"><?php echo $fields['card_sub-text']; ?></p>
                      <div class="feature__unit feature__unit--side-bar">
                        <p class="feature__text feature__text--side-bar"><?php echo $fields['original_price']; ?></p>
                        <div class="feature__pickup feature__pickup--side-bar"><?php echo $fields['campaign_price']; ?></div>
                      </div>
                    </div>
                  <?php }; ?>
                </a>
  
              <?php wp_reset_postdata(); ?>
              <?php endwhile; ?>
              <?php endif; ?>
  
              <div class="side-bar__campaign-button">
                <a href="<?php echo $campaign ?>" class="button">View more<span class="button__arrow"></span></a>
              </div>
  
            </nav>
  
            <nav class="side-bar__archive">
              <h3 class="side-bar__title">アーカイブ</h3>
              <ul class="side-bar__menus">
                <li class="side-bar__menu">
                  <p class="side-bar__menu-open active js-side-bar-open">2023</p>
                  <nav class="side-bar__nav js-side-bar-nav">
                    <ul class="side-bar__menu-items">
                    <!-- <?php wp_get_archives('type=monthly&post_type=blog'); ?> -->

                    <?php
                        // 2023年の月別アーカイブを取得するためのパラメータ
                      $args = array(
                          'type' => 'monthly',
                          'show_post_count' => false, // 記事件数を表示する
                          'year' => 2023,
                          'post_type' => 'blog', // 投稿タイプ名
                          'before' => '<span class="side-bar__menu-text">',
                          'after' => '</span>',
                      );

                      // 月別アーカイブのリストを出力
                      wp_get_archives($args);
                    ?>


<!-- <?php
                          // 2023年の月別アーカイブを取得するためのパラメータ
                          $args = array(
                            'type' => 'monthly',
                            // 'year' => 2023, // 表示したい特定の年を指定
                            'show_post_count' => false, // 記事件数を表示する
                            'post_type' => 'blog', // 投稿タイプ名
                            'before' => '<span class="side-bar__menu-text">',
                            'after' => '</span>',
                          );
                          // 月別アーカイブのリストを出力
                          wp_get_archives($args);
                          ?> -->
                    </ul>
                  </nav>
                </li>
                

                <!-- <li class="side-bar__menu">
                  <p class="side-bar__menu-open active js-side-bar-open">2022</p>
                  <nav class="side-bar__nav js-side-bar-nav">
                    <ul class="side-bar__menu-items">
                      <?php
                          // 2023年の月別アーカイブを取得するためのパラメータ
                        $args = array(
                            'type' => 'monthly',
                            'show_post_count' => false, // 記事件数を表示する
                            'post_type' => 'blog', // 投稿タイプ名
                            'before' => '<span class="side-bar__menu-text">',
                            'after' => '</span>',
                        );
                        // 月別アーカイブのリストを出力
                        wp_get_archives($args);
                      ?>
                    </ul>
                  </nav>
                </li> -->

                <!-- <li class="side-bar__menu">
                  <p class="side-bar__menu-open active js-side-bar-open">2022</p>
                  <nav class="side-bar__nav js-side-bar-nav">
                    <ul class="side-bar__menu-items">
                      <li class="side-bar__menu-item">
                        <a href="#" class="side-bar__menu-text">12月</a>
                      </li>
                      <li class="side-bar__menu-item">
                        <a href="#" class="side-bar__menu-text">11月</a>
                      </li>
                      <li class="side-bar__menu-item">
                        <a href="#" class="side-bar__menu-text">10月</a>
                      </li>
                    </ul>
                  </nav>
                </li> -->

              </ul>
              
                      
            </nav>
          </div>

  
        </aside>