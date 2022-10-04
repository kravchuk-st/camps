const burgerBtn = document.querySelector('.burger');
const menu = document.querySelector('.navbar__list');
const menuLinks = [...document.querySelectorAll('.navbar__link')];
const menuCloseBtn = document.querySelector('.navbar__bg');

export const burgerMenu = () => {
  burgerBtn.addEventListener('click', () => {
    burgerBtn.classList.toggle('burger_open');
    menu.classList.toggle('navbar__list_open');
    burgerBtn.classList.contains('burger_open') ? disableScroll() : enableScroll();
  });

  menuLinks.forEach((el) => {
    el.addEventListener('click', closeMenu);
  });
};

function disableScroll() {
  document.body.style.overflow = 'hidden';
  document.body.style.userSelect = 'none';
}

function enableScroll() {
  document.body.style.overflow = 'auto';
  document.body.style.userSelect = 'auto';
}

function closeMenu() {
    burgerBtn.classList.remove('burger_open');
    menu.classList.remove('navbar__list_open');
    enableScroll();
}
