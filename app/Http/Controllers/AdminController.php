<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lagu;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function formTambah()
    {
        return view('admin.tambah_lagu');
    }

    public function tambahLagu(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'penyanyi' => 'required|string|max:255'
        ]);

        Lagu::create([
            'judul' => $request->judul,
            'penyanyi' => $request->penyanyi
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Lagu berhasil ditambahkan!');
    }
}
