<header class="topbar">
    <div class="d-flex align-items-center gap-3">
        <button class="btn btn-light border mobile-menu" id="menuToggle" aria-label="Buka menu"><i class="bi bi-list fs-5"></i></button>
        <div>
            <div class="fw-bold">@yield('title')</div>
            <small class="text-secondary">@yield('subtitle')</small>
        </div>
    </div>
    <div class="search-box"><i class="bi bi-search"></i><input type="search" placeholder="Cari sesuatu..."></div>
    <div class="d-flex align-items-center gap-3">
        <button class="btn btn-light position-relative" aria-label="Notifikasi"><i class="bi bi-bell"></i><span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle"></span></button>
        <div class="avatar">A</div>
        <div class="d-none d-sm-block"><div class="fw-semibold small">Ana Putri</div><div class="text-secondary" style="font-size:.75rem">Administrator</div></div>
    </div>
</header>
