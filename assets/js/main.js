/**
 * Nitya Naturals Theme - Main JavaScript
 * Interactive functionality for sticky header, mobile burger menu,
 * scroll reveals, animated stats counters, scroll-spy nav, and WhatsApp RFQ form handoff.
 */

document.addEventListener('DOMContentLoaded', function () {
  /* Sticky header border and shadow toggle */
  var head = document.getElementById("siteHead");
  if (head) {
    var onScroll = function () {
      head.classList.toggle("is-stuck", window.scrollY > 12);
    };
    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();
  }

  /* Header Dropdown click toggle functionality */
  var dropdowns = document.querySelectorAll('.nav-item.dropdown');
  dropdowns.forEach(function (dropdown) {
    var toggle = dropdown.querySelector('.dropdown-toggle');
    if (toggle) {
      toggle.addEventListener('click', function (e) {
        // Toggle dropdown open class
        var isOpen = dropdown.classList.contains('is-open');
        // Close other dropdowns
        dropdowns.forEach(function (other) {
          if (other !== dropdown) other.classList.remove('is-open');
        });
        if (isOpen) {
          dropdown.classList.remove('is-open');
        } else {
          dropdown.classList.add('is-open');
        }
      });
    }
  });

  // Close dropdowns when clicking outside
  document.addEventListener('click', function (e) {
    if (!e.target.closest('.nav-item.dropdown')) {
      dropdowns.forEach(function (dropdown) {
        dropdown.classList.remove('is-open');
      });
    }
  });

  /* Mobile burger menu panel toggle */
  var burger = document.getElementById("burger");
  var panel = document.getElementById("mobilePanel");
  if (burger && panel) {
    burger.addEventListener("click", function () {
      var open = panel.classList.toggle("is-open");
      burger.classList.toggle("is-open", open);
      burger.setAttribute("aria-expanded", open ? "true" : "false");
    });
    panel.addEventListener("click", function (e) {
      if (e.target.tagName === "A") {
        panel.classList.remove("is-open");
        burger.classList.remove("is-open");
        burger.setAttribute("aria-expanded", "false");
      }
    });
  }

  /* Reveal on scroll */
  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (en) {
        if (en.isIntersecting) {
          en.target.classList.add("in");
          io.unobserve(en.target);
        }
      });
    }, { threshold: 0.12, rootMargin: "0px 0px -40px 0px" });
    document.querySelectorAll("[data-reveal]").forEach(function (el) { io.observe(el); });

    /* Animated stats counters */
    var counted = new IntersectionObserver(function (entries) {
      entries.forEach(function (en) {
        if (!en.isIntersecting) return;
        var el = en.target, target = parseInt(el.dataset.count, 10), start = null, dur = 1400;
        var step = function (t) {
          if (!start) start = t;
          var p = Math.min((t - start) / dur, 1);
          var eased = 1 - Math.pow(1 - p, 3);
          el.textContent = target >= 1000 ? Math.round(eased * target) : Math.round(eased * target);
          if (p < 1) requestAnimationFrame(step);
        };
        requestAnimationFrame(step);
        counted.unobserve(el);
      });
    }, { threshold: 0.6 });
    document.querySelectorAll("[data-count]").forEach(function (el) { counted.observe(el); });

    /* Active nav link scroll-spy */
    var links = Array.prototype.slice.call(document.querySelectorAll("#navLinks a"));
    var sections = links.map(function (a) {
      var href = a.getAttribute("href");
      if (href && href.indexOf('#') !== -1) {
        var id = href.substring(href.indexOf('#'));
        return id.length > 1 ? document.querySelector(id) : null;
      }
      return null;
    }).filter(Boolean);

    if (sections.length) {
      var spy = new IntersectionObserver(function (entries) {
        entries.forEach(function (en) {
          if (!en.isIntersecting) return;
          links.forEach(function (a) {
            var href = a.getAttribute("href");
            if (href) {
              a.classList.toggle("is-active", href.indexOf('#' + en.target.id) !== -1);
            }
          });
        });
      }, { rootMargin: "-45% 0px -50% 0px" });
      sections.forEach(function (s) { if (s) spy.observe(s); });
    }
  } else {
    // Fallback if IntersectionObserver is unsupported
    document.querySelectorAll("[data-reveal]").forEach(function (el) { el.classList.add("in"); });
    document.querySelectorAll("[data-count]").forEach(function (el) { el.textContent = el.dataset.count; });
  }

  /* Development brief form -> WhatsApp handoff */
  var form = document.getElementById("rfqForm");
  var success = document.getElementById("formSuccess");
  var fallback = document.getElementById("waFallback");

  if (form) {
    var setError = function (input, on) {
      if (input && input.closest(".field")) {
        input.closest(".field").classList.toggle("has-error", on);
      }
    };

    form.addEventListener("submit", function (e) {
      e.preventDefault();
      var v = function (id) {
        var el = document.getElementById(id);
        return el ? el.value.trim() : '';
      };
      var bad = [];
      var emailOk = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(v("email"));
      bad.push([document.getElementById("pname"), !v("pname")]);
      bad.push([document.getElementById("company"), !v("company")]);
      bad.push([document.getElementById("email"), !emailOk]);
      bad.push([document.getElementById("phone"), v("phone").replace(/\D/g, "").length < 8]);
      bad.push([document.getElementById("moq"), !v("moq")]);
      bad.forEach(function (b) { setError(b[0], b[1]); });
      if (bad.some(function (b) { return b[1]; })) {
        var first = form.querySelector(".has-error input, .has-error textarea");
        if (first) first.focus();
        return;
      }
      var msg =
        "New product development brief — Nitya Naturals%0A%0A" +
        "Product name: " + encodeURIComponent(v("pname")) + "%0A" +
        "Company: " + encodeURIComponent(v("company")) + "%0A" +
        "Email: " + encodeURIComponent(v("email")) + "%0A" +
        "Phone: " + encodeURIComponent(v("phone")) + "%0A" +
        "Composition: " + encodeURIComponent(v("composition") || "—") + "%0A" +
        "Dosage form: " + encodeURIComponent(v("form")) + "%0A" +
        "MOQ / volume: " + encodeURIComponent(v("moq")) + "%0A" +
        "Functions & position: " + encodeURIComponent(v("brief") || "—");
      var url = "https://wa.me/917524098888?text=" + msg;
      if (fallback) fallback.href = url;
      window.open(url, "_blank");
      form.style.display = "none";
      if (success) {
        success.classList.add("is-on");
        success.scrollIntoView({ behavior: "smooth", block: "center" });
      }
    });

    /* Clear error as the user types */
    form.addEventListener("input", function (e) {
      var f = e.target.closest(".field");
      if (f) f.classList.remove("has-error");
    });
  }

  /* Live product catalog search filter for inner pages */
  var productSearch = document.getElementById('productSearch');
  var productTable = document.getElementById('productTable');
  var productCount = document.getElementById('productCount');

  if (productSearch && productTable) {
    var rows = productTable.querySelectorAll('tbody tr');
    var totalCount = rows.length;

    function filterProducts() {
      var query = productSearch.value.toLowerCase().trim();
      var visibleCount = 0;

      rows.forEach(function (row) {
        var text = row.textContent.toLowerCase();
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
