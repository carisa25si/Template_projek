{{-- REFERENSI TEMPLATE (Dasher / Bootstrap 5): bagian Forms -> .form-label, .form-control, .form-select, .is-invalid + .invalid-feedback, .btn
     File template: public/adminassets/scss/theme/components/_form.scss, _button.scss, _card.scss --}}
@extends('layouts.admin.app')

@section('title', 'Tambah Produk')
@section('subtitle', 'Form untuk menambahkan data produk baru.')

@section('content')
<nav aria-label="breadcrumb" class="d-none d-md-inline-block">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bi bi-house-door"></i></a></li>
        <li class="breadcrumb-item"><a href="{{ route('produk.index') }}">Produk</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
    </ol>
</nav>

<div class="d-flex justify-content-between w-100 flex-wrap mb-4">
    <div class="mb-3 mb-lg-0">
        <h1 class="h4">Tambah Produk</h1>
        <p class="mb-0 text-secondary">Form untuk menambahkan data produk baru.</p>
    </div>
    <div>
        <a href="{{ route('produk.index') }}" class="btn btn-primary"><i class="bi bi-arrow-left me-1"></i> Kembali</a>
    </div>
</div>

<div class="panel">
    <div class="panel-body">
        <form action="{{ route('produk.store') }}" method="POST">
            @csrf
            <div class="row mb-2">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="nama_produk" class="form-label">Nama produk</label>
                        <input type="text" id="nama_produk" name="nama_produk" value="{{ old('nama_produk') }}" class="form-control @error('nama_produk') is-invalid @enderror">
                        @error('nama_produk')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <input type="text" id="kategori" name="kategori" value="{{ old('kategori') }}" class="form-control @error('kategori') is-invalid @enderror">
                        @error('kategori')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga (Rp)</label>
                        <input type="number" id="harga" name="harga" value="{{ old('harga') }}" class="form-control @error('harga') is-invalid @enderror" min="0">
                        @error('harga')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" id="stok" name="stok" value="{{ old('stok') }}" class="form-control @error('stok') is-invalid @enderror" min="0">
                        @error('stok')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" rows="3" class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('produk.index') }}" class="btn btn-outline-secondary ms-2">Batal</a>
        </form>
    </div>
</div>
@endsection
