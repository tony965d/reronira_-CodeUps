<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <?php wp_head(); ?>
  </head>

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

  <body>
    <?php wp_body_open(); ?>

    <header id="header" class="header js-header">
      <div class="header__inner inner">
        <h1 class="header__logo">
          <a href="<?php echo $home ?>" class="header__image"><img src="<?php echo get_template_directory_uri() ?>./dist/assets/images/common/CodeUps_logo.png" alt=""></a>
        </h1>

        <div class="header__hamburger hamburger js-hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
        
        <nav class="header__pc-nav pc-nav">
          <ul class="pc-nav__items">
            <li class="pc-nav__item">
              <a href="<?php echo $campaign ?>" class="pc-nav__menu">
                <div class="pc-nav__title">Campaign</div>
                <p class="pc-nav__sub-title">キャンペーン</p>
              </a>  
            </li>
            <li class="pc-nav__item">
              <a href="<?php echo $about ?>" class="pc-nav__menu">
                <div class="pc-nav__title">About us</div>
                <p class="pc-nav__sub-title">私たちについて</p>
              </a>    
            </li>
            <li class="pc-nav__item">
              <a href="<?php echo $information ?>" class="pc-nav__menu">
                <div class="pc-nav__title">Information</div>
                <p class="pc-nav__sub-title">ダイビング情報</p>
              </a>    
            </li>
            <li class="pc-nav__item">
              <a href="<?php echo $blog ?>" class="pc-nav__menu">
                <div class="pc-nav__title">Blog</div>
                <p class="pc-nav__sub-title">ブログ</p>
              </a>   
            </li>
            <li class="pc-nav__item">
              <a href="<?php echo $voice ?>" class="pc-nav__menu">
                <div class="pc-nav__title">Voice</div>
                <p class="pc-nav__sub-title">お客様の声</p>
              </a>  
            </li>
            <li class="pc-nav__item">
              <a href="<?php echo $price ?>" class="pc-nav__menu">
                <div class="pc-nav__title">Price</div>
                <p class="pc-nav__sub-title">料金一覧</p>
              </a>  
            </li>
            <li class="pc-nav__item">
              <a href="<?php echo $faq ?>" class="pc-nav__menu">
                <div class="pc-nav__title">FAQ</div>
                <p class="pc-nav__sub-title">よくある質問</p>
              </a>  
            </li>
            <li class="pc-nav__item">
              <a href="<?php echo $contact ?>" class="pc-nav__menu">
                <div class="pc-nav__title">Contact</div>
                <p class="pc-nav__sub-title">お問合せ</p>
              </a>  
            </li>
          </ul>
        </nav>

      </div>



      <nav class="header__sp-nav sp-nav js-sp-nav">
        <div class="sp-nav__inner inner">

          <div class="sp-nav__items nav-items">
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

        </div>
        
      </nav>


    </header>