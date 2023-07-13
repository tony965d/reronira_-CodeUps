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
      
      <section class="contact top-contact">
        <div class="contact__inner inner">
          <div class="contact__background">
            <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/contact_goldfish.png" alt="">
          </div>
          <div class="contact__wrapper">
            <div class="contact__block inner">
              <div class="contact__logo">
                <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/CodeUps_contact_logo.png" alt="">
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
                <div class="contact__image">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57273.02319565179!2d127.64350204644842!3d26.210859430208657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5697141a6b58b%3A0x2cd8aff616585e98!2z5rKW57iE55yM6YKj6KaH5biC!5e0!3m2!1sja!2sjp!4v1687230539574!5m2!1sja!2sjp" width="295" height="160" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
            <div class="contact__box inner">
              <div class="contact__header section-header section-header--contact">
                <h2 class="section-header__title section-header__title--contact">Contact</h2>
                <p class="section-header__sub-title section-header__sub-title--contact">お問い合わせ</p>
              </div>
              <p class="contact__text">ご予約・お問い合わせはコチラ</p>
              <div class="contact__button">
                <a href="<?php echo $contact; ?>" class="button">Contact us<span class="button__arrow"></span></a>
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
            <a href="<?php echo $home; ?>" class="footer__logo">
              <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/CodeUps_footer_logo.png" alt="">
            </a>
            <ul class="footer__sns">
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
            <ul class="nav-items__item nav-items__item--top">
              <li class="nav-items__unit">
                <div class="nav-items__icon">
                  <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/starfish.png" alt="">
                </div>
                <a href="<?php echo $campaign; ?>" class="nav-items__main">キャンペーン</a>
              </li>
              <li class="nav-items__li">
                <a href="#" class="nav-items__sub">ライセンス取得</a>
              </li>
              <li class="nav-items__li">
                <a href="#" class="nav-items__sub">貸切体験ダイビング</a>
              </li>
              <li class="nav-items__li">
                <a href="#" class="nav-items__sub">ナイトダイビング</a>
              </li>
              <li class="nav-items__unit">
                <div class="nav-items__icon">
                  <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/starfish.png" alt="">
                </div>
                <a href="<?php echo $about; ?>" class="nav-items__main">私たちについて</a>
              </li>
            </ul>
            <ul class="nav-items__item nav-items__item--top">
              <li class="nav-items__unit">
                <div class="nav-items__icon">
                  <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/starfish.png" alt="">
                </div>
                <a href="<?php echo $information; ?>" class="nav-items__main">ダイビング情報</a>
              </li>
              <li class="nav-items__li">
                <a href="#" class="nav-items__sub">ライセンス講習</a>
              </li>
              <li class="nav-items__li">
                <a href="#" class="nav-items__sub">体験ダイビング</a>
              </li>
              <li class="nav-items__li">
                <a href="#" class="nav-items__sub">ファンダイビング</a>
              </li>
              <li class="nav-items__unit">
                <div class="nav-items__icon">
                  <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/starfish.png" alt="">
                </div>
                <a href="<?php echo $blog; ?>" class="nav-items__main">ブログ</a>
              </li>
            </ul>
            <ul class="nav-items__item nav-items__item--top">
              <li class="nav-items__unit">
                <div class="nav-items__icon">
                  <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/starfish.png" alt="">
                </div>
                <a href="<?php echo $voice; ?>" class="nav-items__main">お客様の声</a>
              </li>
              <li class="nav-items__unit">
                <div class="nav-items__icon">
                  <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/starfish.png" alt="">
                </div>
                <a href="<?php echo $price; ?>" class="nav-items__main">料金一覧</a>
              </li>
              <li class="nav-items__li">
                <a href="#" class="nav-items__sub">ライセンス講習</a>
              </li>
              <li class="nav-items__li">
                <a href="#" class="nav-items__sub">体験ダイビング</a>
              </li>
              <li class="nav-items__li">
                <a href="#" class="nav-items__sub">ファンダイビング</a>
              </li>
            </ul>
            <ul class="nav-items__item nav-items__item--top">
              <li class="nav-items__unit">
                <div class="nav-items__icon">
                  <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/starfish.png" alt="">
                </div>
                <a href="<?php echo $faq; ?>" class="nav-items__main">よくある質問</a>
              </li>
              <li class="nav-items__unit">
                <div class="nav-items__icon">
                  <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/starfish.png" alt="">
                </div>
                <a href="#" class="nav-items__main">プライバシー<span class="u-mobile"><br></span>ポリシー</a>
              </li>
              <li class="nav-items__unit">
                <div class="nav-items__icon">
                  <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/starfish.png" alt="">
                </div>
                <a href="#" class="nav-items__main">利用規約</a>
              </li>
              <li class="nav-items__unit">
                <div class="nav-items__icon">
                  <img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/starfish.png" alt="">
                </div>
                <a href="<?php echo $contact; ?>" class="nav-items__main">お問い合わせ</a>
              </li>
            </ul>
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