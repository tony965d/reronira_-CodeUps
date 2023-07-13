<?php get_header(); ?>

    <main>
      <section class="mv">
        <div class="mv__wrapper">
          <div class="mv__images">
            <div class="swiper js-mv-swiper u-desktop">

              <div class="swiper-wrapper">
                <div class="swiper-slide mv__image">
                  <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/mv_pc1.png" alt="">
                </div>

                <div class="swiper-slide mv__image">
                  <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/mv_pc2.png" alt="">
                </div>

                <div class="swiper-slide mv__image">
                  <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/mv_pc3.png" alt="">
                </div>

                <div class="swiper-slide mv__image">
                  <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/mv_pc4.png" alt="">
                </div>
              </div>
            </div>

            <div class="swiper js-mv-swiper u-mobile">

              <div class="swiper-wrapper">
  
                <div class="swiper-slide mv__image">
                  <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/mv_1.png" alt="">
                </div>
  
  
                <div class="swiper-slide mv__image">
                  <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/mv_2.png" alt="">
                </div>
  
  
  
                <div class="swiper-slide mv__image">
                  <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/mv_3.png" alt="">
                </div>
  
  
                <div class="swiper-slide mv__image">
                  <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/mv_4.png" alt="">
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
          <!-- <div class="campaign__pre u-desktop">
            <div class="swiper-button-prev">
              
            </div>
          </div> -->

          <div class="campaign__swiper-button">
            <div class="swiper-button-prev u-desktop">
              <div class="campaign__pre">
                
              </div>
            </div>
            <div class="swiper-button-next u-desltop">
              <div class="campaign__next">
              </div>
            </div>
          </div>


          <!-- <div class="campaign__next u-desltop">
            <div class="swiper-button-next"></div>
          </div> -->

          <div class="campaign__container">

            <div class="campaign__wrapper inner">
              <div class="campaign__contents">

                <div class="swiper campaign__swiper js-campaign-swiper">
    
                  <div class="swiper-wrapper">
      
                    <div class="swiper-slide campaign__swiper-slide">
                      <a href="#" class="campaign__feature feature">
                        <div class="feature__image">
                          <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/campaign1.png" alt="">
                        </div>
                        <div class="feature__header">
                          <div class="feature__cate">ライセンス講習</div>
                          <div class="feature__title">ライセンス取得</div>
                        </div>
                        <div class="feature__content">
                          <p class="feature__about">全部コミコミ(お一人様)</p>
                          <div class="feature__unit">
                            <p class="feature__text">¥56,000</p>
                            <div class="feature__pickup">¥46,000</div>
                          </div>
                        </div>
                        <!-- <div class="feature__body">
                        </div> -->
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="#" class="campaign__feature feature">
                        <div class="feature__image">
                          <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/campaign2.png" alt="">
                        </div>
                        <div class="feature__header">
                          <div class="feature__cate">体験ダイビング</div>
                          <div class="feature__title">貸切体験ダイビング</div>
                        </div>
                        <div class="feature__content">
                          <p class="feature__about">全部コミコミ(お一人様)</p>
                          <div class="feature__unit">
                            <p class="feature__text">¥24,000</p>
                            <div class="feature__pickup">¥18,000</div>
                          </div>
                        </div>
                        <!-- <div class="feature__body">
                        </div> -->
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="#" class="campaign__feature feature">
                        <div class="feature__image">
                          <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/campaign3.png" alt="">
                        </div>
                        <div class="feature__header">
                          <div class="feature__cate">体験ダイビング</div>
                          <div class="feature__title">ナイトダイビング</div>
                        </div>
                        <div class="feature__content">
                          <p class="feature__about">全部コミコミ(お一人様)</p>
                          <div class="feature__unit">
                            <p class="feature__text">¥10,000</p>
                            <div class="feature__pickup">¥8,000</div>
                          </div>
                        </div>
                        <!-- <div class="feature__body">
                        </div> -->
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="#" class="campaign__feature feature">
                        <div class="feature__image">
                          <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/campaign4.png" alt="">
                        </div>
                        <div class="feature__header">
                          <div class="feature__cate">ファンダイビング</div>
                          <div class="feature__title">貸切ファンダイビング</div>
                        </div>
                        <div class="feature__content">
                          <p class="feature__about">全部コミコミ(お一人様)</p>
                          <div class="feature__unit">
                            <p class="feature__text">¥20,000</p>
                            <div class="feature__pickup">¥16,000</div>
                          </div>
                        </div>
                        <!-- <div class="feature__body">
                        </div> -->
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="campaign__button">
            <a href="#" class="button">View more<span class="button__arrow"></span></a>
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
                <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/about_2.png" alt="">
              </div>
              <div class="about__image">
                <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/about_1.png" alt="">
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
                  <a href="#" class="button">View more<span class="button__arrow"></span></a>
                </div>
                
              </div>
            </div>
            
          </div>
          <div class="about__background u-desktop">
            <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/about_sango.png" alt="">
                
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
            <div class="content-box__image js-content-box__image">
              <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/info_1.png" alt="">
            </div>

            <div class="content-box__body">
              <div class="content-box__title">ライセンス講習</div>
              <p class="content-box__text">
                当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
                正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
              </p>
              
              <div class="content-box__button">
                <a href="#" class="button">View more<span class="button__arrow"></span></a>
              </div>

            </div>
          </div>
          

        </div>
      </section>

      <section class="blog top-blog">
        <div class="blog__container">

          <div class="blog__inner inner">
            <div class="blog__background u-desktop">
              <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/blog_goldfish.png" alt="">
            </div>

            <div class="blog__header section-header">
              <h2 class="section-header__title section-header__title--blog">Blog</h2>
              <p class="section-header__sub-title section-header__sub-title--blog">ブログ</p>
            </div>

            <div class="blog__cards cards">
    
              <a href="#" class="cards__card card">
                <div class="card__image">
                  <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/blog_1.png" alt="">
                </div>
                <div class="card__body">
                  <div class="card__header">
                    <time class="card__date">2023.11/17</time>
                    <p class="card__title">ライセンス取得</p>
                  </div>
                  <p class="card__text">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                  </p>
                </div>
              </a>
        
              <a href="#" class="cards__card card">
                <div class="card__image">
                  <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/blog_2.png" alt="">
                </div>
                <div class="card__body">
                  <div class="card__header">
                    <time class="card__date">2023.11/17</time>
                    <p class="card__title">ウミガメと泳ぐ</p>
                  </div>
                  <p class="card__text">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                  </p>
                </div>
              </a>
        
              <a href="#" class="cards__card card">
                <div class="card__image">
                  <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/blog_3.png" alt="">
                </div>
                <div class="card__body">
                  <div class="card__header">
                    <time class="card__date">2023.11/17</time>
                    <p class="card__title">カクレクマノミ</p>
                  </div>
                  <p class="card__text">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                  </p>
                </div>
              </a>
            
            </div>
  
            <div class="blog__button">
              <a href="#" class="button">View more<span class="button__arrow"></span></a>
            </div>
            
  
          </div>
        </div>
      </section>

      <section class="voice top-voice">
        <div class="voice__inner inner">
          <div class="voice__bg-image u-desktop">
            <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/voice_tatsu.png" alt="">
          </div>

          <div class="voice__background u-desktop">
            <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/voice_goldfish.png" alt="">
          </div>

          <div class="voice__header section-header">
            <h2 class="section-header__title">Voice</h2>
            <p class="section-header__sub-title">お客様の声</p>
          </div>
          <div class="voice__wrapper">

            <a href="#" class="voice__item item">
              <div class="item__box">
                <div class="item__header">
                  <div class="item__sub-title">
                    <p class="item__profile">20代(女性)</p>
                    <div class="item__category">
                      <p class="item__category-text">ライセンス講習</p>
                    </div>
                  </div>
                  <div class="item__title">ここにタイトルが入ります。ここにタイトル</div>
                </div>
                <div class="item__image js-item__image">
                  <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/voice_1.png" alt="">
                </div>
              </div>
              <p class="item__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </a>
  
            <a href="#" class="voice__item item">
              <div class="item__box">
                <div class="item__header">
                  <div class="item__sub-title">
                    <p class="item__profile">20代(男性)</p>
                    <div class="item__category">
                      <p class="item__category-text">ファンダイビング</p>
                    </div>
                  </div>
                  <div class="item__title">ここにタイトルが入ります。ここにタイトル</div>
                </div>
                <div class="item__image js-item__image">
                  <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/voice_2.png" alt="">
                </div>
              </div>
              <p class="item__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </a>
            
          </div>

          <div class="voice__button">
            <a href="#" class="button">View more<span class="button__arrow"></span></a>
          </div>

          
        </div>
      </section>



      <section class="price top-price">
        <div class="price__inner inner">
          <div class="price__background u-desktop">
            <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/price_goldfish.png" alt="">
          </div>

          <div class="price__header section-header">
            <h2 class="section-header__title">Price</h2>
            <p class="section-header__sub-title">料金一覧</p>
          </div>

          <div class="price__wrapper">
            <div class="price__image js-price__image u-mobile">
              <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/price_1.png" alt="">
            </div>

            <div class="price__image js-price__image u-desktop">
              <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/price_2.png" alt="">
            </div>


            <div class="price__contents">

              <div class="price__box">
  
                <h3 class="price__sub-title">ライセンス講習</h3>
  
                <dl class="price__menu menu-contents">
                  <div class="menu-contents__item menu-item">
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
                  </div>
                </dl>

              </div>
              <div class="price__box">
  
                <h3 class="price__sub-title">体験ダイビング</h3>
  
                <dl class="price__menu menu-contents">
                  <div class="menu-contents__item menu-item">
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
                  </div>
                </dl>

              </div>
              <div class="price__box">
  
                <h3 class="price__sub-title">ファンダイビング</h3>
  
                <dl class="price__menu menu-contents">
                  <div class="menu-contents__item menu-item">
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
                  </div>
                </dl>

              </div>
              <div class="price__box">
  
                <h3 class="price__sub-title">スペシャルダイビング</h3>
  
                <dl class="price__menu menu-contents">
                  <div class="menu-contents__item menu-item">
                    <dt class="menu-item__name">貸切ダイビング(2ダイブ)</dt>
                    <dd class="menu-item__value">¥24,000</dd>
                  </div>
                  <div class="menu-contents__item menu-item">
                    <dt class="menu-item__name">1日ダイビング(3ダイブ)</dt>
                    <dd class="menu-item__value">¥32,000</dd>
                  </div>
                </dl>
              </div>
            </div>
          </div>
          <div class="price__button">
            <a href="#" class="button">View more<span class="button__arrow"></span></a>
          </div>
        </div>
      </section>

<?php get_footer(); ?>