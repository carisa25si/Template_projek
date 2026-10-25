{{-- REFERENSI TEMPLATE (Dasher / Bootstrap 5): bagian Tables -> .table, .table-hover, .table-responsive, .btn-sm (aksi), .alert-success (flash)
     File template: public/adminassets/scss/theme/components/_table.scss, _button.scss, _card.scss --}}
@extends('layouts.admin.app')

@section('title', 'Data User')
@section('subtitle', 'List data seluruh user')

@section('content')
<nav aria-label="breadcrumb" class="d-none d-md-inline-block">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bi bi-house-door"></i></a></li>
        <li class="breadcrumb-item active" aria-current="page">User</li>
    </ol>
</nav>

<div class="d-flex justify-content-between w-100 flex-wrap mb-4">
    <div class="mb-3 mb-lg-0">
        <h1 class="h4">Data User</h1>
        <p class="mb-0 text-secondary">List data seluruh user</p>
    </div>
    <div>
        <a href="{{ route('user.create') }}" class="btn btn-success text-white"><i class="bi bi-plus-lg me-1"></i> Tambah User</a>
    </div>
</div>

<div class="panel">
    <div class="table-responsive">
        <table id="table-user" class="table table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($dataUser as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td class="text-break" style="max-width:320px">{{ $item->password }}</td>
                        <td class="text-nowrap">
                            <a href="{{ route('user.edit', $item->id) }}" class="btn btn-info btn-sm text-white">
                                <i class="bi bi-pencil-square me-1"></i>Edit
                            </a>
                            <form action="{{ route('user.destroy', $item->id) }}" method="POST" style="display:inline"
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
                        <td colspan="4" class="text-center text-secondary py-4">Belum ada data user.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
