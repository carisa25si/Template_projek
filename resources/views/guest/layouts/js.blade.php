 <script>
    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navLinks');
    menuToggle.addEventListener('click', () => navLinks.classList.toggle('open'));
    navLinks.querySelectorAll('a').forEach(link => link.addEventListener('click', () => navLinks.classList.remove('open')));

    document.querySelectorAll('.filter-btn').forEach(button => {
      button.addEventListener('click', () => {
        document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');
        const filter = button.dataset.filter;
        document.querySelectorAll('.product-card').forEach(card => {
          card.style.display = filter === 'all' || card.dataset.category === filter ? '' : 'none';
        });
      });
    });
    document.querySelectorAll('.category-card').forEach(card => {
      card.addEventListener('click', () => {
        const filter = card.dataset.category;
        document.querySelectorAll('.filter-btn').forEach(btn => {
          btn.classList.toggle('active', btn.dataset.filter === filter);
        });
        document.querySelectorAll('.product-card').forEach(item => {
          item.style.display = item.dataset.category === filter ? '' : 'none';
        });
      });
    });

    let cart = 0;
    const cartCount = document.getElementById('cartCount');
    const toast = document.getElementById('toast');
    let toastTimer;
    function showToast(message) {
      toast.textContent = message;
      toast.classList.add('show');
      clearTimeout(toastTimer);
      toastTimer = setTimeout(() => toast.classList.remove('show'), 2300);
    }
    document.querySelectorAll('.add-btn').forEach(button => {
      button.addEventListener('click', () => {
        cart++;
        cartCount.textContent = cart;
        showToast('Produk berhasil ditambahkan ke keranjang!');
      });
    });
    document.querySelectorAll('.heart').forEach(button => {
      button.addEventListener('click', () => {
        button.classList.toggle('active');
        const icon = button.querySelector('i');
        icon.classList.toggle('fa-regular');
        icon.classList.toggle('fa-solid');
      });
    });
    document.getElementById('newsletterForm').addEventListener('submit', event => {
      event.preventDefault();
      showToast('Terima kasih! Email kamu sudah tercatat untuk demo ini.');
      event.target.reset();
    });
    document.getElementById('year').textContent = new Date().getFullYear();

    // Countdown demo: menghitung mundur selama 3 hari dari saat halaman dibuka.
    let endTime = Date.now() + 3 * 24 * 60 * 60 * 1000;
    function updateCountdown() {
      let remaining = Math.max(0, endTime - Date.now());
      const days = Math.floor(remaining / 86400000);
      const hours = Math.floor((remaining % 86400000) / 3600000);
      const minutes = Math.floor((remaining % 3600000) / 60000);
      const seconds = Math.floor((remaining % 60000) / 1000);
      document.getElementById('days').textContent = String(days).padStart(2, '0');
      document.getElementById('hours').textContent = String(hours).padStart(2, '0');
      document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
      document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');
    }
    updateCountdown();
    setInterval(updateCountdown, 1000);
  </script>
