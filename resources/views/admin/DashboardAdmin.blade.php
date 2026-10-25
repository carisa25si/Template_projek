@extends('layouts.admin.app')

@section('title', 'Dashboard')
@section('subtitle', 'Ringkasan toko kamu')

@section('content')
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
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>

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
@endpush
