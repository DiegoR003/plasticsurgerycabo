// Navbar shrink al hacer scroll
(function () {
  var nav = document.querySelector('.navbar-clean');
  if (!nav) return;
  function onScroll(){
    if (window.scrollY > 10) {
      nav.classList.add('navbar-scrolled');
    } else {
      nav.classList.remove('navbar-scrolled');
    }
  }
  onScroll();
  window.addEventListener('scroll', onScroll);
})();

// Carrusel de partners (Slick)
$(function(){
  if ($('.partners-slider').length){
    $('.partners-slider').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2200,
      speed: 400,
      arrows: true,
      dots: false,
      pauseOnHover: false,
      cssEase: 'ease',
      responsive: [
        { breakpoint: 1200, settings: { slidesToShow: 5 } },
        { breakpoint: 992,  settings: { slidesToShow: 4 } },
        { breakpoint: 768,  settings: { slidesToShow: 3 } },
        { breakpoint: 576,  settings: { slidesToShow: 2 } }
      ]
    });
  }
});
