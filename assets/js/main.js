/**
 * Nitya Naturals Theme - Main JavaScript
 * Split Navigation Header + Parallax Hero + Mobile Accordion
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

  // ============================================
  // 2. PARALLAX HERO BACKGROUND SCROLL EFFECT
  // ============================================
  const heroBgOverlay = document.querySelector('.hero-bg-overlay');

  function handleHeroParallax() {
    if (!heroBgOverlay) return;
    const scrollY = window.scrollY || window.pageYOffset;
    if (scrollY < 800) {
      heroBgOverlay.style.transform = `scale(1.05) translateY(${scrollY * 0.25}px)`;
    }
  }

  let ticking = false;
  window.addEventListener('scroll', function () {
    if (!ticking) {
      window.requestAnimationFrame(function () {
        handleStickyHeader();
        handleHeroParallax();
        ticking = false;
      });
      ticking = true;
    }
  });

  handleStickyHeader();
  handleHeroParallax();

  window.addEventListener('resize', function () {
    if (header && header.classList.contains('is-sticky')) {
      document.body.style.paddingTop = header.offsetHeight + 'px';
    }
  });

  // ============================================
  // 3. MOBILE MENU TOGGLE & ACCORDION
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

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && mobileMenu.classList.contains('is-active')) {
        closeMobileMenu();
      }
    });

    const mobileDropdownItems = mobileMenu.querySelectorAll('li.menu-item-has-children');
    mobileDropdownItems.forEach(function (item) {
      const btn = item.querySelector('.submenu-toggle-btn');

      function toggleSubmenu(e) {
        if (e) {
          e.preventDefault();
          e.stopPropagation();
        }
        const isCurrentlyOpen = item.classList.contains('is-open');

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

    const mobileNavLinks = mobileMenu.querySelectorAll('a');
    mobileNavLinks.forEach(function (navLink) {
      navLink.addEventListener('click', function () {
        closeMobileMenu();
      });
    });

    window.addEventListener('resize', function () {
      if (window.innerWidth > 991 && mobileMenu.classList.contains('is-active')) {
        closeMobileMenu();
      }
    });
  }

  // ============================================
  // 4. BACK TO TOP BUTTON
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
