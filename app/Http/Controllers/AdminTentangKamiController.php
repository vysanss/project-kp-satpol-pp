<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TentangKami;

class AdminTentangKamiController extends Controller
{
    public function index()
    {
        $tentangkami = TentangKami::first();
        return view('admin.admin-tentangkami', compact('tentangkami'));
    }

    public function edit($id)
    {
        $tentangkami = TentangKami::findOrFail($id);
        return view('admin.admin-tentangkami', compact('tentangkami'));
    }

    public function update(Request $request, $id)
    {
        $tentangkami = TentangKami::findOrFail($id);
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi_1' => 'required|string',
            'deskripsi_2' => 'required|string',
            'visi' => 'required|string',
            'misi' => 'required|string',
            'gambar' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('tentangkami', 'public');
            $data['gambar'] = $gambarPath;
        }

        $tentangkami->update($data);

        if ($request->ajax()) {
            return response()->json([
                'message' => 'Berhasil diupdate!',
                'gambar' => $tentangkami->gambar ? asset('storage/' . $tentangkami->gambar) : null
            ]);
        }

        return redirect()->route('admin.tentangkami.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function create()
    {
        return view('admin.admin-tentangkami');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi_1' => 'required|string',
            'deskripsi_2' => 'required|string',
            'visi' => 'required|string',
            'misi' => 'required|string',
            'gambar' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('tentangkami', 'public');
            $data['gambar'] = $gambarPath;
        }

        TentangKami::create($data);

        return redirect()->route('admin.tentangkami.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $tentangkami = TentangKami::findOrFail($id);
        $tentangkami->delete();
        return redirect()->route('admin.tentangkami.index')->with('success', 'Data berhasil dihapus.');
    }
}
