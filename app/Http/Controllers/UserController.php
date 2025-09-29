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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'to' => 'required|string|max:255',
            'lagu_id' => 'required|exists:lagus,id',
            'pesan' => 'required|string',
        ]);

        $kirim = KirimLagu::create($validated);

        // edirect ke halaman show
        return redirect()->route('user.kirim.show', $kirim->id)
            ->with('success', 'Lagu berhasil dikirim!');
    }


    public function showKirim($id)
    {
        // ambil data kiriman beserta lagunya
        $kirim = KirimLagu::with('lagu')->findOrFail($id);

        // lempar ke view
        return view('user.show', compact('kirim'));
    }
}
