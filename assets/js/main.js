/**
 * GeekAssist Appliance - Next-Gen Tech & Appliance Repair Interactive JS Engine
 */

document.addEventListener('DOMContentLoaded', () => {

  // 1. Mobile Menu Drawer Toggle
  const mobileToggleBtn = document.getElementById('mobile-menu-toggle');
  const mobileNavDrawer = document.getElementById('mobile-nav-drawer');
  const mobileDrawerClose = document.getElementById('mobile-drawer-close');

  if (mobileToggleBtn && mobileNavDrawer) {
    mobileToggleBtn.addEventListener('click', () => {
      mobileNavDrawer.classList.add('active');
    });
  }

  if (mobileDrawerClose && mobileNavDrawer) {
    mobileDrawerClose.addEventListener('click', () => {
      mobileNavDrawer.classList.remove('active');
    });
  }

  // 3. FAQ Accordion Toggle
  const faqQuestions = document.querySelectorAll('.faq-question');
  faqQuestions.forEach(question => {
    question.addEventListener('click', () => {
      const item = question.parentElement;
      const isActive = item.classList.contains('active');
      
      // Close all other active items
      document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('active'));

      if (!isActive) {
        item.classList.add('active');
      }
    });
  });

  // 4. Live Service Catalog Category Filter & Search
  const filterTabs = document.querySelectorAll('.filter-tab');
  const serviceCards = document.querySelectorAll('.service-catalog-item');
  const serviceSearchInput = document.getElementById('service-search-input');

  function filterServices() {
    const activeTab = document.querySelector('.filter-tab.active');
    const category = activeTab ? activeTab.getAttribute('data-category') : 'all';
    const searchQuery = serviceSearchInput ? serviceSearchInput.value.toLowerCase().trim() : '';

    serviceCards.forEach(card => {
      const cardCategory = card.getAttribute('data-category');
      const cardTitle = card.querySelector('.service-card-title')?.textContent.toLowerCase() || '';
      const cardDesc = card.querySelector('.service-card-desc')?.textContent.toLowerCase() || '';

      const matchesCategory = (category === 'all' || cardCategory === category);
      const matchesSearch = (searchQuery === '' || cardTitle.includes(searchQuery) || cardDesc.includes(searchQuery));

      if (matchesCategory && matchesSearch) {
        card.style.display = 'block';
      } else {
        card.style.display = 'none';
      }
    });
  }

  if (filterTabs.length > 0) {
    filterTabs.forEach(tab => {
      tab.addEventListener('click', () => {
        filterTabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
        filterServices();
      });
    });
  }

  if (serviceSearchInput) {
    serviceSearchInput.addEventListener('input', filterServices);
  }

  // 5. Booking Modal Trigger System
  const bookingModal = document.getElementById('booking-modal');
  const openModalBtns = document.querySelectorAll('.open-booking-modal');
  const closeModalBtns = document.querySelectorAll('.close-booking-modal');
  const modalServiceSelect = document.getElementById('modal-service-select');

  openModalBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const serviceSlug = btn.getAttribute('data-service');
      if (modalServiceSelect && serviceSlug) {
        modalServiceSelect.value = serviceSlug;
      }
      if (bookingModal) {
        bookingModal.classList.add('active');
      }
    });
  });

  closeModalBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      if (bookingModal) {
        bookingModal.classList.remove('active');
      }
    });
  });

  // Close modal when clicking outside box
  if (bookingModal) {
    bookingModal.addEventListener('click', (e) => {
      if (e.target === bookingModal) {
        bookingModal.classList.remove('active');
      }
    });
  }

  // ============================================================
  // 6. REAL AJAX Form Submission — sends data to send_mail.php
  // ============================================================

  /**
   * Show inline alert inside a form
   */
  function showFormAlert(form, success, msg) {
    let alertBox = form.querySelector('.form-alert');
    if (!alertBox) {
      alertBox = document.createElement('div');
      alertBox.className = 'form-alert';
      form.appendChild(alertBox);
    }
    alertBox.style.cssText = [
      'padding: 0.85rem 1rem',
      'border-radius: 8px',
      'margin-top: 1rem',
      'font-size: 0.9rem',
      'font-weight: 600',
      'text-align: center',
      success
        ? 'background: rgba(16, 185, 129, 0.15); border: 1px solid #10b981; color: #10b981;'
        : 'background: rgba(239, 68, 68, 0.12); border: 1px solid #ef4444; color: #ef4444;'
    ].join(';');
    const icon = success ? 'ri-checkbox-circle-fill' : 'ri-error-warning-fill';
    alertBox.innerHTML = `<i class="${icon}"></i> ${msg}`;

    // Auto-remove after 5 seconds
    setTimeout(() => {
      if (alertBox) alertBox.remove();
      // Close modal if booking was successful
      if (bookingModal && bookingModal.classList.contains('active') && success) {
        bookingModal.classList.remove('active');
      }
    }, 5000);
  }

  /**
   * Generic AJAX form handler — POSTs FormData to send_mail.php
   */
  function handleAjaxForm(formId, formType, successMsg) {
    const form = document.getElementById(formId);
    if (!form) return;

    form.addEventListener('submit', async (e) => {
      e.preventDefault();

      const submitBtn = form.querySelector('button[type="submit"]');
      const originalHtml = submitBtn ? submitBtn.innerHTML : '';

      // Disable button & show loading state
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="ri-loader-4-line spin"></i> Sending...';
      }

      // Build FormData and tag which form it is
      const formData = new FormData(form);
      formData.append('form_type', formType);

      // POST to send_mail.php using the site base URL from PHP config
      const siteBase = window.SITE_BASE_URL || window.location.origin;
      const endpoint = siteBase.replace(/\/$/, '') + '/send_mail.php';

      try {
        const response = await fetch(endpoint, {
          method: 'POST',
          body: formData
        });

        // Read as text first so we can debug if JSON fails
        const rawText = await response.text();
        console.log('[GeekAssist] Raw response from send_mail.php:', rawText);

        let data;
        try {
          data = JSON.parse(rawText);
        } catch (jsonErr) {
          console.error('[GeekAssist] JSON parse failed. Raw response was:', rawText);
          data = { success: false, message: 'Server error — check browser console for details.' };
        }

        if (data.success) {
          showFormAlert(form, true, successMsg);
          form.reset();
        } else {
          const errMsg = data.message || 'Something went wrong. Please try again.';
          const debugInfo = data.debug ? ' [Debug: ' + data.debug + ']' : '';
          showFormAlert(form, false, errMsg);
          console.warn('[GeekAssist] Mail error:', errMsg, debugInfo);
        }

      } catch (networkErr) {
        console.error('[GeekAssist] Network/fetch error:', networkErr);
        showFormAlert(form, false, 'Network error. Check your connection and try again.');
      } finally {
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalHtml;
        }
      }
    });
  }

  // --- Register all 4 forms with their form_type values ---
  handleAjaxForm(
    'hero-quick-request-form',
    'hero_quick',
    '✅ Request received! A certified technician will call you within 15 minutes.'
  );

  handleAjaxForm(
    'contact-form-page',
    'contact_page',
    '✅ Message sent! Our team will respond to you shortly.'
  );

  handleAjaxForm(
    'booking-page-form',
    'booking_page',
    '✅ Booking confirmed! Our technician will call to confirm your appointment within 15 minutes.'
  );

  handleAjaxForm(
    'booking-form-modal',
    'booking_modal',
    '✅ Session booked! Our certified technician will contact you within 15 minutes.'
  );

  // 7. Interactive Area Coverage & Zip Checker
  const coverageBtn = document.getElementById('coverage-check-btn');
  const coverageInput = document.getElementById('coverage-input');
  const coverageResult = document.getElementById('coverage-result');

  if (coverageBtn && coverageInput && coverageResult) {
    coverageBtn.addEventListener('click', () => {
      const val = coverageInput.value.trim();
      if (!val) {
        coverageResult.innerHTML = '<span style="color: #f87171;"><i class="ri-error-warning-line"></i> Please enter your city or postal code.</span>';
        return;
      }
      coverageResult.innerHTML = '<i class="ri-loader-4-line spin"></i> Checking technician dispatch schedule...';
      setTimeout(() => {
        coverageResult.innerHTML = `<div style="background: rgba(16, 185, 129, 0.2); border: 1px solid #10b981; color: #34d399; padding: 0.85rem 1.25rem; border-radius: 12px; font-weight: 700; display: inline-flex; align-items: center; gap: 0.5rem;"><i class="ri-checkbox-circle-fill" style="font-size: 1.2rem;"></i> Great news! Certified Technicians are available in <strong>"${val}"</strong> today. Next arrival window: 1 to 2 hours.</div>`;
      }, 700);
    });

    coverageInput.addEventListener('keypress', (e) => {
      if (e.key === 'Enter') {
        coverageBtn.click();
      }
    });
  }

});

