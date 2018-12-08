jQuery(function ($) {
  const header = document.querySelector('header');

  function logoColor() {
    $(document).on('ready', () => {
      if ($('body').is('.post-template-icw-single, .post-template-icr-single, .page-template-icw, .page-template-services, .page-template-contact')) {
        $('.cls-3-grey').addClass('white-logo');
        $('.cls-2-blue').addClass('white-logo');
        $('.menu-trigger-color').addClass('white-stroke')

        $(document).on('scroll', () => {
          const currentScroll = $(document).scrollTop();
          const initialScroll = $(document).scrollTop();

          if (initialScroll < 80) {
            $('.cls-3-grey').addClass('white-logo');
            $('.cls-2-blue').addClass('white-logo');
            $('.menu-trigger-color').addClass('white-stroke')
          }

        })
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
          $('.menu-trigger-color').removeClass('white-stroke')
        }

        if (initialScroll < 100) {
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
    const menuLinks = document.querySelectorAll('.second-menu-col a, .third-menu-col a');

    $(menuTrigger).on('click', () => {
      $(menu).toggleClass('hidden');
      $(menuInner).toggleClass('hidden');
      $(menu).toggleClass('translate-up');
      $('svg.logo').toggleClass('hidden');
      $('div.menu-trigger').html('<img class="menu-trigger" src="/wp-content/uploads/2018/12/close-button-white.svg">')

      if ($(menu).hasClass('hidden')) {
        $('div.menu-trigger').html("<svg class='menu-trigger' viewBox='0 0 30.2 17'><defs><style>.menu-trigger-color {fill: none;stroke: #6f9ab7;stroke-width: 3px;}</style></defs><g id='Group_1482_1_' transform='translate(-1159.4 -54.048)'><g id='Group_11_1_' transform='translate(-5 5.948)'><path id='Path_83_1_' class='menu-trigger-color' d='M1194.6,49.6h-30.2'/><path id='Path_84_1_' class='menu-trigger-color' d='M1194.6,56.6h-30.2'/><path id='Path_13230_1_' class='menu-trigger-color' d='M1194.6,63.6h-30.2'/> </g></g></svg>")
      }



      menuLinks.forEach((menuLinks, index) => {
        const delay = index * 10;
        menuLinks.style.transitionDelay = delay + 400 + 'ms';
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

    $('#latam-path, #latam-box').on('click', () => {
      $(overlayMap).css('transform', 'scaleY(1)');
      $(overlayMapContainer).addClass("z-top")
      $(overlayMap).addClass("z-top")


      if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
        $(latam).css('fill', '#fff0');
        $('html, body').animate({
            scrollTop: $(overlayMapContainer).offset().top
          },
          350
        );


      } else {
        $(latam).css('fill', '#fff');
      }


      $('#europe-map path#Path_11783, #europe-map #Path_11784,#europe-map path#Path_11785, #europe-map path#Path_11786,#europe-map path#Path_11788, #europe-map path#Path_11789,#europe-map path#Path_11787 ').css('fill', '#fff0');
      $("#oceania-path").css('fill', '#fff0');

      $('.continents-container a').addClass('active-container');
      $('.continents-container a').removeClass('is-active');
      $('.continents-container a#latam-box').addClass('is-active');

      $('.cw-image').css('pointer-events', 'none');
      $('.overlay-map-container, .overlay-map').css('pointer-events', 'all');

      $('.latam-data').css('display', 'flex');
      setTimeout(() => {
        $('.latam-data').css('opacity', '1');
      }, 300);

      $('.map-country-title').html('Latin America');
      $(overlayMap).addClass('is-open');

      $('.oceania-data, .europe-data').css({
        opacity: '',
        display: 'none'
      });



      //Hide map tags
      // $('.oceania-selector, .latam-selector, .europe-selector').css('opacity', '0');
    });

    $(' #europe-map, #europe-box').on('click', () => {
      $(overlayMap).css('transform', 'scaleY(1)');
      $(overlayMapContainer).addClass("z-top")
      $(overlayMap).addClass("z-top")


      if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
        $('#europe-map path#Path_11783, #europe-map #Path_11784,#europe-map path#Path_11785, #europe-map path#Path_11786,#europe-map path#Path_11788, #europe-map path#Path_11789,#europe-map path#Path_11787 ').css('fill', '#fff0');

        $('html, body').animate({
            scrollTop: $(overlayMapContainer).offset().top
          },
          350
        );


      } else {
        $('#europe-map path#Path_11783, #europe-map #Path_11784,#europe-map path#Path_11785, #europe-map path#Path_11786,#europe-map path#Path_11788, #europe-map path#Path_11789,#europe-map path#Path_11787 ').css('fill', '#fff');
      }




      $(oceania).css('fill', '#fff0');
      $(latam).css('fill', '#fff0');


      $('.cw-image').css('pointer-events', 'none');
      $('.overlay-map-container, .overlay-map').css('pointer-events', 'all');

      $('.europe-data').css('display', 'flex');
      setTimeout(() => {
        $('.europe-data').css('opacity', '1');
      }, 0);

      $('.map-country-title').html('Europe');
      $('.continents-container a').removeClass('is-active');
      $('.continents-container a#europe-box').addClass('is-active');
      $('.continents-container a').addClass('active-container');

      $('.latam-data, .oceania-data').css({
        opacity: '',
        display: 'none'
      });



      $(overlayMap).addClass('is-open');

      //Hide map tags
      // $('.oceania-selector, .latam-selector, .europe-selector').css('opacity', '0');
    });

    $('#oceania-path, #oceania-box').on('click', () => {
      $(overlayMap).css('transform', 'scaleY(1)');
      $(overlayMapContainer).addClass("z-top")
      $(overlayMap).addClass("z-top")



      if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
        $(oceania).css('fill', '#fff0');
        $('html, body').animate({
            scrollTop: $(overlayMapContainer).offset().top
          },
          350
        );

      } else {
        $(oceania).css('fill', '#fff');
      }

      $(latam).css('fill', '#fff0');
      $(
        '#europe-map path#Path_11783, #europe-map #Path_11784,#europe-map path#Path_11785, #europe-map path#Path_11786,#europe-map path#Path_11788, #europe-map path#Path_11789,#europe-map path#Path_11787 '
      ).css('fill', '#fff0');
      $('.cw-image').css('pointer-events', 'none');
      $('.overlay-map-container, .overlay-map').css('pointer-events', 'all');

      $('.oceania-data').css('display', 'flex');
      setTimeout(() => {
        $('.oceania-data').css('opacity', '1');
      }, 300);

      $('.map-country-title').html('Oceania');
      $('.continents-container a').removeClass('is-active');
      $('.continents-container a#oceania-box').addClass('is-active');
      $('.continents-container a').addClass('active-container');

      $('.latam-data, .europe-data').css({
        opacity: '',
        display: 'none'
      });


      $(overlayMap).addClass('is-open');

      //Hide map tags
      // $('.oceania-selector, .latam-selector, .europe-selector').css('opacity', '0');
    });

    $('.close-map').on('click', () => {
      $('.overlay-map-container, .overlay-map').css('pointer-events', '');
      $(overlayMapContainer).removeClass("z-top")
      $(overlayMap).removeClass("z-top")


      $('.cw-image').css('pointer-events', '');

      $(overlayMap).css('transform', '');

      $(oceania).css('fill', '');
      $(latam).css('fill', '');
      $(
        '#europe-map path#Path_11783, #europe-map #Path_11784,#europe-map path#Path_11785, #europe-map path#Path_11786,#europe-map path#Path_11788, #europe-map path#Path_11789,#europe-map path#Path_11787 '
      ).css('fill', '');

      $('.europe-data, .latam-data, .oceania-data').css({
        display: '',
        opacity: ''
      });

      $('.continents-container a').removeClass('active-container');
      $('.continents-container a').removeClass('is-active');

      $(overlayMap).removeClass('is-open');

      //Map tags ok
      // $('.oceania-selector, .latam-selector, .europe-selector').css('opacity', '');
    });
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
  }

  function footerMobileLinks() {
    $(window).resize(function () {
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
      if (($('.first-menu-col').css('display') == 'none') && $(window).width <= 480) {
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
      if (($('.first-menu-col').css('display') == 'none') && $(window).width <= 480) {
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
      } else if (sections[5].offsetTop - 100 < topPosition) {
        $(homeIndex).addClass('not-active');
        $(homeIndex[4]).removeClass('active');
        $(homeIndex[5]).addClass('active');
      }
    });
  }

  function animateMapText() {
    $(window).on('load', () => {
      $('.cannabis-world-container > *').addClass('translate-up');
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
        $('.article-title').addClass('appear')
      } else {
        $('.arrow-back').removeClass('translate-up');
        $('.article-title').removeClass('appear')
      }

      if (contentFinish < pageTop) {
        $('.arrow-back').removeClass('translate-up');
        $('.article-title').removeClass('appear')
      }
    });
  }

  function tiltICW() {
    VanillaTilt.init(document.querySelectorAll('a.icw-featured, .report-home img, a.icw-related, .previous-issue-nf-container'), {
      max: 12,
      speed: 2000,
      scale: 1.02,
      reverse: true,
      glare: true,
      'max-glare': 0.4
    });
  }

  function reportsImages() {

    document.querySelectorAll('div.slides-area').forEach(function (button, i) {
      const images = button.querySelectorAll('img')
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


      const slidesArea = document.querySelectorAll('div.slides-area')
      $(slidesArea[i])
        .on('mouseover', () => {
          if (!$('.suscribe-pop-up').hasClass('open')) {
            images.forEach(image => {
              const x = 100 * Math.random();
              const y = 100 * Math.random();

              image.style.transform = `translate(${x}px, ${y}px)`;
            });
          }
        })
        .on('mouseout', () => {
          images.forEach(image => {
            image.style.transform = '';
          });
        });

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
    $(window).on('load', () => {
      new TypeIt('#will-be-typed', {
        strings: 'We’re a cannabis market research and consultancy company based in London.',
        speed: 80,
        cursor: true,
        autoStart: false
      });
    });
  }


  function useInView() {
    inView('.previous-issue-nf-container, .icw-theme-bullets ul li, .press-release, .pp-media > a')
      .on('enter', elements => {
        elements.classList.add('animate-inview');
      })
      .on('exit', elements => {});

    inView.threshold(0.4);
  }


  function servicesBg() {
    $(document).on('scroll', () => {
      const topPosition = window.pageYOffset + window.innerHeight / 2;
      const servicesSections = document.querySelectorAll('.services-content > div');
    });
  }

  if ($('body').hasClass('home')) {
    animateMapText();
    indexHome();
    homeType();
  }

  if ($('body').hasClass('post-template-icr-single')) {
    progressBar();
    animateICRText();
    countryReviewImage();
    appearICRElements();
  }

  if ($('body').hasClass('page-template-services')) {
    servicesBg();
  }


  tiltICW();
  useInView();
  reportForm();
  reportsImages();
  footerMobileLinks();
  logoColor();
  anchors();
  headerChange();
  openHeader();
  cannabisMap();
});
