{{-- REFERENSI TEMPLATE (Dasher / Bootstrap 5): bagian Forms -> .form-label, .form-control, .form-select, .is-invalid + .invalid-feedback, .btn
     File template: public/adminassets/scss/theme/components/_form.scss, _button.scss, _card.scss --}}
@extends('layouts.admin.app')

@section('title', 'Edit Diskon')
@section('subtitle', 'Form untuk mengubah data diskon.')

@section('content')
<nav aria-label="breadcrumb" class="d-none d-md-inline-block">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bi bi-house-door"></i></a></li>
        <li class="breadcrumb-item"><a href="{{ route('diskon.index') }}">Diskon</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
    </ol>
</nav>

<div class="d-flex justify-content-between w-100 flex-wrap mb-4">
    <div class="mb-3 mb-lg-0">
        <h1 class="h4">Edit Diskon</h1>
        <p class="mb-0 text-secondary">Form untuk mengubah data diskon.</p>
    </div>
    <div>
        <a href="{{ route('diskon.index') }}" class="btn btn-primary"><i class="bi bi-arrow-left me-1"></i> Kembali</a>
    </div>
</div>

<div class="panel">
    <div class="panel-body">
        <form action="{{ route('diskon.update', $dataDiskon->diskon_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-2">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="kode_diskon" class="form-label">Kode diskon</label>
                        <input type="text" id="kode_diskon" name="kode_diskon" value="{{ old('kode_diskon', $dataDiskon->kode_diskon) }}" class="form-control @error('kode_diskon') is-invalid @enderror">
                        @error('kode_diskon')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama_diskon" class="form-label">Nama diskon</label>
                        <input type="text" id="nama_diskon" name="nama_diskon" value="{{ old('nama_diskon', $dataDiskon->nama_diskon) }}" class="form-control @error('nama_diskon') is-invalid @enderror">
                        @error('nama_diskon')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="persentase" class="form-label">Persentase (%)</label>
                        <input type="number" id="persentase" name="persentase" value="{{ old('persentase', $dataDiskon->persentase) }}" class="form-control @error('persentase') is-invalid @enderror" min="1" max="100">
                        @error('persentase')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="tanggal_mulai" class="form-label">Tanggal mulai</label>
                        <input type="date" id="tanggal_mulai" name="tanggal_mulai" value="{{ old('tanggal_mulai', $dataDiskon->tanggal_mulai) }}" class="form-control @error('tanggal_mulai') is-invalid @enderror">
                        @error('tanggal_mulai')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_akhir" class="form-label">Tanggal akhir</label>
                        <input type="date" id="tanggal_akhir" name="tanggal_akhir" value="{{ old('tanggal_akhir', $dataDiskon->tanggal_akhir) }}" class="form-control @error('tanggal_akhir') is-invalid @enderror">
                        @error('tanggal_akhir')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select id="status" name="status" class="form-select @error('status') is-invalid @enderror">
                            <option value="">-- Pilih --</option>
                            <option value="Aktif" @selected(old('status', $dataDiskon->status) == 'Aktif')>Aktif</option>
                            <option value="Nonaktif" @selected(old('status', $dataDiskon->status) == 'Nonaktif')>Nonaktif</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-info text-white">Simpan Perubahan</button>
            <a href="{{ route('diskon.index') }}" class="btn btn-outline-secondary ms-2">Batal</a>
        </form>
    </div>
</div>
@endsection
