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
              <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>./dist/assets/images/common/contact_mv-pc.png">
              <img src="<?php echo get_template_directory_uri(); ?>./dist/assets/images/common/contact_mv.png" alt="">
            </picture>
            <div class="mv-sub__body">
              <h2 class="mv-sub__title">Contact</h2>
            </div>
          </div>
        </div>
      </section>

      <div class="wp-breadcrumb wp-breadcrumb--faq inner">
        <?php if(function_exists('bcn_display'))
          {
              bcn_display();
          }?>
      </div>


      <section class="contact-sub top-contact-sub">
        <div class="contact-sub__inner inner">
          <div class="contact-sub__container">
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
            <?php echo do_shortcode('[contact-form-7 id="944" title="お問い合わせ"]'); ?>
            
          <?php endwhile; ?>
          <?php endif;  ?>

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
              <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/CodeUps_footer_logo.png" alt="">
            </a>
            <ul class="footer__sns-links">
              <li class="footer__sns-link">
                <a href="#" class="footer__facebook">
                  <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/FacebookLogo.png" alt="">
                </a>
              </li>
              <li class="footer__sns-link">
                <a href="#" class="footer__insta">
                  <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/InstagramLogo.png" alt="">
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
                  <a href="#" class="nav-items__sub">ライセンス取得</a>
                </li>
                <li class="nav-items__item">
                  <a href="#" class="nav-items__sub">貸切体験ダイビング</a>
                </li>
                <li class="nav-items__item">
                  <a href="#" class="nav-items__sub">ナイトダイビング</a>
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
                  <a href="#" class="nav-items__sub">ライセンス講習</a>
                </li>
                <li class="nav-items__item">
                  <a href="#" class="nav-items__sub">体験ダイビング</a>
                </li>
                <li class="nav-items__item">
                  <a href="#" class="nav-items__sub">ファンダイビング</a>
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
                  <a href="#" class="nav-items__sub">ライセンス講習</a>
                </li>
                <li class="nav-items__item">
                  <a href="#" class="nav-items__sub">体験ダイビング</a>
                </li>
                <li class="nav-items__item">
                  <a href="#" class="nav-items__sub">ファンダイビング</a>
                </li>
              </ul>
              <ul class="nav-items__items">
                <li class="nav-items__unit nav-items__unit--pc">
                  <a href="<?php echo $faq ?>" class="nav-items__main">よくある質問</a>
                </li>
                <li class="nav-items__unit">
                  <a href="<?php echo $privacy ?>" class="nav-items__main">プライバシー<span class="u-mobile"><br></span>ポリシー</a>
                </li>
                <li class="nav-items__unit">
                  <a href="<?php echo $terms ?>" class="nav-items__main">利用規約</a>
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
        <small>Copyright © 2021 - 2023 CodeUps LLC. All Rights Reserved.</small>
      </div>
    </footer>           

    <?php wp_footer(); ?>
  </body>
</html>

