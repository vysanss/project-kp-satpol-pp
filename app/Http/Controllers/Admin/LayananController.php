<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $layanans = Layanan::orderBy('id', 'asc')->get();
        return view('admin.admin-layanan', compact('layanans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'required|string|max:255',
        ]);
        Layanan::create($request->only(['title', 'description', 'icon']));
        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'required|string|max:255',
        ]);
        $layanan = Layanan::findOrFail($id);
        $layanan->update($request->only(['title', 'description', 'icon']));
        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil diupdate.');
    }

    public function destroy($id)
    {
        $layanan = Layanan::findOrFail($id);
        $layanan->delete();
        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil dihapus.');
    }
}
