<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dasher Free - E-commerce Dashboard</title>

  <!-- CSS: gunakan CDN agar tampilan bisa langsung diuji tanpa proses @@include -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

  <style>
    :root {
      --sidebar-width: 250px;
      --page-bg: #f5f7fb;
      --ink: #202938;
      --muted: #778196;
      --line: #e9edf4;
      --primary: #6558f5;
    }
    * { box-sizing: border-box; }
    body {
      margin: 0;
      background: var(--page-bg);
      color: var(--ink);
      font-family: Inter, system-ui, -apple-system, "Segoe UI", sans-serif;
    }
    .sidebar {
      position: fixed; inset: 0 auto 0 0; z-index: 1030;
      width: var(--sidebar-width); padding: 25px 18px;
      background: #fff; border-right: 1px solid var(--line);
      display: flex; flex-direction: column; transition: transform .25s ease;
    }
    .brand { font-size: 1.35rem; font-weight: 800; letter-spacing: -.5px; padding: 0 12px 28px; }
    .brand span { color: var(--primary); }
    .nav-caption { color: #a1a9b8; font-size: .72rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; padding: 12px; }
    .side-link {
      display: flex; align-items: center; gap: 13px; padding: 11px 13px; margin: 3px 0;
      color: #707b8f; text-decoration: none; border-radius: 11px; font-weight: 600; font-size: .93rem;
    }
    .side-link i { font-size: 1.1rem; }
    .side-link:hover, .side-link.active { color: var(--primary); background: #f0efff; }
    .sidebar-bottom { margin-top: auto; padding: 14px 12px 0; color: var(--muted); font-size: .83rem; }
    .main { margin-left: var(--sidebar-width); min-height: 100vh; }
    .topbar {
      min-height: 76px; background: #fff; border-bottom: 1px solid var(--line);
      display: flex; align-items: center; justify-content: space-between; padding: 15px 30px; gap: 16px;
    }
    .search-box { max-width: 350px; width: 100%; position: relative; }
    .search-box i { position: absolute; left: 13px; top: 10px; color: #9aa3b3; }
    .search-box input { width: 100%; border: 1px solid var(--line); border-radius: 10px; padding: 9px 12px 9px 38px; background: #fafbfe; outline: none; }
    .avatar { width: 38px; height: 38px; border-radius: 50%; background: #060506; color: var(--primary); display: grid; place-items: center; font-weight: 800; }
    .content { padding: 28px 30px 38px; max-width: 1700px; margin: auto; }
    .welcome {
      border-radius: 18px; padding: 30px; color: #fff; min-height: 210px;
      background: linear-gradient(120deg, #840d0dee, #5c0a16cc 62%, #2b0b10);
      display: flex; justify-content: space-between; align-items: center; gap: 24px; overflow: hidden;
    }
    .welcome p { color: rgba(255,255,255,.82); max-width: 560px; margin: 10px 0 20px; }
    .welcome .btn { border-radius: 9px; padding: 10px 17px; font-weight: 700; }
    .welcome-art { font-size: 6rem; opacity: .8; padding: 0 25px; }
    .panel, .stat-card { background: #fff; border: 1px solid var(--line); border-radius: 16px; box-shadow: 0 4px 18px rgba(31,45,61,.025); }
    .panel { height: 100%; overflow: hidden; }
    .panel-body { padding: 23px; }
    .stat-card { padding: 22px; height: 100%; }
    .stat-top { display: flex; align-items: center; gap: 12px; color: var(--muted); font-weight: 600; }
    .stat-icon { width: 44px; height: 44px; border-radius: 13px; display: grid; place-items: center; font-size: 1.2rem; }
    .stat-bottom { display: flex; justify-content: space-between; align-items: end; gap: 10px; margin-top: 21px; }
    .stat-number { font-size: clamp(1.45rem, 2vw, 2rem); font-weight: 800; letter-spacing: -.7px; }
    .change { font-size: .8rem; font-weight: 700; white-space: nowrap; }
    .positive { color: #17a673; } .negative { color: #e05260; }
    .section-title { font-size: 1.03rem; font-weight: 800; margin: 0; }
    .section-subtitle { color: var(--muted); font-size: .84rem; margin-top: 5px; }
    .chart-tabs { display: flex; gap: 8px; }
    .chart-tab { border: 1px solid var(--line); background: #fff; border-radius: 9px; padding: 7px 12px; color: var(--muted); font-size: .82rem; }
    .chart-tab.active { background: #f0efff; color: var(--primary); border-color: #dedaff; font-weight: 700; }
    .table { --bs-table-bg: transparent; vertical-align: middle; margin: 0; }
    .table thead th { color: #8b94a5; font-size: .75rem; font-weight: 700; text-transform: uppercase; letter-spacing: .4px; border-bottom: 1px solid var(--line); padding: 14px 20px; }
    .table tbody td { padding: 15px 20px; border-color: #f0f2f7; font-size: .88rem; }
    .table tbody tr:last-child td { border-bottom: 0; }
    .product-thumb { width: 40px; height: 40px; border-radius: 10px; background: #f0efff; color: var(--primary); display: inline-grid; place-items: center; margin-right: 10px; }
    .badge-soft { border-radius: 7px; padding: 6px 9px; font-weight: 700; font-size: .73rem; }
    .bg-soft-green { background: #e7f8f0; color: #12875e; }
    .bg-soft-yellow { background: #fff5d9; color: #a77700; }
    .bg-soft-red { background: #ffe9eb; color: #c63e4b; }
    .bg-soft-blue { background: #e8f3ff; color: #2874bd; }
    .idea-item { padding: 18px; background: #f8f9fd; border-radius: 12px; }
    .idea-item p { color: var(--muted); font-size: .86rem; line-height: 1.6; }
    .idea-controls button { border: 1px solid var(--line); background: #fff; border-radius: 8px; width: 31px; height: 31px; }
    .mobile-menu { display: none; }
    @media (max-width: 991.98px) {
      .sidebar { transform: translateX(-100%); box-shadow: 10px 0 30px rgba(20,30,50,.08); }
      .sidebar.open { transform: translateX(0); }
      .main { margin-left: 0; }
      .mobile-menu { display: inline-flex; }
      .topbar { padding: 14px 18px; }
      .content { padding: 20px 18px 30px; }
      .welcome-art { font-size: 4rem; padding: 0; }
    }
    @media (max-width: 575.98px) {
      .welcome { padding: 23px; min-height: auto; }
      .welcome-art { display: none; }
      .topbar .search-box { display: none; }
      .panel-body { padding: 18px; }
      .stat-card { padding: 18px; }
      .chart-tabs { flex-wrap: wrap; }
    }
  </style>
</head>
<body>
  <aside class="sidebar" id="sidebar">
    <div class="brand"><div class="brand">
    <img src="{{ asset('adminassets/images/brand/logo/joymaker.png') }}" 
         width="24" 
         height="24" 
         class="me-2">
    Joymaker<span>.</span>
</div>
    <div class="nav-caption">Menu utama</div>
    <a class="side-link active" href="{{ route('dashboard') }}"><i class="bi bi-house-door"></i>Dashboard</a>
    <a class="side-link" href="#orders"><i class="bi bi-bag"></i>Orders</a>
    <a class="side-link" href="{{ route('produk.index') }}"><i class="bi bi-box-seam"></i>Produk</a>
    <a class="side-link" href="#revenue"><i class="bi bi-graph-up-arrow"></i>Analytics</a>
    <a class="side-link" href="{{ route('pelanggan.index') }}"><i class="bi bi-people"></i>Pelanggan</a>
    <a class="side-link" href="{{ route('diskon.index') }}"><i class="bi bi-percent"></i>Diskon</a>
    <div class="nav-caption mt-3">Pengaturan</div>
    <a class="side-link" href="#"><i class="bi bi-gear"></i>Settings</a>
    <a class="side-link" href="#"><i class="bi bi-question-circle"></i>Help center</a>
    <div class="sidebar-bottom"><i class="bi bi-shield-check me-1"></i> E-commerce Admin<br><span class="ms-4">Dashboard v1.0</span></div>
  </aside>

  <main class="main">
    <header class="topbar">
      <div class="d-flex align-items-center gap-3">
        <button class="btn btn-light border mobile-menu" id="menuToggle" aria-label="Buka menu"><i class="bi bi-list fs-5"></i></button>
        <div><div class="fw-bold">Dashboard</div><small class="text-secondary">Ringkasan toko kamu</small></div>
      </div>
      <div class="search-box"><i class="bi bi-search"></i><input type="search" placeholder="Cari sesuatu..."></div>
      <div class="d-flex align-items-center gap-3">
        <button class="btn btn-light position-relative" aria-label="Notifikasi"><i class="bi bi-bell"></i><span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle"></span></button>
        <div class="avatar">A</div>
        <div class="d-none d-sm-block"><div class="fw-semibold small">Ana Putri</div><div class="text-secondary" style="font-size:.75rem">Administrator</div></div>
      </div>
    </header>

    <div class="content">
      <section class="welcome mb-4">
        <div>
          <h1 class="h2 fw-bold mb-0">👋 Hello Admin</h1>
          <p>Selamat datang di Dashboard! Pantau penjualan, lacak perkembangan toko, dan temukan insight penting dari joymaker.</p>
          <a href="#revenue" class="btn btn-light text-primary"><i class="bi bi-stars me-2"></i>Start</a>
        </div>
        <div class="welcome-art"><i class="bi bi-bar-chart-line"></i></div>
      </section>

      <div class="row g-4 mb-4">
        <div class="col-12 col-md-6 col-xl-4"><div class="stat-card">
          <div class="stat-top"><span class="stat-icon" style="background:#fff2d9;color:#e5a000"><i class="bi bi-bag-check"></i></span>Orders</div>
          <div class="stat-bottom"><div><div class="stat-number">5,312</div><small class="text-secondary">Dibanding bulan lalu</small></div><div class="change positive"><i class="bi bi-arrow-up-right"></i> 2.29%</div></div>
        </div></div>
        <div class="col-12 col-md-6 col-xl-4"><div class="stat-card">
          <div class="stat-top"><span class="stat-icon" style="background:#def8eb;color:#159b68"><i class="bi bi-currency-dollar"></i></span>Revenue</div>
          <div class="stat-bottom"><div><div class="stat-number">$120,000</div><small class="text-secondary">Total pendapatan</small></div><div class="change positive"><i class="bi bi-arrow-up-right"></i> 2.19%</div></div>
        </div></div>
        <div class="col-12 col-md-6 col-xl-4"><div class="stat-card">
          <div class="stat-top"><span class="stat-icon" style="background:#e8f3ff;color:#2874bd"><i class="bi bi-people"></i></span>Conversion Rate</div>
          <div class="stat-bottom"><div><div class="stat-number">3.5%</div><small class="text-secondary">Dari total pengunjung</small></div><div class="change negative"><i class="bi bi-arrow-down-right"></i> 0.19%</div></div>
        </div></div>
      </div>

      <div class="row g-4 mb-4">
        <div class="col-12 col-xl-8">
          <section class="panel" id="revenue"><div class="panel-body">
            <div class="d-flex flex-wrap justify-content-between align-items-start gap-3 mb-3">
              <div><h2 class="section-title">Revenue overview</h2><div class="section-subtitle">Perbandingan pemasukan dan pengeluaran</div></div>
              <div class="chart-tabs"><button class="chart-tab active" data-chart="income">Total Income</button><button class="chart-tab" data-chart="expenses">Total Expenses</button></div>
            </div>
            <div id="revenueChart" aria-label="Grafik pendapatan"></div>
          </div></section>
        </div>
        <div class="col-12 col-xl-4">
          <section class="panel"><div class="panel-body">
            <h2 class="section-title">Product Sales</h2><div class="section-subtitle mb-2">Penjualan berdasarkan kategori</div>
            <div id="salesChart"></div>
            <div class="d-flex justify-content-between py-2 border-bottom"><span><i class="bi bi-circle-fill me-2" style="font-size:.55rem;color:#6558f5"></i>Smartphones</span><strong>$22,120</strong></div>
            <div class="d-flex justify-content-between py-2 border-bottom"><span><i class="bi bi-circle-fill me-2" style="font-size:.55rem;color:#ffb547"></i>Laptops</span><strong>$4,510</strong></div>
            <div class="d-flex justify-content-between py-2 border-bottom"><span><i class="bi bi-circle-fill me-2" style="font-size:.55rem;color:#36b8cf"></i>Headphones</span><strong>$800</strong></div>
            <div class="d-flex justify-content-between py-2"><span><i class="bi bi-circle-fill me-2" style="font-size:.55rem;color:#ef6472"></i>Cameras</span><strong>$420</strong></div>
          </div></section>
        </div>
      </div>

      <div class="row g-4 mb-4">
        <div class="col-12 col-xl-8">
          <section class="panel" id="orders">
            <div class="panel-body d-flex justify-content-between align-items-center"><div><h2 class="section-title">Recent Orders</h2><div class="section-subtitle">Pesanan terbaru dari pelanggan</div></div><button class="btn btn-outline-secondary btn-sm">Lihat semua</button></div>
            <div class="table-responsive"><table class="table">
              <thead><tr><th>Order ID</th><th>Amount</th><th>Shipping</th><th>Delivery Date</th><th>Status</th></tr></thead>
              <tbody>
                <tr><td class="fw-semibold">#DU005</td><td>$150</td><td>Standard</td><td>20 Jan 2025</td><td><span class="badge-soft bg-soft-blue">Shipped</span></td></tr>
                <tr><td class="fw-semibold">#DU004</td><td>$200</td><td>Express</td><td>22 Jan 2025</td><td><span class="badge-soft bg-soft-yellow">Pending</span></td></tr>
                <tr><td class="fw-semibold">#DU003</td><td>$300</td><td>Overnight</td><td>18 Jan 2025</td><td><span class="badge-soft bg-soft-red">Cancelled</span></td></tr>
                <tr><td class="fw-semibold">#DU002</td><td>$560</td><td>Overnight</td><td>13 Jan 2025</td><td><span class="badge-soft bg-soft-green">Completed</span></td></tr>
                <tr><td class="fw-semibold">#DU001</td><td>$125</td><td>Standard</td><td>11 Jan 2025</td><td><span class="badge-soft bg-soft-green">Completed</span></td></tr>
              </tbody>
            </table></div>
          </section>
        </div>
        <div class="col-12 col-xl-4">
          <section class="panel"><div class="panel-body">
            <h2 class="section-title">Revenue by Location</h2><div class="section-subtitle mb-4">Kontribusi pendapatan per negara</div>
            <div class="mb-3"><div class="d-flex justify-content-between mb-2"><span>United States</span><strong>$22,120</strong></div><div class="progress" style="height:7px"><div class="progress-bar" style="width:85%;background:#6558f5"></div></div></div>
            <div class="mb-3"><div class="d-flex justify-content-between mb-2"><span>India</span><strong>$12,756</strong></div><div class="progress" style="height:7px"><div class="progress-bar bg-success" style="width:65%"></div></div></div>
            <div class="mb-3"><div class="d-flex justify-content-between mb-2"><span>United Kingdom</span><strong>$8,864</strong></div><div class="progress" style="height:7px"><div class="progress-bar bg-info" style="width:45%"></div></div></div>
            <div><div class="d-flex justify-content-between mb-2"><span>Sweden</span><strong>$6,124</strong></div><div class="progress" style="height:7px"><div class="progress-bar bg-warning" style="width:30%"></div></div></div>
          </div></section>
        </div>
      </div>

      <div class="row g-4">
        <div class="col-12 col-xl-4" id="customers">
          <section class="panel"><div class="panel-body"><h2 class="section-title">Sales by gender</h2><div class="section-subtitle">Komposisi pelanggan</div><div id="genderChart"></div></div></section>
        </div>
        <div class="col-12 col-xl-8" id="products">
          <section class="panel">
            <div class="panel-body"><h2 class="section-title">Top Selling Products</h2><div class="section-subtitle">Produk dengan penjualan tertinggi</div></div>
            <div class="table-responsive"><table class="table">
              <thead><tr><th>Product</th><th>Sales</th><th>Revenue</th><th>Rating</th><th>Status</th></tr></thead>
              <tbody>
                <tr><td><span class="product-thumb"><i class="bi bi-eyeglasses"></i></span><span class="fw-semibold">Transparent Sunglasses</span></td><td>454</td><td>$50,000</td><td><span class="text-warning">★★★★★</span> 5.0</td><td><span class="badge-soft bg-soft-green">In Stock</span></td></tr>
                <tr><td><span class="product-thumb"><i class="bi bi-eyeglasses"></i></span><span class="fw-semibold">Frames Still Life Glasses</span></td><td>454</td><td>$50,000</td><td><span class="text-warning">★★★★★</span> 5.0</td><td><span class="badge-soft bg-soft-green">In Stock</span></td></tr>
                <tr><td><span class="product-thumb"><i class="bi bi-sunglasses"></i></span><span class="fw-semibold">Slightly Rounded Frame</span></td><td>124</td><td>$30,000</td><td><span class="text-warning">★★★★☆</span> 4.0</td><td><span class="badge-soft bg-soft-yellow">Low Stock</span></td></tr>
                <tr><td><span class="product-thumb"><i class="bi bi-sunglasses"></i></span><span class="fw-semibold">Colored Sunglasses</span></td><td>124</td><td>$30,000</td><td><span class="text-warning">★★★★☆</span> 4.0</td><td><span class="badge-soft bg-soft-yellow">Low Stock</span></td></tr>
                <tr><td><span class="product-thumb"><i class="bi bi-eyeglasses"></i></span><span class="fw-semibold">Rounded Frames Glasses</span></td><td>80</td><td>$18,500</td><td><span class="text-warning">★★★★★</span> 4.8</td><td><span class="badge-soft bg-soft-red">Out of Stock</span></td></tr>
              </tbody>
            </table></div>
          </section>
        </div>
      </div>
      <footer class="text-center text-secondary small mt-4">© 2026 Dasher Dashboard · Built for your store</footer>
    </div>
  </main>

  <script>
    const sidebar = document.getElementById('sidebar');
    document.getElementById('menuToggle').addEventListener('click', () => sidebar.classList.toggle('open'));
    document.querySelectorAll('.side-link').forEach(link => link.addEventListener('click', () => {
      document.querySelectorAll('.side-link').forEach(item => item.classList.remove('active'));
      link.classList.add('active');
      if (window.innerWidth < 992) sidebar.classList.remove('open');
    }));

    const revenueOptions = {
      chart: { type: 'area', height: 285, toolbar: { show: false }, fontFamily: 'inherit', animations: { enabled: true } },
      series: [{ name: 'Income', data: [18000, 25000, 21000, 32000, 28000, 39000, 35000, 47000, 42000, 52000, 48000, 60000] }],
      colors: ['#6558f5'], stroke: { curve: 'smooth', width: 3 },
      fill: { type: 'gradient', gradient: { opacityFrom: .25, opacityTo: .02 } },
      dataLabels: { enabled: false }, grid: { borderColor: '#edf0f6', strokeDashArray: 4 },
      xaxis: { categories: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'], axisBorder: { show: false }, axisTicks: { show: false } },
      yaxis: { labels: { formatter: val => '$' + (val / 1000).toFixed(0) + 'k' } },
      tooltip: { y: { formatter: val => '$' + val.toLocaleString() } }, legend: { show: false }
    };
    const revenueChart = new ApexCharts(document.querySelector('#revenueChart'), revenueOptions);
    revenueChart.render();

    document.querySelectorAll('.chart-tab').forEach(button => button.addEventListener('click', () => {
      document.querySelectorAll('.chart-tab').forEach(b => b.classList.remove('active'));
      button.classList.add('active');
      const isIncome = button.dataset.chart === 'income';
      revenueChart.updateOptions({ colors: [isIncome ? '#6558f5' : '#ffb547'] });
      revenueChart.updateSeries([{ name: isIncome ? 'Income' : 'Expenses', data: isIncome
        ? [18000,25000,21000,32000,28000,39000,35000,47000,42000,52000,48000,60000]
        : [12000,16000,19000,21000,25000,22000,27000,30000,29000,34000,32000,39000] }]);
    }));

    new ApexCharts(document.querySelector('#salesChart'), {
      chart: { type: 'donut', height: 230, fontFamily: 'inherit' },
      series: [22120, 4510, 800, 420],
      labels: ['Smartphones', 'Laptops', 'Headphones', 'Cameras'],
      colors: ['#6558f5', '#ffb547', '#36b8cf', '#ef6472'],
      dataLabels: { enabled: false }, legend: { show: false },
      stroke: { width: 3, colors: ['#fff'] },
      plotOptions: { pie: { donut: { size: '72%', labels: { show: true, total: { show: true, label: 'Total Sales', formatter: () => '$27,850' } } } } }
    }).render();

    new ApexCharts(document.querySelector('#genderChart'), {
      chart: { type: 'donut', height: 260, fontFamily: 'inherit' },
      series: [52, 35, 13], labels: ['Men', 'Women', 'Kids'],
      colors: ['#6558f5', '#ffb547', '#ef6472'],
      dataLabels: { enabled: false }, legend: { position: 'bottom' },
      stroke: { width: 3, colors: ['#fff'] }
    }).render();
  </script>
</body>
</html>
