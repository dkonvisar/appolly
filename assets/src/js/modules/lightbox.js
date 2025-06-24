import GLightbox from 'glightbox';
import 'glightbox/dist/css/glightbox.min.css';

const usingLightbox = function () {
  const lightbox = GLightbox({
    selector: '#usingLightbox',
    touchNavigation: false,
    autoplayVideos: true,
    // videosWidth: '100vw',
  });
};

export { usingLightbox };
