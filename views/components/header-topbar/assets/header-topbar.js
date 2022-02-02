import './_header-topbar.scss';

jQuery(document).ready( $ => {
  $('.search-bar__toggle').click( () => {
     $('.search-bar__form').toggleClass('visible');
  })
});
