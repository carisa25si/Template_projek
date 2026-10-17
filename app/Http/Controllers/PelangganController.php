<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PelangganController extends Controller
{
    /**
     * Pesan error validasi (Bahasa Indonesia).
     */
    private array $pesan = [
        'required' => ':attribute wajib diisi.',
        'date'     => ':attribute harus berupa tanggal.',
        'email'    => 'Format :attribute tidak valid.',
        'numeric'  => ':attribute harus berupa angka.',
        'in'       => ':attribute hanya boleh Male atau Female.',
        'unique'   => ':attribute sudah terdaftar.',
        'max'      => ':attribute maksimal :max karakter.',
    ];

    /**
     * Tampilkan semua data pelanggan.
     */
    public function index()
    {
        $data['dataPelanggan'] = Pelanggan::all();
        return view('admin.pelanggan.index', $data);
    }

    /**
     * Tampilkan form tambah pelanggan.
     */
    public function create()
    {
        return view('admin.pelanggan.create');
    }

    /**
     * Simpan pelanggan baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|max:100',
            'last_name'  => 'required|max:100',
            'birthday'   => 'required|date',
            'gender'     => 'required|in:Male,Female',
            'email'      => 'required|email|unique:pelanggan,email',
            'phone'      => 'required|numeric',
        ], $this->pesan);

        //dd($request->all());
        $data['first_name'] = $request->first_name;
        $data['last_name']  = $request->last_name;
        $data['birthday']   = $request->birthday;
        $data['gender']     = $request->gender;
        $data['email']      = $request->email;
        $data['phone']      = $request->phone;

        Pelanggan::create($data);

        return redirect()->route('pelanggan.index')->with('success', 'Penambahan Data Berhasil!');
    }

    /**
     * Detail pelanggan (tidak dipakai, diarahkan ke halaman edit).
     */
    public function show(string $id)
    {
        return redirect()->route('pelanggan.edit', $id);
    }

    /**
     * Tampilkan form edit pelanggan.
     */
    public function edit(string $id)
    {
        $data['dataPelanggan'] = Pelanggan::findOrFail($id);
        return view('admin.pelanggan.edit', $data);
    }

    /**
     * Simpan perubahan pelanggan.
     */
    public function update(Request $request, string $id)
    {
        $pelanggan_id = $id;
        $pelanggan = Pelanggan::findOrFail($pelanggan_id);

        $request->validate([
            'first_name' => 'required|max:100',
            'last_name'  => 'required|max:100',
            'birthday'   => 'required|date',
            'gender'     => 'required|in:Male,Female',
            // email harus unik, kecuali milik pelanggan ini sendiri
            'email'      => ['required', 'email', Rule::unique('pelanggan', 'email')->ignore($pelanggan_id, 'pelanggan_id')],
            'phone'      => 'required|numeric',
        ], $this->pesan);

        $pelanggan->first_name = $request->first_name;
        $pelanggan->last_name  = $request->last_name;
        $pelanggan->birthday   = $request->birthday;
        $pelanggan->gender     = $request->gender;
        $pelanggan->email      = $request->email;
        $pelanggan->phone      = $request->phone;

        $pelanggan->save();

        return redirect()->route('pelanggan.index')->with('success', 'Perubahan Data Berhasil!');
    }

    /**
     * Hapus pelanggan.
     */
    public function destroy(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);

        $pelanggan->delete();
        return redirect()->route('pelanggan.index')->with('success', 'Data berhasil dihapus');
    }
}
