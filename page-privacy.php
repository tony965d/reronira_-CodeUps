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
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>./dist/assets/images/common/privacy_mv-pc.png">
          <img src="<?php echo get_template_directory_uri(); ?>./dist/assets/images/common/privacy_mv.png" alt="">
        </picture>
        <div class="mv-sub__body">
          <h2 class="mv-sub__title">Privacy Policy</h2>
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


  <section class="privacy top-privacy">
    <div class="privacy__inner inner">
      <div class="privacy__container">

      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>

      <h3 class="privacy__title">
        <?php the_title(); ?>
      </h3>

      <div class="privacy__contents">
        <?php the_content(); ?>
      </div>


      <?php endwhile; ?>
      <?php endif; ?>





        
      

      </div>
    </div>
  </section>




<?php get_footer(); ?>

<!-- 
<h3 class="privacy__title">プライバシーポリシー</h3>
        <div class="privacy__wrapper">
          <p class="privacy__text">
            以下は、Webサイトで使用するための一般的なプライバシーポリシーの例です。
          </p>

          <ol class="privacy__number-items privacy__number-items--first">
            <li class="privacy__number-item">
              <p class="privacy__number-item-text">
                概要 当社は、お客様の個人情報を大切に扱い、個人情報保護に努めています。
                本プライバシーポリシーには、当社がどのように個人情報を収集し、使用するかについて説明しています。
              </p>
            </li>
            <li class="privacy__number-item">
              <p class="privacy__number-item-text">
                収集する情報 当社は、お客様が当社のサービスを利用する際に、お名前、住所、電話番号、メールアドレスなどの個人情報を収集する場合があります。
              </p>
            </li>
          </ol>

          <p class="privacy__text">
            また、当社のサイトを閲覧する際に、IPアドレス、ブラウザの種類、言語設定、アクセス日時などの情報も収集する場合があります。
          </p>

          <ol class="privacy__number-items">
            <li class="privacy__number-item">
              <p class="privacy__number-item-text">
                情報の使用 当社は、お客様から収集した個人情報を、以下の目的で使用することがあります。
              </p>
            </li>
          </ol>

          <ul class="privacy__items">
            <li class="privacy__item">
              <p class="privacy__item-text">お客様からのお問い合わせやサポートの提供</p>
            </li>
            <li class="privacy__item">
              <p class="privacy__item-text">当社のサービスや製品の提供 </p>
            </li>
            <li class="privacy__item">
              <p class="privacy__item-text">当社のサイトの改善や新しいサービスの開発</p>
            </li>
            <li class="privacy__item">
              <p class="privacy__item-text">法律や規制に基づく義務の履行</p>
            </li>
          </ul>

          <ol class="privacy__number-items">
            <li class="privacy__number-item">
              <p class="privacy__number-item-text">
                情報の共有 当社は、お客様から収集した個人情報を、以下の場合に限り第三者に提供することがあります。
              </p>
            </li>
          </ol>

          <ul class="privacy__items">
            <li class="privacy__item">
              <p class="privacy__item-text">お客様の同意がある場合</p>
            </li>
            <li class="privacy__item">
              <p class="privacy__item-text">法律や規制に基づく場合 </p>
            </li>
            <li class="privacy__item">
              <p class="privacy__item-text">当社が信頼できると判断した業務委託先に必要な範囲で提供する場合</p>
            </li>
          </ul>

          <ol class="privacy__number-items">
            <li class="privacy__number-item">
              <p class="privacy__number-item-text">
                セキュリティ 当社は、お客様の個人情報を適切に保護するために、適切な安全対策を講じます。
                個人情報への不正アクセス、紛失、改ざん、漏洩等を防止するための措置を講じます。
              </p>
            </li>
            <li class="privacy__number-item">
              <p class="privacy__number-item-text">
                Cookieの使用 当社は、お客様により良いサイトの利用体験を提供するために、Cookieを使用する場合があります。
                Cookieは、お客様が当社のサイトを訪れた際に、お客様のブラウザに保存される小さなデータファイルです。Cookieには個人情報は含まれません。
              </p>
            </li>
            <li class="privacy__number-item">
              <p class="privacy__number-item-text">
                お問い合わせ先 当社のプライバシーポリシーに関するご質問やご意見は、以下の連絡先までお問い合わせください。 
                [会社名] [住所] [電話番号] [メールアドレス]
              </p>
            </li>
            <li class="privacy__number-item">
              <p class="privacy__number-item-text">
                プライバシーポリシーの変更 当社は、必要に応じて本プライバシーポリシーを変更することがあります。
                変更後のプライバシーポリシーは、当社のサイトに掲載された時点から効力を有するものとします。変更があった場合、当社は適切な手段でお知らせします。
              </p>
            </li>
          </ol>

          <p class="privacy__text">
            以上が、当社のプライバシーポリシーの概要です。お客様の個人情報保護のために、常に努めてまいります。
          </p>


        </div> -->

