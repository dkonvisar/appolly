import { headerMobile } from './modules/header-mobile';
import { checkoutSlider } from './modules/checkout-slider';
import { usingLightbox } from './modules/lightbox';
import { customersSlider } from './modules/customers-slider';

document.addEventListener('DOMContentLoaded', function () {
  headerMobile();
  checkoutSlider();
  usingLightbox();
  customersSlider();
});
