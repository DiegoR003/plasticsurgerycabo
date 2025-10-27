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
