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

// Carrusel de marcas (Swiper)
document.addEventListener('DOMContentLoaded', function () {
  if (document.querySelector('.brands-swiper')) {
    new Swiper('.brands-swiper', {
      // con pocas imágenes, estas opciones ayudan al loop
      loop: true,
      loopAdditionalSlides: 10,  // “duplica” virtualmente para que nunca pare
      centeredSlides: false,
      grabCursor: true,
      speed: 600,
      spaceBetween: 28,
      autoplay: { delay: 2000, disableOnInteraction: false },
      navigation: { nextEl: '#brands-next', prevEl: '#brands-prev' },
      slidesPerView: 2,
      breakpoints: {
        576:  { slidesPerView: 3 },
        768:  { slidesPerView: 4 },
        992:  { slidesPerView: 5 },
        1200: { slidesPerView: 6 }
      }
    });
  }
});

 