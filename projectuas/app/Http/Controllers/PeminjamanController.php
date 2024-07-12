<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function peminjaman()
    {
        $list_peminjaman = Peminjaman::all();
        return view('admin.peminjaman.index', compact('list_peminjaman'));
    }

    public function create()
    {
        return view('admin.peminjaman.create');
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

        return redirect()->route('admin.peminjaman.index')->with('success', 'Peminjaman created successfully.');
    }

    public function show(Peminjaman $peminjaman)
    {
        return view('admin.peminjaman.show', compact('peminjaman'));
    }

    public function edit(Peminjaman $peminjaman)
    {
        return view('admin.peminjaman.edit', compact('peminjaman'));
    }

    public function update(Request $request, Peminjaman $peminjaman)
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

        $peminjaman->update($request->all());

        return redirect()->route('admin.peminjaman.index')->with('success', 'Peminjaman updated successfully.');
    }

    public function destroy(Peminjaman $peminjaman)
    {
        $peminjaman->delete();

        return redirect()->route('admin.peminjaman.index')->with('success', 'Peminjaman deleted successfully.');
    }
}
