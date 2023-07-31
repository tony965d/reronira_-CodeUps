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

<aside class="blog-sub__side-bar side-bar">
  <div class="side-bar__inner inner">
    <nav class="side-bar__article">
      <h3 class="side-bar__title">人気記事</h3>
      <div class="side-bar__cards cards">

        <?php
          $blog_query = new WP_Query(
            array(
              'post_type'      => 'blog',
              'posts_per_page' => 3,
            )
          );
        ?>

      <?php if ( $blog_query->have_posts() ) : ?>
      <?php while ( $blog_query->have_posts() ) : ?>
      <?php $blog_query->the_post(); ?>
      
        <a href="<?php the_permalink(); ?>" class="cards__card card card--side-bar">
          <div class="card__image card__image--side-bar">
            <?php if (has_post_thumbnail()) { ?>
            <?php the_post_thumbnail('full'); ?>
            <?php } else { ?>
            <img src="<?php echo get_template_directory_uri(); ?>../images/common/noimage.jpg" alt="画像がありません">
            <?php } ?> 
          </div>
          <div class="card__body card__body--side-bar">
            <div class="card__header card__header--side-bar">
              <time datetime="<?php the_time('Y.m.d'); ?>" class="card__date"><?php the_time('Y.m.d'); ?></time>
              <p class="card__title"><?php the_title(); ?></p>
            </div>
          </div>
        </a>
        
      <?php wp_reset_postdata(); ?>
      <?php endwhile; ?>
      <?php endif; ?>
      </div>
    </nav>
    <nav class="side-bar__voice">
      <h3 class="side-bar__title">口コミ</h3>

      <?php
        $voice_query = new WP_Query(
          array(
            'post_type'      => 'voice',
            'posts_per_page' => 1,
            'orderby' => 'rand',
          )
        );
      ?>

      <?php if ( $voice_query->have_posts() ) : ?>
      <?php while ( $voice_query->have_posts() ) : ?>
      <?php $voice_query->the_post(); ?>

      <div class="side-bar__voice-item voice-item voice-item--side-bar">
        <div class="voice-item__box voice-item__box--side-bar">
          <div class="voice-item__header voice-item__header--side-bar">
            <div class="voice-item__sub-title">
              <p class="voice-item__profile"><?php echo SCF::get('voice_age'); ?></p>
            </div>
            <div class="voice-item__title voice-item__title--side-bar"><?php the_title(); ?></div>
          </div>
          <div class="voice-item__image voice-item__image--side-bar js-voice-item-image">

            <?php if (has_post_thumbnail()) { ?>
            <?php the_post_thumbnail('full'); ?>
            <?php } else { ?>
            <img src="<?php echo get_template_directory_uri(); ?>../images/common/noimage.jpg" alt="画像がありません">
            <?php } ?> 
            
          </div>
        </div>
      </div>
      <?php wp_reset_postdata(); ?>
      <?php endwhile; ?>
      <?php endif; ?>

      <div class="side-bar__voice-button">
        <a href="<?php echo $voice ?>" class="button">View more<span class="button__arrow"></span></a>
      </div>
    </nav>
    <nav class="side-bar__campaign">
      <h3 class="side-bar__title">キャンペーン</h3>
      <?php
        $campaign_query = new WP_Query(
          array(
            'post_type'      => 'post',
            'posts_per_page' => 2,
          )
        );
      ?>
      <?php if ( $campaign_query->have_posts() ) : ?>
      <?php while ( $campaign_query->have_posts() ) : ?>
      <?php $campaign_query->the_post(); ?>

        <div class="side-bar__feature feature">
          <div class="feature__image feature__image--side-bar">
            <?php if (has_post_thumbnail()) { ?>
            <?php the_post_thumbnail('full'); ?>
            <?php } else { ?>
            <img src="<?php echo get_template_directory_uri(); ?>../images/common/noimage.jpg" alt="画像がありません">
            <?php } ?> 
          </div>
          <div class="feature__header feature__header--side-bar">
            <div class="feature__title feature__title--side-bar"><?php the_title(); ?></div>
          </div>  

          <?php
            $campaign_card = SCF::get('campaign_card');
            foreach ($campaign_card as $fields ) { ?>
            <div class="feature__content feature__content--side-bar">
              <p class="feature__about"><?php echo $fields['card_sub-text']; ?></p>
              <div class="feature__unit feature__unit--side-bar">
                <p class="feature__text feature__text--side-bar"><?php echo $fields['original_price']; ?></p>
                <div class="feature__pickup feature__pickup--side-bar"><?php echo $fields['campaign_price']; ?></div>
              </div>
            </div>
          <?php }; ?>
        </div>

      <?php wp_reset_postdata(); ?>
      <?php endwhile; ?>
      <?php endif; ?>

      <div class="side-bar__campaign-button">
        <a href="<?php echo $campaign ?>" class="button">View more<span class="button__arrow"></span></a>
      </div>
    </nav>
    <nav class="side-bar__archive">
      <h3 class="side-bar__title">アーカイブ</h3>
      <ul class="side-bar__menus">
        <?php
        // 年と月別アーカイブを取得するためのクエリ
        $archive_query = new WP_Query(
          array(
              'post_type' => 'blog', // 投稿タイプが "post"（投稿）の場合
              'posts_per_page' => -1, // すべての投稿を表示
              'orderby' => 'date', // 日付で並び替え
              'order' => 'DESC', // 新しい順に並び替え
          )
        );
        $prev_year = 0;
        $prev_month = 0;

        if ($archive_query->have_posts()) {
          while ($archive_query->have_posts()) {
            $archive_query->the_post();
            $year = get_the_date('Y');
            $month = get_the_date('n');

            // 年と月が前回のループと異なる場合に年と月の見出しを表示
            if ($year !== $prev_year) {
              if ($prev_year !== 0) {
                  echo '</ul></li>';
              }
              echo '<li class="side-bar__menu"><p class="side-bar__menu-open active js-side-bar-open">' . $year . '年<ul class="side-bar__nav js-side-bar-nav">';
              $prev_year = $year;
              $prev_month = 0; // 別の年の場合は月の初期値をリセット
            }
            // 月が前回のループと異なる場合に月のリンクを表示
            if ($month !== $prev_month) {
                echo '<li class="side-bar__menu-item"><a class="side-bar__menu-text" href="/blog/date/' . $year . '/' . $month . '/">' . get_the_date('n月', get_the_ID()) . '</a></li>';
                $prev_month = $month;
            }
          }
          echo '</ul></p></li>'; // ループの最後に閉じる
        }
        wp_reset_postdata();
        ?>
      </ul>
    </nav>
  </div>
</aside>