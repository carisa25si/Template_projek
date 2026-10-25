<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const sidebar = document.getElementById('sidebar');
    document.getElementById('menuToggle').addEventListener('click', () => sidebar.classList.toggle('open'));
    document.querySelectorAll('.side-link').forEach(link => link.addEventListener('click', () => {
        if (window.innerWidth < 992) sidebar.classList.remove('open');
    }));
</script>

{{-- JS khusus halaman (mis. chart di dashboard) diisi dari tiap halaman dengan push dan stack bernama scripts --}}
@stack('scripts')
