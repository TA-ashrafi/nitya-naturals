/**
 * Nitya Naturals Theme - Main JavaScript
 * Split Navigation Header + Sticky Shrink Effect
 */

document.addEventListener('DOMContentLoaded', function () {

  // ============================================
  // 1. STICKY HEADER WITH SHRINK EFFECT
  // ============================================
  const header = document.querySelector('.site-header');
  const scrollThreshold = 80;

  function handleStickyHeader() {
    if (!header) return;

    const scrollY = window.scrollY || window.pageYOffset;

    if (scrollY > scrollThreshold) {
      if (!header.classList.contains('is-sticky')) {
        header.classList.add('is-sticky');
        document.body.style.paddingTop = header.offsetHeight + 'px';
      }
    } else {
      if (header.classList.contains('is-sticky')) {
        header.classList.remove('is-sticky');
        document.body.style.paddingTop = '0px';
      }
    }
  }

  let ticking = false;
  window.addEventListener('scroll', function () {
    if (!ticking) {
      window.requestAnimationFrame(function () {
        handleStickyHeader();
        ticking = false;
      });
      ticking = true;
    }
  });

  handleStickyHeader();

  window.addEventListener('resize', function () {
    if (header && header.classList.contains('is-sticky')) {
      document.body.style.paddingTop = header.offsetHeight + 'px';
    }
  });

  // ============================================
  // 2. MOBILE MENU TOGGLE
  // ============================================
  const menuToggle = document.querySelector('.mobile-menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu-wrapper');

  if (menuToggle && mobileMenu) {
    menuToggle.addEventListener('click', function (e) {
      e.preventDefault();
      const isActive = mobileMenu.classList.toggle('is-active');
      menuToggle.setAttribute('aria-expanded', isActive);

      if (isActive) {
        menuToggle.innerHTML = '<i class="fa-solid fa-times"></i>';
      } else {
        menuToggle.innerHTML = '<i class="fa-solid fa-bars"></i>';
      }
    });

    // Mobile Submenu Accordion
    const mobileDropdownItems = mobileMenu.querySelectorAll('li.menu-item-has-children');
    mobileDropdownItems.forEach(function (item) {
      const link = item.querySelector('a');
      if (link) {
        link.addEventListener('click', function (e) {
          if (window.innerWidth <= 991 && item.querySelector('.sub-menu')) {
            e.preventDefault();
            item.classList.toggle('is-open');
          }
        });
      }
    });

    // Close on outside click
    document.addEventListener('click', function (e) {
      if (!mobileMenu.contains(e.target) && !menuToggle.contains(e.target)) {
        if (mobileMenu.classList.contains('is-active')) {
          mobileMenu.classList.remove('is-active');
          menuToggle.innerHTML = '<i class="fa-solid fa-bars"></i>';
          menuToggle.setAttribute('aria-expanded', 'false');
        }
      }
    });

    // Close on resize to desktop
    window.addEventListener('resize', function () {
      if (window.innerWidth > 991 && mobileMenu.classList.contains('is-active')) {
        mobileMenu.classList.remove('is-active');
        menuToggle.innerHTML = '<i class="fa-solid fa-bars"></i>';
        menuToggle.setAttribute('aria-expanded', 'false');
      }
    });
  }

  // ============================================
  // 3. BACK TO TOP BUTTON
  // ============================================
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

  // ============================================
  // 4. GENERIC IMAGE CAROUSEL / SLIDER
  // ============================================
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

    let autoSlide = setInterval(function () {
      currentIndex = (currentIndex + 1) % totalSlides;
      updateCarousel();
    }, 5000);

    carousel.addEventListener('mouseenter', function () {
      clearInterval(autoSlide);
    });

    carousel.addEventListener('mouseleave', function () {
      autoSlide = setInterval(function () {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateCarousel();
      }, 5000);
    });
  });

});