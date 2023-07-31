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
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>./dist/assets/images/common/price_mv-pc.png">
          <img src="<?php echo get_template_directory_uri(); ?>./dist/assets/images/common/price_mv.png" alt="">
        </picture>
        <div class="mv-sub__body">
          <h2 class="mv-sub__title">Price</h2>
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

  <section class="price-sub top-price-sub">
    <div class="price-sub__inner inner">
      <div class="price-sub__contents">
        <div class="price-sub__box" id="price-1">
          <div class="price-sub__header">
            <div class="price-sub__header-logo">
              <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/price_title-logo.png" alt="">
            </div>
            <h3 class="price-sub__sub-title">ライセンス講習</h3>
          </div>
          <dl class="price-sub__menu menu-contents">
            <div class="menu-contents__item menu-item menu-item--price">
              <dt class="menu-item__name menu-item__name--price">オープンウォーター<span class="u-mobile"><br></span>ダイバーコース</dt>
              <dd class="menu-item__value menu-item__value--price">¥50,000</dd>
            </div>
            <div class="menu-contents__item menu-item menu-item--price">
              <dt class="menu-item__name menu-item__name--price">アドバンスド<span class="u-mobile"><br></span>オープンウォーターコース</dt>
              <dd class="menu-item__value menu-item__value--price">¥60,000</dd>
            </div>
            <div class="menu-contents__item menu-item menu-item--price">
              <dt class="menu-item__name menu-item__name--price">レスキュー＋EFRコース</dt>
              <dd class="menu-item__value menu-item__value--price">¥70,000</dd>
            </div>
          </dl>
        </div>
        <div class="price-sub__box" id="price-2">
          <div class="price-sub__header">
            <div class="price-sub__header-logo">
              <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/price_title-logo.png" alt="">
            </div>
            <h3 class="price-sub__sub-title">体験ダイビング</h3>
          </div>
          <dl class="price-sub__menu menu-contents">
            <div class="menu-contents__item menu-item menu-item--price">
              <dt class="menu-item__name menu-item__name--price">ビーチ体験ダイビング<span class="u-mobile"><br></span>(半日)</dt>
              <dd class="menu-item__value menu-item__value--price">¥7,000</dd>
            </div>
            <div class="menu-contents__item menu-item menu-item--price">
              <dt class="menu-item__name menu-item__name--price">ビーチ体験ダイビング<span class="u-mobile"><br></span>(1日)</dt>
              <dd class="menu-item__value menu-item__value--price">¥14,000</dd>
            </div>
            <div class="menu-contents__item menu-item menu-item--price">
              <dt class="menu-item__name menu-item__name--price">ボート体験ダイビング<span class="u-mobile"><br></span>(半日)</dt>
              <dd class="menu-item__value menu-item__value--price">¥10,000</dd>
            </div>
            <div class="menu-contents__item menu-item menu-item--price">
              <dt class="menu-item__name menu-item__name--price">ボート体験ダイビング<span class="u-mobile"><br></span>(1日)</dt>
              <dd class="menu-item__value menu-item__value--price">¥18,000</dd>
            </div>
          </dl>
        </div>
        <div class="price-sub__box" id="price-3">
          <div class="price-sub__header">
            <div class="price-sub__header-logo">
              <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/price_title-logo.png" alt="">
            </div>
            <h3 class="price-sub__sub-title">ファンダイビング</h3>
          </div>
          <dl class="price-sub__menu menu-contents">
            <div class="menu-contents__item menu-item menu-item--price">
              <dt class="menu-item__name menu-item__name--price">ビーチダイビング<span class="u-mobile"><br></span>(2ダイブ)</dt>
              <dd class="menu-item__value menu-item__value--price">¥14,000</dd>
            </div>
            <div class="menu-contents__item menu-item menu-item--price">
              <dt class="menu-item__name menu-item__name--price">ボートダイビング<span class="u-mobile"><br></span>(2ダイブ)</dt>
              <dd class="menu-item__value menu-item__value--price">¥18,000</dd>
            </div>
            <div class="menu-contents__item menu-item menu-item--price">
              <dt class="menu-item__name menu-item__name--price">スペシャルダイビング<span class="u-mobile"><br></span>(2ダイブ)</dt>
              <dd class="menu-item__value menu-item__value--price">¥24,000</dd>
            </div>
            <div class="menu-contents__item menu-item menu-item--price">
              <dt class="menu-item__name menu-item__name--price">ナイトダイビング<span class="u-mobile"><br></span>(1ダイブ)</dt>
              <dd class="menu-item__value menu-item__value--price">¥10,000</dd>
            </div>
          </dl>
        </div>
        <div class="price-sub__box">
          <div class="price-sub__header">
            <div class="price-sub__header-logo">
              <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/price_title-logo.png" alt="">
            </div>
            <h3 class="price-sub__sub-title">スペシャルダイビング</h3>
          </div>
          <dl class="price-sub__menu menu-contents">
            <div class="menu-contents__item menu-item menu-item--price">
              <dt class="menu-item__name menu-item__name--price">貸切ダイビング<span class="u-mobile"><br></span>(2ダイブ)</dt>
              <dd class="menu-item__value menu-item__value--price">¥24,000</dd>
            </div>
            <div class="menu-contents__item menu-item menu-item--price">
              <dt class="menu-item__name menu-item__name--price">1日ダイビング<span class="u-mobile"><br></span>(3ダイブ)</dt>
              <dd class="menu-item__value menu-item__value--price">¥32,000</dd>
            </div>
            <div class="menu-contents__item menu-item menu-item--price">
              <dt class="menu-item__name menu-item__name--price">ナイトダイビング<span class="u-mobile"><br></span>(2ダイブ)</dt>
              <dd class="menu-item__value menu-item__value--price">¥14,000</dd>
            </div>
          </dl>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>