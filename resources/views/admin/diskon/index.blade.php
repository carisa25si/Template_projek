{{-- REFERENSI TEMPLATE (Dasher / Bootstrap 5): bagian Tables -> .table, .table-hover, .table-responsive, .btn-sm (aksi), .alert-success (flash)
     File template: public/adminassets/scss/theme/components/_table.scss, _button.scss, _card.scss --}}
@extends('admin.layouts.app')

@section('title', 'Data Diskon')
@section('subtitle', 'List data seluruh diskon')

@section('content')
<nav aria-label="breadcrumb" class="d-none d-md-inline-block">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bi bi-house-door"></i></a></li>
        <li class="breadcrumb-item active" aria-current="page">Diskon</li>
    </ol>
</nav>

<div class="d-flex justify-content-between w-100 flex-wrap mb-4">
    <div class="mb-3 mb-lg-0">
        <h1 class="h4">Data Diskon</h1>
        <p class="mb-0 text-secondary">List data seluruh diskon</p>
    </div>
    <div>
        <a href="{{ route('diskon.create') }}" class="btn btn-success text-white"><i class="bi bi-plus-lg me-1"></i> Tambah Diskon</a>
    </div>
</div>

<div class="panel">
    <div class="table-responsive">
        <table id="table-diskon" class="table table-hover">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama Diskon</th>
                    <th>Persentase</th>
                    <th>Mulai</th>
                    <th>Akhir</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($dataDiskon as $item)
                    <tr>
                        <td>{{ $item->kode_diskon }}</td>
                        <td>{{ $item->nama_diskon }}</td>
                        <td>{{ $item->persentase }}%</td>
                        <td>{{ $item->tanggal_mulai }}</td>
                        <td>{{ $item->tanggal_akhir }}</td>
                        <td><span class="badge-soft {{ $item->status == 'Aktif' ? 'bg-soft-green' : 'bg-soft-red' }}">{{ $item->status }}</span></td>
                        <td class="text-nowrap">
                            <a href="{{ route('diskon.edit', $item->diskon_id) }}" class="btn btn-info btn-sm text-white">
                                <i class="bi bi-pencil-square me-1"></i>Edit
                            </a>
                            <form action="{{ route('diskon.destroy', $item->diskon_id) }}" method="POST" style="display:inline"
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
                        <td colspan="7" class="text-center text-secondary py-4">Belum ada data diskon.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
