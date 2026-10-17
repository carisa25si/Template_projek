{{-- REFERENSI TEMPLATE (Dasher / Bootstrap 5): bagian Tables -> .table, .table-hover, .table-responsive, .btn-sm (aksi), .alert-success (flash)
     File template: public/adminassets/scss/theme/components/_table.scss, _button.scss, _card.scss --}}
@extends('admin.layouts.app')

@section('title', 'Data Pelanggan')
@section('subtitle', 'List data seluruh pelanggan')

@section('content')
<nav aria-label="breadcrumb" class="d-none d-md-inline-block">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bi bi-house-door"></i></a></li>
        <li class="breadcrumb-item active" aria-current="page">Pelanggan</li>
    </ol>
</nav>

<div class="d-flex justify-content-between w-100 flex-wrap mb-4">
    <div class="mb-3 mb-lg-0">
        <h1 class="h4">Data Pelanggan</h1>
        <p class="mb-0 text-secondary">List data seluruh pelanggan</p>
    </div>
    <div>
        <a href="{{ route('pelanggan.create') }}" class="btn btn-success text-white"><i class="bi bi-plus-lg me-1"></i> Tambah Pelanggan</a>
    </div>
</div>

<div class="panel">
    <div class="table-responsive">
        <table id="table-pelanggan" class="table table-hover">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Birthday</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($dataPelanggan as $item)
                    <tr>
                        <td>{{ $item->first_name }}</td>
                        <td>{{ $item->last_name }}</td>
                        <td>{{ $item->birthday }}</td>
                        <td>{{ $item->gender }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td class="text-nowrap">
                            <a href="{{ route('pelanggan.edit', $item->pelanggan_id) }}" class="btn btn-info btn-sm text-white">
                                <i class="bi bi-pencil-square me-1"></i>Edit
                            </a>
                            <form action="{{ route('pelanggan.destroy', $item->pelanggan_id) }}" method="POST" style="display:inline"
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
                        <td colspan="7" class="text-center text-secondary py-4">Belum ada data pelanggan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
