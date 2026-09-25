document.addEventListener('DOMContentLoaded', function () {
  // Mobile Menu Toggle
  const menuToggle = document.querySelector('.mobile-menu-toggle');
  const navMenu = document.querySelector('.main-navigation');

  if (menuToggle && navMenu) {
    menuToggle.addEventListener('click', function () {
      navMenu.classList.toggle('is-active');
      const isExpanded = navMenu.classList.contains('is-active');
      menuToggle.setAttribute('aria-expanded', isExpanded);
    });
  }

  // Mobile Submenu Accordion Toggle
  const dropdownItems = document.querySelectorAll('.main-navigation li.menu-item-has-children');
  dropdownItems.forEach(function (item) {
    const link = item.querySelector('a');
    if (window.innerWidth <= 991 && link) {
      link.addEventListener('click', function (e) {
        if (item.querySelector('.sub-menu')) {
          e.preventDefault();
          item.classList.toggle('is-open');
        }
      });
    }
  });

  // Sticky Header on Scroll
  const header = document.querySelector('.site-header');
  window.addEventListener('scroll', function () {
    if (window.scrollY > 100) {
      header.classList.add('is-sticky');
    } else {
      header.classList.remove('is-sticky');
    }
  });

  // Scroll to Top Button
  const backToTop = document.querySelector('.back-to-top');
  if (backToTop) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 300) {
        backToTop.classList.add('is-visible');
      } else {
        backToTop.classList.remove('is-visible');
      }
    });

    backToTop.addEventListener('click', function (e) {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

  // Generic Image Carousel Slider
  const carousels = document.querySelectorAll('.carousel-container');
  carousels.forEach(function (carousel) {
    const slides = carousel.querySelector('.carousel-slides');
    const slideItems = carousel.querySelectorAll('.carousel-slide');
    const prevBtn = carousel.querySelector('.carousel-prev');
    const nextBtn = carousel.querySelector('.carousel-next');

    if (!slides || slideItems.length === 0) return;

    let currentIndex = 0;
    const totalSlides = slideItems.length;

    function updateCarousel() {
      slides.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', function () {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateCarousel();
      });
    }

    if (prevBtn) {
      prevBtn.addEventListener('click', function () {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        updateCarousel();
      });
    }

    // Auto play every 5 seconds
    setInterval(function () {
      currentIndex = (currentIndex + 1) % totalSlides;
      updateCarousel();
    }, 5000);
  });
});
