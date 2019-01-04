jQuery(function ($) {
  const header = document.querySelector('header');

  let currentSlide = 0;
  let z = 1;

  function animateFirstSlide() {
    window.addEventListener('load', () => {
      const slides = document.querySelectorAll('.featured-pp-inner');
      const timeBar = document.querySelectorAll('.time-bar-slider');
      slides[0].classList.add('open');
      slides[0].style.width = '100%';
      timeBar[0].classList.add('animated');
    });
  }

  function readMoreHover() {

    if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
      const readMore = document.querySelectorAll('.read-more-featured-slider');

      readMore.forEach(readM => {

        $(readMore).on('mouseover', () => {
            $('.time-bar-slider').css('background-color', '#6f9ab7')
          })
          .on('mouseout', () => {
            $('.time-bar-slider').css('background-color', '')
          });

      })
    }
  }

  function sliderHome() {
    currentSlide = currentSlide + 1;

    const slides = document.querySelectorAll('.featured-pp-inner');
    const prevSlide = slides[currentSlide - 1];
    const timeBar = document.querySelectorAll('.time-bar-slider');

    if (currentSlide > slides.length - 1) {
      currentSlide = 0;
      z = 0;
    }

    z = z + 1;

    slides.forEach(slide => {
      slide.style.animation = '';
      slide.style.zIndex = '';
      prevSlide.style.zIndex = z - 1;
      slide.style.width = '0';
      prevSlide.style.width = '100%';
      slide.classList.remove('open');
    });

    timeBar.forEach(bar => {
      bar.classList.remove('animated');
    });

    timeBar[currentSlide].classList.add('animated');

    $(slides[currentSlide]).addClass('open');
    $(slides[currentSlide]).css('width', '100%');
    $(slides[currentSlide]).css('z-index', z);

  }

  function logoColor() {
    $(document).on('ready', () => {
      if ((/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) && $('body').is('.home')) {
        $('.menu-trigger-color').addClass('');
      } else if ($('body').is('.home')) {
        $('.menu-trigger-color').addClass('white-stroke');
      } else if ((/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) && $('body').is('.post-template-icw-single,.post-template-icw-single-old')) {
        $('.menu-trigger-color').addClass('white-stroke');
        $('.cls-3-grey').addClass('white-logo');
        $('.cls-2-blue').addClass('white-logo');
      } else if ($('body').is('.post-template-icw-single,.post-template-icw-single-old')) {
        $('.menu-trigger-color').removeClass('white-stroke');
        $('.cls-3-grey').addClass('white-logo');
        $('.cls-2-blue').addClass('white-logo');
      } else if (
        $('body').is(
          '.post-template-icw-single, .post-template-icr-single, .page-template-icw, .page-template-services, .page-template-contact, .post-template-icw-single-old, .page-template-icr, .page-template-reports '
        )
      ) {
        $('.cls-3-grey').addClass('white-logo');
        $('.cls-2-blue').addClass('white-logo');
        $('.menu-trigger-color').addClass('white-stroke');

        $(document).on('scroll', () => {
          const currentScroll = $(document).scrollTop();
          const initialScroll = $(document).scrollTop();

          if (initialScroll < 80) {
            $('.cls-3-grey').addClass('white-logo');
            $('.cls-2-blue').addClass('white-logo');
            $('.menu-trigger-color').addClass('white-stroke');
          }
        });
      }
    });
  }

  function headerChange() {
    let prevScroll = 0;

    $(document).on('scroll', () => {
      const currentScroll = $(document).scrollTop();
      const initialScroll = $(document).scrollTop();
      if (!$('.menu-container').hasClass('translate-up')) {
        if ($('.menu-container').hasClass('translate-up')) {
          $(header).removeClass('bg-white');
        }

        if (initialScroll == 0) {}

        if (initialScroll > 80) {


          $(header).addClass('bg-white');
          $('.cls-3-grey').addClass('og-logo');
          $('.cls-2-blue').addClass('og-logo-grey');
          $('.cls-3-grey').removeClass('white-logo');
          $('.cls-2-blue').removeClass('white-logo');
          $('.menu-trigger-color').removeClass('white-stroke');
        }

        if (initialScroll < 100) {
          if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {

          } else if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) && $('body').is('.post-template-icw-single,.post-template-icw-single-old')) {
            $('.menu-trigger-color').addClass('white-stroke');
            $('.cls-3-grey').addClass('white-logo');
            $('.cls-2-blue').addClass('white-logo');
          } else if ($('body').is('.post-template-icw-single, .post-template-icr-single, .page-template-icw, .page-template-services, .page-template-contact, .post-template-icw-single-old, .page-template-icr, .home')) {
            $('.menu-trigger-color').addClass('white-stroke');
          }

          $(header).removeClass('hidden');
          $(header).removeClass('bg-white');
          $('.cls-3-grey').removeClass('og-logo');
          $('.cls-2-blue').addClass('og-logo-grey');
        } else if (currentScroll - 15 > prevScroll && !$(header).hasClass('hidden')) {
          $(header).addClass('hidden');
        } else if (currentScroll < prevScroll && $(header).hasClass('hidden')) {
          $(header).removeClass('hidden');
          $(header).addClass('bg-white');
        }
        prevScroll = currentScroll;
      }
    });
  }

  function openHeader() {
    const menuTrigger = document.querySelector('div.menu');
    const menu = document.querySelector('div.menu-container');
    const menuInner = document.querySelector('div.menu-inner');
    const menuLinks = document.querySelectorAll(
      '.second-menu-col a, .third-menu-col a, .first-menu-col'
    );

    $(menuTrigger).on('click', () => {
      $(menu).toggleClass('hidden');
      $(menuInner).toggleClass('hidden');
      $(menu).toggleClass('translate-up');
      $('svg.logo').toggleClass('hidden');
      $('.menu-container .pp-patern-bg').toggleClass('open');
      $('div.menu-trigger').html(
        '<img class="menu-trigger" src="/wp-content/uploads/2018/12/close-button-white.svg">'
      );

      if ($(menu).hasClass('hidden') && $()) {
        $('div.menu-trigger').html(
          "<svg class='menu-trigger' viewBox='0 0 30.2 17'><defs><style>.menu-trigger-color {fill: none;stroke: #6f9ab7;stroke-width: 3px;}</style></defs><g id='Group_1482_1_' transform='translate(-1159.4 -54.048)'><g id='Group_11_1_' transform='translate(-5 5.948)'><path id='Path_83_1_' class='menu-trigger-color' d='M1194.6,49.6h-30.2'/><path id='Path_84_1_' class='menu-trigger-color' d='M1194.6,56.6h-30.2'/><path id='Path_13230_1_' class='menu-trigger-color' d='M1194.6,63.6h-30.2'/> </g></g></svg>"
        );
      }

      menuLinks.forEach((menuLinks, index) => {
        const delay = index * 15;
        menuLinks.style.transitionDelay = delay + 550 + 'ms';
      });
      $(menuLinks).toggleClass('translate-up');

      if (!$(menu).hasClass('hidden')) {
        // $('.logo-color-1').css('fill', '#fff');
        $(header).removeClass('bg-white');
      } else {
        $('.logo-color-1').css('fill', '');
      }
    });
  }

  function progressBar() {
    const bodyTag = document.querySelector('body');
    const progressBarWidth = document.querySelector('div.progress');

    document.addEventListener('scroll', function () {
      const pixels = window.pageYOffset;
      const pageHeight = bodyTag.getBoundingClientRect().height;
      const totalScrollableDistance = pageHeight - window.innerHeight;

      const percentage = pixels / totalScrollableDistance;

      progressBarWidth.style.width = `${100 * percentage}%`;
    });
  }

  function countryReviewImage() {
    $(window).on('load', () => {
      $('.country-review-image').addClass('scaled');
    });
  }

  function cannabisMap() {
    const latam = document.querySelector('#latam-path');
    const europe = document.querySelector('#europe-map');
    const oceania = document.querySelector('#oceania-path');
    const africa = document.querySelector('#africa-path');
    const northAmerica = document.querySelector('#north-america-path');

    const overlayMap = document.querySelector('.overlay-map');
    const overlayMapContainer = document.querySelector('.overlay-map-container');

    $('#latam-path, #latam-box')
      .on('mouseover', () => {
        if (!$(overlayMap).hasClass('is-open')) {
          $('.latam-selector').css({
            opacity: '1',
            transform: 'translateY(0)'
          });
        }
      })
      .on('mouseout', () => {
        $('.latam-selector').css({
          opacity: '0',
          transform: 'translateY(10px)'
        });
      });

    $('#europe-map, #europe-box')
      .on('mouseover', () => {
        if (!$(overlayMap).hasClass('is-open')) {
          $('.europe-selector').css({
            opacity: '1',
            transform: 'translateY(0)'
          });
        }
      })
      .on('mouseout', () => {
        $('.europe-selector').css({
          opacity: '0',
          transform: 'translateY(10px)'
        });
      });

    $('#oceania-path, #oceania-box')
      .on('mouseover', () => {
        if (!$(overlayMap).hasClass('is-open')) {
          $('.oceania-selector').css({
            opacity: '1',
            transform: 'translateY(0)'
          });
        }
      })
      .on('mouseout', () => {
        $('.oceania-selector').css({
          opacity: '0',
          transform: 'translateY(10px)'
        });
      });

    $('#north-america-path, #north-america-box')
      .on('mouseover', () => {
        if (!$(overlayMap).hasClass('is-open')) {
          $('.north-america-selector').css({
            opacity: '1',
            transform: 'translateY(0)'
          });
        }
      })
      .on('mouseout', () => {
        $('.north-america-selector').css({
          opacity: '0',
          transform: 'translateY(10px)'
        });
      });

    $('#africa-path, #africa-box')
      .on('mouseover', () => {
        if (!$(overlayMap).hasClass('is-open')) {
          $('.africa-selector').css({
            opacity: '1',
            transform: 'translateY(0)'
          });
        }
      })
      .on('mouseout', () => {
        $('.africa-selector').css({
          opacity: '0',
          transform: 'translateY(10px)'
        });
      });

    $('#asia-path, #asia-box')
      .on('mouseover', () => {
        if (!$(overlayMap).hasClass('is-open')) {
          $('.asia-selector').css({
            opacity: '1',
            transform: 'translateY(0)'
          });
        }
      })
      .on('mouseout', () => {
        $('.asia-selector').css({
          opacity: '0',
          transform: 'translateY(10px)'
        });
      });

    const dataRowLatam = document.querySelectorAll('.latam-numbers .data-row')
    const dataRowEurope = document.querySelectorAll('.europe-numbers .data-row')
    const dataRowOceania = document.querySelectorAll('.oceania-numbers .data-row');
    const dataRowAsia = document.querySelectorAll('.asia-numbers .data-row')
    const dataRowNorthA = document.querySelectorAll('.north-america-numbers .data-row')


    dataRowLatam.forEach((dataRowL, index) => {
      const delay = index * 15;
      dataRowL.style.transitionDelay = delay + 500 + 'ms';
    });

    dataRowEurope.forEach((dataRowE, index) => {
      const delay = index * 15;
      dataRowE.style.transitionDelay = delay + 500 + 'ms';
    });

    dataRowOceania.forEach((dataRowO, index) => {
      const delay = index * 15;
      dataRowO.style.transitionDelay = delay + 500 + 'ms';
    });

    dataRowAsia.forEach((dataRowA, index) => {
      const delay = index * 15;
      dataRowA.style.transitionDelay = delay + 500 + 'ms';
    });

    dataRowNorthA.forEach((dataRowNA, index) => {
      const delay = index * 15;
      dataRowNA.style.transitionDelay = delay + 500 + 'ms';
    });



    $('#latam-path, #latam-box').on('click', () => {
      $(overlayMap).css('transform', 'scaleY(1)');
      $(overlayMapContainer).addClass('z-top');
      $(overlayMap).addClass('z-top');
      $(overlayMap).css('min-height', '100vh');


      $('header').css('transform', 'translateY(-100%');

      $('.cw-image svg path').css('fill', 'rgba(255, 255, 255, 0)')
      $('.cw-image svg path').css('z-index', '99999999')
      $('.overlay-map-top-container').css('z-index', '-1')
      // $('#latam-path').css('fill', 'rgba(255, 255, 255, 0)');


      $('.data-row').removeClass('row-open');
      $('.latam-numbers .data-row').addClass('row-open')

      $('.gross-1, .gross-2, .gross-3').removeClass('open');
      $('.latam-gross>div').addClass('open')
      $('.overlay-map-top-container').css('height', 'unset');
      $('.overlay-map-top-container, .overlay-map').css('overflow', 'initial')


      if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
        // $(latam).css('fill', '#fff0');
        $(overlayMap).css('transform', 'scaleY(1)');;

        $('html, body').animate({
            scrollTop: $(".overlay-map-top-container").offset().top
          },
          350
        );
      } else {
        // $(latam).css('fill', '#fff');
        $(latam).css('z-index', '999999');
        $('html, body').animate({
            scrollTop: $(overlayMapContainer).offset().top
          },
          350
        );

      }

      $('.europe-path-class').css('fill', 'rgba(255, 255, 255, 0)');
      $('#oceania-path').css('fill', 'rgba(255, 255, 255, 0)');

      $('.continents-container a').addClass('active-container');
      $('.continents-container a').removeClass('is-active');
      $('.continents-container a#latam-box').addClass('is-active');

      $('.cw-image').css('pointer-events', 'none');
      $('.overlay-map-container, .overlay-map, .overlay-map-top-container').css(
        'pointer-events',
        'all'
      );

      // $('.latam-data').css('display', 'flex');
      setTimeout(() => {
        $('.latam-data').css('opacity', '1');
      }, 300);

      $('.map-country-title').html('Latin America');
      $(overlayMap).addClass('is-open');

      $('.oceania-data, .europe-data, .asia-data, .africa-data, .north-america-data').css({
        opacity: '',
        display: 'none'
      });

      //Hide map tags
      // $('.oceania-selector, .latam-selector, .europe-selector').css('opacity', '0');
    });

    $(' #europe-map, #europe-box').on('click', () => {
      $(overlayMapContainer).addClass('z-top');
      $(overlayMap).css('transform', 'scaleY(1)');
      $(overlayMap).addClass('z-top');
      $('header').css('transform', 'translateY(-100%');
      $(overlayMap).css('min-height', '100vh');

      $('.cw-image svg path').css('fill', 'rgba(255, 255, 255, 0)')
      $('.cw-image svg path').css('z-index', '99999999')
      $('.overlay-map-top-container').css('z-index', '-1')

      $('.data-row').removeClass('row-open');
      $('.europe-numbers .data-row').addClass('row-open')

      $('.overlay-map-top-container').css('height', 'unset');
      $('.overlay-map-top-container, .overlay-map').css('overflow', 'initial')

      if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
        $('.europe-path-class').css('fill', 'rgba(255, 255, 255, 0)');
        $(overlayMap).css('transform', 'scaleY(1)');



        $('html, body').animate({
            scrollTop: $(".overlay-map-top-container").offset().top
          },
          350
        );
      } else {
        // $('#europe-map path').css('fill', '#fff');
        $('html, body').animate({
            scrollTop: $(overlayMapContainer).offset().top
          },
          350
        );
      }

      $(oceania).css('fill', 'rgba(255, 255, 255, 0)');
      $(latam).css('fill', 'rgba(255, 255, 255, 0)');

      $('.cw-image').css('pointer-events', 'none');
      $('.overlay-map-container, .overlay-map, .overlay-map-top-container').css(
        'pointer-events',
        'all'
      );

      $('.europe-data').css('display', 'flex');
      setTimeout(() => {
        $('.europe-data').css('opacity', '1');
      }, 0);

      $('.map-country-title').html('Europe');
      $('.continents-container a').removeClass('is-active');
      $('.continents-container a#europe-box').addClass('is-active');
      $('.continents-container a').addClass('active-container');

      $('.latam-data, .oceania-data, .asia-data, .africa-data, .north-america-data').css({
        opacity: '',
        display: 'none'
      });

      $(overlayMap).addClass('is-open');

      $('.gross-1, .gross-2, .gross-3').removeClass('open');
      $('.europe-gross>div').addClass('open')

      //Hide map tags
      // $('.oceania-selector, .latam-selector, .europe-selector').css('opacity', '0');
    });

    $('#oceania-path, #oceania-box').on('click', () => {
      $(overlayMap).css('transform', 'scaleY(1)');
      $(overlayMapContainer).addClass('z-top');
      $(overlayMap).addClass('z-top');
      $('header').css('transform', 'translateY(-100%');
      $(overlayMap).css('min-height', '100vh');

      $('.cw-image svg path').css('fill', 'rgba(255, 255, 255, 0)')
      $('.cw-image svg path').css('z-index', '99999999')
      $('.overlay-map-top-container').css('z-index', '-1')



      $('.data-row').removeClass('row-open');
      $('.oceania-numbers .data-row').addClass('row-open')

      $('.overlay-map-top-container').css('height', 'unset');
      $('.overlay-map-top-container, .overlay-map').css('overflow', 'initial')

      if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
        $("#oceania-path path").css('fill', 'rgba(255, 255, 255, 0)');

        $('html, body').animate({
            scrollTop: $(".overlay-map-top-container").offset().top
          },
          350
        );
      } else {
        // $("#oceania-path path").css('fill', '#fff');
        $('html, body').animate({
            scrollTop: $(overlayMapContainer).offset().top
          },
          350
        );
      }



      $(latam).css('fill', 'rgba(255, 255, 255, 0)');
      $('.europe-path-class').css('fill', 'rgba(255, 255, 255, 0)');

      $('.cw-image').css('pointer-events', 'none');
      $('.overlay-map-container, .overlay-map, .overlay-map-top-container').css(
        'pointer-events',
        'all'
      );

      $('.oceania-data').css('display', 'flex');
      setTimeout(() => {
        $('.oceania-data').css('opacity', '1');
      }, 300);

      $('.map-country-title').html('Oceania');
      $('.continents-container a').removeClass('is-active');
      $('.continents-container a#oceania-box').addClass('is-active');
      $('.continents-container a').addClass('active-container');

      $('.latam-data, .europe-data, .asia-data, .africa-data, .north-america-data').css({
        opacity: '',
        display: 'none'
      });

      $(overlayMap).addClass('is-open');

      $('.gross-1, .gross-2, .gross-3').removeClass('open');
      $('.oceania-gross>div').addClass('open')

      //Hide map tags
      // $('.oceania-selector, .latam-selector, .europe-selector').css('opacity', '0');
    });

    $('#asia-path, #asia-box').on('click', () => {
      $(overlayMap).css('transform', 'scaleY(1)');
      $(overlayMapContainer).addClass('z-top');
      $(overlayMap).addClass('z-top');
      $('header').css('transform', 'translateY(-100%');
      $(overlayMap).css('min-height', '100vh');

      $('.cw-image svg path').css('fill', 'rgba(255, 255, 255, 0)')
      $('.cw-image svg path').css('z-index', '99999999')
      $('.overlay-map-top-container').css('z-index', '-1')

      $('.data-row').removeClass('row-open');
      $('.asia-numbers .data-row').addClass('row-open')

      $('.overlay-map-top-container').css('height', 'unset');
      $('.overlay-map-top-container, .overlay-map').css('overflow', 'initial')

      if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
        $('#asia-path').css('fill', 'rgba(255, 255, 255, 0)');
        $(overlayMap).css('transform', 'scaleY(1)');


        $('html, body').animate({
            scrollTop: $(".overlay-map-top-container").offset().top
          },
          350
        );
      } else {
        // $('#asia-path').css('fill', '#fff');
        $('html, body').animate({
            scrollTop: $(overlayMapContainer).offset().top
          },
          350
        );
      }

      $('.cw-image').css('pointer-events', 'none');
      $('.overlay-map-container, .overlay-map, .overlay-map-top-container').css(
        'pointer-events',
        'all'
      );

      $('.asia-data').css('display', 'flex');
      setTimeout(() => {
        $('.asia-data').css('opacity', '1');
      }, 0);

      $('.map-country-title').html('Asia');
      $('.continents-container a').removeClass('is-active');
      $('.continents-container a#europe-box').addClass('is-active');
      $('.continents-container a').addClass('active-container');

      $('.latam-data, .oceania-data, .north-america-data, .africa-data, .europe-data').css({
        opacity: '',
        display: 'none'
      });

      $(overlayMap).addClass('is-open');

      $('.gross-1, .gross-2, .gross-3').removeClass('open');
      $('.asia-gross>div').addClass('open')


    });

    $('#africa-path, #africa-box').on('click', () => {
      $(overlayMap).css('transform', 'scaleY(1)');
      $(overlayMapContainer).addClass('z-top');
      $(overlayMap).addClass('z-top');
      $('header').css('transform', 'translateY(-100%');
      $(overlayMap).css('min-height', '100vh');

      $('.cw-image svg path').css('fill', 'rgba(255, 255, 255, 0)')
      $('.cw-image svg path').css('z-index', '99999999')
      $('.overlay-map-top-container').css('z-index', '-1')

      $('.data-row').removeClass('row-open');
      $('.africa-numbers .data-row').addClass('row-open')
      $('.overlay-map-top-container').css('height', 'unset');
      $('.overlay-map-top-container, .overlay-map').css('overflow', 'initial')

      if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
        $('#africa-path').css('fill', 'rgba(255, 255, 255, 0)');

        $('html, body').animate({
            scrollTop: $(".overlay-map-top-container").offset().top
          },
          350
        );
      } else {
        // $('#africa-path').css('fill', '#fff');
        $('html, body').animate({
            scrollTop: $(overlayMapContainer).offset().top
          },
          350
        );
      }

      $('.cw-image').css('pointer-events', 'none');
      $('.overlay-map-container, .overlay-map, .overlay-map-top-container').css(
        'pointer-events',
        'all'
      );

      $('.africa-data').css('display', 'flex');
      setTimeout(() => {
        $('.africa-data').css('opacity', '1');
      }, 0);

      $('.map-country-title').html('Africa');
      $('.continents-container a').removeClass('is-active');
      $('.continents-container a#europe-box').addClass('is-active');
      $('.continents-container a').addClass('active-container');

      $('.latam-data, .oceania-data, .north-america-data, .asia-data, .europe-data').css({
        opacity: '',
        display: 'none'
      });

      $(overlayMap).addClass('is-open');

      $('.gross-1, .gross-2, .gross-3').removeClass('open');
      $('.africa-gross>div').addClass('open')


    });

    $('#north-america-path, #north-america-box').on('click', () => {
      $(overlayMap).css('transform', 'scaleY(1)');
      $(overlayMapContainer).addClass('z-top');
      $(overlayMap).addClass('z-top');
      $('header').css('transform', 'translateY(-100%');
      $(overlayMap).css('min-height', '100vh');

      $('.cw-image svg path').css('fill', 'rgba(255, 255, 255, 0)')
      $('.cw-image svg path').css('z-index', '99999999')
      $('.overlay-map-top-container').css('z-index', '-1')

      $('.data-row').removeClass('row-open');
      $('.north-america-numbers .data-row').addClass('row-open')
      $('.overlay-map-top-container').css('height', 'unset');
      $('.overlay-map-top-container, .overlay-map').css('overflow', 'initial')

      if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
        $('#north-america-path path').css('fill', 'rgba(255, 255, 255, 0)');
        $('.overlay-map-top-container').css('height', 'unset');
        $('.overlay-map-top-container, .overlay-map').css('overflow', 'initial')
        $('html, body').animate({
            scrollTop: $(".overlay-map-top-container").offset().top
          },
          350
        );
      } else {
        // $('#north-america-path path').css('fill', '#fff');
        $('html, body').animate({
            scrollTop: $(overlayMapContainer).offset().top
          },
          350
        );
      }

      $('.cw-image').css('pointer-events', 'none');
      $('.overlay-map-container, .overlay-map, .overlay-map-top-container').css(
        'pointer-events',
        'all'
      );

      $('.north-america-data').css('display', 'flex');
      setTimeout(() => {
        $('.north-america-data').css('opacity', '1');
      }, 0);

      $('.map-country-title').html('North America');
      $('.continents-container a').removeClass('is-active');
      $('.continents-container a#europe-box').addClass('is-active');
      $('.continents-container a').addClass('active-container');

      $('.latam-data, .oceania-data, .africa-data, .asia-data, .europe-data').css({
        opacity: '',
        display: 'none'
      });

      $(overlayMap).addClass('is-open');

      $('.gross-1, .gross-2, .gross-3').removeClass('open');
      $('.north-america-gross>div').addClass('open')


    });



    $('.close-map').on('click', () => {
      $('.overlay-map-container, .overlay-map, .overlay-map-top-container').css(
        'pointer-events',
        ''
      );
      $(overlayMapContainer).removeClass('z-top');
      $(overlayMap).removeClass('z-top');
      $('header').css('transform', '');

      $('.cw-image svg path').css('fill', '')
      $('.cw-image svg path').css('z-index', '')
      $('.overlay-map-top-container').css('z-index', '')


      $('.cw-image').css('pointer-events', '');

      $(overlayMap).css('transform', '');

      $(oceania).css('fill', '');
      $(latam).css('fill', '');
      $('.europe-path-class').css('fill', '');

      $('.europe-data, .latam-data, .oceania-data').css({
        display: '',
        opacity: ''
      });

      $('.continents-container a').removeClass('active-container');
      $('.continents-container a').removeClass('is-active');

      $(overlayMap).removeClass('is-open');

      $('.data-row').removeClass('row-open');
      $('.gross-1, .gross-2, .gross-3').removeClass('open');
      $('.overlay-map-top-container').css('height', '');
      $('.overlay-map-top-container, .overlay-map').css('overflow', '')

      if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
        $('html, body').animate({
            scrollTop: $(".overlay-map-top-container").offset().top - 200
          },
          350
        );
      }

      //Map tags ok
      // $('.oceania-selector, .latam-selector, .europe-selector').css('opacity', '');
    });

    document.addEventListener("keyup", function (event) {
      if (event.keyCode === 27) {
        $('.overlay-map-container, .overlay-map, .overlay-map-top-container').css(
          'pointer-events',
          ''
        );
        $(overlayMapContainer).removeClass('z-top');
        $(overlayMap).removeClass('z-top');
        $('header').css('transform', '');

        $('.cw-image svg path').css('fill', '')
        $('.cw-image svg path').css('z-index', '')
        $('.overlay-map-top-container').css('z-index', '')


        $('.cw-image').css('pointer-events', '');

        $(overlayMap).css('transform', '');

        $(oceania).css('fill', '');
        $(latam).css('fill', '');
        $('.europe-path-class').css('fill', '');

        $('.europe-data, .latam-data, .oceania-data').css({
          display: '',
          opacity: ''
        });

        $('.continents-container a').removeClass('active-container');
        $('.continents-container a').removeClass('is-active');

        $(overlayMap).removeClass('is-open');

        $('.data-row').removeClass('row-open');
        $('.gross-1, .gross-2, .gross-3').removeClass('open');
        $('.overlay-map-top-container').css('height', '');
        $('.overlay-map-top-container, .overlay-map').css('overflow', '')

        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
          $('html, body').animate({
              scrollTop: $(".overlay-map-top-container").offset().top - 200
            },
            350
          );
        }
      }
    });



    // Function to close if user scrolls past map or to top of page
    document.addEventListener('scroll', () => {
      const pageTop = window.pageYOffset;
      const mapEnd = 2500;


      if (pageTop == 0) {
        $('.overlay-map-container, .overlay-map, .overlay-map-top-container').css(
          'pointer-events',
          ''
        );
        $(overlayMapContainer).removeClass('z-top');
        $(overlayMap).removeClass('z-top');
        $('header').css('transform', '');

        $('.cw-image svg path').css('fill', '')
        $('.cw-image svg path').css('z-index', '')
        $('.overlay-map-top-container').css('z-index', '')


        $('.cw-image').css('pointer-events', '');

        $(overlayMap).css('transform', '');

        $(oceania).css('fill', '');
        $(latam).css('fill', '');
        $('.europe-path-class').css('fill', '');

        $('.europe-data, .latam-data, .oceania-data').css({
          display: '',
          opacity: ''
        });

        $('.continents-container a').removeClass('active-container');
        $('.continents-container a').removeClass('is-active');

        $(overlayMap).removeClass('is-open');

        $('.data-row').removeClass('row-open');
        $('.gross-1, .gross-2, .gross-3').removeClass('open');

      }
      console.log(mapEnd)
      console.log(pageTop)

      if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
        if (mapEnd < pageTop) {


          $('.overlay-map-container, .overlay-map, .overlay-map-top-container').css(
            'pointer-events',
            ''
          );
          $(overlayMapContainer).removeClass('z-top');
          $(overlayMap).removeClass('z-top');
          $('header').css('transform', '');

          $('.cw-image svg path').css('fill', '')
          $('.cw-image svg path').css('z-index', '')
          $('.overlay-map-top-container').css('z-index', '')


          $('.cw-image').css('pointer-events', '');

          $(overlayMap).css('transform', '');

          $(oceania).css('fill', '');
          $(latam).css('fill', '');
          $('.europe-path-class').css('fill', '');

          $('.europe-data, .latam-data, .oceania-data').css({
            display: '',
            opacity: ''
          });

          $('.continents-container a').removeClass('active-container');
          $('.continents-container a').removeClass('is-active');

          $(overlayMap).removeClass('is-open');

          $('.data-row').removeClass('row-open');
          $('.gross-1, .gross-2, .gross-3').removeClass('open');
          $('.overlay-map-top-container').css('height', '');
          $('.overlay-map-top-container, .overlay-map').css('overflow', '')
        }

      } else if (document.querySelector('.continents-container').offsetTop < pageTop) {
        $('.overlay-map-container, .overlay-map, .overlay-map-top-container').css(
          'pointer-events',
          ''
        );
        $(overlayMapContainer).removeClass('z-top');
        $(overlayMap).removeClass('z-top');
        $('header').css('transform', '');

        $('.cw-image svg path').css('fill', '')
        $('.cw-image svg path').css('z-index', '')
        $('.overlay-map-top-container').css('z-index', '')


        $('.cw-image').css('pointer-events', '');

        $(overlayMap).css('transform', '');

        $(oceania).css('fill', '');
        $(latam).css('fill', '');
        $('.europe-path-class').css('fill', '');

        $('.europe-data, .latam-data, .oceania-data').css({
          display: '',
          opacity: ''
        });

        $('.continents-container a').removeClass('active-container');
        $('.continents-container a').removeClass('is-active');

        $(overlayMap).removeClass('is-open');

        $('.data-row').removeClass('row-open');
        $('.gross-1, .gross-2, .gross-3').removeClass('open');
        $('.overlay-map-top-container').css('height', '');
        $('.overlay-map-top-container, .overlay-map').css('overflow', '')
      }
    })

  }

  function anchors() {
    const anchorsICW = document.querySelectorAll('.icw-theme');

    $('.europe-icw').on('click', function () {
      $('html, body').animate({
          scrollTop: $(anchorsICW[0]).offset().top - 100
        },
        500
      );
      return false;
    });

    $('.latam-icw').on('click', function () {
      $('html, body').animate({
          scrollTop: $(anchorsICW[1]).offset().top - 100
        },
        750
      );
      return false;
    });

    $('.oceania-icw').on('click', function () {
      $('html, body').animate({
          scrollTop: $(anchorsICW[2]).offset().top - 100
        },
        1000
      );
      return false;
    });

    $('.row-icw').on('click', function () {
      $('html, body').animate({
          scrollTop: $(anchorsICW[3]).offset().top - 100
        },
        1250
      );
      return false;
    });

    const servicesAnchors = document.querySelectorAll('.services-icons a');
    const servicesDivs = document.querySelectorAll('.services-content > div');

    $(servicesAnchors[0]).on('click', function () {
      $('html, body').animate({
          scrollTop: $(servicesDivs[0]).offset().top
        },
        500
      );
      return false;
    });

    $(servicesAnchors[1]).on('click', function () {
      $('html, body').animate({
          scrollTop: $(servicesDivs[1]).offset().top
        },
        750
      );
      return false;
    });

    $(servicesAnchors[2]).on('click', function () {
      $('html, body').animate({
          scrollTop: $(servicesDivs[2]).offset().top
        },
        1000
      );
      return false;
    });

    const homeAnchors = document.querySelectorAll('.sections-index a');
    const sections = document.querySelectorAll('.sections-inner > div ');

    $(homeAnchors[0]).on('click', function () {
      $('html, body').animate({
          scrollTop: $(sections[0]).offset().top - 100
        },
        700
      );
      return false;
    });

    $(homeAnchors[1]).on('click', function () {
      $('html, body').animate({
          scrollTop: $(sections[1]).offset().top - 100
        },
        700
      );
      return false;
    });

    $(homeAnchors[2]).on('click', function () {
      $('html, body').animate({
          scrollTop: $(sections[2]).offset().top - 100
        },
        700
      );
      return false;
    });

    $(homeAnchors[3]).on('click', function () {
      $('html, body').animate({
          scrollTop: $(sections[3]).offset().top - 100
        },
        700
      );
      return false;
    });

    $(homeAnchors[4]).on('click', function () {
      $('html, body').animate({
          scrollTop: $(sections[4]).offset().top - 100
        },
        700
      );
      return false;
    });

    $(homeAnchors[5]).on('click', function () {
      $('html, body').animate({
          scrollTop: $(sections[5]).offset().top - 90
        },
        700
      );
      return false;
    });

    $(homeAnchors[6]).on('click', function () {
      $('html, body').animate({
          scrollTop: $(sections[6]).offset().top - 90
        },
        700
      );
      return false;
    });

    $('#about-home-anchor').on('click', function () {
      $('html, body').animate({
          scrollTop: $(sections[0]).offset().top - 90
        },
        700
      );
      return false;
    });
  }

  function footerMobileLinks() {
    $(window).resize(function () {
      if ($('.third-footer-links').css('display') == 'none') {
        $('.first-footer-links').html(
          '	<a href="index">Home</a><a href="index#about">About Us</a><a href="reports">Reports</a><a href="contact#team">International Cannabis Weekly</a><a href="contact#team">International Country Review</a><a href="services">Our Services</a><a href="contact#team">Press</a><a href="contact#team">Sponsorship</a><a href="contact#team">Contact</a>'
        );
      } else {
        $('.first-footer-links').html(
          '		<a href="index">Home</a><a href="index#about">About Us</a><a href="reports">Reports</a><a href="contact#team">The Team</a><a href="services">Our Services</a>'
        );
      }
    });

    $(window).load(function () {
      if ($('.third-footer-links').css('display') == 'none') {
        $('.first-footer-links').html(
          '	<a href="index">Home</a><a href="index#about">About Us</a><a href="reports">Reports</a><a href="contact#team">International Cannabis Weekly</a><a href="contact#team">International Country Review</a><a href="services">Our Services</a><a href="contact#team">Press</a><a href="contact#team">Sponsorship</a><a href="contact#team">Contact</a><a href="contact#team">Made by Marco Polo</a>'
        );
      } else {
        $('.first-footer-links').html(
          '		<a href="index">Home</a><a href="index#about">About Us</a><a href="reports">Reports</a><a href="contact#team">The Team</a><a href="services">Our Services</a>'
        );
      }
    });
  }

  function homeMobileLinks() {
    $(window).resize(function () {
      if ($('.first-menu-col').css('display') == 'none' && $(window).width <= 480) {
        $('.second-menu-col').html(
          '<a class="white fw3 mb4 f1 db" href="/">Home</a><a class="white fw3 mb4 f1 db" href="reports">Reports</a><a class="white fw3 mb4 f1 db" href="services">Services</a><a class="white fw3 mb4 f1 db" href="international-country-review">International <br>Country Review</a><a class="white fw3 f1" href="international-cannabis-weekly">International<br>Cannabis Weekly</a><a class="white fw3  f1" href="press">Press</a><a class="white fw3  f1" href="contact">Contact</a>'
        );
      } else {
        $('.first-footer-links').html(
          '		<a href="index">Home</a><a href="index#about">About Us</a><a href="reports">Reports</a><a href="contact#team">The Team</a><a href="services">Our Services</a>'
        );
      }
    });

    $(window).load(function () {
      if ($('.first-menu-col').css('display') == 'none' && $(window).width <= 480) {
        $('.second-menu-col').html(
          '<a class="white fw3 mb4 f1 db" href="/">Home</a><a class="white fw3 mb4 f1 db" href="reports">Reports</a><a class="white fw3 mb4 f1 db" href="services">Services</a><a class="white fw3 mb4 f1 db" href="international-country-review">International <br>Country Review</a><a class="white fw3 f1" href="international-cannabis-weekly">International<br>Cannabis Weekly</a><a class="white fw3  f1" href="press">Press</a><a class="white fw3  f1" href="contact">Contact</a>'
        );
      } else {
        $('.second-menu-col').html(
          '		<a href="index">Home</a><a href="index#about">About Us</a><a href="reports">Reports</a><a href="contact#team">The Team</a><a href="services">Our Services</a>'
        );
      }
    });
  }

  function indexHome() {
    $(document).on('scroll', () => {
      const homeIndex = document.querySelectorAll('.sections-index a');
      const topPosition = window.pageYOffset + window.innerHeight / 2;
      const sections = document.querySelectorAll('.sections-inner > div ');

      if (topPosition < sections[0].offsetTop) {
        $(homeIndex).removeClass('active');
        $(homeIndex).removeClass('not-active');
      } else if (sections[0].offsetTop < topPosition && topPosition < sections[1].offsetTop) {
        $(homeIndex).addClass('not-active');
        $(homeIndex[0]).addClass('active');
        $(homeIndex[1]).removeClass('active');
      } else if (
        sections[1].offsetTop - 100 < topPosition &&
        topPosition < sections[2].offsetTop - 100
      ) {
        $(homeIndex).addClass('not-active');
        $(homeIndex[0]).removeClass('active');
        $(homeIndex[1]).addClass('active');
        $(homeIndex[2]).removeClass('active');

        $('body').removeClass('pp-dark-blue-bg');
        $(homeIndex).css('color', '');
        $('.sections-inner>div h1, .service h3, .service p').css('color', '');
        $(homeIndex).removeClass('service-section');
      } else if (
        sections[2].offsetTop - 100 < topPosition &&
        topPosition < sections[3].offsetTop - 100
      ) {
        $(homeIndex).addClass('not-active');
        $(homeIndex[1]).removeClass('active');
        $(homeIndex[2]).addClass('active');
        $(homeIndex[3]).removeClass('active');

        $('body').addClass('pp-dark-blue-bg');
        $(homeIndex).addClass('service-section');
        $(homeIndex).css('color', '#fff');
        $('.sections-inner>div h1, .service h3, .service p').css('color', '#fff');
      } else if (
        sections[3].offsetTop - 100 < topPosition &&
        topPosition < sections[4].offsetTop - 150
      ) {
        $(homeIndex).addClass('not-active');
        $(homeIndex[2]).removeClass('active');
        $(homeIndex[4]).removeClass('active');
        $(homeIndex[3]).addClass('active');

        $('body').removeClass('pp-dark-blue-bg');
        $(homeIndex).css('color', '');

        $('.sections-inner>div h1, .service h3, .service p').css('color', '');
        $(homeIndex).removeClass('service-section');
      } else if (
        sections[4].offsetTop - 150 < topPosition &&
        topPosition < sections[5].offsetTop - 100
      ) {
        $(homeIndex).addClass('not-active');
        $(homeIndex[3]).removeClass('active');
        $(homeIndex[5]).removeClass('active');
        $(homeIndex[4]).addClass('active');
      } else if (sections[5].offsetTop - 150 < topPosition &&
        topPosition < sections[6].offsetTop - 100) {
        $(homeIndex).addClass('not-active');
        $(homeIndex[4]).removeClass('active');
        $(homeIndex[5]).addClass('active');
        $(homeIndex[6]).removeClass('active');
      } else if (sections[6].offsetTop - 100 < topPosition) {
        $(homeIndex).addClass('not-active');
        $(homeIndex[5]).removeClass('active');
        $(homeIndex[6]).addClass('active');
      }
    });
  }

  function animateMapText() {
    // $(window).on('load', () => {
    setTimeout(() => {
      $('.cannabis-world-container > *').addClass('translate-up');

    }, 500);
    // });
  }

  function animateICR() {
    $(window).on('load', () => {
      $('.icr-featured-article, .cr-featured-div, .cr-featured-inner, .featured-cr').addClass(
        'open'
      );

      setTimeout(() => {

        document.querySelector('a.masonry-child:first-child').classList.add('animate-inview');
        document.querySelector('a.masonry-child:nth-child(2)').classList.add('animate-inview');
        document.querySelector('a.masonry-child:nth-child(3)').classList.add('animate-inview');
        document.querySelector('a.masonry-child:nth-child(4)').classList.add('animate-inview');



      }, 2500);
    });
  }

  function animateICRText() {
    $(window).on('load', () => {
      $('.large-cover > *').addClass('translate-up');
    });
  }

  function appearICRElements() {
    $(document).on('scroll', () => {
      const contentStarter = document.querySelector('.icr-content');
      const contentFinisher = document.querySelector('.previous-reviews');

      const windowHeight = window.innerHeight;
      const contentPosition = contentStarter.offsetTop;
      const contentEndPosition = contentFinisher.offsetTop;

      const pageTop = window.pageYOffset;

      const contentAppear = contentPosition - windowHeight / 2;
      const contentFinish = contentEndPosition - windowHeight / 1.7;

      if (contentAppear < pageTop) {
        $('.arrow-back').addClass('translate-up');
        $('.article-title').addClass('appear');
      } else {
        $('.arrow-back').removeClass('translate-up');
        $('.article-title').removeClass('appear');
      }

      if (contentFinish < pageTop) {
        $('.arrow-back').removeClass('translate-up');
        $('.article-title').removeClass('appear');
      }
    });
  }

  function tiltICW() {
    VanillaTilt.init(
      document.querySelectorAll(
        'a.icw-featured, .report-home img, a.icw-related, .previous-issue-nf-container'
      ), {
        max: 12,
        speed: 2000,
        scale: 1.02,
        reverse: true,
        glare: true,
        'max-glare': 0.4
      }
    );
  }

  function reportsImages() {
    document.querySelectorAll('div.slides-area').forEach(function (button, i) {
      const images = button.querySelectorAll('img');
      let currentImage = 0;
      let z = 1;
      button.addEventListener('click', () => {
        currentImage = currentImage + 1;

        if (currentImage > 3) {
          currentImage = 0;
        }

        z = z + 1;

        images.forEach(image => {
          image.style.animation = '';
        });

        $(images[currentImage]).css('z-index', z);
        $(images[currentImage]).css('animation', 'fade-in 0.5s');
      });

      //   if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
      //     const slidesArea = document.querySelectorAll('div.slides-area');
      //     $(slidesArea[i])
      //       .on('mouseover', () => {
      //         if (!$('.suscribe-pop-up').hasClass('open')) {
      //           images.forEach(image => {
      //             const x = 100 * Math.random();
      //             const y = 100 * Math.random();

      //             image.style.transform = `translate(${x}px, ${y}px)`;
      //           });
      //         }
      //       })
      //       .on('mouseout', () => {
      //         images.forEach(image => {
      //           image.style.transform = '';
      //         });
      //       });
      //   } else {}
    });
  }

  function reportForm() {
    const downloadButton = document.querySelectorAll('.suscribe-inner');
    const suscribeReport = document.querySelectorAll('.suscribe-pop-up');

    document.querySelectorAll('.download-report').forEach((button, i) => {
      button.addEventListener('click', () => {
        downloadButton[i].classList.add('open');
        suscribeReport[i].classList.add('open');
      });
    });

    document.querySelectorAll('.close-icon-container').forEach((close, i) => {
      close.addEventListener('click', () => {
        downloadButton[i].classList.remove('open');
        suscribeReport[i].classList.remove('open');
        $('div.slides-area').css('pointer-events', 'none');

        setTimeout(() => {
          $('div.slides-area').css('pointer-events', '');
        }, 1000);
      });
    });
  }

  function homeType() {
    // $(window).on('load', () => {
    new TypeIt('#will-be-typed', {
      strings: 'We’re a cannabis market research and consultancy company based in London.',
      speed: 80,
      cursor: true,
      autoStart: false
    });
    // });
  }

  function useInView() {
    inView(
        '.previous-issue-nf-container, .icw-theme-bullets ul li, .press-release, .pp-media > a, .overlay-pattern-sponsorship, .sponsorship-starter, .sponsorship-resources, .masonry-child'
      )
      .on('enter', elements => {
        elements.classList.add('animate-inview');
      })
      .on('exit', elements => {});

    inView.threshold(0.4);


  }

  function useInViewHome() {
    inView('.sections-inner>div')
      .on('enter', elements => {
        elements.classList.add('animate-inview');
      })
      .on('exit', elements => {});

    inView.threshold(0.1);
  }

  function servicesBg() {
    $(document).on('scroll', () => {
      const topPosition = window.pageYOffset + 100;
      const servicesSections = document.querySelectorAll('.services-content > div');

      if (topPosition < servicesSections[0].offsetTop) {
        document.querySelector('body').style.backgroundColor = '';
      } else if (
        servicesSections[0].offsetTop < topPosition &&
        topPosition < servicesSections[1].offsetTop
      ) {
        document.querySelector('body').style.backgroundColor = '#E3EEFF';
      } else if (
        servicesSections[1].offsetTop < topPosition &&
        topPosition < servicesSections[2].offsetTop
      ) {
        document.querySelector('body').style.backgroundColor = '#E3F6FF';
      } else if (
        servicesSections[2].offsetTop < topPosition &&
        topPosition < topPosition + servicesSections[2].innerHeight
      ) {
        document.querySelector('body').style.backgroundColor = '#F2FBFF';
      } else {
        document.querySelector('body').style.backgroundColor = '';
      }
    });
  }

  function newsletterPop() {
    document.querySelector('.newsletter-button').addEventListener('mouseover', () => {
      document.querySelector('.bg-newsletter').style.transform = 'scale(1.02)';
    });

    document.querySelector('.newsletter-button').addEventListener('mouseout', () => {
      document.querySelector('.bg-newsletter').style.transform = '';
    });
  }

  function animateSponsorshipNumbers() {
    $(window).on('load', () => {
      anime({
        targets: '.numbers-icon path, .social-sponsorship-icon path',
        strokeDashoffset: [anime.setDashoffset, 0],
        easing: 'easeInOutSine',
        duration: 2000,

        // delay: function (el, i) {
        //   return i * 250
        // },
        direction: 'alternate',
        loop: true
      });
    });
  }

  function appearClientsGrid() {
    const firstGrid = document.querySelector('ul.first-grid');
    const secondGrid = document.querySelector('ul.second-grid');

    setInterval(() => {
      setTimeout(() => {
        secondGrid.style.opacity = '1';
        secondGrid.classList.remove('not-active');
        firstGrid.style.opacity = '0';
        firstGrid.classList.add('not-active');
      }, 0);
      setTimeout(() => {
        secondGrid.style.opacity = '0';
        secondGrid.classList.add('not-active');
        firstGrid.style.opacity = '1';
        firstGrid.classList.remove('not-active');
      }, 5000);
    }, 10000);
  }

  if ($('body').hasClass('home')) {
    animateMapText();
    indexHome();
    homeType();
    useInViewHome();
    animateFirstSlide();
    window.addEventListener('load', () => {
      setInterval(sliderHome, 7000);
      readMoreHover();
    });

    cannabisMap();
    appearClientsGrid();

  }

  if ($('body').hasClass('post-template-icr-single')) {
    progressBar();
    animateICRText();
    countryReviewImage();
    appearICRElements();
  }

  if ($('body').hasClass('page-template-icr')) {
    animateICR();
  }

  if ($('body').hasClass('page-template-services')) {
    servicesBg();
    appearClientsGrid();
  }

  if ($('body').hasClass('page-template-press-sponsorship')) {
    appearClientsGrid();
    animateSponsorshipNumbers();
  }




  if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
    tiltICW();
  }

  newsletterPop();
  useInView();
  reportForm();
  reportsImages();
  footerMobileLinks();
  logoColor();
  anchors();
  headerChange();
  openHeader();

});
