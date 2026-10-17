{{-- REFERENSI TEMPLATE (Dasher / Bootstrap 5): bagian Tables -> .table, .table-hover, .table-responsive, .btn-sm (aksi), .alert-success (flash)
     File template: public/adminassets/scss/theme/components/_table.scss, _button.scss, _card.scss --}}
@extends('admin.layouts.app')

@section('title', 'Data Produk')
@section('subtitle', 'List data seluruh produk')

@section('content')
<nav aria-label="breadcrumb" class="d-none d-md-inline-block">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bi bi-house-door"></i></a></li>
        <li class="breadcrumb-item active" aria-current="page">Produk</li>
    </ol>
</nav>

<div class="d-flex justify-content-between w-100 flex-wrap mb-4">
    <div class="mb-3 mb-lg-0">
        <h1 class="h4">Data Produk</h1>
        <p class="mb-0 text-secondary">List data seluruh produk</p>
    </div>
    <div>
        <a href="{{ route('produk.create') }}" class="btn btn-success text-white"><i class="bi bi-plus-lg me-1"></i> Tambah Produk</a>
    </div>
</div>

<div class="panel">
    <div class="table-responsive">
        <table id="table-produk" class="table table-hover">
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Deskripsi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($dataProduk as $item)
                    <tr>
                        <td>{{ $item->nama_produk }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                        <td>{{ $item->stok }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item->deskripsi, 40) }}</td>
                        <td class="text-nowrap">
                            <a href="{{ route('produk.edit', $item->produk_id) }}" class="btn btn-info btn-sm text-white">
                                <i class="bi bi-pencil-square me-1"></i>Edit
                            </a>
                            <form action="{{ route('produk.destroy', $item->produk_id) }}" method="POST" style="display:inline"
                                  onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash me-1"></i>Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-secondary py-4">Belum ada data produk.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
