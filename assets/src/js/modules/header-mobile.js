const headerMobile = () => {
  const burgerButton = document.querySelector('#burger');
  const mobileMenu = document.querySelector('.header__mob-menu');
  burgerButton.addEventListener('click', (e) => {
    e.preventDefault();

    burgerButton.classList.toggle('open');
    mobileMenu.classList.toggle('open');
  });
};

export { headerMobile };
