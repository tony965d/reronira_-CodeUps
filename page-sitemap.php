<?php get_header(); ?>

<main>
  <section class="mv-sub">
    <div class="mv-sub__inner">
      <div class="mv-sub__wrapper">
        <div class="mv-sub__image">
        <picture class="mv-sub__image">
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/privacy_mv-pc.png">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/privacy_mv.png" alt="">
        </picture>
        <div class="mv-sub__body">
          <h2 class="mv-sub__title">Site MAP</h2>
        </div>
      </div>
    </div>
  </section>

  <div class="wp-breadcrumb wp-breadcrumb--site-map inner">
    <?php if(function_exists('bcn_display'))
      {
          bcn_display();
      }?>
  </div>

  <section class="site-map top-site-map">
    <div class="site-map__inner inner">
      <div class="site-map__container">
        <div class="site-map__nav-items nav-items nav-items--site-map">
          <div class="nav-items__box">
            <ul class="nav-items__items nav-items__items--site-map">
              <li class="nav-items__unit nav-items__unit--sp">
                <a href="<?php echo $campaign ?>" class="nav-items__main nav-items__main--site-map">キャンペーン</a>
              </li>
              <li class="nav-items__item">
                <a href="<?php echo $campaign ?>#post-282" class="nav-items__sub">ライセンス取得</a>
              </li>
              <li class="nav-items__item">
                <a href="<?php echo $campaign ?>#post-283" class="nav-items__sub">貸切体験ダイビング</a>
              </li>
              <li class="nav-items__item">
                <a href="<?php echo $campaign ?>#post-501" class="nav-items__sub">ナイトダイビング</a>
              </li>
              <li class="nav-items__unit">
                <a href="<?php echo $about ?>" class="nav-items__main nav-items__main--site-map">私たちについて</a>
              </li>
            </ul>
            <ul class="nav-items__items nav-items__items--site-map">
              <li class="nav-items__unit nav-items__unit--pc">
                <a href="<?php echo $information ?>" class="nav-items__main nav-items__main--site-map">ダイビング情報</a>
              </li>
              <li class="nav-items__item">
                <a href="<?php echo $information ?>#info-license" class="nav-items__sub">ライセンス講習</a>
              </li>
              <li class="nav-items__item">
                <a href="<?php echo $information ?>#info-experience" class="nav-items__sub">体験ダイビング</a>
              </li>
              <li class="nav-items__item">
                <a href="<?php echo $information ?>#info-fun" class="nav-items__sub">ファンダイビング</a>
              </li>
              <li class="nav-items__unit">
                <a href="<?php echo $blog ?>" class="nav-items__main nav-items__main--site-map">ブログ</a>
              </li>
            </ul>
          </div>
          <div class="nav-items__box nav-items__box--right nav-items__box--right-site-map">
            <ul class="nav-items__items nav-items__items--site-map">
              <li class="nav-items__unit nav-items__unit--sp">
                <a href="<?php echo $voice ?>" class="nav-items__main nav-items__main--site-map">お客様の声</a>
              </li>
              <li class="nav-items__unit">
                <a href="<?php echo $price ?>" class="nav-items__main nav-items__main--site-map">料金一覧</a>
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
            <ul class="nav-items__items nav-items__items--site-map">
              <li class="nav-items__unit nav-items__unit--pc">
                <a href="<?php echo $faq ?>" class="nav-items__main nav-items__main--site-map">よくある質問</a>
              </li>
              <li class="nav-items__unit">
                  <a href="<?php echo $SiteMap ?>" class="nav-items__main nav-items__main--site-map">サイトマップ</a>
                </li>
              <li class="nav-items__unit">
                <a href="<?php echo $privacy ?>" class="nav-items__main nav-items__main--site-map">プライバシー<span class="u-mobile"><br></span>ポリシー</a>
              </li>
              <li class="nav-items__unit">
                <a href="<?php echo $termsOfService ?>" class="nav-items__main nav-items__main--site-map">利用規約</a>
              </li>
              <li class="nav-items__unit">
                <a href="<?php echo $contact ?>" class="nav-items__main nav-items__main--site-map">お問い合わせ</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>