{{-- REFERENSI TEMPLATE (Dasher / Bootstrap 5): bagian Forms -> .form-label, .form-control, .is-invalid + .invalid-feedback, .btn
     File template: public/adminassets/scss/theme/components/_form.scss, _button.scss, _card.scss --}}
@extends('layouts.admin.app')

@section('title', 'Edit User')
@section('subtitle', 'Form untuk mengubah data user.')

@section('content')
<nav aria-label="breadcrumb" class="d-none d-md-inline-block">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bi bi-house-door"></i></a></li>
        <li class="breadcrumb-item"><a href="{{ route('user.index') }}">User</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
    </ol>
</nav>

<div class="d-flex justify-content-between w-100 flex-wrap mb-4">
    <div class="mb-3 mb-lg-0">
        <h1 class="h4">Edit User</h1>
        <p class="mb-0 text-secondary">Form untuk mengubah data user.</p>
    </div>
    <div>
        <a href="{{ route('user.index') }}" class="btn btn-primary"><i class="bi bi-arrow-left me-1"></i> Kembali</a>
    </div>
</div>

<div class="panel">
    <div class="panel-body">
        <form action="{{ route('user.update', $dataUser->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-2">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $dataUser->name) }}" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" id="email" name="email" value="{{ old('email', $dataUser->email) }}" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror">
                        <div class="form-text">Kosongkan jika tidak ingin mengubah password.</div>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-info text-white">Simpan Perubahan</button>
            <a href="{{ route('user.index') }}" class="btn btn-outline-secondary ms-2">Batal</a>
        </form>
    </div>
</div>
@endsection
