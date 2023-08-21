<?php get_header(); ?>

<main>
  <section class="mv-sub">
    <div class="mv-sub__inner">
      <div class="mv-sub__wrapper">
        <div class="mv-sub__image">
        <picture class="mv-sub__image">
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/price_mv-pc.png">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/price_mv.png" alt="">
        </picture>
        <div class="mv-sub__body">
          <h2 class="mv-sub__title">Price</h2>
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

  <section class="price-sub top-price-sub">
    <div class="price-sub__inner inner">
      <div class="price-sub__contents">
        <div class="price-sub__box" id="price-license">
          <div class="price-sub__header">
            <div class="price-sub__header-logo">
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/price_title-logo.png" alt="">
            </div>
            <h3 class="price-sub__sub-title">ライセンス講習</h3>
          </div>

          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
         
          <dl class="price-sub__menu menu-contents">

            <?php
              $license = SCF::get('license');
              foreach ($license as $fields ) { ?>

              <div class="menu-contents__item menu-item menu-item--price">
                <dt class="menu-item__name menu-item__name--price"><?php echo $fields['license_item']; ?></dt>
                <dd class="menu-item__value menu-item__value--price"><?php echo $fields['license_price']; ?></dd>
              </div>
            <?php }; ?>

            <!-- <div class="menu-contents__item menu-item menu-item--price">
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
            </div> -->

          </dl>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>


        <div class="price-sub__box" id="price-experience">
          <div class="price-sub__header">
            <div class="price-sub__header-logo">
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/price_title-logo.png" alt="">
            </div>
            <h3 class="price-sub__sub-title">体験ダイビング</h3>
          </div>

          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
          
          <dl class="price-sub__menu menu-contents">

            <?php
              $experience = SCF::get('experience');
              foreach ($experience as $fields ) { ?>

              <div class="menu-contents__item menu-item menu-item--price">
                <dt class="menu-item__name menu-item__name--price"><?php echo $fields['experience_item']; ?></dt>
                <dd class="menu-item__value menu-item__value--price"><?php echo $fields['experience_price']; ?></dd>
              </div>
            <?php }; ?>

            <!-- <div class="menu-contents__item menu-item menu-item--price">
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
            </div> -->

          </dl>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>


        <div class="price-sub__box" id="price-fun">
          <div class="price-sub__header">
            <div class="price-sub__header-logo">
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/price_title-logo.png" alt="">
            </div>
            <h3 class="price-sub__sub-title">ファンダイビング</h3>
          </div>

          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
          
          <dl class="price-sub__menu menu-contents">

            <?php
              $fun = SCF::get('fun');
              foreach ($fun as $fields ) { ?>
                
              <div class="menu-contents__item menu-item menu-item--price">
                <dt class="menu-item__name menu-item__name--price"><?php echo $fields['fun_item']; ?></dt>
                <dd class="menu-item__value menu-item__value--price"><?php echo $fields['fun_price']; ?></dd>
              </div>
            <?php }; ?>

            <!-- <div class="menu-contents__item menu-item menu-item--price">
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
            </div> -->
          </dl>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>


        <div class="price-sub__box">
          <div class="price-sub__header">
            <div class="price-sub__header-logo">
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/price_title-logo.png" alt="">
            </div>
            <h3 class="price-sub__sub-title">スペシャルダイビング</h3>
          </div>

          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
          
          <dl class="price-sub__menu menu-contents">

            <?php
              $special = SCF::get('special');
              foreach ($special as $fields ) { ?>
                
              <div class="menu-contents__item menu-item menu-item--price">
                <dt class="menu-item__name menu-item__name--price"><?php echo $fields['special_item']; ?></dt>
                <dd class="menu-item__value menu-item__value--price"><?php echo $fields['special_price']; ?></dd>
              </div>
            <?php }; ?>

            <!-- <div class="menu-contents__item menu-item menu-item--price">
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
            </div> -->

          </dl>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>

      </div>
    </div>
  </section>

<?php get_footer(); ?>