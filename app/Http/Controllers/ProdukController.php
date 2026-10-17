<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Pesan error validasi (Bahasa Indonesia).
     */
    private array $pesan = [
        'required' => ':attribute wajib diisi.',
        'numeric'  => ':attribute harus berupa angka.',
        'integer'  => ':attribute harus berupa bilangan bulat.',
        'min'      => ':attribute minimal :min.',
        'max'      => ':attribute maksimal :max karakter.',
        'string'   => ':attribute harus berupa teks.',
    ];

    /**
     * Tampilkan semua data produk.
     */
    public function index()
    {
        $data['dataProduk'] = Produk::all();
        return view('admin.produk.index', $data);
    }

    /**
     * Tampilkan form tambah produk.
     */
    public function create()
    {
        return view('admin.produk.create');
    }

    /**
     * Simpan produk baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|max:150',
            'kategori'    => 'required|max:100',
            'harga'       => 'required|integer|min:0',
            'stok'        => 'required|integer|min:0',
            'deskripsi'   => 'nullable|string',
        ], $this->pesan);

        //dd($request->all());
        $data['nama_produk'] = $request->nama_produk;
        $data['kategori']    = $request->kategori;
        $data['harga']       = $request->harga;
        $data['stok']        = $request->stok;
        $data['deskripsi']   = $request->deskripsi;

        Produk::create($data);

        return redirect()->route('produk.index')->with('success', 'Penambahan Data Berhasil!');
    }

    /**
     * Detail produk (tidak dipakai, diarahkan ke halaman edit).
     */
    public function show(string $id)
    {
        return redirect()->route('produk.edit', $id);
    }

    /**
     * Tampilkan form edit produk.
     */
    public function edit(string $id)
    {
        $data['dataProduk'] = Produk::findOrFail($id);
        return view('admin.produk.edit', $data);
    }

    /**
     * Simpan perubahan produk.
     */
    public function update(Request $request, string $id)
    {
        $produk_id = $id;
        $produk = Produk::findOrFail($produk_id);

        $request->validate([
            'nama_produk' => 'required|max:150',
            'kategori'    => 'required|max:100',
            'harga'       => 'required|integer|min:0',
            'stok'        => 'required|integer|min:0',
            'deskripsi'   => 'nullable|string',
        ], $this->pesan);

        $produk->nama_produk = $request->nama_produk;
        $produk->kategori    = $request->kategori;
        $produk->harga       = $request->harga;
        $produk->stok        = $request->stok;
        $produk->deskripsi   = $request->deskripsi;

        $produk->save();

        return redirect()->route('produk.index')->with('success', 'Perubahan Data Berhasil!');
    }

    /**
     * Hapus produk.
     */
    public function destroy(string $id)
    {
        $produk = Produk::findOrFail($id);

        $produk->delete();
        return redirect()->route('produk.index')->with('success', 'Data berhasil dihapus');
    }
}
