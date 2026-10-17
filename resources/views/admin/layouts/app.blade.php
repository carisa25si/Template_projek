<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Admin') - Joymaker</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

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
    /* ===== tambahan untuk halaman CRUD ===== */
    .form-label { font-weight: 600; font-size: .88rem; }
    .form-control, .form-select { border-radius: 10px; border-color: var(--line); padding: .55rem .8rem; }
    .form-control:focus, .form-select:focus { border-color: var(--primary); box-shadow: 0 0 0 .2rem rgba(101,88,245,.15); }
    .btn-primary { background: var(--primary); border-color: var(--primary); }
    .btn-primary:hover { background: #5448d8; border-color: #5448d8; }
    .btn { border-radius: 9px; }
  </style>
</head>
<body>
  <aside class="sidebar" id="sidebar">
    <div class="brand">
      <img src="{{ asset('adminassets/images/brand/logo/joymaker.png') }}" width="24" height="24" class="me-2" alt="Joymaker">
      Joymaker<span>.</span>
    </div>
    <div class="nav-caption">Menu utama</div>
    <a class="side-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}"><i class="bi bi-house-door"></i>Dashboard</a>
    <a class="side-link {{ request()->routeIs('pelanggan.*') ? 'active' : '' }}" href="{{ route('pelanggan.index') }}"><i class="bi bi-people"></i>Pelanggan</a>
    <a class="side-link {{ request()->routeIs('produk.*') ? 'active' : '' }}" href="{{ route('produk.index') }}"><i class="bi bi-box-seam"></i>Produk</a>
    <a class="side-link {{ request()->routeIs('diskon.*') ? 'active' : '' }}" href="{{ route('diskon.index') }}"><i class="bi bi-percent"></i>Diskon</a>
    <div class="nav-caption mt-3">Pengaturan</div>
    <a class="side-link" href="#"><i class="bi bi-gear"></i>Settings</a>
    <a class="side-link" href="#"><i class="bi bi-question-circle"></i>Help center</a>
    <div class="sidebar-bottom"><i class="bi bi-shield-check me-1"></i> E-commerce Admin<br><span class="ms-4">Dashboard v1.0</span></div>
  </aside>

  <main class="main">
    <header class="topbar">
      <div class="d-flex align-items-center gap-3">
        <button class="btn btn-light border mobile-menu" id="menuToggle" aria-label="Buka menu"><i class="bi bi-list fs-5"></i></button>
        <div><div class="fw-bold">@yield('title')</div><small class="text-secondary">@yield('subtitle')</small></div>
      </div>
      <div class="d-flex align-items-center gap-3">
        <div class="avatar">A</div>
        <div class="d-none d-sm-block"><div class="fw-semibold small">Ana Putri</div><div class="text-secondary" style="font-size:.75rem">Administrator</div></div>
      </div>
    </header>

    <div class="content">
      {{-- Flash message (success) dari redirect()->with('success', ...) --}}
      @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <i class="bi bi-check-circle me-1"></i> {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @yield('content')

      <footer class="text-center text-secondary small mt-4">© 2026 Joymaker Dashboard</footer>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const sidebar = document.getElementById('sidebar');
    document.getElementById('menuToggle').addEventListener('click', () => sidebar.classList.toggle('open'));
  </script>
</body>
</html>
