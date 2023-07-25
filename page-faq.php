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
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>./dist/assets/images/common/faq_mv-pc.png">
          <img src="<?php echo get_template_directory_uri(); ?>./dist/assets/images/common/faq_mv.png" alt="">
        </picture>
        <div class="mv-sub__body">
          <h2 class="mv-sub__title">FAQ</h2>
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

  <section class="faq top-faq">
    <div class="faq__inner inner">
      <div class="faq__container">
        <div class="faq__block">
          <h3 class="faq__nav-open active js-faq-nav-open">ここに質問が入ります。</h3>
          <nav class="faq__nav js-faq-nav">
            <ul class="faq__nav-items">
              <li class="faq__nav-item">
                <p class="faq__nav-text">
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                </p>
              </li>
            </ul>
          </nav>
        </div>
        <div class="faq__block">
          <h3 class="faq__nav-open active js-faq-nav-open">ここに質問が入ります。</h3>
          <nav class="faq__nav js-faq-nav">
            <ul class="faq__nav-items">
              <li class="faq__nav-item">
                <p class="faq__nav-text">
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                </p>
              </li>
            </ul>
          </nav>
        </div>
        <div class="faq__block">
          <h3 class="faq__nav-open active js-faq-nav-open">ここに質問が入ります。</h3>
          <nav class="faq__nav js-faq-nav">
            <ul class="faq__nav-items">
              <li class="faq__nav-item">
                <p class="faq__nav-text">
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                </p>
              </li>
            </ul>
          </nav>
        </div>
        <div class="faq__block">
          <h3 class="faq__nav-open active js-faq-nav-open">ここに質問が入ります。</h3>
          <nav class="faq__nav js-faq-nav">
            <ul class="faq__nav-items">
              <li class="faq__nav-item">
                <p class="faq__nav-text">
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                </p>
              </li>
            </ul>
          </nav>
        </div>
        <div class="faq__block">
          <h3 class="faq__nav-open active js-faq-nav-open">ここに質問が入ります。</h3>
          <nav class="faq__nav js-faq-nav">
            <ul class="faq__nav-items">
              <li class="faq__nav-item">
                <p class="faq__nav-text">
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                </p>
              </li>
            </ul>
          </nav>
        </div>
        <div class="faq__block">
          <h3 class="faq__nav-open active js-faq-nav-open">ここに質問が入ります。</h3>
          <nav class="faq__nav js-faq-nav">
            <ul class="faq__nav-items">
              <li class="faq__nav-item">
                <p class="faq__nav-text">
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                </p>
              </li>
            </ul>
          </nav>
        </div>
        <div class="faq__block">
          <h3 class="faq__nav-open active js-faq-nav-open">ここに質問が入ります。</h3>
          <nav class="faq__nav js-faq-nav">
            <ul class="faq__nav-items">
              <li class="faq__nav-item">
                <p class="faq__nav-text">
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                </p>
              </li>
            </ul>
          </nav>
        </div>
      </div>



    </div>

  </section>




<?php get_footer(); ?>