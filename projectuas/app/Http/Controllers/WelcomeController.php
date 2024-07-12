<?php

namespace App\Http\Controllers;

use App\Models\Armada;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        $list_peminjaman = Peminjaman::all();
        $list_armada = Armada::all(); // Ambil semua data armada
        return view('welcome', compact('list_armada','list_peminjaman')); // Kirim data ke view
    }

    public function create()
    {
        return view('/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_peminjam' => 'required|string|max:45',
            'ktp_peminjam' => 'required|string|max:20',
            'keperluan_pinjam' => 'required|string|max:100',
            'mulai' => 'required|date',
            'selesai' => 'required|date',
            'biaya' => 'required|numeric',
            'armada_id' => 'required|exists:armada,id',
            'komentar_peminjam' => 'nullable|string|max:100',
            'status_pinjam' => 'required|string|max:20',
        ]);

        Peminjaman::create($request->all());

        return redirect()->route('welcome')
                         ->with('success', 'Peminjaman created successfully.');
    }
}
