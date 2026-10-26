<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
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
     * Tampilkan semua data login.
     */
    public function index()
    {
        $data['dataLogin'] = guest::all();
        return view('guest.login.index', $data);
    }

    /**
     * Tampilkan form tambah login.
     */
    public function create()
    {
        return view('guest.login.create');
    }

    /**
     * Simpan login baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|max:100',
            'last_name'  => 'required|max:100',
            'birthday'   => 'required|date',
            'gender'     => 'required|in:Male,Female',
            'email'      => 'required|email|unique:login,email',
            'phone'      => 'required|numeric',
        ], $this->pesan);

        //dd($request->all());
        $data['first_name'] = $request->first_name;
        $data['last_name']  = $request->last_name;
        $data['birthday']   = $request->birthday;
        $data['gender']     = $request->gender;
        $data['email']      = $request->email;
        $data['phone']      = $request->phone;

        guest::create($data);

        return redirect()->route('login.index')->with('success', 'Penambahan Login Berhasil!');
    }

    /**
     * Detail login (tidak dipakai, diarahkan ke halaman edit).
     */
    public function show(string $id)
    {
        return redirect()->route('login.edit', $id);
    }

    /**
     * Tampilkan form edit login.
     */
    public function edit(string $id)
    {
        $data['dataLogin'] = guest::findOrFail($id);
        return view('guest.login.edit', $data);
    }

    /**
     * Simpan perubahan login.
     */
    public function update(Request $request, string $id)
    {
        $login_id = $id;
        $login = guest::findOrFail($login_id);

        $request->validate([
            'first_name' => 'required|max:100',
            'last_name'  => 'required|max:100',
            'birthday'   => 'required|date',
            'gender'     => 'required|in:Male,Female',
            // email harus unik, kecuali milik login ini sendiri
            'email'      => ['required', 'email', Rule::unique('login', 'email')->ignore($login_id, 'login_id')],
            'phone'      => 'required|numeric',
        ], $this->pesan);

        $login->first_name = $request->first_name;
        $login->last_name  = $request->last_name;
        $login->birthday   = $request->birthday;
        $login->gender     = $request->gender;
        $login->email      = $request->email;
        $login->phone      = $request->phone;

        $login->save();

        return redirect()->route('login.index')->with('success', 'Perubahan Login Berhasil!');
    }

    /**
     * Hapus login.
     */
    public function destroy(string $id)
    {
        $login = guest::findOrFail($id);

        $login->delete();
        return redirect()->route('login.index')->with('success', 'Login berhasil dihapus');
    }
}

