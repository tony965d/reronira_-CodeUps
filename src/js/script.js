
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  
  $('.js-hamburger').click(function() {
    if($('.js-hamburger').hasClass('active')) {
      $('.js-hamburger').removeClass('active');
      $('.js-sp-nav').fadeOut(500);
    } else {
      $('.js-hamburger').addClass('active');
      $('.js-sp-nav').fadeIn(500);
    }
    
  });

  var swiper = new Swiper('.js-mv-swiper', {
    loop: true,
    autoplay: {     
        delay: 3000,   
    },          
    speed: 1000,    
  });


  var mySwiper = new Swiper ('.js-campaign-swiper', {
    slidesPerView: 1.2,
    spaceBetween: 24,
    
    loop: true,
    autoplay: {     
        delay: 3000,   
    },          
    speed: 1000,    
  });




 
// //要素の取得とスピードの設定
// var box = $('.colorbox'),
//     speed = 700;  
 
// //.colorboxの付いた全ての要素に対して下記の処理を行う
//   box.each(function(){
//     $(this).append('<div class="color"></div>')
//     var color = $(this).find($('.color')),
//     image = $(this).find('img');
//     var counter = 0;
 
//     image.css('opacity','0');
//     color.css('width','0%');
//     //inviewを使って背景色が画面に現れたら処理をする
//     color.on('inview', function(){
//         if(counter == 0){
//           $(this).delay(200).animate({'width':'100%'},speed,function(){
//                    image.css('opacity','1');
//                    $(this).css({'left':'0' , 'right':'auto'});
//                    $(this).animate({'width':'0%'},speed);
//                 })
//             counter = 1;
//           }
//       });
//   });

  




});
