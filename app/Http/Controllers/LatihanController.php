<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    // Function untuk menampilkan tabel mahasiswa
    public function getTabel()
    {
        $dataMahasiswa = [
            ['no' => 1, 'nim' => 'NIM 1', 'nama' => 'Nama Lengkap 1', 'kelas' => 'Kelas 1'],
            ['no' => 2, 'nim' => 'NIM 2', 'nama' => 'Nama Lengkap 2', 'kelas' => 'Kelas 2'],
        ];

        return view('latihan.tabel', compact('dataMahasiswa'));
    }

    // Function untuk menampilkan form mahasiswa
    public function getForm()
    {
        return view('latihan.form');
    }

    // Function untuk menangani penyimpanan data (opsional)
    public function simpan(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
}
