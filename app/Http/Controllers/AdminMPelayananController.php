<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MPelayanan;

class AdminMPelayananController extends Controller
{
    public function index()
    {
        $pelayanan = MPelayanan::all();
        return view('admin.admin-maklumatpelayanan', compact('pelayanan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|string',
            'poin' => 'required|string',
            'isi' => 'required|string',
        ]);
        MPelayanan::create($request->only(['kategori', 'poin', 'isi']));
        return redirect()->route('admin.pelayanan.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kategori' => 'required|string',
            'poin' => 'required|string',
            'isi' => 'required|string',
        ]);
        $pelayanan = MPelayanan::findOrFail($id);
        $pelayanan->update($request->only(['kategori', 'poin', 'isi']));
        return redirect()->route('admin.pelayanan.index')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy($id)
    {
        $pelayanan = MPelayanan::findOrFail($id);
        $pelayanan->delete();
        return redirect()->route('admin.pelayanan.index')->with('success', 'Data berhasil dihapus.');
    }
}
