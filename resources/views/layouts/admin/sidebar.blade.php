<aside class="sidebar" id="sidebar">
    <div class="brand">
        <img src="{{ asset('adminassets/images/brand/logo/joymaker.png') }}" width="24" height="24" class="me-2" alt="Joymaker">
        Joymaker<span>.</span>
    </div>
    <div class="nav-caption">Menu utama</div>
    <a class="side-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}"><i class="bi bi-house-door"></i>Dashboard</a>
    <a class="side-link" href="{{ route('dashboard') }}#orders"><i class="bi bi-bag"></i>Orders</a>
    <a class="side-link {{ request()->routeIs('produk.*') ? 'active' : '' }}" href="{{ route('produk.index') }}"><i class="bi bi-box-seam"></i>Produk</a>
    <a class="side-link" href="{{ route('dashboard') }}#revenue"><i class="bi bi-graph-up-arrow"></i>Analytics</a>
    <a class="side-link {{ request()->routeIs('pelanggan.*') ? 'active' : '' }}" href="{{ route('pelanggan.index') }}"><i class="bi bi-people"></i>Pelanggan</a>
    <a class="side-link {{ request()->routeIs('diskon.*') ? 'active' : '' }}" href="{{ route('diskon.index') }}"><i class="bi bi-percent"></i>Diskon</a>
    <a class="side-link {{ request()->routeIs('user.*') ? 'active' : '' }}" href="{{ route('user.index') }}"><i class="bi bi-person-badge"></i>User</a>
    <div class="nav-caption mt-3">Pengaturan</div>
    <a class="side-link" href="#"><i class="bi bi-gear"></i>Settings</a>
    <a class="side-link" href="#"><i class="bi bi-question-circle"></i>Help center</a>
    <div class="sidebar-bottom"><i class="bi bi-shield-check me-1"></i> E-commerce Admin<br><span class="ms-4">Dashboard v1.0</span></div>
</aside>
