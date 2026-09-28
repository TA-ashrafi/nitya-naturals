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
  // 2. MOBILE MENU TOGGLE & ACCORDION
  // ============================================
  const menuToggle = document.querySelector('.mobile-menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu-wrapper');
  const mobileOverlay = document.getElementById('mobile-menu-overlay');
  const mobileCloseBtn = document.getElementById('mobile-menu-close');

  function openMobileMenu() {
    if (!mobileMenu) return;
    mobileMenu.classList.add('is-active');
    if (mobileOverlay) mobileOverlay.classList.add('is-active');
    if (menuToggle) menuToggle.setAttribute('aria-expanded', 'true');
    document.body.classList.add('mobile-menu-open');
  }

  function closeMobileMenu() {
    if (!mobileMenu) return;
    mobileMenu.classList.remove('is-active');
    if (mobileOverlay) mobileOverlay.classList.remove('is-active');
    if (menuToggle) menuToggle.setAttribute('aria-expanded', 'false');
    document.body.classList.remove('mobile-menu-open');
  }

  if (menuToggle && mobileMenu) {
    menuToggle.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      if (mobileMenu.classList.contains('is-active')) {
        closeMobileMenu();
      } else {
        openMobileMenu();
      }
    });

    if (mobileCloseBtn) {
      mobileCloseBtn.addEventListener('click', function (e) {
        e.preventDefault();
        closeMobileMenu();
      });
    }

    if (mobileOverlay) {
      mobileOverlay.addEventListener('click', closeMobileMenu);
    }

    // Keyboard navigation: Close menu on Escape key
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && mobileMenu.classList.contains('is-active')) {
        closeMobileMenu();
      }
    });

    // Mobile Submenu Accordion Handler
    const mobileDropdownItems = mobileMenu.querySelectorAll('li.menu-item-has-children');
    mobileDropdownItems.forEach(function (item) {
      const parentWrapper = item.querySelector('.mobile-parent-wrapper');
      const btn = item.querySelector('.submenu-toggle-btn');

      function toggleSubmenu(e) {
        if (e) {
          e.preventDefault();
          e.stopPropagation();
        }
        const isCurrentlyOpen = item.classList.contains('is-open');

        // Close sibling open dropdowns
        mobileDropdownItems.forEach(function(otherItem) {
          if (otherItem !== item) {
            otherItem.classList.remove('is-open');
          }
        });

        if (!isCurrentlyOpen) {
          item.classList.add('is-open');
        } else {
          item.classList.remove('is-open');
        }
      }

      if (btn) {
        btn.addEventListener('click', toggleSubmenu);
      }
    });

    // Close menu when clicking any navigation link inside mobile menu
    const mobileNavLinks = mobileMenu.querySelectorAll('a');
    mobileNavLinks.forEach(function (navLink) {
      navLink.addEventListener('click', function () {
        closeMobileMenu();
      });
    });

    // Close on resize to desktop
    window.addEventListener('resize', function () {
      if (window.innerWidth > 991 && mobileMenu.classList.contains('is-active')) {
        closeMobileMenu();
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

  // ============================================
  // 5. LIVE PRODUCT SEARCH FILTER
  // ============================================
  const productSearch = document.getElementById('productSearch');
  const productTable = document.getElementById('productTable');
  const productCount = document.getElementById('productCount');

  if (productSearch && productTable) {
    const rows = productTable.querySelectorAll('tbody tr');
    const totalCount = rows.length;

    function filterProducts() {
      const query = productSearch.value.toLowerCase().trim();
      let visibleCount = 0;

      rows.forEach(function (row) {
        const text = row.textContent.toLowerCase();
        if (!query || text.indexOf(query) !== -1) {
          row.style.display = '';
          visibleCount++;
        } else {
          row.style.display = 'none';
        }
      });

      if (productCount) {
        if (query === '') {
          productCount.textContent = 'Showing all ' + totalCount + ' products';
        } else {
          productCount.textContent = 'Showing ' + visibleCount + ' of ' + totalCount + ' products';
        }
      }
    }

    productSearch.addEventListener('input', filterProducts);
    filterProducts();
  }

});