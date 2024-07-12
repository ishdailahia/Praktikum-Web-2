<?php

namespace App\Http\Controllers;

use App\Models\Armada;
use Illuminate\Http\Request;

class ArmadaController extends Controller
{
    public function armada()
    {
        $list_armada = Armada::all();
        return view('admin.armada.index', compact('list_armada'));
    }

    public function create()
    {
        return view('admin.armada.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|string|max:20',
            'merk' => 'required|string|max:30',
            'nopol' => 'required|string|max:20',
            'thn_beli' => 'required|integer|min:1900|max:' . date('Y'),
            'deskripsi' => 'required|string|max:200',
            'kendaraan_id' => 'required|exists:kendaraan,id',
            'kapasitas_kursi' => 'required|integer',
            'rating' => 'required|integer',
        ]);

        Armada::create($request->all());

        return redirect()->route('admin.armada.index')->with('success', 'Armada created successfully.');
    }

    public function show($id)
    {
        $armada = Armada::findOrFail($id);
        return view('admin.armada.show', compact('armada'));
    }

    public function edit($id)
    {
        $armada = Armada::findOrFail($id);
        return view('admin.armada.edit', compact('armada'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'merk' => 'required|string|max:30',
            'nopol' => 'required|string|max:20',
            'thn_beli' => 'required|integer|min:1900|max:' . date('Y'),
            'deskripsi' => 'required|string|max:200',
            'kendaraan_id' => 'required|exists:kendaraan,id',
            'kapasitas_kursi' => 'required|integer',
            'rating' => 'required|integer',
        ]);
        $armada = Armada::findOrFail($id);
        $armada->update($request->all());

        return redirect()->route('admin.armada.index')->with('success', 'Armada updated successfully.');
    }

    public function destroy($id)
    {
        $armada = Armada::findOrFail($id);
        $armada->delete();
        return redirect()->route('admin.armada.index')->with('success', 'Armada deleted successfully.');
    }
}
