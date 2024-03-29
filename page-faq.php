<?php get_header(); ?>

<main>
  <section class="mv-sub">
    <div class="mv-sub__inner">
      <div class="mv-sub__wrapper">
        <picture class="mv-sub__image">
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/faq_mv-pc.png">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/faq_mv.png" alt="">
        </picture>
        <div class="mv-sub__body">
          <h2 class="mv-sub__title">FAQ</h2>
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

  <section class="faq top-faq">
    <div class="faq__inner inner">
      <div class="faq__container">
        
        <?php
          $FAQ = SCF::get('FAQ');
          foreach ($FAQ as $fields ) 
          { ?>
          <div class="faq__block">
            <h3 class="faq__nav-open active js-faq-nav-open"><?php echo $fields['faq_question']; ?></h3>
            <nav class="faq__nav js-faq-nav">
              <ul class="faq__nav-items">
                <li class="faq__nav-item">
                  <p class="faq__nav-text"><?php echo $fields['faq_answer']; ?></p>
                </li>
              </ul>
            </nav>
          </div>
        <?php }; ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>