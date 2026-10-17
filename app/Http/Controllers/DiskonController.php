<?php

namespace App\Http\Controllers;

use App\Models\Diskon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DiskonController extends Controller
{
    /**
     * Pesan error validasi (Bahasa Indonesia).
     */
    private array $pesan = [
        'required'       => ':attribute wajib diisi.',
        'date'           => ':attribute harus berupa tanggal.',
        'integer'        => ':attribute harus berupa bilangan bulat.',
        'between'        => ':attribute harus di antara :min dan :max.',
        'in'             => ':attribute hanya boleh Aktif atau Nonaktif.',
        'unique'         => ':attribute sudah digunakan.',
        'max'            => ':attribute maksimal :max karakter.',
        'after_or_equal' => ':attribute tidak boleh sebelum tanggal mulai.',
    ];

    /**
     * Tampilkan semua data diskon.
     */
    public function index()
    {
        $data['dataDiskon'] = Diskon::all();
        return view('admin.diskon.index', $data);
    }

    /**
     * Tampilkan form tambah diskon.
     */
    public function create()
    {
        return view('admin.diskon.create');
    }

    /**
     * Simpan diskon baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_diskon'   => 'required|max:50|unique:diskon,kode_diskon',
            'nama_diskon'   => 'required|max:150',
            'persentase'    => 'required|integer|between:1,100',
            'tanggal_mulai' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_mulai',
            'status'        => 'required|in:Aktif,Nonaktif',
        ], $this->pesan);

        //dd($request->all());
        $data['kode_diskon']   = $request->kode_diskon;
        $data['nama_diskon']   = $request->nama_diskon;
        $data['persentase']    = $request->persentase;
        $data['tanggal_mulai'] = $request->tanggal_mulai;
        $data['tanggal_akhir'] = $request->tanggal_akhir;
        $data['status']        = $request->status;

        Diskon::create($data);

        return redirect()->route('diskon.index')->with('success', 'Penambahan Data Berhasil!');
    }

    /**
     * Detail diskon (tidak dipakai, diarahkan ke halaman edit).
     */
    public function show(string $id)
    {
        return redirect()->route('diskon.edit', $id);
    }

    /**
     * Tampilkan form edit diskon.
     */
    public function edit(string $id)
    {
        $data['dataDiskon'] = Diskon::findOrFail($id);
        return view('admin.diskon.edit', $data);
    }

    /**
     * Simpan perubahan diskon.
     */
    public function update(Request $request, string $id)
    {
        $diskon_id = $id;
        $diskon = Diskon::findOrFail($diskon_id);

        $request->validate([
            // kode harus unik, kecuali milik diskon ini sendiri
            'kode_diskon'   => ['required', 'max:50', Rule::unique('diskon', 'kode_diskon')->ignore($diskon_id, 'diskon_id')],
            'nama_diskon'   => 'required|max:150',
            'persentase'    => 'required|integer|between:1,100',
            'tanggal_mulai' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_mulai',
            'status'        => 'required|in:Aktif,Nonaktif',
        ], $this->pesan);

        $diskon->kode_diskon   = $request->kode_diskon;
        $diskon->nama_diskon   = $request->nama_diskon;
        $diskon->persentase    = $request->persentase;
        $diskon->tanggal_mulai = $request->tanggal_mulai;
        $diskon->tanggal_akhir = $request->tanggal_akhir;
        $diskon->status        = $request->status;

        $diskon->save();

        return redirect()->route('diskon.index')->with('success', 'Perubahan Data Berhasil!');
    }

    /**
     * Hapus diskon.
     */
    public function destroy(string $id)
    {
        $diskon = Diskon::findOrFail($id);

        $diskon->delete();
        return redirect()->route('diskon.index')->with('success', 'Data berhasil dihapus');
    }
}
