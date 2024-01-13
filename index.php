<?php get_header(); ?>

    <main>
      <section class="mv">
        <div class="mv__wrapper">
          <div class="mv__images">
            <div class="swiper js-mv-swiper u-desktop">
              <div class="swiper-wrapper">

                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                
                <picture class="swiper-slide mv__image">
                  <source media="(min-width: 768px)" 
                    srcset="<?php
                            $group_name = get_field('mv_image-pc');	
                            if( $group_name ): ?>
                              <?php echo $group_name['mv-pc_1']; ?>
                            <?php endif; ?>">
                  
                  <img src="<?php
                            $group_name = get_field('mv_image');	
                            if( $group_name ): ?>
                              <?php echo $group_name['mv_1']; ?>
                            <?php endif; ?>" alt="">
                </picture>


                <picture class="swiper-slide mv__image">
                  <source media="(min-width: 768px)" 
                    srcset="<?php
                            $group_name = get_field('mv_image-pc');	
                            if( $group_name ): ?>
                              <?php echo $group_name['mv-pc_2']; ?>
                            <?php endif; ?>">
                  
                  <img src="<?php
                            $group_name = get_field('mv_image');	
                            if( $group_name ): ?>
                              <?php echo $group_name['mv_2']; ?>
                            <?php endif; ?>" alt="">
                </picture>

                <picture class="swiper-slide mv__image">
                  <source media="(min-width: 768px)" 
                    srcset="<?php
                            $group_name = get_field('mv_image-pc');	
                            if( $group_name ): ?>
                              <?php echo $group_name['mv-pc_3']; ?>
                            <?php endif; ?>">
                  
                  <img src="<?php
                            $group_name = get_field('mv_image');	
                            if( $group_name ): ?>
                              <?php echo $group_name['mv_3']; ?>
                            <?php endif; ?>" alt="">
                </picture>

                <picture class="swiper-slide mv__image">
                  <source media="(min-width: 768px)" 
                    srcset="<?php
                            $group_name = get_field('mv_image-pc');	
                            if( $group_name ): ?>
                              <?php echo $group_name['mv-pc_4']; ?>
                            <?php endif; ?>">
                  
                  <img src="<?php
                            $group_name = get_field('mv_image');	
                            if( $group_name ): ?>
                              <?php echo $group_name['mv_4']; ?>
                            <?php endif; ?>" alt="">
                </picture>

                <?php endwhile; ?>
                <?php endif; ?>

                <!-- <div class="swiper-slide mv__image">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv_pc1.png" alt="">
                </div>
                <div class="swiper-slide mv__image">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv_pc2.png" alt="">
                </div>
                <div class="swiper-slide mv__image">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv_pc3.png" alt="">
                </div>
                <div class="swiper-slide mv__image">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv_pc4.png" alt="">
                </div> -->

              </div>
            </div>
            <div class="swiper js-mv-swiper u-mobile">
              <div class="swiper-wrapper">
                <div class="swiper-slide mv__image">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv_1.png" alt="">
                </div>
                <div class="swiper-slide mv__image">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv_2.png" alt="">
                </div>
                <div class="swiper-slide mv__image">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv_3.png" alt="">
                </div>
                <div class="swiper-slide mv__image">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv_4.png" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="mv__body">
            <h2 class="mv__title">DIVING</h2>
            <p class="mv__sub-title">into the ocean</p>
          </div>
        </div>
      </section>

      <section class="campaign top-campaign">
        <div class="campaign__inner">
          <div class="campaign__header section-header inner">
            <h2 class="section-header__title">Campaign</h2>
            <p class="section-header__sub-title">キャンペーン</p>
          </div>
          <div class="campaign__swiper-button">
            <div class="swiper-button-prev u-desktop">
              <div class="campaign__pre">
              </div>
            </div>
            <div class="swiper-button-next u-desktop">
              <div class="campaign__next">
              </div>
            </div>
          </div>
          <div class="campaign__container">
            <div class="campaign__wrapper inner">
              <div class="campaign__contents">
                <div class="swiper campaign__swiper js-campaign-swiper">
                  <div class="swiper-wrapper">

                    <?php 
                    $campaign_query = new WP_Query(
                    array(
                    'post_type'      => 'post',
                    'posts_per_page' => 4,
                    )
                    );
                    ?>
                    <?php if ( $campaign_query->have_posts() ) : ?>
                    <?php while ( $campaign_query->have_posts() ) : ?>
                    <?php $campaign_query->the_post(); ?>

                    <div class="swiper-slide campaign__swiper-slide">
                      <div class="campaign__feature feature">
                        <div class="feature__image">
                          <?php if (has_post_thumbnail()) { ?>
                          <?php the_post_thumbnail('full'); ?>
                          <?php } else { ?>
                          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/noimage.png" alt="画像がありません">
                          <?php } ?> 
                        </div>
                        <div class="feature__header">
                          <div href="<?php the_permalink(); ?>" class="feature__category">
                          <?php 
                              $terms = get_the_terms($post->ID,'category');
                                foreach ( $terms as $term ) {
                                  echo $term->name ;
                                }
                              ?>
                          </div>
                          <div class="feature__title"><?php the_title(); ?></div>
                        </div>
                        <?php
                          $campaign_card = SCF::get('campaign_card');
                          foreach ($campaign_card as $fields ) 
                        { ?>
                        <div class="feature__content">
                          <p class="feature__about"><?php echo $fields['card_sub-text']; ?></p>
                          <div class="feature__unit">
                            <p class="feature__text"><?php echo $fields['original_price']; ?></p>
                            <div class="feature__pickup"><?php echo $fields['campaign_price']; ?></div>
                          </div>
                        </div>
                        <?php }; ?>
                      </div>
                    </div>
                    <?php wp_reset_postdata(); ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="campaign__button">
            <a href="<?php echo $campaign ?>" class="button">View more<span class="button__arrow"></span></a>
          </div>
        </div>
      </section>

      <section class="about top-about">
        <div class="about__inner inner">
          <div class="about__header section-header">
            <h2 class="section-header__title">About us</h2>
            <p class="section-header__sub-title">私たちについて</p>
          </div>
          <div class="about__container">
            <div class="about__wrapper">
              <div class="about__back-image">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/about_2.png" alt="">
              </div>
              <div class="about__image">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/about_1.png" alt="">
              </div>
            </div>
            <div class="about__contents">
              <h3 class="about__title">Dive into<br>the Ocean</h3>
              <div class="about__body">
                <p class="about__text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<span class="u-desktop about__text-sub">が入ります。</span>
                </p>
                <div class="about__button">
                  <a href="<?php echo $about ?>" class="button">View more<span class="button__arrow"></span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="about__background u-desktop">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/about_sango.png" alt="">
          </div>
        </div>
      </section>

      <section class="information top-information">
        <div class="information__inner inner">
          <div class="information__header section-header">
            <h2 class="section-header__title">Information</h2>
            <p class="section-header__sub-title">ダイビング情報</p>
          </div>
          <div class="information__contents content-box">
            <div class="content-box__image js-content-box-image">
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/info_1.png" alt="">
            </div>
            <div class="content-box__body">
              <div class="content-box__title">ライセンス講習</div>
              <p class="content-box__text">
                当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
                正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
              </p>
              <div class="content-box__button">
                <a href="<?php echo $information ?>" class="button">View more<span class="button__arrow"></span></a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="blog top-blog">
        <div class="blog__container">
          <div class="blog__inner inner">
            <div class="blog__background u-desktop">
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/blog_goldfish.png" alt="">
            </div>
            <div class="blog__header section-header section-header--blog">
              <h2 class="section-header__title">Blog</h2>
              <p class="section-header__sub-title">ブログ</p>
            </div>
            <div class="blog__cards cards">

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

              <a href="<?php the_permalink(); ?>" class="cards__card card">
                <div class="card__image">
                  <?php if (has_post_thumbnail()) { ?>
                  <?php the_post_thumbnail('full'); ?>
                  <?php } else { ?>
                  <?php } ?>
                  <!-- <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/blog_1.png" alt=""> -->
                </div>
                <div class="card__body">
                  <div class="card__header">
                    <time datetime="<?php the_time('c'); ?>" class="card__date"><?php the_time('Y.m.d'); ?></time>
                    <p class="card__title"><?php the_title(); ?></p>
                  </div>
                  <p class="card__text">
                    <?php
                      if ( mb_strlen( $post->post_content, 'UTF-8' ) > 86 ) {
                        $content = mb_substr( strip_tags( $post->post_content ), 0, 86, 'UTF-8' );
                        echo $content . '…';
                      } else {
                        echo strip_tags ( $post->post_content );
                      }
                    ?>
                  </p>
                </div>
              </a>

              <?php wp_reset_postdata(); ?>
              <?php endwhile; ?>
              <?php endif; ?>
            </div>
            <div class="blog__button">
              <a href="<?php echo $blog_page ?>" class="button">View more<span class="button__arrow"></span></a>
            </div>
          </div>
        </div>
      </section>

      <section class="voice top-voice">
        <div class="voice__inner inner">
          <div class="voice__bg-image u-desktop">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/voice_tatsu.png" alt="">
          </div>
          <div class="voice__background u-desktop">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/voice_goldfish.png" alt="">
          </div>
          <div class="voice__header section-header">
            <h2 class="section-header__title">Voice</h2>
            <p class="section-header__sub-title">お客様の声</p>
          </div>
          
          <div class="voice__wrapper voice-items">
            <?php 
            $voice_query = new WP_Query(
            array(
            'post_type'      => 'voice',
            'posts_per_page' => 2,
            )
            );
            ?>
            <?php if ( $voice_query->have_posts() ) : ?>
            <?php while ( $voice_query->have_posts() ) : ?>
            <?php $voice_query->the_post(); ?>

            <div class="voice-items__voice-item voice-item">
              <div class="voice-item__box">
                <div class="voice-item__header">
                  <div class="voice-item__sub-title">
                    <p class="voice-item__profile">
                      <?php echo SCF::get('voice_age'); ?>
                    </p>
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
                  <div class="voice-item__title"><?php the_title(); ?></div>
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

            <?php wp_reset_postdata(); ?>
            <?php endwhile; ?>
            <?php endif;  ?>
          </div>
          <div class="voice__button">
            <a href="<?php echo $voice ?>" class="button">View more<span class="button__arrow"></span></a>
          </div>
        </div>
      </section>

      <section class="price top-price">
        <div class="price__inner inner">
          <div class="price__background u-desktop">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/price_goldfish.png" alt="">
          </div>
          <div class="price__header section-header">
            <h2 class="section-header__title">Price</h2>
            <p class="section-header__sub-title">料金一覧</p>
          </div>
          <div class="price__wrapper">
            <div class="price__image js-price__image u-mobile">
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/price_1.png" alt="">
            </div>
            <div class="price__image js-price__image u-desktop">
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/price_2.png" alt="">
            </div>
            <div class="price__contents">
              <div class="price__box">
                <h3 class="price__sub-title">ライセンス講習</h3>

                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                
                <dl class="price__menu menu-contents">

                  
                  <?php
                    $page_id = 147; 
                    $license = SCF::get('license', 147);
                    foreach ($license as $fields ) { ?>

                    <div class="menu-contents__item menu-item">
                      <dt class="menu-item__name"><?php echo $fields['license_item']; ?></dt>
                      <dd class="menu-item__value"><?php echo $fields['license_price']; ?></dd>
                    </div>
                  <?php }; ?>

                  <!-- <div class="menu-contents__item menu-item">
                    <dt class="menu-item__name">オープンウォーターダイバーコース</dt>
                    <dd class="menu-item__value">¥50,000</dd>
                  </div>
                  <div class="menu-contents__item menu-item">
                    <dt class="menu-item__name">アドバンスドオープンウォーターコース</dt>
                    <dd class="menu-item__value">¥60,000</dd>
                  </div>
                  <div class="menu-contents__item menu-item">
                    <p class="menu-item__name">レスキュー＋EFRコース</p>
                    <dd class="menu-item__value">¥70,000</dd>
                  </div> -->
                  
                </dl>
                <?php endwhile; ?>
                <?php endif; ?>
              </div>

              <div class="price__box">
                <h3 class="price__sub-title">体験ダイビング</h3>
                
                <dl class="price__menu menu-contents">
                  
                  <?php
                    $page_id = 147; 
                    $experience = SCF::get('experience', 147);
                    foreach ($experience as $fields ) { ?>

                    <div class="menu-contents__item menu-item">
                      <dt class="menu-item__name"><?php echo $fields['experience_item']; ?></dt>
                      <dd class="menu-item__value"><?php echo $fields['experience_price']; ?></dd>
                    </div>
                  <?php }; ?>

                  <!-- <div class="menu-contents__item menu-item">
                    <dt class="menu-item__name">ビーチ体験ダイビング(半日)</dt>
                    <dd class="menu-item__value">¥7,000</dd>
                  </div>
                  <div class="menu-contents__item menu-item">
                    <dt class="menu-item__name">ビーチ体験ダイビング(1日)</dt>
                    <dd class="menu-item__value">¥14,000</dd>
                  </div>
                  <div class="menu-contents__item menu-item">
                    <dt class="menu-item__name">ボート体験ダイビング(半日)</dt>
                    <dd class="menu-item__value">¥10,000</dd>
                  </div>
                  <div class="menu-contents__item menu-item">
                    <dt class="menu-item__name">ボート体験ダイビング(1日)</dt>
                    <dd class="menu-item__value">¥18,000</dd>
                  </div> -->
                </dl>
              </div>

              <div class="price__box">
                <h3 class="price__sub-title">ファンダイビング</h3>
                <dl class="price__menu menu-contents">

                  <?php
                    $page_id = 147; 
                    $fun = SCF::get('fun', 147);
                    foreach ($fun as $fields ) { ?>

                    <div class="menu-contents__item menu-item">
                      <dt class="menu-item__name"><?php echo $fields['fun_item']; ?></dt>
                      <dd class="menu-item__value"><?php echo $fields['fun_price']; ?></dd>
                    </div>
                  <?php }; ?>

                  <!-- <div class="menu-contents__item menu-item">
                    <dt class="menu-item__name">ビーチダイビング(2ダイブ)</dt>
                    <dd class="menu-item__value">¥14,000</dd>
                  </div>
                  <div class="menu-contents__item menu-item">
                    <dt class="menu-item__name">ボートダイビング(2ダイブ)</dt>
                    <dd class="menu-item__value">¥18,000</dd>
                  </div>
                  <div class="menu-contents__item menu-item">
                    <dt class="menu-item__name">スペシャルダイビング(2ダイブ)</dt>
                    <dd class="menu-item__value">¥24,000</dd>
                  </div>
                  <div class="menu-contents__item menu-item">
                    <dt class="menu-item__name">ナイトダイビング(1ダイブ)</dt>
                    <dd class="menu-item__value">¥10,000</dd>
                  </div> -->
                </dl>
              </div>
              <div class="price__box">
                <h3 class="price__sub-title">スペシャルダイビング</h3>
                <dl class="price__menu menu-contents">
                  <?php
                    $page_id = 147; 
                    $special = SCF::get('special', 147);
                    foreach ($special as $fields ) { ?>

                    <div class="menu-contents__item menu-item">
                      <dt class="menu-item__name"><?php echo $fields['special_item']; ?></dt>
                      <dd class="menu-item__value"><?php echo $fields['special_price']; ?></dd>
                    </div>
                  <?php }; ?>


                  <!-- <div class="menu-contents__item menu-item">
                    <dt class="menu-item__name">貸切ダイビング(2ダイブ)</dt>
                    <dd class="menu-item__value">¥24,000</dd>
                  </div>
                  <div class="menu-contents__item menu-item">
                    <dt class="menu-item__name">1日ダイビング(3ダイブ)</dt>
                    <dd class="menu-item__value">¥32,000</dd>
                  </div> -->
                </dl>
              </div>
            </div>
          </div>
          <div class="price__button">
            <a href="<?php echo $price ?>" class="button">View more<span class="button__arrow"></span></a>
          </div>
        </div>
      </section>

      <section class="contact top-contact">
        <div class="contact__inner inner">
          <div class="contact__background">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/contact_goldfish.png" alt="">
          </div>
          <div class="contact__wrapper">
            <div class="contact__block inner">
              <div class="contact__logo">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/CodeUps_contact_logo.png" alt="">
              </div>
              <div class="contact__content">
                <ul class="contact__body">
                  <li class="contact__info">
                    <p>沖縄県那覇市1-1</p>
                  </li>
                  <li class="contact__info">
                    <p>TEL:<span>0120-000-0000</span></p>
                  </li>
                  <li class="contact__info">
                    <p>営業時間:<span>8:30-19:00</span></p>
                  </li>
                  <li class="contact__info">
                    <p>定休日:<span>毎週火曜日</span></p>
                  </li>
                </ul>
                <div class="contact__map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57273.02319565179!2d127.64350204644842!3d26.210859430208657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5697141a6b58b%3A0x2cd8aff616585e98!2z5rKW57iE55yM6YKj6KaH5biC!5e0!3m2!1sja!2sjp!4v1687230539574!5m2!1sja!2sjp" width="295" height="160" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
            <div class="contact__box inner">
              <div class="contact__header section-header section-header--contact">
                <h2 class="section-header__title">Contact</h2>
                <p class="section-header__sub-title">お問い合わせ</p>
              </div>
              <p class="contact__text">ご予約・お問い合わせはコチラ</p>
              <div class="contact__button">
                <a href="<?php echo $contact ?>" class="button">Contact us<span class="button__arrow"></span></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>       
    
    <footer class="footer top-footer">
      <a href="#header" class="page-top" id="page-top">
        <div class="page-top__button"></div>
      </a>
      <div class="footer__inner inner">
        <nav class="footer__nav">
          <div class="footer__box">
            <a href="<?php echo $home ?>" class="footer__logo">
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/CodeUps_footer_logo.png" alt="">
            </a>
            <ul class="footer__sns-links">
              <li class="footer__sns-link">
                <a href="#" class="footer__facebook">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/FacebookLogo.png" alt="">
                </a>
              </li>
              <li class="footer__sns-link">
                <a href="#" class="footer__insta">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/InstagramLogo.png" alt="">
                </a>
              </li>
            </ul>
          </div>
          <div class="footer__nav-items nav-items">
            <div class="nav-items__box">
              <ul class="nav-items__items">
                <li class="nav-items__unit nav-items__unit--sp">
                  <a href="<?php echo $campaign ?>" class="nav-items__main">キャンペーン</a>
                </li>
                <li class="nav-items__item">
                  <a href="<?php echo $category ?>/fun" class="nav-items__sub">ファンダイビング</a>
                </li>
                <li class="nav-items__item">
                  <a href="<?php echo $category ?>/license" class="nav-items__sub">ライセンス講習</a>
                </li>
                <li class="nav-items__item">
                  <a href="<?php echo $category ?>/experience" class="nav-items__sub">体験ダイビング</a>
                </li>
                <li class="nav-items__unit">
                  <a href="<?php echo $about ?>" class="nav-items__main">私たちについて</a>
                </li>
              </ul>
              <ul class="nav-items__items">
                <li class="nav-items__unit nav-items__unit--pc">
                  <a href="<?php echo $information ?>" class="nav-items__main">ダイビング情報</a>
                </li>
                <li class="nav-items__item js-nav-info">
                  <a href="<?php echo $information ?>#info-license" class="nav-items__sub">ライセンス講習</a>
                </li>
                <li class="nav-items__item js-nav-info">
                  <a href="<?php echo $information ?>#info-experience" class="nav-items__sub">体験ダイビング</a>
                </li>
                <li class="nav-items__item js-nav-info">
                  <a href="<?php echo $information ?>#info-fun" class="nav-items__sub">ファンダイビング</a>
                </li>
                <li class="nav-items__unit">
                  <a href="<?php echo $blog_page ?>" class="nav-items__main">ブログ</a>
                </li>
              </ul>
            </div>
            <div class="nav-items__box nav-items__box--right">
              <ul class="nav-items__items">
                <li class="nav-items__unit nav-items__unit--sp">
                  <a href="<?php echo $voice ?>" class="nav-items__main">お客様の声</a>
                </li>
                <li class="nav-items__unit">
                  <a href="<?php echo $price ?>" class="nav-items__main">料金一覧</a>
                </li>
                <li class="nav-items__item">
                  <a href="<?php echo $price ?>#price-license" class="nav-items__sub">ライセンス講習</a>
                </li>
                <li class="nav-items__item">
                  <a href="<?php echo $price ?>#price-experience" class="nav-items__sub">体験ダイビング</a>
                </li>
                <li class="nav-items__item">
                  <a href="<?php echo $price ?>#price-fun" class="nav-items__sub">ファンダイビング</a>
                </li>
              </ul>
              <ul class="nav-items__items">
                <li class="nav-items__unit nav-items__unit--pc">
                  <a href="<?php echo $faq ?>" class="nav-items__main">よくある質問</a>
                </li>
                <li class="nav-items__unit">
                  <a href="<?php echo $SiteMap ?>" class="nav-items__main">サイトマップ</a>
                </li>
                <li class="nav-items__unit">
                  <a href="<?php echo $privacy ?>" class="nav-items__main">プライバシー<span class="u-mobile"><br></span>ポリシー</a>
                </li>
                <li class="nav-items__unit">
                  <a href="<?php echo $termsOfService ?>" class="nav-items__main">利用規約</a>
                </li>
                <li class="nav-items__unit">
                  <a href="<?php echo $contact ?>" class="nav-items__main">お問い合わせ</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>  
      </div>
      <div class="footer__copyright inner">
        <small>
          &copy;2022-<?php the_time('Y'); ?> 
          <?php echo get_bloginfo('name'); ?> Inc.
        </small>
      </div>
    </footer>           

    <?php wp_footer(); ?>
  </body>
</html>