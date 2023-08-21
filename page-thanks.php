<?php get_header(); ?>

    <main>
      <section class="mv-sub">
        <div class="mv-sub__inner">
          <div class="mv-sub__wrapper">
            <div class="mv-sub__image">
            <picture class="mv-sub__image">
              <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/contact_mv-pc.png">
              <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/contact_mv.png" alt="">
            </picture>
            <div class="mv-sub__body">
              <h2 class="mv-sub__title">Contact</h2>
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

      <section class="thanks top-thanks">
        <div class="thanks_inner inner">
          <div class="thanks__container">
            <h3 class="thanks__title">お問い合わせ内容を送信完了しました。</h3>
            <div class="thanks__contents">
              <p class="thanks__text">このたびは、お問い合わせ頂き<span class="u-mobile"><br></span>誠にありがとうございます。</p>
              <p class="thanks__text">お送り頂きました内容を確認の上、<span class="u-mobile"><br></span>3営業日以内に折り返しご連絡させて頂きます。</p>
              <p class="thanks__text">また、ご記入頂いたメールアドレスへ、<span class="u-mobile"><br></span>自動返信の確認メールをお送りしております。</p>
            </div>
          </div>
        </div>
      </section>
    </main>       
  
    <footer class="footer top-footer top-footer--thanks">
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
                  <a href="<?php echo $campaign ?>#post-282" class="nav-items__sub">ライセンス取得</a>
                </li>
                <li class="nav-items__item">
                  <a href="<?php echo $campaign ?>#post-283" class="nav-items__sub">貸切体験ダイビング</a>
                </li>
                <li class="nav-items__item">
                  <a href="<?php echo $campaign ?>#post-501" class="nav-items__sub">ナイトダイビング</a>
                </li>
                <li class="nav-items__unit">
                  <a href="<?php echo $about ?>" class="nav-items__main">私たちについて</a>
                </li>
              </ul>
              <ul class="nav-items__items">
                <li class="nav-items__unit nav-items__unit--pc">
                  <a href="<?php echo $information ?>" class="nav-items__main">ダイビング情報</a>
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
                  <a href="<?php echo $blog ?>" class="nav-items__main">ブログ</a>
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
