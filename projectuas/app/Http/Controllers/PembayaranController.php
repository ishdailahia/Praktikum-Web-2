<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function pembayaran()
    {
        $list_pembayaran = Pembayaran::all();
        return view('admin.pembayaran.index', compact('list_pembayaran'));
    }

    public function create()
    {
        return view('admin.pembayaran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'jumlah_bayar' => 'required|numeric',
            'peminjaman_id' => 'required|exists:peminjaman,id',
        ]);

        Pembayaran::create($request->all());

        return redirect()->route('admin.pembayaran.index')->with('success', 'Pembayaran created successfully.');
    }

    public function show(Pembayaran $pembayaran)
    {
        return view('admin.pembayaran.show', compact('pembayaran'));
    }

    public function edit(Pembayaran $pembayaran)
    {
        return view('admin.pembayaran.edit', compact('pembayaran'));
    }

    public function update(Request $request, Pembayaran $pembayaran)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'jumlah_bayar' => 'required|numeric',
            'peminjaman_id' => 'required|exists:peminjaman,id',
        ]);

        $pembayaran->update($request->all());

        return redirect()->route('admin.pembayaran.index')->with('success', 'Pembayaran updated successfully.');
    }

    public function destroy(Pembayaran $pembayaran)
    {
        $pembayaran->delete();

        return redirect()->route('admin.pembayaran.index')->with('success', 'Pembayaran deleted successfully.');
    }
}
