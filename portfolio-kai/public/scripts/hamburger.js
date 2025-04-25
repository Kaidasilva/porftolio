const hamburgerBtn = document.getElementById('hamburger-btn');
const mobileMenu = document.getElementById('mobile-menu');

hamburgerBtn.addEventListener('click', () => {
  mobileMenu.classList.toggle('translate-x-[-100%]');
  mobileMenu.classList.toggle('translate-x-[0]');

  hamburgerBtn.classList.toggle('open');
});

window.addEventListener('resize', () => {
  if (window.innerWidth >= 768) {
    mobileMenu.classList.add('translate-x-[-100%]');
    mobileMenu.classList.remove('translate-x-[0]');
    hamburgerBtn.classList.remove('open');
  }
});
