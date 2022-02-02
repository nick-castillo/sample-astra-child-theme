import './header.scss';
import Headroom from 'headroom.js';

jQuery(document).ready(function($){
  const mainHeader = document.getElementById('main-header');

  const headroom = new Headroom(
    mainHeader,
    {
     offset: 40
    }
  );

  headroom.init();

  $('.primary-menu__btn-open, .primary-menu__close-btn').click( () => {
    toggleMenu();
  })

  $('.primary-menu__item-btn--dropdown, .primary-menu__item-btn--mega_menu').click( evt => {
    let subMenu = null;

    const dropdownBtn = $(evt.currentTarget);

    toggleSubMenu( dropdownBtn.attr('id') );
  })

  const megaMenuItems = $('.mega-menu__item');
  const initialMegaMenuHeight = $(megaMenuItems[0]).height() + 48;

  if ( $(window).width() > 977 ) {
    megaMenuItems.each( ( index, menuItem ) => {
      const widthSize = ( 1 / megaMenuItems.length ) * 100;

      $(menuItem).css('width', widthSize + '%');
    })
  }

  // Resize mega menu height.
  $(window).resize( () => {
    const subMenu = $(`ul.mega-menu__items`);

    if ( $(window).width() < 992 ) {
      subMenu.removeAttr('style');
      return;
    }

    if ( 0 === subMenu.length ) {
      return;
    }

    if ( ! $(subMenu).hasClass('open') ) {
      $(subMenu).height(initialMegaMenuHeight);
    } else {
      $(subMenu).height(megaMenuHeight);
    }
  }) // resize

  /**
   * Show or hide a sub menu.
   *
   * @param {string} subMenuId Data attr of the sub menu.
   */
  function toggleSubMenu( subMenuId ) {
    const subMenu = $(`ul[data-submenu="${subMenuId}"]`);

    if ( 0 === subMenu.length ) {
      return;
    }

    if ( ! $(subMenu).hasClass('open') ) {
      $(subMenu).addClass('open')

      if ( ! subMenu.hasClass( 'dropdown' ) ) {
        if ( $(window).width() > 992 ) {
          const megaMenuHeight = $(megaMenuItems[0]).height() + 48;

          $(subMenu).height(megaMenuHeight);
        }
      }
    } else {
      $(subMenu).removeClass('open')

      if ( ! subMenu.hasClass( 'dropdown' ) ) {
        setTimeout(() => {
          if ( $(window).width() > 992 ) {
            $(subMenu).height(initialMegaMenuHeight);
          }
        }, 400);
      }
    }
  }

  /**
   * Show or hide the primary menu.
   */
  function toggleMenu() {
    const primaryMenu = $('.primary-menu');

    if ( primaryMenu.hasClass('hidden') ) {
      primaryMenu.removeClass('hidden')
    } else {
      primaryMenu.addClass('hidden')
    }
  }
});
