<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin') - Joymaker</title>

    {{-- Start CSS --}}
    @include('layouts.admin.css')
    {{-- End CSS --}}
</head>
<body>
    {{-- Start Sidebar --}}
    @include('layouts.admin.sidebar')
    {{-- End Sidebar --}}

    <main class="main">
        {{-- Start Header --}}
        @include('layouts.admin.header')
        {{-- End Header --}}

        <div class="content">
            {{-- Flash data dari redirect()->with('success'/'error', ...) --}}
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-1"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-exclamation-triangle me-1"></i> {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- Start Main Content --}}
            @yield('content')
            {{-- End Main Content --}}

            {{-- Start Footer --}}
            @include('layouts.admin.footer')
            {{-- End Footer --}}
        </div>
    </main>

    {{-- Start JS --}}
    @include('layouts.admin.js')
    {{-- End JS --}}
</body>
</html>
