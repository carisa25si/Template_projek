<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Pesan error validasi (Bahasa Indonesia).
     */
    private array $pesan = [
        'required'  => ':attribute wajib diisi.',
        'string'    => ':attribute harus berupa teks.',
        'max'       => ':attribute maksimal :max karakter.',
        'min'       => ':attribute minimal :min karakter.',
        'email'     => 'Format :attribute tidak valid.',
        'unique'    => ':attribute sudah terdaftar.',
        'confirmed' => 'Konfirmasi password tidak sama.',
    ];

    /**
     * Tampilkan semua data user.
     */
    public function index()
    {
        $data['dataUser'] = User::all();
        return view('admin.user.index', $data);
    }

    /**
     * Tampilkan form tambah user.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Simpan user baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:100',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ], $this->pesan);

        //dd($request->all());
        $data['name']     = $request->name;
        $data['email']    = $request->email;
        $data['password'] = Hash::make($request->password);

        User::create($data);

        return redirect()->route('user.index')->with('success', 'Penambahan Data Berhasil!');
    }

    /**
     * Detail user (tidak dipakai, diarahkan ke halaman edit).
     */
    public function show(string $id)
    {
        return redirect()->route('user.edit', $id);
    }

    /**
     * Tampilkan form edit user.
     */
    public function edit(string $id)
    {
        $data['dataUser'] = User::findOrFail($id);
        return view('admin.user.edit', $data);
    }

    /**
     * Simpan perubahan user.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name'     => 'required|string|max:100',
            // email harus unik, kecuali milik user ini sendiri
            'email'    => ['required', 'email', Rule::unique('users', 'email')->ignore($id)],
            // saat edit, password boleh dikosongkan (berarti tidak diubah)
            'password' => 'nullable|min:8|confirmed',
        ], $this->pesan);

        $user->name  = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('user.index')->with('success', 'Perubahan Data Berhasil!');
    }

    /**
     * Hapus user.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        $user->delete();
        return redirect()->route('user.index')->with('success', 'Data berhasil dihapus');
    }
}
