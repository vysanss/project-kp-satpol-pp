<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::orderBy('published_at', 'desc')->get();
        return view('admin.admin-berita', compact('berita'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'category' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image',
            'published_at' => 'nullable|date',
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('berita', 'public');
        }
        Berita::create($data);
        return redirect()->route('admin-berita')->with('success', 'Berita berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);
        $data = $request->validate([
            'title' => 'required|string',
            'category' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image',
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('berita', 'public');
        }
        $berita->update($data);
        return redirect()->route('admin-berita')->with('success', 'Berita berhasil diupdate');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();
        return redirect()->route('admin-berita')->with('success', 'Berita berhasil dihapus');
    }
}
