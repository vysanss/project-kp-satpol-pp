<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tupoksi;

class TupoksiController extends Controller
{
    public function index()
    {
        $tupoksi = Tupoksi::all();
        return view('admin.admin-tupoksi', compact('tupoksi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|string',
            'poin' => 'required|string',
            'isi' => 'required|string',
        ]);
        Tupoksi::create($request->only(['kategori', 'poin', 'isi']));
        return redirect()->route('admin.tupoksi.index')->with('success', 'Tupoksi berhasil ditambah');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kategori' => 'required|string',
            'poin' => 'required|string',
            'isi' => 'required|string',
        ]);
        $tupoksi = Tupoksi::findOrFail($id);
        $tupoksi->update($request->only(['kategori', 'poin', 'isi']));
        return redirect()->route('admin.tupoksi.index')->with('success', 'Tupoksi berhasil diupdate');
    }

    public function destroy($id)
    {
        $tupoksi = Tupoksi::findOrFail($id);
        $tupoksi->delete();
        return redirect()->route('admin.tupoksi.index')->with('success', 'Tupoksi berhasil dihapus');
    }
}
