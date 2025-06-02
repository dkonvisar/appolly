import Swiper from 'swiper';
import { Pagination, Navigation } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';

const checkoutSlider = () => {
  new Swiper('.checkout__slider', {
    modules: [Pagination, Navigation],
    slidesPerView: 'auto',
    centeredSlides: true,
    spaceBetween: 20,
    initialSlide: 1,
    loop: true,
    pagination: {
      el: '.swiper-pagination-custom',
      clickable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 3,
      },
    },
  });
};

export { checkoutSlider };
