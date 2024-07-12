<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function kendaraan()
    {
        // Tampilkan semua kendaraan
        $list_kendaraan= Kendaraan::all();
        return view('admin.kendaraan.index', compact('list_kendaraan'));
    }

    public function create()
    {
        // Tampilkan form untuk membuat kendaraan baru
        return view('admin.kendaraan.create');
    }

    public function store(Request $request)
    {
        // Simpan data kendaraan baru ke database
        $request->validate([
            'nama' => 'required|max:20',
        ]);

        Kendaraan::create($request->all());

        return redirect()->route('admin.kendaraan.index')
                         ->with('success', 'Kendaraan berhasil ditambahkan.');
    }

    public function show($id)
    {
        // Tampilkan detail kendaraan
        $kendaraan = Kendaraan::findOrFail($id);
        return view('admin.kendaraan.show', compact('kendaraan'));
    }

    public function edit($id)
    {
        // Tampilkan form untuk mengedit kendaraan
        $kendaraan = Kendaraan::findOrFail($id);
        return view('admin.kendaraan.edit', compact('kendaraan'));
    }

    public function update(Request $request, $id)
    {
        // Update data kendaraan yang ada di database
        $request->validate([
            'nama' => 'required|max:20',
        ]);

        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->update($request->all());

        return redirect()->route('admin.kendaraan.index')
                         ->with('success', 'Kendaraan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Hapus kendaraan dari database
        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->delete();

        return redirect()->route('admin.kendaraan.index')
                         ->with('success', 'Kendaraan berhasil dihapus.');
    }
}
