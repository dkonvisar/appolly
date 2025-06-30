import Swiper from 'swiper';
import { Pagination, Navigation, EffectCoverflow } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/effect-coverflow';

const customersSlider = () => {
  new Swiper('.customers__slider', {
    modules: [Pagination, Navigation, EffectCoverflow],

    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
    loop: true,
    pagination: {
      el: '.swiper-pagination-custom',
      clickable: true,
    },
    breakpoints: {
      768: {
        coverflowEffect: {
          stretch: 302,
        },
      },
      1200: {
        coverflowEffect: {
          stretch: 548,
        },
      },
      1440: {
        coverflowEffect: {
          stretch: 522,
        },
      },
    },
  });
};

export { customersSlider };
