import './testimonials.scss';

jQuery(document).ready($ => {
  const testimonials = $('.testimonials');

  if ( testimonials.lenght === 0 ) {
    return;
  }

  testimonials.slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
  });
})
