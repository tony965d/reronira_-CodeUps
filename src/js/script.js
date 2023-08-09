
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  
  $('.js-hamburger').click(function() {
    if($('.js-hamburger').hasClass('active')) {
      $('.js-hamburger').removeClass('active');
      $('.js-sp-nav').fadeOut(500);
      $('body').css('overflow', 'auto');
    } else {
      $('.js-hamburger').addClass('active');
      $('.js-sp-nav').fadeIn(500);
      $('body').css('overflow', 'hidden');
    }
  });


  var swiper = new Swiper('.js-mv-swiper', {
    loop: true,
    autoplay: {     
        delay: 4000,   
    },          
    speed: 1000,    
  });


  // var mySwiper = new Swiper ('.js-campaign-swiper', {
  //   slidesPerView: 1.26,
  //   spaceBetween: 24,
  //   loop: true,
  //   autoplay: {     
  //       delay: 3000,   
  //   },          
  //   speed: 500,    
  //   breakpoints: {
  //     // スライドの表示枚数：500px以上の場合
  //     768: {
  //       // slidesPerView: 'auto',
  //       spaceBetween: 40,
  //       slidesPerView: 3.485,
  //       // slidesPerView: 4,
  //       navigation: {
  //         nextEl: '.swiper-button-next',
  //         prevEl: '.swiper-button-prev',
  //       },
  //     },
  //   },
  // });


  var mySwiper = new Swiper ('.js-campaign-swiper', {
    slidesPerView: "auto",
    spaceBetween: 24,
    loop: true,
    autoplay: {     
        delay: 3000,   
    },          
    speed: 500,    
    breakpoints: {
      // スライドの表示枚数：500px以上の場合
      768: {
        spaceBetween: 40,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      },
    },
  });




  // $(".price__slide").on("inview", function (event, isInView) {
  //   if (isInView) {
  //     $(this).stop().addClass("move");
  //   }
  // });


  //要素の取得とスピードの設定
  var box = $('.js-price__image'),
      speed = 700;  
  
  //.price__imageの付いた全ての要素に対して下記の処理を行う
  box.each(function(){
    $(this).append('<div class="price__color"></div>')
    // 現在の要素（$(this)）の内部に<div class="price__color"></div>を追加します。
    // つまり、各要素に対してクラス名が「price__color」となるdiv要素が追加されます。
    var color = $(this).find($('.price__color'));
    // 現在の要素内からクラス名が「price__color」となる要素を見つけて、color変数に格納
    var image = $(this).find('img');
    // 現在の要素内からimg要素を見つけて、image変数に格納
    var counter = 0;
    // カウンター変数を初期化
 
    image.css('opacity','0');
    color.css('width','0%');
    //inviewを使って背景色が画面に現れたら処理をする
    color.on('inview', function(){
      // color要素が画面に表示されたときに実行される処理を設定。
      // inviewは、要素がビューポートに表示される瞬間を検出するためのイベント。
        if(counter == 0){
          // counter == 0 の条件が満たされた場合、アニメーション処理が実行
          $(this).delay(200).animate({'width':'100%'},speed,function(){
                   image.css('opacity','1');
                   $(this).css({'right':'0' , 'left':'auto'});
                   $(this).animate({'width':'0%'},speed);
                  //  color要素の幅を100%に拡大し、image要素の透明度を1に変更し、
                  //  color要素の位置と幅を元に戻すアニメーションが設定
                })
            counter = 1;
          }
      });
  });


  //要素の取得とスピードの設定
  var box = $('.js-voice-item-image'),
      speed = 700;  
  
  //.price__imageの付いた全ての要素に対して下記の処理を行う
  box.each(function(){
    $(this).append('<div class="voice-item__color"></div>')
    // 現在の要素（$(this)）の内部に<div class="price__color"></div>を追加します。
    // つまり、各要素に対してクラス名が「price__color」となるdiv要素が追加されます。
    var color = $(this).find($('.voice-item__color'));
    // 現在の要素内からクラス名が「price__color」となる要素を見つけて、color変数に格納
    var image = $(this).find('img');
    // 現在の要素内からimg要素を見つけて、image変数に格納
    var counter = 0;
    // カウンター変数を初期化
 
    image.css('opacity','0');
    color.css('width','0%');
    //inviewを使って背景色が画面に現れたら処理をする
    color.on('inview', function(){
      // color要素が画面に表示されたときに実行される処理を設定。
      // inviewは、要素がビューポートに表示される瞬間を検出するためのイベント。
        if(counter == 0){
          // counter == 0 の条件が満たされた場合、アニメーション処理が実行
          $(this).delay(200).animate({'width':'100%'},speed,function(){
                   image.css('opacity','1');
                   $(this).css({'right':'0' , 'left':'auto'});
                   $(this).animate({'width':'0%'},speed);
                  //  color要素の幅を100%に拡大し、image要素の透明度を1に変更し、
                  //  color要素の位置と幅を元に戻すアニメーションが設定
                })
            counter = 1;
          }
      });
  });


  //要素の取得とスピードの設定
  var box = $('.js-content-box-image'),
      speed = 700;  
  
  //.price__imageの付いた全ての要素に対して下記の処理を行う
  box.each(function(){
    $(this).append('<div class="content-box__color"></div>')
    // 現在の要素（$(this)）の内部に<div class="price__color"></div>を追加します。
    // つまり、各要素に対してクラス名が「price__color」となるdiv要素が追加されます。
    var color = $(this).find($('.content-box__color'));
    // 現在の要素内からクラス名が「price__color」となる要素を見つけて、color変数に格納
    var image = $(this).find('img');
    // 現在の要素内からimg要素を見つけて、image変数に格納
    var counter = 0;
    // カウンター変数を初期化
 
    image.css('opacity','0');
    color.css('width','0%');
    //inviewを使って背景色が画面に現れたら処理をする
    color.on('inview', function(){
      // color要素が画面に表示されたときに実行される処理を設定。
      // inviewは、要素がビューポートに表示される瞬間を検出するためのイベント。
        if(counter == 0){
          // counter == 0 の条件が満たされた場合、アニメーション処理が実行
          $(this).delay(200).animate({'width':'100%'},speed,function(){
                   image.css('opacity','1');
                   $(this).css({'right':'0' , 'left':'auto'});
                   $(this).animate({'width':'0%'},speed);
                  //  color要素の幅を100%に拡大し、image要素の透明度を1に変更し、
                  //  color要素の位置と幅を元に戻すアニメーションが設定
                })
            counter = 1;
          }
      });
  });
 

  // $(document).ready(function() {
  //   var pagetop = $('.#page-top');
  //     $(window).scroll(function () {
  //        if ($(this).scrollTop() > 400) {
  //             pagetop.fadeIn();
  //        } else {
  //             pagetop.fadeOut();
  //             }
  //             scrollHeight = $(document).height(); //ドキュメントの高さ 
  //             scrollPosition = $(window).height() + $(window).scrollTop(); //現在地 
  //             footHeight = $("footer").innerHeight(); //footerの高さ（＝止めたい位置）
  //             if ( scrollHeight - scrollPosition  <= footHeight ) { //ドキュメントの高さと現在地の差がfooterの高さ以下になったら
  //                 pagetop.css({
  //                     "position":"absolute", //pisitionをabsolute（親：wrapperからの絶対値）に変更
  //                     "bottom": footHeight + 20 //下からfooterの高さ + 20px上げた位置に配置
  //           });
  //       } else { //それ以外の場合は
  //           pagetop.css({
  //               "position":"fixed", //固定表示
  //               "bottom": "20px" //下から20px上げた位置に
  //           });
  //       }
  //        });
  //        pagetop.click(function () {
  //            $('body, html').animate({ scrollTop: 0 }, 500);
  //               return false;
  //    });
  // });
  

  $(function () {
    const pageTop = $("#page-top");
    pageTop.hide();
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        pageTop.fadeIn();
      } else {
        pageTop.fadeOut();
      }
    });
    pageTop.click(function () {
      $("body,html").animate(
        {
          scrollTop: 0,
        },
        500
      );
      return false;
    });
    // フッター手前でストップ
    $("#page-top").hide();
    $(window).on("scroll", function () {
      var scrollHeight = $(document).height(); // scrollHeight を定義
      var scrollPosition = $(window).height() + $(window).scrollTop();
      var footHeight = $("footer").innerHeight();
      if (scrollHeight - scrollPosition <= footHeight) {
        $("#page-top").css({
          "position": "absolute",
          "bottom": footHeight + 15,
        });
      } else {
        $("#page-top").css({
          "position": "fixed",
          "bottom": 15,
        });
      }
    });
  });


   $(".js-gallery img").click(function () {
    // まず、クリックした画像の HTML(<img>タグ全体)を.js-about-sub__gallery-expansion内にコピー
    $(".js-gallery-expansion").html($(this).prop("outerHTML"));
    //そして、fadeInで表示する。
    $(".js-gallery-expansion").fadeIn(200);
    // $('body').css('overflow', 'hidden');
    return false;
  });
  
  // コース画像モーダル非表示イベント
  // モーダル画像背景 または 拡大画像そのものをクリックで発火
  $(".js-gallery-expansion").click(function () {
    // 非表示にする
    $(".js-gallery-expansion").fadeOut(200);
    // $('body').css('overflow', 'auto');
    return false;
  });




  $(function () {
    // URLのハッシュ部分（id）を取得
    const urlHash = location.hash;
    // そのidを持つ要素がなかったら処理を抜ける
    if (!$(urlHash).length) return;

    // タブの要素を開く処理
    $(urlHash).click();
  });


  $(window).on('load', function() {
    let headerHeight = $('.js-header').outerHeight();
    let urlHash = location.hash;
    if (urlHash) {
      let position = $(urlHash).offset().top - headerHeight;
      $('html, body').animate({ scrollTop: position }, 0);
    }
  });



  // .js-information-category クラスの要素がクリックされた時の処理
  $(".js-information-category").click(function () {

    // クリックされた要素から .current クラスを取り除く
    $(".js-information-category").removeClass('current');
    // クリックされた要素自体に .current クラスを追加する
    $(this).addClass('current');
    
    // クリックされた要素のインデックス番号を取得
    const index = $(this).index();
    
    // .js-information-box クラスの要素から .current クラスを取り除く
    $(".js-information-box").removeClass('current');
    // インデックス番号に対応する .js-information-box 要素に .current クラスを追加する
    $(".js-information-box").eq(index).addClass('current');
  });



	$(function() {
		//クリックで動く
		$('.js-faq-nav-open').click(function(){
			$(this).toggleClass('active');
			$(this).next('.js-faq-nav').slideToggle();
		});
	});


	$(function() {
		//クリックで動く
		$('.js-side-bar-open').click(function(){
			$(this).toggleClass('active');
			$(this).next('.js-side-bar-nav').slideToggle();
		});
	});


});
