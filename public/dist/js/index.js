
var typed3 = new Typed('.typed', {
   strings:
      ['Your Market ,Our Responsibility',],

  typeSpeed: 60,
  backSpeed: 60,
  smartBackspace: true, // this is a default
  loop: true
});

$('.owl-carousel').owlCarousel({
   loop: true,
   margin: 10,
   nav: true,
   responsive: {
      0: {
         items: 1
      },
      600: {
         items: 2
      },
      1000: {
         items: 3
      }
   }
})


