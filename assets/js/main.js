/**
 * Nitya Naturals Theme - Main JavaScript
 * Modern Header Sticky Shrink + Mobile Accordion Navigation
 */

document.addEventListener('DOMContentLoaded', function () {

  // ============================================
  // 1. STICKY HEADER SHRINK EFFECT
  // ============================================
  const header = document.querySelector('.site-header');
  const scrollThreshold = 60;

  function handleStickyHeader() {
    if (!header) return;

    const scrollY = window.scrollY || window.pageYOffset;

    if (scrollY > scrollThreshold) {
      if (!header.classList.contains('is-sticky')) {
        header.classList.add('is-sticky');
      }
    } else {
      if (header.classList.contains('is-sticky')) {
        header.classList.remove('is-sticky');
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
  // 4. LIVE PRODUCT SEARCH FILTER
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

  // ============================================
  // 5. NEW PRODUCT DEVELOPMENT BRIEF FORM (WHATSAPP HANDOFF)
  // ============================================
  const rfqForm = document.getElementById('rfqForm');
  const formSuccess = document.getElementById('formSuccess');
  const waFallback = document.getElementById('waFallback');

  if (rfqForm) {
    function getValue(id) {
      const el = document.getElementById(id);
      return el ? el.value.trim() : '';
    }

    function setFieldError(id, isError) {
      const el = document.getElementById(id);
      if (!el) return;
      const parent = el.closest('.field-item');
      if (parent) {
        if (isError) {
          parent.classList.add('has-error');
        } else {
          parent.classList.remove('has-error');
        }
      }
    }

    rfqForm.addEventListener('submit', function (e) {
      e.preventDefault();

      const pname = getValue('pname');
      const company = getValue('company');
      const email = getValue('email');
      const phone = getValue('phone');
      const composition = getValue('composition');
      const dosageForm = getValue('form');
      const moq = getValue('moq');
      const brief = getValue('brief');

      const emailValid = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(email);
      const phoneValid = phone.replace(/\D/g, '').length >= 8;

      let hasError = false;

      if (!pname) { setFieldError('pname', true); hasError = true; } else { setFieldError('pname', false); }
      if (!company) { setFieldError('company', true); hasError = true; } else { setFieldError('company', false); }
      if (!emailValid) { setFieldError('email', true); hasError = true; } else { setFieldError('email', false); }
      if (!phoneValid) { setFieldError('phone', true); hasError = true; } else { setFieldError('phone', false); }
      if (!moq) { setFieldError('moq', true); hasError = true; } else { setFieldError('moq', false); }

      if (hasError) {
        const firstErr = rfqForm.querySelector('.has-error input, .has-error textarea');
        if (firstErr) firstErr.focus();
        return;
      }

      const rawMsg =
        'New product development brief — Nitya Naturals\n\n' +
        'Product name: ' + pname + '\n' +
        'Company: ' + company + '\n' +
        'Email: ' + email + '\n' +
        'Phone: ' + phone + '\n' +
        'Composition: ' + (composition || '—') + '\n' +
        'Dosage form: ' + dosageForm + '\n' +
        'MOQ / volume: ' + moq + '\n' +
        'Functions & position: ' + (brief || '—');

      const waUrl = 'https://wa.me/917524098888?text=' + encodeURIComponent(rawMsg);

      if (waFallback) {
        waFallback.href = waUrl;
      }

      window.open(waUrl, '_blank');

      rfqForm.style.display = 'none';
      if (formSuccess) {
        formSuccess.classList.add('is-on');
        formSuccess.scrollIntoView({ behavior: 'smooth', block: 'center' });
      }
    });

    rfqForm.addEventListener('input', function (e) {
      if (e.target && e.target.id) {
        setFieldError(e.target.id, false);
      }
    });
  }

});
