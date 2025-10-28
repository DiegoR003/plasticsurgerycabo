

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

// ====== Reviews carousel ======
(function(){
  var el = document.querySelector('.review-swiper');
  if(!el || typeof Swiper === 'undefined') return;

  new Swiper('.review-swiper', {
    loop: true,
    speed: 650,
    spaceBetween: 24,
    autoplay: {
      delay: 4200,
      disableOnInteraction: false
    },
    slidesPerView: 1,
    breakpoints: {
      768:  { slidesPerView: 2 },
      1200: { slidesPerView: 3 }
    },
    navigation: {
      nextEl: '#review-next',
      prevEl: '#review-prev'
    },
    pagination: {
      el: '#review-pag',
      clickable: true
    },
    // Asegura altura correcta cuando el texto cambia
    on: {
      init: function(){ this.updateAutoHeight(300); },
      slideChange: function(){ this.updateAutoHeight(300); }
    }
  });
})();

// ===== Navbar dropdown por hover (desktop) =====
(function () {
  // solo si el dispositivo tiene hover real (evita conflicto en touch)
  var canHover = window.matchMedia('(hover: hover) and (pointer: fine)').matches;
  if (!canHover) return;

  var dropdowns = document.querySelectorAll('.navbar .dropdown');
  dropdowns.forEach(function (dd) {
    var menu  = dd.querySelector('.dropdown-menu');
    var toggle = dd.querySelector('[data-toggle="dropdown"], .dropdown-toggle');
    var hideTmr;

    if (!menu) return;

    function open() {
      clearTimeout(hideTmr);
      dd.classList.add('show');
      menu.classList.add('show');
      if (toggle) toggle.setAttribute('aria-expanded', 'true');
    }

    function close() {
      hideTmr = setTimeout(function(){
        dd.classList.remove('show');
        menu.classList.remove('show');
        if (toggle) toggle.setAttribute('aria-expanded', 'false');
      }, 120); // pequeño delay para que no parpadee
    }

    dd.addEventListener('mouseenter', open);
    dd.addEventListener('mouseleave', close);
    // si se navega con teclado
    dd.addEventListener('focusin', open);
    dd.addEventListener('focusout', close);
  });
})();

