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
        <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>./dist/assets/images/common/information_mv-pc.png">
        <img src="<?php echo get_template_directory_uri(); ?>./dist/assets/images/common/information_mv.png" alt="">
      </picture>
      <div class="mv-sub__body">
        <h2 class="mv-sub__title">Information</h2>
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

  <section class="information-sub top-information-sub">
    <div class="information-sub__inner inner">
      <div class="information-sub__container">

        <ul class="information-sub__categories">
          <li class="information-sub__category current js-information-sub-category">
            <div class="information-sub__category-icon js-information-sub-category-icon u-desktop">
              <img src="<?php echo get_template_directory_uri(); ?>./dist/assets/images/common/information_category-icon1.png" alt="">
            </div>
            <div class="information-sub__category-icon-sub js-information-sub-category-icon-sub u-desktop">
              <img src="<?php echo get_template_directory_uri(); ?>./dist/assets/images/common/information_category-icon01.png" alt="">
            </div>
            <p class="information-sub__category-name">ライセンス<span class="u-mobile"><br></span>講習</p>
          </li>
          <li class="information-sub__category js-information-sub-category">
            <div class="information-sub__category-icon js-information-sub-category-icon u-desktop">
              <img src="<?php echo get_template_directory_uri(); ?>./dist/assets/images/common/information_category-icon1.png" alt="">
            </div>
            <div class="information-sub__category-icon-sub js-information-sub-category-icon-sub u-desktop">
              <img src="<?php echo get_template_directory_uri(); ?>./dist/assets/images/common/information_category-icon01.png" alt="">
            </div>
            <p class="information-sub__category-name">ファン<span class="u-mobile"><br></span>ダイビング</p>
          </li>
          <li class="information-sub__category js-information-sub-category">
            <div class="information-sub__category-icon js-information-sub-category-icon u-desktop">
              <img src="<?php echo get_template_directory_uri(); ?>./dist/assets/images/common/information_category-icon1.png" alt="">
            </div>
            <div class="information-sub__category-icon-sub js-information-sub-category-icon-sub u-desktop">
              <img src="<?php echo get_template_directory_uri(); ?>./dist/assets/images/common/information_category-icon01.png" alt="">
            </div>
            <p class="information-sub__category-name">体験<span class="u-mobile"><br></span>ダイビング</p>
          </li>
        </ul>

        <div class="information-sub__wrapper">
          <div class="information-sub__box js-information-sub-box">
            <div class="information-sub__unit">
              <h3 class="information-sub__title">ライセンス講習</h3>
              <p class="information-sub__text">
              泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！
              スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。
              知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。
              プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
              </p>
            </div>
            <div class="information-sub__image">
              <img src="<?php echo get_template_directory_uri(); ?>./dist/assets/images/common/information_image1.png" alt="">
            </div>
          </div>
          <div class="information-sub__box js-information-sub-box">
            <div class="information-sub__unit">
              <h3 class="information-sub__title">ファンダイビング</h3>
              <p class="information-sub__text">
                ブランクダイバー、ライセンスを取り立ての方も安心！
                沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、
                最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
              </p>
            </div>
            <div class="information-sub__image">
              <img src="<?php echo get_template_directory_uri(); ?>./dist/assets/images/common/information_image2.png" alt="">
            </div>
          </div>
          <div class="information-sub__box js-information-sub-box">
            <div class="information-sub__unit">
              <h3 class="information-sub__title">体験ダイビング</h3>
              <p class="information-sub__text">
              ブランクダイバー、ライセンスを取り立ての方も安心！
              沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、
              最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
              </p>
            </div>
            <div class="information-sub__image">
              <img src="<?php echo get_template_directory_uri(); ?>./dist/assets/images/common/information_image3.png" alt="">
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>




<?php get_footer(); ?>