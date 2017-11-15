$(document).ready(function() {
  $('.slider .main-carousel').flickity({
  // options
  autoPlay: true,
autoPlay: 2000,
      cellAlign: 'right',
       contain: true,
       wrapAround : true,
       lazyLoad: true,
       imagesLoaded: true,
       pageDots: false,
       prevNextButtons: true
});
$('.Category-Slider .main-carousel').flickity({
// options
autoPlay: true,
autoPlay: 3000,
    cellAlign: 'right',
     contain: true,
     wrapAround : true,
     lazyLoad: true,
     imagesLoaded: true,
     //pageDots: false
     prevNextButtons: false
});




var i =0;
$('.nav,.menu-nav').click(function() {
  i++;
  if((i%2)!=0){
  $('.nav div:nth-child(1)').addClass('hide');
  $('.nav div:nth-child(2)').addClass('rotate1');
  $('.nav div:nth-child(3)').addClass('rotate2');
  $('.Menu-List').slideDown(700);

  $('.menu-nav div:nth-child(1)').addClass('hide');
  $('.menu-nav div:nth-child(2)').addClass('rotate1');
  $('.menu-nav div:nth-child(3)').addClass('rotate2');
  $('.menu-right').slideDown(700);
}
else {
  $('.nav div:nth-child(1)').removeClass('hide');
  $('.nav div:nth-child(2)').removeClass('rotate1');
  $('.nav div:nth-child(3)').removeClass('rotate2');
  $('.Menu-List').slideUp(700);

  $('.menu-nav div:nth-child(1)').removeClass('hide');
  $('.menu-nav div:nth-child(2)').removeClass('rotate1');
  $('.menu-nav div:nth-child(3)').removeClass('rotate2');
  $('.menu-right').slideUp(700);
}

});

$('.menu-right > li').click(function() {
$('.menu-right > li').addClass('active-link');
});



});
