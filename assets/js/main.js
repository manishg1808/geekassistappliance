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

  // 2. Hero Quick Support Request Form Handler
  const heroQuickForm = document.getElementById('hero-quick-request-form');
  if (heroQuickForm) {
    heroQuickForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const submitBtn = heroQuickForm.querySelector('button[type="submit"]');
      const originalText = submitBtn.innerHTML;
      
      submitBtn.disabled = true;
      submitBtn.innerHTML = '<i class="ri-loader-4-line ri-spin"></i> Connecting...';

      setTimeout(() => {
        alert('Thank you! Your remote support request has been received. A certified technician will call you in under 15 minutes.');
        heroQuickForm.reset();
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
      }, 1000);
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

  // 6. Generic Form Submission Toast Simulation
  const handleFormSubmit = (formId, successMsg) => {
    const form = document.getElementById(formId);
    if (!form) return;

    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const submitBtn = form.querySelector('button[type="submit"]');
      const originalText = submitBtn ? submitBtn.innerHTML : 'Submit';

      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="ri-loader-4-line spin"></i> Processing...';
      }

      setTimeout(() => {
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalText;
        }

        // Show inline notification
        let alertBox = form.querySelector('.form-alert');
        if (!alertBox) {
          alertBox = document.createElement('div');
          alertBox.className = 'form-alert';
          alertBox.style.cssText = 'background: rgba(16, 185, 129, 0.15); border: 1px solid #10b981; color: #10b981; padding: 0.85rem; border-radius: 8px; margin-top: 1rem; font-size: 0.9rem; font-weight: 600; text-align: center;';
          form.appendChild(alertBox);
        }
        alertBox.innerHTML = '<i class="ri-checkbox-circle-fill"></i> ' + successMsg;
        form.reset();

        setTimeout(() => {
          if (alertBox) alertBox.remove();
          if (bookingModal && bookingModal.classList.contains('active')) {
            bookingModal.classList.remove('active');
          }
        }, 4000);
      }, 1200);
    });
  };

  handleFormSubmit('booking-form-modal', 'Your service appointment has been requested! Our technician will call you within 15 minutes.');
  handleFormSubmit('contact-form-page', 'Message sent successfully! Our team will respond shortly.');
  handleFormSubmit('booking-page-form', 'Booking submitted successfully! Check your email for appointment confirmation.');
  handleFormSubmit('newsletter-footer-form', 'Thank you for subscribing to maintenance alerts!');

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

