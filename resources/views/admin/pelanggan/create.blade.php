{{-- REFERENSI TEMPLATE (Dasher / Bootstrap 5): bagian Forms -> .form-label, .form-control, .form-select, .is-invalid + .invalid-feedback, .btn
     File template: public/adminassets/scss/theme/components/_form.scss, _button.scss, _card.scss --}}
@extends('admin.layouts.app')

@section('title', 'Tambah Pelanggan')
@section('subtitle', 'Form untuk menambahkan data pelanggan baru.')

@section('content')
<nav aria-label="breadcrumb" class="d-none d-md-inline-block">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bi bi-house-door"></i></a></li>
        <li class="breadcrumb-item"><a href="{{ route('pelanggan.index') }}">Pelanggan</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
    </ol>
</nav>

<div class="d-flex justify-content-between w-100 flex-wrap mb-4">
    <div class="mb-3 mb-lg-0">
        <h1 class="h4">Tambah Pelanggan</h1>
        <p class="mb-0 text-secondary">Form untuk menambahkan data pelanggan baru.</p>
    </div>
    <div>
        <a href="{{ route('pelanggan.index') }}" class="btn btn-primary"><i class="bi bi-arrow-left me-1"></i> Kembali</a>
    </div>
</div>

<div class="panel">
    <div class="panel-body">
        <form action="{{ route('pelanggan.store') }}" method="POST">
            @csrf
            <div class="row mb-2">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First name</label>
                        <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" class="form-control @error('first_name') is-invalid @enderror">
                        @error('first_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last name</label>
                        <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" class="form-control @error('last_name') is-invalid @enderror">
                        @error('last_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="birthday" class="form-label">Birthday</label>
                        <input type="date" id="birthday" name="birthday" value="{{ old('birthday') }}" class="form-control @error('birthday') is-invalid @enderror">
                        @error('birthday')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select id="gender" name="gender" class="form-select @error('gender') is-invalid @enderror">
                            <option value="">-- Pilih --</option>
                            <option value="Male" @selected(old('gender') == 'Male')>Male</option>
                            <option value="Female" @selected(old('gender') == 'Female')>Female</option>
                        </select>
                        @error('gender')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" id="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" id="phone" name="phone" value="{{ old('phone') }}" class="form-control @error('phone') is-invalid @enderror">
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('pelanggan.index') }}" class="btn btn-outline-secondary ms-2">Batal</a>
        </form>
    </div>
</div>
@endsection
