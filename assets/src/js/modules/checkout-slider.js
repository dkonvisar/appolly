import Swiper from 'swiper';
import { Pagination, Navigation } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';
// import 'swiper/css/navigation';

const checkoutSlider = () => {
  const updateSlideClasses = (swiper) => {
    const slides = swiper.slides;

    // Clean up previous custom classes
    slides.forEach((slide) => {
      slide.classList.remove('slide-before-prev', 'slide-after-next');
    });

    const activeSlide = swiper.slides[swiper.activeIndex];
    if (!activeSlide) return;

    // Get 2 previous slides in DOM
    let prev = activeSlide.previousElementSibling;
    if (prev?.previousElementSibling) {
      prev.previousElementSibling.classList.add('slide-before-prev');
    }

    // Get 2 next slides in DOM
    let next = activeSlide.nextElementSibling;
    if (next?.nextElementSibling) {
      next.nextElementSibling.classList.add('slide-after-next');
    }
  };

  const swiper = new Swiper('.checkout__slider', {
    modules: [Pagination, Navigation],
    slidesPerView: 'auto',
    centeredSlides: true,
    grabCursor: true,
    spaceBetween: 0,
    loop: true,
    pagination: {
      el: '.swiper-pagination-custom',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next-custom',
      prevEl: '.swiper-button-prev-custom',
    },
    on: {
      init() {
        updateSlideClasses(this);
      },
      slideChangeTransitionStart() {
        updateSlideClasses(this);
      },
    },
  });
};

export { checkoutSlider };
