<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lagu;
use App\Models\KirimLagu;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function formKirim()
    {
        $lagu = Lagu::all();
        return view('user.kirim', compact('lagu'));
    }

    public function kirimLagu(Request $request)
    {
        $request->validate([
            'to' => 'required|string|max:255',
            'lagu_id' => 'required|exists:lagu,id',
            'pesan' => 'required|string'
        ]);

        KirimLagu::create([
            'to' => $request->to,
            'lagu_id' => $request->lagu_id,
            'pesan' => $request->pesan
        ]);

        return redirect()->route('user.dashboard')->with('success', 'Lagu berhasil dikirim!');
    }
}
